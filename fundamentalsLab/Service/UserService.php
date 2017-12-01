<?php

namespace Service\User;

use Models\BindingModels\UserRegisterBindingModel;
use Repository\User\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


//    public function login(string $username, string $password): bool
//    {
//        $user = $this->userRepository->findOneByUsername($username);
//
//        if (null === $user) {
//            throw new \Exception("Username not found!");
//        }
//
//        $passwordHash = $user->getPassword();
//        if (!password_verify($password, $passwordHash)) {
//            throw new \Exception("Invalid password!");
//        }
//
//        $_SESSION['id'] = $user->getId();
//
//        return true;
//    }

    public function register(UserRegisterBindingModel $user): bool
    {


        if ($user->getPassword() !== $user->getConfirmPassword()) {
            throw new \Exception("Passwords mismatch!");
        }

        $userFromDb = $this->userRepository
            ->findOneByUsername($user->getUsername());
        if (null !== $userFromDb) {
            throw new \Exception("User already exists!");
        }

        $plainPassword = $user->getPassword();
        $passwordHash = password_hash($plainPassword, PASSWORD_BCRYPT);
        $user->setPassword($passwordHash);

        return $this->userRepository->insert($user);
    }

}