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
        Schema::create('commitees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('Nama Pengurus');
            $table->string('photo')->nullable()->comment('Foto Pengurus');
            $table->unsignedBigInteger('position_id')->nullable()->index('commitees_position_id_foreign')->comment('Jabatan Pengurus');
            $table->timestamps();
            $table->unsignedBigInteger('cabinet_division_id')->index('commitees_cabinet_division_id_foreign');
            $table->string('gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commitees');
    }
};
