<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('product')){}
        else{
            Schema::create('product_type', function (Blueprint $table) {
                $table->id();
                $table->string('type');
            });

            Schema::create('product', function (Blueprint $table) {
                $table->id();
                $table->foreignId('type_id');
                $table->foreign('type_id')->references('id')->on('product_type');
                $table->string('name');
                $table->string('description');
                $table->integer('unit_price');
                $table->integer('promotion_price');
                $table->string('image');
                $table->timestamps();
            });

            Schema::create('product_detail', function (Blueprint $table) {
                $table->id();
                $table->foreignId('product_id');
                $table->foreign('product_id')->references('id')->on('product');
                $table->string('specification');
                // $table->foreign('specification')->references('specification')->on('product_type');
                $table->string('value');
            });
        }
        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_detail');
        Schema::dropIfExists('product');
        Schema::dropIfExists('product_type');

    }
}
