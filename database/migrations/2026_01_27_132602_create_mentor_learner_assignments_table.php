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
        Schema::create('mentor_learner_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentor_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('learner_id')->constrained('users')->onDelete('cascade');
            $table->enum('status', ['active', 'completed', 'paused'])->default('active');
            $table->date('assigned_date');
            $table->date('completion_date')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            // Ensure a learner can't be assigned to the same mentor twice
            $table->unique(['mentor_id', 'learner_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentor_learner_assignments');
    }
};
