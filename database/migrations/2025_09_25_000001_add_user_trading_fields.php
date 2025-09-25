<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->enum('currency', ['USD', 'EUR', 'GBP'])->default('USD');
            $table->enum('account_type', ['standard', 'premium', 'vip'])->default('standard');
            $table->enum('trading_platform', ['MT4', 'MT5'])->default('MT4');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['country', 'phone', 'currency', 'account_type', 'trading_platform']);
        });
    }
};