<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/23/2017
 * Time: 00:08
 */

namespace Controllers;


use Core\View\ViewInterface;
use Service\Dummy\DummyService;
use Service\Dummy\DummyServiceInterface;
use Service\User\UserServiceInterface;

class HomeController
{
//    /**
//     * @var ViewInterface
//     */
//    private $view;
//
//    private $dummy;
//
//    public function __construct(ViewInterface $view, DummyServiceInterface $dummyService)
//    {
//        $this->view = $view;
//        $this->dummy = $dummyService;
//    }

    public function index(string $name, UserServiceInterface $userService)
    {
        echo $name . "<br/>";
       var_dump($userService);
       //var_dump($this->dummy);
    }


}