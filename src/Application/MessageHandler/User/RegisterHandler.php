<?php

namespace App\Application\MessageHandler\User;

use App\Domain\User\Entity\User;
use App\Domain\User\Message\Register;
use App\Domain\User\Repository\UserRepositoryInterface;

final class RegisterHandler
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function __invoke(Register $register): void
    {
        $this->userRepository->add(User::createFromRegistrationMessage($register));
    }
}
