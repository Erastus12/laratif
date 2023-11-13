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
        Schema::create('product__galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shop__items_id')->index('product__galleries_shop__items_id_foreign')->comment('ID Item');
            $table->string('photo')->comment('Foto Item');
            $table->integer('photo_order')->comment('Urutan Foto');
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
        Schema::dropIfExists('product__galleries');
    }
};
