<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepositSetting extends Model
{
    protected $fillable = [
        'is_manual_deposit',
        'deposit_currency',
        'deposit_address',
        'deposit_instructions'
    ];

    protected $casts = [
        'is_manual_deposit' => 'boolean'
    ];
}