@extends('layouts.main')
@section('content')
    {{-- {{ dd('appeal.show.blade') }} --}}

    {{-- {{dd($appeal->number)}} --}}
    <div>
        <table class="table table-hover" id="serch-table">
            <thead>
                <tr>

                    <th scope="col">Хто пише</th>
                    <th scope="col">Куди пише</th>
                    <th scope="col">Відповідаємо</th>


                </tr>
            </thead>
            <tbody>


                <tr>


                    <th>
                        <div class="mb-3">
                            <label for="number" class="form-label">Порядковий номер з початку року (number)</label>
                            <input type="text" name="number" class="form-control" id="number"
                                placeholder="" 
                                value="{{ $appeal->number }}"
                                readonly>
                            @error('number')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="data_reg" class="form-label">Дата запису в цей журнал (data_reg)</label>
                            <input type="date" name="data_reg" class="form-control" id="data_reg"
                                placeholder="" 
                                value="{{ $appeal->data_reg }}" readonly>
                            @error('data_reg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="number_reg" class="form-label">Індекс внутрішній номер (number_reg)</label>
                            <input type="text" name="number_reg" class="form-control" id="number_reg"
                                placeholder=""
                                value="{{ $appeal->number_reg }}"readonly>
                            @error('number_reg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="surname_reg" class="form-label"> Призвище (surname_reg) </label>
                            <input type="text" name="surname_reg" class="form-control" id="surname_reg"
                                placeholder="" 
                                value="{{ $appeal->surname_reg }}"readonly>
                            @error('surname_reg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name_reg" class="form-label">Ім'я (name_reg)</label>
                            <input type="text" name="name_reg" class="form-control" id="name_reg"
                                placeholder="" 
                                value="{{ $appeal->name_reg }}"readonly>
                            @error('name_reg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>




                        <div class="mb-3">
                            <label for="patronymic" class="form-label">По батькові (patronymic)</label>
                            <input type="text" name="patronymic" class="form-control" id="patronymic"
                                placeholder="" 
                                value="{{ $appeal->patronymic }}"readonly>
                            @error('patronymic')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="street_id" class="form-label">Адреса заявника (street_id)</label>
                            <input type="text" name="address_id" class="form-control" id="street_id"
                                placeholder="" 
                                value="{{isset($appeal->street->town_pre) ? $appeal->street->town_pre : ''}} {{isset($appeal->street->town) ? $appeal->street->town : ''}} {{isset($appeal->street->street_pre) ? $appeal->street->street_pre : ''}} {{isset($appeal->street->street) ? $appeal->street->street : ''}} {{isset($appeal->street->house) ? $appeal->street->house : ''}}  {{isset($appeal->street->flat) ? $appeal->street->flat : ''}}
                                "readonly>
                            @error('address_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                        <label for="address_txt" class="form-label">Адреса заявника (address_txt)</label>
                        <input type="text" name= "address_txt"class="form-control" id="address_txt" placeholder="Адреса заявника (address_txt)" value="{{ old('address_txt') }}">
                        @error('address_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            </div> --}}

                        <div class="mb-3">
                            <label for="phone_reg" class="form-label">Номер телефону заявника (phone_reg)</label>
                            <input type="text" name="phone_reg" class="form-control" id="phone_reg"
                                placeholder="" 
                                value="{{ $appeal->phone_reg }}"readonly>
                            @error('phone_reg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="type_docum_id" class="form-label">Вид документа скарга/подяка/запит/пропозиція
                                (type_docum_id)</label>
                            <input type="text" name="type_docum_id" class="form-control" id="type_docum_id"
                                placeholder=""
                                value="{{ isset($appeal->type_docum) ? $appeal->type_docum->title : ''}}"readonly>
                            @error('type_docum_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                        <label for="type_docum_txt" class="form-label">Вид документа скарга/подяка/запит/пропозиція (type_docum_txt)</label>
                        <input type="text" name= "type_docum_txt"class="form-control" id="type_docum_txt" placeholder="Вид документа скарга/подяка/запит/пропозиція (type_docum_txt)" value="{{ old('type_docum_txt') }}">
                        @error('type_docum_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="question_docum_id" class="form-label">Порушені питання (question_docum_id)</label>
                            <input type="text" name="question_docum_id" class="form-control" id="question_docum_id"
                                placeholder=""
                                value="{{ isset($appeal->question_docum) ? $appeal->question_docum->title : ''}}"readonly>
                            @error('question_docum_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="content_docum" class="form-label">Порушені питання зміст
                                (content_docum)</label>
                            <input type="text" name="content_docum" class="form-control" id="content_docum"
                                placeholder=""
                                value="{{ $appeal->content_docum }}">
                            @error('content_docum')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="income_number" class="form-label">Вхідний номер наш (income_number)</label>
                            <input type="text" name="income_number" class="form-control" id="income_number"
                                placeholder=""
                                value="{{ $appeal->income_number }}"readonly>
                            @error('income_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="income_date" class="form-label">Вхідна дата наша (income_date)</label>
                            <input type="text" name="income_date" class="form-control" id="income_date"
                                placeholder="" 
                                value="{{ $appeal->income_date }}"readonly>
                            @error('income_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </th>
                    <th>
                        <div class="mb-3">
                            <label for="destination_office_id" class="form-label">Куди надійшло звернення...
                                (destination_office_id)</label>
                            <input type="text" name="destination_office_id" class="form-control"
                                id="destination_office_id"
                                placeholder=""
                                value="{{  isset($appeal->destination_office) ? $appeal->destination_office->title : ''}}"readonly>
                            @error('destination_office_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        {{-- <div class="mb-3">
                        <label for="destination_office_txt" class="form-label">Куди надійшло звернення... (destination_office_txt)</label>
                        <input type="text" name= "destination_office_txt"class="form-control" id="destination_office_txt" placeholder="Куди надійшло звернення... (destination_office_txt)" value="{{ old('destination_office_txt') }}">
                        @error('destination_office_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}



                        <div class="mb-3">
                            <label for="destination_number" class="form-label">Вхідний номер надходження …
                                (destination_number)</label>
                            <input type="text" name="destination_number" class="form-control" id="destination_number"
                                placeholder=""
                                value="{{ $appeal->destination_number }}"readonly>
                            @error('destination_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="destination_date" class="form-label">Дата надходження
                                …(destination_date)</label>
                            <input type="text" name="destination_date" class="form-control" id="destination_date"
                                placeholder=""
                                value="{{ $appeal->destination_date }}"readonly>
                            @error('destination_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="source1_office_id" class="form-label">Звідки одержано (1)
                                (source1_office_id)</label>
                            <input type="text" name="source1_office_id" class="form-control" id="source1_office_id"
                                placeholder=""
                                value="{{isset($appeal->source1_office) ? $appeal->source1_office->title : ''}}"readonly>
                            @error('source1_office_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                        <label for="source1_office_txt" class="form-label">Звідки одержано (1) (source1_office_txt)</label>
                        <input type="text" name= "source1_office_txt"class="form-control" id="source1_office_txt" placeholder="Звідки одержано (1) (source1_office_txt)" value="{{ old('source1_office_txt') }}">
                        @error('source1_office_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="source1_number" class="form-label">Номер (1) (source1_number)</label>
                            <input type="text" name="source1_number" class="form-control" id="source1_number"
                                placeholder="" 
                                value="{{ $appeal->source1_number }}"readonly>
                            @error('source1_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="source1_date" class="form-label">Дата реєстрації (1) (source1_date)</label>
                            <input type="text" name="source1_date" class="form-control" id="source1_date"
                                placeholder=""
                                value="{{ $appeal->source1_date }}"readonly>
                            @error('source1_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="source2_office_id" class="form-label">Звідки одержано (2)
                                (source2_office_id)</label>
                            <input type="text" name="source2_office_id" class="form-control" id="source2_office_id"
                                placeholder=""
                                value="{{isset($appeal->source2_office) ? $appeal->source2_office->title : ''}}"readonly>
                            @error('source2_office_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                        <label for="source2_office_txt" class="form-label">Звідки одержано (2) (source2_office_txt)</label>
                        <input type="text" name= "source2_office_txt"class="form-control" id="source2_office_txt" placeholder="Звідки одержано (2) (source2_office_txt)" value="{{ old('source2_office_txt') }}">
                        @error('source2_office_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="source2_number" class="form-label">>Номер реєстрації (2)
                                (source2_number)</label>
                            <input type="text" name="source2_number" class="form-control" id="source2_number"
                                placeholder=""
                                value="{{ $appeal->source2_number }}"readonly>
                            @error('source2_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="source2_date" class="form-label">Дата реєстрації (2) (source2_date)</label>
                            <input type="text" name="source2_date" class="form-control" id="source2_date"
                                placeholder=""
                                value="{{ $appeal->source2_date }}"readonly>
                            @error('source2_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label for="source3_office_id" class="form-label">Звідки одержано (3)
                                (source3_office_id)</label>
                            <input type="text" name="source3_office_id" class="form-control" id="source3_office_id"
                                placeholder="Звідки одержано (3) (source3_office_id)"
                                value="{{ $appeal->source3_office_id }}"readonly>
                            @error('source3_office_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}


                        {{-- <div class="mb-3">
                        <label for="source3_office_txt" class="form-label">Звідки одержано (3) (source3_office_txt)</label>
                        <input type="text" name= "source3_office_txt"class="form-control" id="source3_office_txt" placeholder="Звідки одержано (3) (source3_office_txt)" value="{{ old('source3_office_txt') }}">
                        @error('source3_office_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label for="source3_number" class="form-label">Номер реєстрації (3)
                                (source3_number)</label>
                            <input type="text" name="source3_number" class="form-control" id="source3_number"
                                placeholder="Номер реєстрації (3) (source3_number)"
                                value="{{ $appeal->source3_number }}"readonly>
                            @error('source3_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label for="source3_date" class="form-label">Дата реєстрації (3) (source3_date)</label>
                            <input type="text" name="source3_date" class="form-control" id="source3_date"
                                placeholder="Дата реєстрації (3) (source3_date)"
                                value="{{ $appeal->source3_date }}"readonly>
                            @error('source3_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="amount_docum_id" class="form-label">Первинне/повторне/дубль
                                (amount_docum_id)</label>
                            <input type="text" name="amount_docum_id" class="form-control" id="amount_docum_id"
                                placeholder=""
                                value="{{isset($appeal->amount_docum) ? $appeal->amount_docum->title : ''}}"readonly>
                            @error('amount_docum_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                        <label for="amount_dokum_txt" class="form-label">Первинне/повторне/дубль (amount_dokum_txt)</label>
                        <input type="text" name= "amount_dokum_txt"class="form-control" id="amount_dokum_txt" placeholder="Первинне/повторне/дубль (amount_dokum_txt)" value="{{ old('amount_dokum_txt') }}">
                        @error('amount_dokum_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                    </th>
                    <th>
                        <div class="mb-3">
                            <label for="content_resolution_id" class="form-label">Зміст резолюції розгляд
                                відповідь/розгляд/ не за адресою/ (content_resolution_id)</label>

                            <input type="text" name="content_resolution_id" class="form-control"
                                id="content_resolution_id"
                                placeholder=""
                                value="{{ isset($appeal->content_resolution->title) ? $appeal->content_resolution->title : ''  }}"readonly>

                            @error('content_resolution_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                        <label for="content_resolution_txt" class="form-label">Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_txt)</label>
                        <input type="text" name= "content_resolution_txt"class="form-control" id="content_resolution_txt" placeholder="Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_txt)" value="{{ old('content_resolution_txt') }}">
                        @error('content_resolution_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="avtor_resolution" class="form-label">Автор резолюції
                                (avtor_resolution)</label>
                            <input type="text" name="avtor_resolution" class="form-control" id="avtor_resolution"
                                placeholder=""
                                value="{{ $appeal->avtor_resolution }}"readonly>
                            @error('avtor_resolution')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- видалено !! <div class="mb-3">
                                <label for="group_docum_id" class="form-label">Вид/Група документа
                                    (group_docum_id)</label>
                                <input type="text" name="group_docum_id" class="form-control" id="group_docum_id"
                                    placeholder="Вид/Група документа (group_docum_id)"
                                    value="{{ old('group_docum_id') }}">
                                @error('group_docum_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}

                        {{-- <div class="mb-3">
                        <label for="group_docum_txt" class="form-label">Вид/Група документа (group_docum_txt)</label>
                        <input type="text" name= "group_docum_txt"class="form-control" id="group_docum_txt" placeholder="Вид/Група документа (group_docum_txt)" value="{{ old('group_docum_txt') }}">
                        @error('group_docum_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="executor_ophone_id" class="form-label">Виконавець (executor_ophone_id)</label>
                            <input type="text" name="executor_ophone_id" class="form-control" id="executor_ophone_id"
                                placeholder=""
                                value="{{ isset($appeal->executor_ophone->surname) ? $appeal->executor_ophone->surname : ''   }} {{ isset($appeal->executor_ophone->name) ? $appeal->executor_ophone->name : ''   }} {{ isset($appeal->executor_ophone->patronymic) ? $appeal->executor_ophone->patronymic : ''    }}
                                "readonly>
                            @error('executor_ophone_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                        <label for="executor_ophone_txt" class="form-label">Виконавець (executor_ophone_txt)</label>
                        <input type="text" name= "executor_ophone_txt"class="form-control" id="executor_ophone_txt" placeholder="Виконавець (executor_ophone_txt)" value="{{ old('executor_ophone_txt') }}">
                        @error('executor_ophone_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="executor_branch_id" class="form-label">Структурний підрозділ
                                (executor_branch_id)</label>
                            <input type="text" name="executor_branch_id" class="form-control" id="executor_branch_id"
                                placeholder=""
                                value="{{isset($appeal->executor_branch) ? $appeal->executor_branch->branch : ''}}"readonly>
                            @error('executor_branch_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                        <label for="executor_branch_txt" class="form-label">Відділ виконавця  (executor_branch_txt)</label>
                        <input type="text" name= "executor_branch_txt"class="form-control" id="executor_branch_txt" placeholder="Відділ виконавця  (executor_branch_txt)" value="{{ old('executor_branch_txt') }}">
                        @error('executor_branch_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="data_implementation" class="form-label">Термін виконання
                                (data_implementation)</label>
                            <input type="text" name="data_implementation" class="form-control"
                                id="data_implementation" 
                                placeholder=""
                                value="{{ $appeal->data_implementation }}"readonly>
                            @error('data_implementation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- видалити !! <div class="mb-3">
                                <label for="namber_implementation" class="form-label">Номер справи
                                    (namber_implementation)</label>
                                <input type="text" name="namber_implementation" class="form-control"
                                    id="namber_implementation" placeholder="Номер справи (namber_implementation)"
                                    value="{{ old('namber_implementation') }}">
                                @error('namber_implementation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}

                        <div class="mb-3">
                            <label for="title_implementation_id" class="form-label">Результат розгляду
                                (title_implementation_id)</label>
                            <input type="text" name="title_implementation_id" class="form-control"
                                id="title_implementation_id" 
                                placeholder=""
                                value="{{isset($appeal->title_implementation) ? $appeal->title_implementation->title : ''}}
                                "readonly>
                            @error('title_implementation_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                        <label for="title_implementation_txt" class="form-label">Результат розгляду (title_implementation_txt)</label>
                                            <input type="text" name= "title_implementation_txt"class="form-control" id="title_implementation_txt" placeholder="Результат розгляду (title_implementation_txt)" value="{{ old('title_implementation_txt') }}">
                        @error('title_implementation_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="validity_id" class="form-label">Результат розгляду (validity_id)</label>
                            <input type="text" name="validity_id" class="form-control" id="validity_id"
                                placeholder=""
                                value="{{isset($appeal->validity) ? $appeal->validity->title : ''}}"readonly>
                            @error('validity_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                        <label for="validity_txt" class="form-label">Результат розгляду (validity_txt)</label>
                        <input type="text" name= "validity_txt"class="form-control" id="validity_txt" placeholder="Результат розгляду (validity_txt)" value="{{ old('validity_txt') }}">
                        @error('validity_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="data_our_implementation" class="form-label">Дата виконання
                                (data_our_implementation)</label>
                            <input type="text" name="data_our_implementation" class="form-control"
                                id="data_our_implementation" 
                                placeholder=""
                                value="{{ $appeal->data_our_implementation }}"readonly>
                            @error('data_our_implementation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="namber_our" class="form-label">Вихідний номер (namber_our)</label>
                            <input type="text" name="namber_our" class="form-control" id="namber_our"
                                placeholder="" 
                                value="{{ $appeal->namber_our }}"readonly>
                            @error('namber_our')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="date_removal_control" class="form-label">Дата зняття з контолю
                                (date_removal_control)</label>
                            <input type="text" name="date_removal_control" class="form-control"
                                id="date_removal_control" 
                                placeholder=""
                                value="{{ $appeal->date_removal_control }}"readonly>
                            @error('date_removal_control')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name_removal_control" class="form-label">Ким знято з контролю
                                (name_removal_control)</label>
                            <input type="text" name="name_removal_control" class="form-control"
                                id="name_removal_control" 
                                placeholder=""
                                value="{{ $appeal->name_removal_control }}"readonly>
                            @error('name_removal_control')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="notes" class="form-label">Приміткии (notes)</label>
                            <input type="text" name="notes" class="form-control" id="notes"
                                placeholder="" 
                                value="{{ $appeal->notes }}"readonly>
                            @error('notes')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="user_id" class="form-label">Хто зробив запис (user_id)</label>
                            <input type="text" name="user_id" class="form-control" id="user_id"
                                placeholder="" 
                                value="{{ $appeal->user_id }}"readonly>
                            @error('user_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        {{-- <div class="mb-3">
                        <label for="user_id_txt" class="form-label">user_id_txt</label>
                        <input type="text" name= "user_id_txt"class="form-control" id="user_id_txt" placeholder="user_id_txt" value="{{ old('user_id_txt') }}">
                        @error('user_id_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div> --}}


                    </th>

                    <td></td>




                </tr>



            </tbody>
        </table>




        <div class="d-flex flex-md-row flex-column justify-content-between text-center">
            <a href="{{ route('kmr.appeal.edit', $appeal->id) }}" class="btn btn-primary mb-3" role="button">Редагувати</a>



            <form action="{{ route('kmr.appeal.destroy', $appeal->id) }}" method='post'>
                @csrf
                @method('delete')
                <input type='submit' value="Видалити" class="btn btn-primary mb-3">
            </form>


            <a href="{{ route('kmr.appeal.index') }}" class="btn btn-primary mb-3" role="button">Повернутися</a>
            {{-- class="btn btn-info" --}}

        </div>
    @endsection
