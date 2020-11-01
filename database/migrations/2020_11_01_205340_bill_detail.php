<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BillDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bill_id');
            $table->foreign('bill_id')->references('id')->on('bills');
            $table->foreignId('product_id');
            $table->foreign('product_id')->references('id')->on('product');
            $table->integer('quantity');
            $table->double('unit_price');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_detail');
    }
}
