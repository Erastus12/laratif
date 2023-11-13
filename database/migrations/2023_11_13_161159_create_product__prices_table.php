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
        Schema::create('product__prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shop__items_id')->nullable()->index('product__prices_shop__items_id_foreign')->comment('ID Item');
            $table->integer('price')->comment('Harga Item');
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
        Schema::dropIfExists('product__prices');
    }
};
