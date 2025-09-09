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
        Schema::create('plan_plan_feature', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained()->onDelete('cascade');
            $table->foreignId('plan_feature_id')->constrained()->onDelete('cascade');
            $table->string('value')->nullable(); // The actual value for this feature in this plan
            $table->boolean('is_included')->default(true); // Is this feature included in the plan?
            $table->boolean('is_available')->default(true); // Is this feature available as addon?
            $table->decimal('addon_price', 10, 2)->nullable(); // Override addon price for this plan
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            
            $table->unique(['plan_id', 'plan_feature_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_plan_feature');
    }
};
