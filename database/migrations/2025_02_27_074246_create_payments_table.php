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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id');
            $table->dateTime('datetime');
            $table->char('payment_type',3);
            $table->boolean('payment_checked')->nullable();
            $table->integer('tution_fee')->nullable();
            $table->integer('other_fee')->nullable();
            $table->integer('amount')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->text('tution_payment')->nullable();
            $table->text('other_payment')->nullable();
            $table->string('receipt_code')->nullable();
            $table->string('refunded')->nullable();
            $table->string('refunded_detail')->nullable();
            $table->string('refunded_remark')->nullable();
            $table->dateTime('refunded_timestamp')->nullable();
            $table->foreignId('refunded_user_id')->nullable();
            $table->date('refunded_confirm_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
