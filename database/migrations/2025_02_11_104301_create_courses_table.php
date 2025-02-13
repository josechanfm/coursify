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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('program_id');
            $table->string('code');
            $table->string('name_zh');
            $table->string('name_en')->nullable();
            $table->string('name_pt')->nullable();
            $table->tinyInteger('year')->nullable();
            $table->tinyInteger('term')->nullable();
            $table->tinyInteger('credit')->nullable();
            $table->string('stream')->nullable();
            $table->boolean('compulsory')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
