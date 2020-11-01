<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->integer('id_customer');
            $table->foreignId('customer_id');
            $table->foreign('customer_id')->references('id')->on('users');
            $table->integer('id_product');
            $table->string('name');
            $table->string('email', 50);
            $table->string('phone_number', 12);
            $table->string('address');
            $table->double('total');
            $table->string('payment');
            $table->string('note', 200);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
