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
        Schema::create('offer_template_fields', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('code');
            $table->string('name');
            $table->string('type');
            $table->text('options')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
        $table->unique(['code']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer_template_fields');
    }
};
