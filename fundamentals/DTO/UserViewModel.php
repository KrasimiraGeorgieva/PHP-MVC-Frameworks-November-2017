<?php

namespace DTO;


class UserViewModel
{
    private  $firstName;
    private $lastName;

    /**
     * UserViewModel constructor.
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName,string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName():string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }


}