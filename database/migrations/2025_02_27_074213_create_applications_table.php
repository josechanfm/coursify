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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id');
            $table->string('code')->nullable();
            $table->string('name_zh')->nullable();
            $table->string('name_en')->nullable();
            $table->date('dob')->nullable();
            $table->char('gender',1)->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('id_type')->nullable();
            $table->string('id_num')->nullable();
            $table->string('industry')->nullable();
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->string('backup_phone')->nullable();
            $table->string('education')->nullable();
            $table->string('promotion')->nullable();
            $table->string('school_num')->nullable();
            $table->string('textbook_lang')->nullable();
            $table->string('how_to_know')->nullable();
            $table->text('extra')->nullable();
            $table->integer('status')->nullable();
            $table->integer('status_ignore')->nullable();
            $table->boolean('candidate')->nullable();
            $table->dateTime('candidate_timestamp')->nullable();
            $table->boolean('candidate_user_id')->nullable();
            $table->foreignId('student_id')->nullable();
            $table->foreignId('school_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
