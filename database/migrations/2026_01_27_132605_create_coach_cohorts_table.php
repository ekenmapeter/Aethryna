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
        Schema::create('coach_cohorts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coach_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('learner_id')->constrained('users')->onDelete('cascade');
            $table->string('cohort_name')->nullable(); // e.g., "Spring 2026 Cohort"
            $table->date('start_date');
            $table->date('expected_end_date')->nullable();
            $table->enum('status', ['active', 'completed', 'withdrawn'])->default('active');
            $table->integer('engagement_score')->nullable(); // 0-100
            $table->date('last_activity_date')->nullable();
            $table->boolean('at_risk')->default(false);
            $table->text('risk_notes')->nullable();
            $table->timestamps();

            // Index for quick lookups
            $table->index(['coach_id', 'status']);
            $table->index(['learner_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coach_cohorts');
    }
};
