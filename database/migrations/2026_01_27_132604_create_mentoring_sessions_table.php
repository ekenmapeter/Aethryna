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
        Schema::create('mentoring_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentor_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('learner_id')->constrained('users')->onDelete('cascade');
            $table->dateTime('session_date');
            $table->integer('duration_minutes')->nullable();
            $table->enum('session_type', ['one-on-one', 'group', 'workshop', 'check-in'])->default('one-on-one');
            $table->text('topics_discussed')->nullable();
            $table->text('action_items')->nullable();
            $table->text('mentor_notes')->nullable();
            $table->enum('learner_engagement', ['low', 'medium', 'high'])->nullable();
            $table->boolean('support_flagged')->default(false);
            $table->text('support_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentoring_sessions');
    }
};
