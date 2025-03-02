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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id');
            $table->dateTime('bank');
            $table->string('order_code');
            $table->string('rand');
            $table->string('currency');
            $table->integer('amount');
            $table->string('order_json');
            $table->string('payment_url');
            $table->string('return_json');
            $table->string('success_json');
            $table->string('order_no');
            $table->string('mer_order_no');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
