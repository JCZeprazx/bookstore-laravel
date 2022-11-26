<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_order_id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('payment_id');
            $table->integer('quantity');
            $table->integer('total_cost');
            $table->timestamps();

            $table->foreign('user_order_id')->references('id')->on('user__orders')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_cart');
    }
};
