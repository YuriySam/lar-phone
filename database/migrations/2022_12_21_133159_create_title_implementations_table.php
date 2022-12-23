<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleImplementationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title_implementations', function (Blueprint $table) {
            $table->id();

            
            $table->string('title', '150')->nullable();  //Результат розгляду (title_implementation_id)
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
        Schema::dropIfExists('title_implementations');
    }
}
