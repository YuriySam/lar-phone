<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('post_tags');
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();

            //$table->unsignedInteger('post_id');
            //$table->unsignedInteger('tag_id');
            //$table->index('post_id', 'post_tag_post_idx');
            //$table->index('tag_id', 'post_tag_tag_idx');

           // $table->foreign('post_id')->on('posts')->references('id');
            //$table->foreign('tag_id')->on('tags')->references('id');

            $table->foreignId('post_id')->nullable()->constrained('posts'); //створимо поле post_id та звяжемо його з індекним полем таблиці posts
            $table->foreignId('tag_id')->nullable()->constrained('tags');//створимо поле tag_id та звяжемо його з індекним полем таблиці tags



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
        Schema::dropIfExists('post_tags');
    }
}
