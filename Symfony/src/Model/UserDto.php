<?php

declare(strict_types=1);

namespace App\Model;

final readonly class UserDto
{
    public function __construct(
        public string $email,
        public string $password,
    ) {
    }
}
