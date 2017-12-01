<?php

namespace Service\User;


use Models\BindingModels\UserRegisterBindingModel;

interface UserServiceInterface
{
    public function register(UserRegisterBindingModel $user): bool;

}