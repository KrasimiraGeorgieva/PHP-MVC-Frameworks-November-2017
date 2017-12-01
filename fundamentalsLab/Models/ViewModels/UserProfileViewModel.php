<?php

namespace Models\ViewModels;


class UserProfileViewModel
{
    /**
     * @var string
     */
    private $fullName;

    public function __construct(string $fullName)
    {
        $this->fullName = $fullName;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

}