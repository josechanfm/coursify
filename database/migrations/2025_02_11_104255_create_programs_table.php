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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('degree_id');
            $table->string('code');
            $table->string('name_zh');
            $table->string('name_en')->nullable();
            $table->string('name_pt')->nullable();
            $table->text('objective')->nullable();
            $table->string('duration')->nullable();
            $table->string('medium')->nullable();
            $table->text('prospect')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
