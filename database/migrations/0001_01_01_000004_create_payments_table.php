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
         Schema::create('payment_providers', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('bank');
            $table->string('name');           // English name
            $table->string('local_name');     // Korean name
            $table->string('code', 10)->unique();
            $table->string('logo')->nullable(); 
            $table->timestamps();
        });
        Schema::create('payment_accounts', function (Blueprint $table) {
            $table->id();
            $table->morphs('owner');
            $table->foreignId('payment_provider_id')->constrained('payment_providers')->onDelete('restrict');
            $table->string('type')->default('bank');
            $table->string('account_number');
            $table->string('account_holder_name');
            $table->string('status')->default('active');

            $table->timestamps();

            // Composite unique index
            $table->unique(['owner_id', 'payment_provider_id', 'account_number'], 'user_payment_account_unique');

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_providers');
        Schema::dropIfExists('payment_accounts');

    }
};
