<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->string('town_pre', '10');
            $table->string('town', '50');
            $table->string('street_pre', '20');
            $table->string('street', '50');
            $table->string('house', '8');
            $table->string('flat', '7');

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
        Schema::dropIfExists('addresses');
    }
}
