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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organizer_id')->nullable();
            $table->foreignId('course_id');
            $table->string('code')->unique();
            $table->string('name_zh');
            $table->string('name_en')->nullable();
            $table->date('apply_start')->nullable();
            $table->date('apply_end')->nullable();
            $table->boolean('application')->default(false);
            $table->boolean('front_end')->default(false);
            $table->date('application_update')->nullable();
            $table->date('days')->nullable();
            $table->boolean('dsej')->nullable();
            $table->integer('seats')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('credit')->nullable();
            $table->string('reference')->nullable();
            $table->text('remark')->nullable();
            $table->integer('special_member_fee')->nullable();
            $table->integer('membership_fee')->nullable();
            $table->integer('material_fee')->nullable();
            $table->integer('headphone_fee')->nullable();
            $table->integer('company_pay')->nullable();
            $table->integer('trainer_rate')->nullable();
            $table->integer('transportation_fee')->nullable();
            $table->integer('offer_other_fee')->nullable();
            $table->text('form_options')->nullable();
            $table->text('form_extra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
