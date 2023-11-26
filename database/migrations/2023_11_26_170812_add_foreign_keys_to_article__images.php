<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('article__images', function (Blueprint $table) {
            $table->foreign(['posts_id'])->references(['id'])->on('posts')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('article__images', function (Blueprint $table) {
            $table->dropForeign('article__images_posts_id_foreign');
        });
    }
};
