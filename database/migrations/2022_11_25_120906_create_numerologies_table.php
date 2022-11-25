<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumerologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numerologies', function (Blueprint $table) {
            $table->id();

            $table->smallInteger('number');
            $table->text('content');
            
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
        Schema::dropIfExists('numerologies');
    }
}
