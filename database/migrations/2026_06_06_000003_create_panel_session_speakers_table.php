<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('panel_session_speakers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('panel_session_id')->constrained('panel_sessions')->cascadeOnDelete();
            $table->foreignId('panel_speaker_id')->constrained('panel_speakers')->cascadeOnDelete();
            $table->string('topic')->nullable();            // what they are speaking on for this session
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('panel_session_speakers');
    }
};
