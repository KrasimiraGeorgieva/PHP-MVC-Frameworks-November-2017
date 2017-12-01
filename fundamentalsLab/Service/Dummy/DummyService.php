<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/22/2017
 * Time: 22:10
 */

namespace Service\Dummy;



use Repository\User\UserRepositoryInterface;
use Service\User\UserServiceInterface;

class DummyService implements DummyServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
   private $userRepository;

    /**
     * @var UserServiceInterface
     */
   private $userService;

    /**
     * DummyService constructor.
     * @param UserRepositoryInterface $userRepository
     * @param UserServiceInterface $userService
     */
    public function __construct(UserRepositoryInterface $userRepository, UserServiceInterface $userService)
    {
        $this->userRepository = $userRepository;
        $this->userService = $userService;
    }


    public function printSmth()
    {
        echo "Dummy service here";
        var_dump($this->userService);
        var_dump($this->userRepository);
    }
}