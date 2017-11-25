<?php
session_start();
spl_autoload_register(function ($class){
    $class = str_replace('\\', '/', $class);
    require_once $class . '.php';
});
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

$mvcContext = new \Core\Mvc\MvcContext($controllerName, $actionName, $params);
$app = new \Core\Application($mvcContext);

$app->addBean(\Driver\DatabaseInterface::class, new \Driver\PDODatabase("localhost", "root", "", "blog"));
$app->addBean(\Core\Http\Component\SessionInterface::class, new \Core\Http\Component\Session($_SESSION));
$app->registerDependency(\ViewEngine\ViewInterface::class, \ViewEngine\View::class);
$app->registerDependency(\Core\Services\Users\UsersServiceInterface::class, \Core\Services\Users\UserService::class);
$app->registerDependency(\Core\Services\Encryption\EncryptionServiceInterface::class, \Core\Services\Encryption\BCryptEncryptionService::class);
$app->registerDependency(\Core\Services\Authentication\AuthenticationServiceInterface::class, \Core\Services\Authentication\AuthenticationService::class);

$app->start();

