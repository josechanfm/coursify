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
            $table->foreignId('area_id');
            $table->string('name_zh');
            $table->string('name_en')->nullable();
            $table->string('type',20);
            $table->text('description')->nullable();
            $table->boolean('assessment')->default(false);
            $table->string('method')->nullable();
            $table->string('target')->nullable();
            $table->string('prerequisite')->nullable();
            $table->string('conduct_lang')->nullable();
            $table->string('handout_lang')->nullable();
            $table->char('certificate')->nullable();
            $table->integer('hours')->nullable();
            $table->integer('tution_fee')->nullable();
            $table->integer('other_fee')->nullable();
            $table->char('payment')->nullable();
            $table->integer('quota')->nullable();
            $table->boolean('active')->default(false);
            $table->text('remark')->nullable();
            $table->integer('last_num')->nullable();
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
