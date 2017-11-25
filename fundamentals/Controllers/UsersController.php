<?php
namespace Controllers;


use Core\Services\Authentication\AuthenticationServiceInterface;
use Core\Services\Users\UsersServiceInterface;
use DTO\LoginUserBindingModel;
use DTO\ProfileEditBindingModel;
use DTO\ProfileEditViewModel;
use DTO\RegisterUserBindingModel;
use DTO\UserViewModel;
use ViewEngine\ViewInterface;

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

    public function hello(string $firstName, string $lastName)
    {
        $viewModel = new UserViewModel($firstName, $lastName);
        $this->view->render($viewModel);
    }

    public function edit(int $id, ProfileEditBindingModel $model, ViewInterface $view)
    {
        $viewModel = new ProfileEditViewModel(
            $id,
            $model->getUsername(),
            $model->getPassword(),
            $model->getEmail(),
            $model->getBirthday()
        );

        $view->render($viewModel);
    }

    public function register(ViewInterface $view)
    {
        return $view->render();
    }

    public function registerPost(UsersServiceInterface $userService,RegisterUserBindingModel $bindingModel)
    {
        if ($userService->register($bindingModel->getUsername(), $bindingModel->getPassword())){
            header("Location: /Fundamentals/users/login");
            exit;
        }
        header("Location: /Fundamentals/users/register");
    }

    public function login(ViewInterface $view)
    {
        return $view->render();
    }

    public function loginPost(AuthenticationServiceInterface $authenticationService, LoginUserBindingModel $bindingModel)
    {
        if ($authenticationService->login($bindingModel->getUsername(), $bindingModel->getPassword())){
            header("Location: /Fundamentals/users/profile");
            exit();
        }
        header("Location: /Fundamentals/users/login");
    }

    public function profile(AuthenticationServiceInterface $authenticationService, ViewInterface $view)
    {
        if (!$authenticationService->isLogged()){
            header("Location: /Fundamentals/users/login");
            exit;
        }

        $view->render();
    }
}