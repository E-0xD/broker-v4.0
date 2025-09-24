<?php

namespace App\Enums;

enum WithdrawalOption: string
{
    case BITCOIN = 'bitcoin';
    case ETHEREUM = 'ethereum';
}
