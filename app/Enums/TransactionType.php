<?php

namespace App\Enums;

enum TransactionType: string
{
    case DEPOSIT = 'deposit';
    case WITHDRAWAL = 'withdrawal';
    case ROI = 'Roi';
    case INVESTMENT_RETURN = 'Investment Return';
}