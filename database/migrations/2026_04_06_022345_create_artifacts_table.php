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
        Schema::create('artifacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('object_type', 255)->nullable();
            $table->string('period', 255)->nullable();
            $table->string('origin', 255)->nullable();
            $table->string('material', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('image_path', 255)->nullable();          
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artifacts');
    }
};
