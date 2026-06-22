<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('panel_speakers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');                        // job title
            $table->string('company')->nullable();
            $table->text('bio');
            $table->string('photo_path')->nullable();       // e.g. images/speakers/ravi.jpg
            $table->string('linkedin_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('panel_speakers');
    }
};
