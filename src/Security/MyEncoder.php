<?php

namespace App\Security;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

final class MyEncoder implements PasswordEncoderInterface
{
    public function encodePassword(string $raw, ?string $salt): string
    {
        return '!!'.$raw;
    }

    public function isPasswordValid(string $encoded, string $raw, ?string $salt): bool
    {
        return $this->encodePassword($raw, $salt) === $encoded;
    }

    public function needsRehash(string $encoded): bool
    {
        return false;
    }
}
