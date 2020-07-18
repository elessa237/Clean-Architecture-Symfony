<?php

namespace App\Domain\User\ValueObject;

use Assert\Assert;

class Email
{
    private string $email;

    public function __construct(string $email)
    {
        Assert::that($email)->notBlank()->maxLength(255)->email();
        $this->email = $email;
    }

    public function email(): string
    {
        return $this->email;
    }
}
