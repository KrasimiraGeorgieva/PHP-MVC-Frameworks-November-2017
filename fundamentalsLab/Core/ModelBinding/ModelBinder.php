<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/22/2017
 * Time: 14:27
 */

namespace Core\ModelBinding;


class ModelBinder implements ModelBinderInterface
{

    public function bind(array $data, $className)
    {
        $bindingModel = new $className();
        $bindingModelInfo = new \ReflectionClass($className);
        foreach ($bindingModelInfo->getProperties() as $property){
            $fieldName = $property->getName();
            if(!array_key_exists($fieldName, $data)){
                continue;
            }

            $value = $_POST[$fieldName];
            $setter = 'set' . ucfirst($fieldName);
            $bindingModel->$setter($value);
        }

        return $bindingModel;
    }
}