<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['buy', 'sell']);
            $table->string('symbol');
            $table->enum('market', ['forex', 'crypto']);
            $table->decimal('amount', 15, 2);
            $table->decimal('entry_price', 15, 5);
            $table->decimal('take_profit', 15, 5)->nullable();
            $table->decimal('stop_loss', 15, 5)->nullable();
            $table->decimal('current_price', 15, 5);
            $table->decimal('pnl', 15, 2)->default(0);
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trades');
    }
};