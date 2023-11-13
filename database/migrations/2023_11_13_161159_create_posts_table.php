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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('Judul Berita');
            $table->string('slug')->comment('Slug Berita');
            $table->string('hero_image')->comment('Gambar Utama Berita');
            $table->text('article')->comment('Artikel Berita');
            $table->unsignedBigInteger('division_id')->nullable()->index('posts_division_id_foreign')->comment('Divisi Terkait');
            $table->integer('viewed')->default(0)->comment('Jumlah Pembaca');
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
        Schema::dropIfExists('posts');
    }
};
