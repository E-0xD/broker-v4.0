<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Investment extends Model
{
    protected $fillable = [
        'user_id',
        'plan_id',
        'amount',
        'daily_earning',
        'total_earned',
        'last_earning_date',
        'status',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'daily_earning' => 'decimal:2',
        'total_earned' => 'decimal:2',
        'last_earning_date' => 'datetime',
    ];

    /**
     * Get the user that owns the investment.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the plan for this investment.
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    /**
     * Calculate daily earnings based on investment amount and plan percentage.
     */
    public function calculateDailyEarning(): float
    {
        return $this->amount * ($this->plan->daily_percentage / 100);
    }

    /**
     * Check if the investment can earn today.
     */
    public function canEarnToday(): bool
    {
        return $this->status === 'active' && 
               (!$this->last_earning_date || 
                $this->last_earning_date->isYesterday());
    }
}