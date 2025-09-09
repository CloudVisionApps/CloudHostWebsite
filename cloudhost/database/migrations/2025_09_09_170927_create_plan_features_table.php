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
        Schema::create('plan_features', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Feature name (e.g., "SSL Certificate", "Daily Backups")
            $table->string('slug')->unique(); // URL-friendly identifier
            $table->text('description')->nullable(); // Feature description
            $table->string('icon')->nullable(); // Icon class or path
            $table->string('type')->default('boolean'); // boolean, numeric, text, select
            $table->json('options')->nullable(); // For select type features
            $table->string('unit')->nullable(); // Unit of measurement (GB, MB, etc.)
            $table->boolean('is_addon')->default(false); // Is this an addon feature?
            $table->decimal('addon_price', 10, 2)->nullable(); // Price if it's an addon
            $table->string('addon_currency', 3)->default('USD'); // Currency for addon price
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->integer('group_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_features');
    }
};
