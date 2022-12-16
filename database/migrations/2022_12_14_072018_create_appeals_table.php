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

            $table->unsignedBigInteger('number');// №п/п	- порядковий номер з початку року
            $table->date(       'data_reg');//Дата запису	Дата запису в цей журнал
            $table->string(     'number_reg', '50');  //Індекс	Індекс внутрішній номер
            $table->string(     'surname_reg', '50');
            $table->string(     'name_reg', '50');
            $table->string(     'patronymic', '50');
            
            $table->bigInteger( 'address_id'                    )->default('1'); //Адреса з довідника
            $table->string(     'address_txt', '250'            )->nullable(); //Адреса текст

            $table->string(     'phone_reg', '12'               )->nullable(); //Номер телефону заявника
            $table->bigInteger( 'type_docum_id'                 )->nullable();   //Вид документа з довідника
            $table->string(     'type_docum_txt','150'          )->nullable();   //Вид документа текст
            $table->text(       'content_docum'                 )->nullable();    //Порушені питання

            $table->string(     'income_number', '50'           )->nullable();  //Вхідний номер КНП "ЦЕМДтаМК"
            $table->date(       'income_date'                   )->nullable();//Дата надходження

            $table->bigInteger( 'destination_office_id'         )->nullable(); //Куди надійшло звернення
            $table->string(     'destination_office_txt','150'  )->nullable(); //Куди надійшло звернення
            $table->string(     'destination_number', '50'      )->nullable();  //Вхідний номер 
            $table->date(       'destination_date'              )->nullable();//Дата надходження
            
            $table->bigInteger( 'source1_office_id'             )->nullable(); //Звідки одержано (1)
            $table->string(     'source1_office_txt','150'      )->nullable(); //Звідки одержано (1)
            $table->string(     'source1_number', '50'          )->nullable();  //Вхідний номер (1)
            $table->date(       'source1_date'                  )->nullable();//Дата реєстрації (1)

            $table->bigInteger( 'source2_office_id'             )->nullable(); //Звідки одержано (2)
            $table->string(     'source2_office_txt','150'      )->nullable(); //Звідки одержано (2)
            $table->string(     'source2_number', '50'          )->nullable();  //Вхідний номер (2)
            $table->date(       'source2_date'                  )->nullable();//Дата реєстрації (2)
            
            $table->bigInteger( 'source3_office_id'             )->nullable(); //Звідки одержано (3)
            $table->string(     'source3_office_txt','150'      )->nullable(); //Звідки одержано (3)
            $table->string(     'source3_number', '50'          )->nullable();  //Вхідний номер (3)
            $table->date(       'source3_date'                  )->nullable();//Дата реєстрації (3)
            
            $table->bigInteger( 'amount_dokum_id'               )->nullable(); //первинне/повторне/дубль
            $table->string(     'amount_dokum_txt','50'         )->nullable(); //первинне/повторне/дубль

            $table->bigInteger( 'content_resolution_id'         )->nullable();// Зміст резолюції	розгляд відповідь/розгляд/ не за адресою/	content_resolution_id	tab 	resolution	
            $table->string(     'content_resolution_txt','150'  )->nullable();// Зміст резолюції	розгляд відповідь/розгляд/ не за адресою/	content_resolution_id	tab 	resolution	
            
            $table->string(     'avtor_resolution', '50'        )->nullable();  // Автор резолюції	директор центру КМДтаМК	avtor_resolution	character	50	
            $table->bigInteger( 'group_docum_id'                )->nullable();// (Вид документа)	Група документа	group_docum_id	tab 	group_docum	
			$table->string(     'group_docum_txt','225'         )->nullable();// (Вид документа)	Група документа	group_docum_id	tab 	group_docum	
			
            $table->bigInteger( 'executor_ophone_id'            )->nullable();// Виконавець	взяти з нашого довідника? Завідувача або начальника або заступника	ophone_id	tab 	ophone	executor
            $table->string(     'executor_ophone_txt','225'     )->nullable();// Виконавець	взяти з нашого довідника? Завідувача або начальника або заступника	ophone_id	tab 	ophone	executor
            
            $table->bigInteger( 'executor_branch_id'            )->nullable();
            $table->string(     'executor_branch_txt', '225'    )->nullable();//Структурний підрозділ	відділ виконавця	executor_branch	
            
            $table->date(       'data_implementation'           )->nullable(); //Термін виконання	Хто має контролювати і як?	data_Implementation	data		просто поле дата
            $table->string(     'namber_implementation', '50'   )->nullable();//№ справи	як ставити номер?	namber_Spr	character	30
            $table->bigInteger( 'title_implementation_id'       )->nullable();//Результат розгляду	Список з 6-ти варіантів?	title_Implementation	tab 	rezRoz
            $table->string(     'title_implementation_txt','150')->nullable();//Результат розгляду	Список з 6-ти варіантів?	title_Implementation	tab 	rezRoz
            
            $table->bigInteger( 'validity_id'                   )->nullable();//Обгрунтованість	Список з 6-ти варіантів?	Validity	tab 	Validity
            $table->string(     'validity_txt','150'            )->nullable();//Обгрунтованість	Список з 6-ти варіантів?	Validity	tab 	Validity
            
            $table->date(       'data_our_implementation'       )->nullable(); //Дата виконання 	Дата виконання по ЦЕМД та МК	data_our_Implementation	
            $table->string(     'namber_our', '50'              )->nullable();//Вихідний номер КНП "ЦЕМДтаМК"		number_removal__control
            
            $table->date(       'date_removal_control'          )->nullable();//Дата зняття з контролю date_removal_control		
            $table->string(     'name_removal_control', '50'    )->nullable();//Ким знято з контролю name_removal_control
            $table->string(     'notes', '225'                  )->nullable();//Примітки	примітки	notes

            $table->bigInteger( 'user_id'                       )->nullable();//Хто заповнював строку
            $table->string(     'user_id_txt', '150'            )->nullable();//Хто заповнював строку



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
