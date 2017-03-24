<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();//slug：将文章标题转化为URL的一部分，以利于SEO,注意其唯一性
            $table->string('title');//title：文章标题
            $table->text('content');//content：文章内容
            $table->timestamp('published_at')->index();//published_at：文章正式发布时间
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
        Schema::drop('posts');
    }
}
