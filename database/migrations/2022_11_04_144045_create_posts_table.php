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

            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('likes')->nullable();
            $table->boolean('is_published')->default(1);

            $table->timestamps();

            $table->softDeletes(); //м'яке водалення записів з таблиці

            //привяжемо до категорій
            //$table->bigInteger('category_id')->nullable();//створити індексне поле для category
            //$table->index('category_id', 'post_category_idx');//створити індекс та присвоїти йому імя
            //$table->foreign('category_id', 'post_category_fk')->references('id')->on('categories');
            //$table->foreignId('user_id') ->nullable() ->constrained();
            $table->foreignId('category_id')->nullable()->constrained('categories');//створимо поле category_id та звяжемо його з індекним полем таблиці categories

            
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
