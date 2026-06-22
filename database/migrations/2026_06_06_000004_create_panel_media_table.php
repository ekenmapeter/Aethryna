<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('panel_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('panel_session_id')->constrained('panel_sessions')->cascadeOnDelete();
            $table->enum('type', ['image', 'video']);
            $table->string('url');                          // full URL (YouTube embed, Cloudinary, etc.)
            $table->string('caption')->nullable();
            $table->string('thumbnail_url')->nullable();    // for video preview images
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('panel_media');
    }
};
