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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name_zh');
            $table->string('name_en')->nullable();
            $table->string('id_type')->nullable();
            $table->string('id_num')->nullable();
            $table->string('email')->nullable();
            $table->char('gender',1)->nullable();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
