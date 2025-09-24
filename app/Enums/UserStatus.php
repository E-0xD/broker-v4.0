<?php

namespace App\Enums;

enum UserStatus: string
{
    case ACTIVE = 'active';
    case DISABLED = 'disabled';

    public function label(): string
    {
        return match($this) {
            self::ACTIVE => 'Active',
            self::DISABLED => 'Disabled'
        };
    }

}