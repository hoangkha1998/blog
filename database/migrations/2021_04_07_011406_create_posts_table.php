<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->bigInteger('authorId')->unsigned();
            $table->text('title');
            $table->text('metaTitle');
            $table->string('slug')->nullable();
            $table->text('content');
            $table->text('images');
            $table->tinyInteger('isBanner')->default(0);
            $table->tinyInteger('isDisplay')->default(1);
            $table->timestamps();
            $table->foreign('authorId')->references('id')->on('users')->onDelete('cascade');
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
}
