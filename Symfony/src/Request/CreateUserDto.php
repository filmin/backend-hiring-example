<?php

declare(strict_types=1);

namespace App\Request;

final readonly class CreateUserDto
{
    public function __construct(
        public string $email,
        public string $password,
    ) {
    }
}
