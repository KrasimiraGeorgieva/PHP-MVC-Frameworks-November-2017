<?php

namespace Core\Services\Users;


interface UsersServiceInterface
{
    public function register($username, $password):bool;
}