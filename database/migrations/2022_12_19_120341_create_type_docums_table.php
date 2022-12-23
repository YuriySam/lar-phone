<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeDocumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_docums', function (Blueprint $table) {
            $table->id();

            $table->string('title', '50')->nullable();  //Вид документа скарга/подяка/запит/пропозиція
            $table->bigInteger('user_id')->default('1'); //Хто редагував з довідника
            

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
        Schema::dropIfExists('type_docums');
    }
}
