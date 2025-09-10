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
        Schema::create('contact_form_entries', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Име *
            $table->string('email'); // Имейл *
            $table->string('phone')->nullable(); // Телефон
            $table->string('company')->nullable(); // Компания
            $table->string('subject'); // Тема *
            $table->string('priority')->nullable(); // Приоритет
            $table->string('service_type')->nullable(); // Тип услуга
            $table->text('message'); // Съобщение *
            $table->text('department')->nullable();
            $table->text('ip_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_form_entries');
    }
};
