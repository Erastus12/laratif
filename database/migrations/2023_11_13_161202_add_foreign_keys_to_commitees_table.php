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
        Schema::table('commitees', function (Blueprint $table) {
            $table->foreign(['position_id'])->references(['id'])->on('positions')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['cabinet_division_id'])->references(['id'])->on('cabinet_divisions')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commitees', function (Blueprint $table) {
            $table->dropForeign('commitees_position_id_foreign');
            $table->dropForeign('commitees_cabinet_division_id_foreign');
        });
    }
};
