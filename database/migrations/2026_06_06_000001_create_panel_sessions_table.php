<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('panel_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('tagline')->nullable();           // e.g. "AI Is Not Coming, It's Here. Now What?"
            $table->dateTime('event_date');
            $table->string('duration')->default('90 minutes');
            $table->string('format')->default('Virtual');
            $table->string('eventbrite_url')->nullable();   // registration / ticket link
            $table->string('recording_url')->nullable();    // Riverside / YouTube replay URL
            $table->enum('status', ['upcoming', 'live', 'past'])->default('upcoming');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('panel_sessions');
    }
};
