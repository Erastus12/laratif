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
        Schema::table('shop__items', function (Blueprint $table) {
            $table->foreign(['product__categories_id'])->references(['id'])->on('product__categories')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop__items', function (Blueprint $table) {
            $table->dropForeign('shop__items_product__categories_id_foreign');
        });
    }
};
