<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('bill_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->decimal('amount_paid', 12, 2);

            $table->enum('payment_method', ['cash', 'mpesa', 'card']);

            $table->string('transaction_reference')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
