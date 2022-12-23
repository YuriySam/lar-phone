<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentResolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_resolutions', function (Blueprint $table) {
            $table->id();

            $table->string('title', '150')->nullable();  //Зміст резолюції розгляд відповідь/розгляд/ не за адресою/
            $table->bigInteger('user_id')->default('1'); //Хто редагував з довіднику


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
        Schema::dropIfExists('content_resolutions');
    }
}
