<?php

namespace Core\Services\Authentication;


use Core\Http\Component\SessionInterface;
use Core\Services\Encryption\EncryptionServiceInterface;
use Driver\DatabaseInterface;

class AuthenticationService implements AuthenticationServiceInterface
{
    const KEY_SESSION_USER_ID = 'auth_id';

    private $session;
    private $db;
    private $encryptionService;

    public function __construct(SessionInterface $session,
                                DatabaseInterface $db,
                                EncryptionServiceInterface $encryptionService)
    {
        $this->session = $session;
        $this->db = $db;
        $this->encryptionService = $encryptionService;
    }


    public function isLogged(): bool
    {
        return !empty($this->session->getAttribute(self::KEY_SESSION_USER_ID));
    }

    public function login($username, $password): bool
    {
        $query = "SELECT id, password FROM users WHERE username = ?";
        $statement = $this->db->prepare($query);
        $statement->execute([$username]);
        $result = $statement->fetchRow();

        if ($this->encryptionService->verify($password, $result['password'])){
            $this->session->setAttribute(self::KEY_SESSION_USER_ID, $result['id']);
            return true;
        }

        return false;
    }
}