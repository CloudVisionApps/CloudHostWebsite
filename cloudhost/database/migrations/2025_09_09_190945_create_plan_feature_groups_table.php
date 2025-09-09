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
        Schema::create('plan_feature_groups', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable(); // Feature group name (e.g., "Storage", "Bandwidth")
            $table->string('slug')->unique()->nullable(); // URL-friendly identifier
            $table->text('description')->nullable(); // Feature group description
            $table->integer('sort_order')->default(0); // Order for displaying feature groups
            $table->string('icon')->nullable(); // Optional icon for the feature group
            $table->string('icon_color')->nullable(); // Optional icon for the feature group

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_feature_groups');
    }
};
