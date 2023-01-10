<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appeals', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger( 'number')->comment('1.Порядковий номер з початку року');
            $table->date(               'data_reg')->comment('2.Дата запису в цей журнал');	
            $table->string(             'number_reg', '50')->comment('3.Індекс внутрішній номер');  	
            $table->string(             'surname_reg', '50')->nullable()->comment('4.Призвище');
            $table->string(             'name_reg', '50')->nullable()->comment('5.Ім\\\'я');
            $table->string(             'patronymic', '50')->nullable()->comment('6.По батькові');
            
            $table->bigInteger(         'street_id'                    )->default('1')->nullable()->comment('7.Адреса з довідника'); 
            $table->string(             'street_txt', '250'            )->nullable()->comment('8.Адреса текст'); 

            $table->string(             'phone_reg', '12'               )->nullable()->comment('9.Номер телефону заявника   '); //Номер телефону заявника
            $table->bigInteger(         'type_docum_id'                 )->default('1')->nullable()->comment('');   //Вид документа з довідника скарга/подяка/запит/пропозиція
            $table->string(             'type_docum_txt','150'          )->nullable()->comment('');   //Вид документа текст
            $table->bigInteger(         'question_docum_id'             )->default('1')->nullable()->comment('');   //Порушені питання тип
            $table->text(               'content_docum'                 )->nullable()->comment('');    //Порушені питання

            $table->string(             'income_number', '50'           )->nullable()->comment('');  //Вхідний номер КНП "ЦЕМДтаМК"
            $table->date(               'income_date'                   )->nullable()->comment('');//Дата надходження

            $table->bigInteger(         'destination_office_id'         )->default('1')->nullable()->comment(''); //Куди надійшло звернення
            $table->string(             'destination_office_txt','150'  )->nullable()->comment(''); //Куди надійшло звернення
            $table->string(             'destination_number', '50'      )->nullable()->comment('');  //Вхідний номер 
            $table->date(               'destination_date'              )->nullable()->comment('');//Дата надходження
            
            $table->bigInteger(         'source1_office_id'             )->default('1')->nullable()->comment(''); //Звідки одержано (1)
            $table->string(             'source1_office_txt','150'      )->nullable()->comment(''); //Звідки одержано (1)
            $table->string(             'source1_number', '50'          )->nullable()->comment('');  //Вхідний номер (1)
            $table->date(               'source1_date'                  )->nullable()->comment('');//Дата реєстрації (1)

            $table->bigInteger(         'source2_office_id'             )->default('1')->nullable()->comment(''); //Звідки одержано (2)
            $table->string(             'source2_office_txt','150'      )->nullable()->comment(''); //Звідки одержано (2)
            $table->string(             'source2_number', '50'          )->nullable()->comment('');  //Вхідний номер (2)
            $table->date(               'source2_date'                  )->nullable()->comment('');//Дата реєстрації (2)
            
            $table->bigInteger(         'source3_office_id'             )->default('1')->comment(''); //Звідки одержано (3)
            $table->string(             'source3_office_txt','150'      )->nullable()->comment(''); //Звідки одержано (3)
            $table->string(             'source3_number', '50'          )->nullable()->comment('');  //Вхідний номер (3)
            $table->date(               'source3_date'                  )->nullable()->comment('');//Дата реєстрації (3)
            
            $table->bigInteger(         'amount_docum_id'               )->default('1')->nullable()->comment(''); //первинне/повторне/дубль
            $table->string(             'amount_docum_txt','50'         )->nullable()->comment(''); //первинне/повторне/дубль

            $table->bigInteger(         'content_resolution_id'         )->default('1')->nullable()->comment('');// Зміст резолюції	розгляд відповідь/розгляд/ не за адресою/	content_resolution_id	tab 	resolution	
            $table->string(             'content_resolution_txt','150'  )->nullable()->comment('');// Зміст резолюції	розгляд відповідь/розгляд/ не за адресою/	content_resolution_id	tab 	resolution	
            
            $table->string(             'avtor_resolution', '50'        )->nullable()->comment('');  // Автор резолюції	директор центру КМДтаМК	avtor_resolution	character	50	
            $table->bigInteger(         'group_docum_id'                )->default('1')->nullable()->comment('');// (Вид документа)	Група документа	group_docum_id	tab 	group_docum	
			$table->string(             'group_docum_txt','225'         )->nullable()->comment('');// (Вид документа)	Група документа	group_docum_id	tab 	group_docum	
			
            $table->bigInteger(         'executor_ophone_id'            )->default('1')->nullable()->comment('');// Виконавець	взяти з нашого довідника? Завідувача або начальника або заступника	ophone_id	tab 	ophone	executor
            $table->string(             'executor_ophone_txt','225'     )->nullable()->comment('');// Виконавець	взяти з нашого довідника? Завідувача або начальника або заступника	ophone_id	tab 	ophone	executor
            
            $table->bigInteger(         'executor_branch_id'            )->default('1')->nullable()->comment('');
            $table->string(             'executor_branch_txt', '225'    )->nullable()->comment('');//Структурний підрозділ	відділ виконавця	executor_branch	
            
            $table->date(               'data_implementation'           )->nullable()->comment(''); //Термін виконання	Хто має контролювати і як?	data_Implementation	data		просто поле дата
            $table->string(             'namber_implementation', '50'   )->nullable()->comment('');//№ справи	як ставити номер?	namber_Spr	character	30
            $table->bigInteger(         'title_implementation_id'       )->default('1')->comment('');//Результат розгляду	Список з 6-ти варіантів?	title_Implementation	tab 	rezRoz
            $table->string(             'title_implementation_txt','150')->nullable()->comment('');//Результат розгляду	Список з 6-ти варіантів?	title_Implementation	tab 	rezRoz
            
            $table->bigInteger(         'validity_id'                   )->default('1')->comment('');//Обгрунтованість	Список з 6-ти варіантів?	Validity	tab 	Validity
            $table->string(             'validity_txt','150'            )->nullable()->comment('');//Обгрунтованість	Список з 6-ти варіантів?	Validity	tab 	Validity
            
            $table->date(               'data_our_implementation'       )->nullable()->comment(''); //Дата виконання 	Дата виконання по ЦЕМД та МК	data_our_Implementation	
            $table->string(             'namber_our', '50'              )->nullable()->comment('');//Вихідний номер КНП "ЦЕМДтаМК"		number_removal__control
            
            $table->date(               'date_removal_control'          )->nullable()->comment('');//Дата зняття з контролю date_removal_control		
            $table->string(             'name_removal_control', '50'    )->nullable()->comment('');//Ким знято з контролю name_removal_control
            $table->string(             'notes', '225'                  )->nullable()->comment('');//Примітки	примітки	notes

            $table->bigInteger(         'user_id'                       )->default('1')->comment('');//Хто заповнював строку
            $table->string(             'user_id_txt', '150'            )->nullable()->comment('');//Хто заповнював строку



            // $table->string('title');
            // $table->text('content');
            // $table->string('image')->nullable();
            // $table->unsignedBigInteger('likes')->nullable();
            // $table->boolean('is_published')->default(1);




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
        Schema::dropIfExists('appeals');
    }
}
