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
        Schema::create('lesson_student', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id');
            $table->foreignId('student_id');
            $table->char('attend',3)->nullable();
            $table->timestamps();
            $table->unique(['lesson_id','student_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_student');
    }
};
