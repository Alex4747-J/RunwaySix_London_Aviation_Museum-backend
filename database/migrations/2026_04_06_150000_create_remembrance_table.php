<?php

use Illuminate\Database\Eloquent\SoftDeletes;
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
        Schema::create('remembrance', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 255);
            $table->string('rank_title', 255)->nullable();
            $table->string('branch', 255)->nullable();
            $table->string('squadron', 255)->nullable();
            $table->foreignId('page_id')->nullable()->constrained('remembrance_pages')->onDelete('set null');
            $table->timestamps();
            $table->fullText('full_name');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remembrance');
    }
};
