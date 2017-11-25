<?php

namespace Core\Services\Users;


use Core\Services\Encryption\EncryptionServiceInterface;
use Driver\DatabaseInterface;

class UserService implements UsersServiceInterface
{
    private $db;
    public $encryptionService;

    public function __construct(DatabaseInterface $db, EncryptionServiceInterface $encryptionService)
    {
        $this->db = $db;
        $this->encryptionService = $encryptionService;
    }


    public function register($username, $password): bool
    {
       $passwordHash = $this->encryptionService->encrypt($password);
       $query = "INSERT INTO users (username, password) VALUES (?, ?)";
       $statement = $this->db->prepare($query);
       return $statement->execute([$username, $passwordHash]);
    }
}