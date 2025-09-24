<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'min_investment',
        'max_investment',
        'daily_percentage',
        'benefits',
        'is_active',
    ];

    protected $casts = [
        'min_investment' => 'decimal:2',
        'max_investment' => 'decimal:2',
        'daily_percentage' => 'decimal:2',
        'benefits' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Get the investments for the plan.
     */
    public function investments(): HasMany
    {
        return $this->hasMany(Investment::class);
    }
}