<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ophones', function (Blueprint $table) {
            $table->id();
			
			$table->string('number', '8');
            $table->string('number1', '16');
            $table->bigInteger('offid');
            $table->bigInteger('strid');
            $table->bigInteger('funid');
            $table->bigInteger('branid');
            $table->string('surname', '50');
            $table->string('name', '50');
            $table->string('patronymic', '50');
            $table->date('birthday');
            $table->string('house', '8');
            $table->string('flat', '7');
            $table->string('note', '250');
            $table->string('sortindex')->nullable();            
            $table->text('userMail','50');
			
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
        Schema::dropIfExists('ophones');
    }
}
