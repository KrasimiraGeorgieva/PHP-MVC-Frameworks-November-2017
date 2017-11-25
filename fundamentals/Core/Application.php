<?php
namespace Core;


use Core\Mvc\MvcContextInterface;

class Application
{
    /**
     * @var string[]
     */
    private $dependencies = [];

    /**
     * @var object[]
     */
    private $resolvedDependencies = [];

    /**
     * @var MvcContextInterface
     */
   private $mvcContext;


    public function __construct(MvcContextInterface $mvcContext)
    {
        $this->mvcContext = $mvcContext;
        $this->dependencies[MvcContextInterface::class] = get_class($mvcContext);
        $this->resolvedDependencies[get_class($mvcContext)] = $mvcContext;



    }


    public function start()
    {
        $controllerFullQualifiedName = "Controllers\\".ucfirst($this->mvcContext->getControllerName()) . 'Controller';
        $methodName = $this->mvcContext->getActionName();
        $uriParams = $this->mvcContext->getParams();

        $controller = $this->resolve($controllerFullQualifiedName);
        $refMethod = new \ReflectionMethod($controller, $methodName);
        $refParams = $refMethod->getParameters();
        $count = count($uriParams);
        for ($i = $count; $i < count($refParams); $i++){
            $argument = $refParams[$i];
            $argumentInterface = $argument->getClass()->getName();

            if (array_key_exists($argumentInterface, $this->dependencies)){
                $argumentClass = $this->dependencies[$argumentInterface];
                $params[] = $this->resolve($argumentClass);
            }else{
                $bindingModel = new $argumentInterface;
                $this->bindData($_POST, $bindingModel);
                $params[] = $bindingModel;
            }
        }

        call_user_func_array([$controller,$methodName], $uriParams);
    }

    public function registerDependency(string $abstraction, string $implementation)
    {
        $this->dependencies[$abstraction] = $implementation;

        //var_dump($this->dependencies);
        //var_dump($this->resolvedDependencies);
    }

    private function resolve($className)
    {
        if (array_key_exists($className,
            $this->resolvedDependencies)){
            return $this->resolvedDependencies[$className];
        }

        $refClass = new \ReflectionClass($className);
        $constructor = $refClass->getConstructor();

        if(null == $constructor){
            $object = new $className;

            $this->resolvedDependencies[$className] = $object;

            return $object;
        }

        $parameters = $constructor->getParameters();
        $arguments = [];
        foreach ($parameters as $parameter){
            $dependencyInterface = $parameter->getClass();
            $dependencyClass = $this->dependencies[$dependencyInterface->getName()];
            $arguments[] = $this->resolve($dependencyClass);
        }

        $object = $refClass->newInstanceArgs($arguments);
        $this->resolvedDependencies[$className] = $object;

        return $object;
    }

    private function bindData(array $data, $object)
    {
        $refClass = new \ReflectionClass($object);
        $fields = $refClass->getProperties();
        foreach ($fields as $field){
            $field->setAccessible(true);
            if(array_key_exists($field->getName(), $data)){
                $field->setValue($object, $data[$field->getName()]);
            }
        }

    }

    public function addBean(string $abstraction, $object)
    {
        $this->dependencies[$abstraction] = get_class($object);
        $this->resolvedDependencies[get_class($object)] = $object;
    }
}