<?php

namespace DTO;


class ProfileEditViewModel
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $birthday;

    public function __construct(int $id,string $username,string $password,string $email,string $birthday)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->birthday = $birthday;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function getUsername():string
    {
        return $this->username;
    }

    public function getPassword():string
    {
        return $this->password;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function getBirthday():string
    {
        return $this->birthday;
    }

}