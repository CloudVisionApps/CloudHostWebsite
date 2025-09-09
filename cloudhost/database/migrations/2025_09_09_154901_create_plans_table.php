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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('monthly_price', 10, 2);
            $table->decimal('yearly_price', 10, 2)->nullable();
            $table->string('currency', 3)->default('USD')->nullable();
            $table->integer('storage_gb')->nullable(); // Storage in GB
            $table->integer('bandwidth_gb')->nullable(); // Bandwidth in GB
            $table->integer('domains')->nullable(); // Number of domains allowed
            $table->integer('subdomains')->nullable(); // Number of subdomains allowed
            $table->integer('databases')->nullable(); // Number of databases allowed
            $table->integer('email_accounts')->nullable(); // Number of email accounts
            $table->integer('ftp_accounts')->nullable(); // Number of FTP accounts
            $table->boolean('ssl_certificate')->default(false);
            $table->boolean('backup')->default(false);
            $table->boolean('support_24_7')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->json('features')->nullable(); // Additional features as JSON
            $table->integer('sort_order')->default(0);
            $table->integer('group_id')->nullable(); // Foreign key to plan_groups
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
