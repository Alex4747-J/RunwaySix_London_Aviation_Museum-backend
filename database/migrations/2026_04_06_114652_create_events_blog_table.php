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
        Schema::create('events_blog', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->enum('post_type', ['event', 'blog']);
            $table->date('event_date')->nullable();
            $table->string('event_time', 100)->nullable();
            $table->string('location', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->string('image_path', 255)->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index('post_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_blog');
    }
};
