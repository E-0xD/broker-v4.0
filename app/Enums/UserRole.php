<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case MASTER = 'master';
    case USER = 'user';

    public function label(): string
    {
        return match($this) {
            self::ADMIN => 'Administrator',
            self::MASTER => 'Master Admin',
            self::USER => 'Regular User'
        };
    }


}