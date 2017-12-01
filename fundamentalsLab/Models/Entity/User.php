<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/22/2017
 * Time: 18:15
 */

namespace Models\Entity;


class User
{
    private $id;

    private $username;

    private $password;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }


}