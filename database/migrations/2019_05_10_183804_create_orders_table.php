<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('customer_name',128);
            $table->string('customer_mobile_number',16);
            $table->text('customer_adderss');
            $table->decimal('total_amount',11);
            $table->decimal('discount_amount',11);
            $table->decimal('paid_amount',11);
            $table->string('payment_status',16)->default('pending');
            $table->text('payment_details')->nullable();
            $table->string('orders_status')->default('pending');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
