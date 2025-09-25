<?php

namespace Database\Seeders;

use App\Models\DepositSetting;
use Illuminate\Database\Seeder;

class DepositSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DepositSetting::create([
            'is_manual_deposit' => false,
            'deposit_currency' => 'USDT',
            'deposit_address' => 'TRX7fKqCkRzF9JGEGKoHLo1SqoWHy9zQP1',
            'deposit_instructions' => 'Please send your deposit to the address provided. Only USDT (TRC20) is accepted. Your deposit will be credited after confirmation.'
        ]);
    }
}
