<?php


namespace Controllers;


class Users implements ControllerInterface
{
    public function index()
    {
        
    }

    public function hello(string $firstName,string $lastName)
    {
        echo "Hello Mr/Ms $firstName $lastName";
    }

}