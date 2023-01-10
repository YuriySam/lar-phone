<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('streets', function (Blueprint $table) {
            $table->id();
            $table->string('town_pre', '10')->nullable()->default('м.');
            $table->string('town', '50')->default('Київ');
            $table->string('street_pre', '20')->nullable();
            $table->string('street', '50');
            $table->string('house', '8')->nullable();
            $table->bigInteger('user_id')->default('0');//Хто заповнював строку
            $table->string('user_id_txt', '150')->nullable();//Хто заповнював строку

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
        Schema::dropIfExists('streets');
    }
}
