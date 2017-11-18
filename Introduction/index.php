<?php
include "confing.php";
spl_autoload_register();
//var_dump("We are in index.php");
//var_dump($_SERVER);


$uri = $_SERVER['REQUEST_URI'];

$self = explode("/", $_SERVER['PHP_SELF']);
array_pop($self);
//
//$self = str_replace("index.php","", $_SERVER['PHP_SELF']);
//
$replace = implode("/", $self);
$uri = str_replace($replace . "/", "",$uri);

$params = explode("/", $uri);
$controllerName = array_shift($params);
$actionName = array_shift($params);

$controllerFullQualifiedName = "Controllers\\".ucfirst($controllerName);


if (class_exists($controllerFullQualifiedName)) {
    $controller = new $controllerFullQualifiedName;
    if (is_callable([$controller, $actionName])){
        call_user_func_array([$controller, $actionName], $params);
    }else{
        $actionName = DEFAULT_ACTION;
        call_user_func_array([$controller, $actionName], $params);
    }
}elseif(empty($controllerName) && empty($actionName)){
    $controllerName = DEFAULT_CONTROLLER;
    $actionName = DEFAULT_ACTION;
    $controllerFullQualifiedName = "Controllers\\".ucfirst("$controllerName");
    $controller = new $controllerFullQualifiedName();
    call_user_func_array([$controller,$actionName],$params);
}else{
    header('HTTP/1.0 404 Not Found');
    include "view/not_found.php";
}




