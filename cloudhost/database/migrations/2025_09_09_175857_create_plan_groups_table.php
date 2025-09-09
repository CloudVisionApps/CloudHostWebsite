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
        Schema::create('plan_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // Group name (e.g., "Basic", "Premium")
            $table->string('slug')->unique()->nullable(); // URL-friendly identifier
            $table->text('description')->nullable(); // Group description
            $table->integer('sort_order')->default(0); // Order for displaying groups
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_groups');
    }
};
