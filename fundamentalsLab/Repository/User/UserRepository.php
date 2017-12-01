<?php

namespace Repository\User;



use Database\DatabaseInterface;
use Models\BindingModels\UserRegisterBindingModel;
use Models\Entity\User;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function findOneByUsername(string $username): ?User
    {
        $query = "
            SELECT 
                id, 
                username, 
                password            
            FROM
                users
            WHERE
                username = ?
             ";

        return $this->db->query($query)
            ->execute($username)
            ->fetch(User::class)
            ->current();
    }

    public function insert(UserRegisterBindingModel $user): bool
    {
        $query = "
            INSERT INTO
              users
            (
              username,
              password
           
            )
              VALUES
            (
              ?,
              ?
            );
        ";

        $this->db->query($query)
            ->execute(
                $user->getUsername(),
                $user->getPassword()
            );

        return true;
    }
}