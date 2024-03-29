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
        Schema::create('work__programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('program')->comment('Program Kerja');
            $table->text('description')->comment('Deskripsi Progja');
            $table->timestamps();
            $table->unsignedBigInteger('cabinet_division_id')->default(1)->index('work__programs_cabinet_division_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work__programs');
    }
};
