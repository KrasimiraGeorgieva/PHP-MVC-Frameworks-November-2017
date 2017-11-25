<?php

namespace Core\Services\Encryption;


class BCryptEncryptionService implements EncryptionServiceInterface
{

    public function encrypt(string $password): string
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function verify(string $password, string $hash): bool
    {
        return password_hash($password, $hash);
    }
}