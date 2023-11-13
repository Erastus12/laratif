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
        Schema::create('product__with__colors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shop__items_id')->nullable()->index('product__with__colors_shop__items_id_foreign')->comment('ID Item');
            $table->unsignedBigInteger('product__colors_id')->nullable()->index('product__with__colors_product__colors_id_foreign')->comment('ID Warna');
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
        Schema::dropIfExists('product__with__colors');
    }
};
