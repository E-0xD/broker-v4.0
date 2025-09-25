<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('type');  // Backed by TransactionType enum
            $table->decimal('amount', 15, 2);
            $table->string('address')->nullable(); // used by withdrwal
            $table->string('withdrawal_method')->nullable(); // used by withdrwal
            $table->string('status'); // Backed by TransactionStatus enum
            $table->string('proof')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
