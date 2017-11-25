<?php

namespace Core\Mvc;


class MvcContext implements MvcContextInterface
{
    private $controllerName;
    private $actionName;
    private $params = [];

    public function __construct(string $controllerName,string $actionName, array $params)
    {
        $this->controllerName = $controllerName;
        $this->actionName = $actionName;
        $this->params = $params;
    }

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->controllerName;
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->actionName;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
}