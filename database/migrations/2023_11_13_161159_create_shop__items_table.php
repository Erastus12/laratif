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
        Schema::create('shop__items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item')->comment('Nama Item');
            $table->string('slug')->comment('Slug Item');
            $table->text('description')->comment('Deskripsi Item');
            $table->unsignedBigInteger('product__categories_id')->nullable()->index('shop__items_product__categories_id_foreign')->comment('Kategori Item');
            $table->timestamps();
            $table->boolean('published')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop__items');
    }
};
