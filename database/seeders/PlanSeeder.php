<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'title' => 'Starter Plan',
                'subtitle' => 'Perfect for beginners',
                'min_investment' => 50.00,
                'max_investment' => 999.00,
                'daily_percentage' => 0.5,
                'benefits' => [
                    '24/7 Support',
                    'Daily Returns',
                    'Flexible Investment',
                    'Instant Withdrawals'
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Growth Plan',
                'subtitle' => 'For intermediate investors',
                'min_investment' => 1000.00,
                'max_investment' => 4999.00,
                'daily_percentage' => 0.8,
                'benefits' => [
                    '24/7 Priority Support',
                    'Daily Returns',
                    'Investment Analytics',
                    'Instant Withdrawals',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Professional Plan',
                'subtitle' => 'For serious investors',
                'min_investment' => 5000.00,
                'max_investment' => 9999.00,
                'daily_percentage' => 1.2,
                'benefits' => [
                    '24/7 VIP Support',
                    'Enhanced Daily Returns',
                    'Advanced Analytics ',
                    'Priority Withdrawals',
                ],
                'is_active' => true,
            ],
            [
                'title' => 'Elite Plan',
                'subtitle' => 'For expert investors',
                'min_investment' => 10000.00,
                'max_investment' => 50000.00,
                'daily_percentage' => 1.5,
                'benefits' => [
                    '24/7 Dedicated Support Line',
                    'Maximum Daily Returns',
                    'Instant Priority Withdrawals',
                    'Dedicated Account Manager',
                ],
                'is_active' => true,
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
