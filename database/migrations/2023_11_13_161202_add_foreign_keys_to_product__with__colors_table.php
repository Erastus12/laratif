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
        Schema::table('product__with__colors', function (Blueprint $table) {
            $table->foreign(['shop__items_id'])->references(['id'])->on('shop__items')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['product__colors_id'])->references(['id'])->on('product__colors')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product__with__colors', function (Blueprint $table) {
            $table->dropForeign('product__with__colors_shop__items_id_foreign');
            $table->dropForeign('product__with__colors_product__colors_id_foreign');
        });
    }
};
