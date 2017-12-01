<?php
namespace Controllers;

use Core\View\ViewInterface;
use Models\BindingModels\UserRegisterBindingModel;
use Models\ViewModels\UserProfileViewModel;
use Service\Dummy\DummyServiceInterface;
use Service\User\UserServiceInterface;

class UsersController
{
    /**
     * @var ViewInterface
     */
    private $view;

    public function __construct(ViewInterface $view)
    {
        $this->view = $view;
    }


    public function profile(string $firstName, string $lastName)
    {
        $fullName = $firstName . ' ' . $lastName;
        $model = new UserProfileViewModel($fullName);
        $this->view->render($model);
    }

    public function register()
    {
       $this->view->render();
    }

    public function registerProcess(UserRegisterBindingModel $bindingModel, DummyServiceInterface $dummyService, UserServiceInterface $userService)
    {
        $userService->register($bindingModel);
        $dummyService->printSmth();
    }
}