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
        Schema::create('offer_status', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id');
            $table->foreignId('user_id');
            $table->dateTime('bank');
            $table->string('status');
            $table->string('status_name');
            $table->string('delay_times');
            $table->string('delay_record');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer_status');
    }
};
