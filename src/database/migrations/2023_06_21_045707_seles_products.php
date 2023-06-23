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
        Schema::create('sales_products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_sales');
            $table->foreign('id_sales')->references('id')->on('sales');

            $table->unsignedBigInteger('id_products');
            $table->foreign('id_products')->references('id')->on('products');

            $table->integer('units');
            $table->float('sale_price', 10, 2);

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
        //
    }
};
