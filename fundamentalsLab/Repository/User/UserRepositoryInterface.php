<?php

namespace Repository\User;

use Models\BindingModels\UserRegisterBindingModel;
use Models\Entity\User;

interface UserRepositoryInterface
{
     public function insert(UserRegisterBindingModel $user): bool;

    public function findOneByUsername(string $username): ?User;
}