<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/23/2017
 * Time: 00:39
 */

namespace Core\DependencyManagement;


interface ContainerInterface
{
    public function resolve($interfaceName);

    public function addDependency($interfaceName, $implementationName);

    public function cache($interfaceName, $obj);

    public function exists($interfaceName):bool;
}