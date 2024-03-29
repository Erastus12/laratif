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
        Schema::create('u_m__contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('social')->comment('Media Sosial');
            $table->string('link')->comment('Link Media Sosial');
            $table->string('icon')->comment('Ikon Media Sosial');
            $table->string('color')->comment('Warna background Kontak (halaman Himatif Shop)');
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
        Schema::dropIfExists('u_m__contacts');
    }
};
