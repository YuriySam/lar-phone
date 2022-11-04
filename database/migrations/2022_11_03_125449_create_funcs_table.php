<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcs', function (Blueprint $table) {
            $table->id();

            $table->string('func');
            $table->integer('funindex');

            $table->timestamps();

            $table->softDeletes(); //м'яке водалення записів з таблиці

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcs');
    }
}
