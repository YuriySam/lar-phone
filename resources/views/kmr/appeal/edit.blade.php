@extends('layouts.main')
@section('content')
    {{-- {{ dd('appeal.edit.blade', $appeal, $appeals) }} --}}

    {{-- виводимо всі записи бази та внизу запис для редагування --}}
    <div>
        {{-- {{dd($question_docums)}} --}}

        <table class="table table-hover fixed_header" id="serch-table">
            <thead>
                <tr>

                    {{-- <th scope="col">id</th> --}}
                    <th scope="col">Порядковий номер з початку року (number)</th>
                    <th scope="col">Дата запису в цей журнал (data_reg)</th>
                    <th scope="col">Індекс внутрішній номер (number_reg)</th>
                    <th scope="col">Призвище (surname_reg)</th>
                    <th scope="col">Ім'я (name_reg)</th>
                    <th scope="col">По батькові (patronymic)</th>
                    <th scope="col">Адреса заявника (street_id)</th>
                    {{-- <th scope="col">Адреса заявника (street_txt)</th> --}}
                    <th scope="col">Номер телефону заявника (phone_reg)</th>
                    <th scope="col">Вид документа скарга/подяка/запит/пропозиція (type_docum_id)</th>
                    {{-- <th scope="col">Вид документа скарга/подяка/запит/пропозиція (type_docum_txt)</th> --}}
                    <th scope="col">Порушені питання (question_docum_id)</th>
                    <th scope="col">Порушені питання зміст (content_docum)</th>
                    <th scope="col">Вхідний номер наш (income_number)</th>
                    <th scope="col">Вхідна дата наша (income_date)</th>
                    <th scope="col">Куди надійшло звернення... (destination_office_id)</th>
                    {{-- <th scope="col">Куди надійшло звернення... (destination_office_txt)</th> --}}
                    <th scope="col">Вхідний номер надходження … (destination_number)</th>
                    <th scope="col">Дата надходження …(destination_date)</th>
                    <th scope="col">Звідки одержано (1) (source1_office_id)</th>
                    {{-- <th scope="col">Звідки одержано (1) (source1_office_txt)</th> --}}
                    <th scope="col">>Номер (1) (source1_number)</th>
                    <th scope="col">>Дата реєстрації (1) (source1_date)</th>
                    <th scope="col">Звідки одержано (2) (source2_office_id)</th>
                    {{-- <th scope="col">Звідки одержано (2) (source2_office_txt)</th> --}}
                    <th scope="col">Номер реєстрації (2) (source2_number)</th>
                    <th scope="col">Дата реєстрації (2) (source2_date)</th>
                    {{-- <th scope="col">Звідки одержано (3) (source3_office_id)</th> --}}
                    {{-- <th scope="col">Звідки одержано (3) (source3_office_txt)</th> --}}
                    {{-- <th scope="col">Номер реєстрації (3) (source3_number)</th> --}}
                    {{-- <th scope="col">Дата реєстрації (3) (source3_date)</th> --}}
                    <th scope="col">Первинне/повторне/дубль (amount_dokum_id)</th>
                    {{-- <th scope="col">Первинне/повторне/дубль (amount_dokum_txt)</th> --}}
                    <th scope="col">Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_id)
                    </th>
                    {{-- <th scope="col">Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_txt)</th> --}}
                    <th scope="col">Автор резолюції (avtor_resolution)</th>
                    {{-- <th scope="col">Вид/Група документа (group_docum_id)</th> --}}
                    {{-- <th scope="col">Група документа (group_docum_txt)</th> --}}
                    <th scope="col">Виконавець (executor_ophone_id)</th>
                    {{-- <th scope="col">Виконавець (executor_ophone_txt)</th> --}}
                    <th scope="col">Структурний підрозділ виконавця (executor_branch_id)</th>
                    {{-- <th scope="col">Відділ виконавця  (executor_branch_txt)</th> --}}
                    <th scope="col">Термін виконання (data_implementation)</th>
                    {{-- <th scope="col">Номер справи (namber_implementation)</th> --}}
                    <th scope="col">Результат розгляду (title_implementation_id)</th>
                    {{-- <th scope="col">Результат розгляду (title_implementation_txt)</th> --}}
                    <th scope="col">Обгрунтованість (validity_id)</th>
                    {{-- <th scope="col">Результат розгляду (validity_txt)</th> --}}
                    <th scope="col">Дата виконання (data_our_implementation)</th>
                    <th scope="col">Вихідний номер (namber_our)</th>
                    <th scope="col">Дата зняття з контолю (date_removal_control)</th>
                    <th scope="col">Ким знято з контролю (name_removal_control)</th>
                    <th scope="col">Приміткии (notes)</th>
                    <th scope="col">Хто зробив запис (user_id)</th>
                    {{-- <th scope="col">user_id_txt</th> --}}



                </tr>
            </thead>



            <tbody>

                @foreach ($appeals as $item)
                    <tr>

                        {{-- {{dd($appeal)}} --}}
                        {{-- <th> <a href="{{route('appeal.show', $appeal->id)}}"> {{appeal->category->title}}</a> </th> --}}
                        {{-- <th> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->id}} </a> </th> --}}
                        <th> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->number }}</a> </th>
                        <th> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->data_reg }}</a></th>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->number_reg }} </a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->surname_reg }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->name_reg }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->patronymic }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}">
                                {{isset($appeal->street->town_pre) ? $appeal->street->town_pre : ''}} 
                                {{isset($appeal->street->town) ? $appeal->street->town : ''}} 
                                {{isset($appeal->street->street_pre) ? $appeal->street->street_pre : ''}} 
                                {{isset($appeal->street->street) ? $appeal->street->street : ''}} 
                                {{isset($appeal->street->house) ? $appeal->street->house : ''}} 
                                {{isset($appeal->street->flat) ? $appeal->street->flat : ''}}
                            </a>
                            
                        </td>   
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->street_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->phone_reg }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ isset($appeal->type_docum) ? $appeal->type_docum->title : ''}}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->type_docum_txt}}</a></td> --}}
                        {{-- {{dd($appeal->question_docum)}} --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{isset($appeal->question_docum) ? $appeal->question_docum->title : ''}}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->content_docum }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->income_number }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->income_date }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{isset($appeal->destination_office) ? $appeal->destination_office->title : '' }}</a>
                        </td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->destination_office_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->destination_number }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->destination_date }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{isset($appeal->source1_office) ? $appeal->source1_office->title : ''}}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source1_office_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->source1_number }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->source1_date }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{isset($appeal->source2_office) ? $appeal->source2_office->title : ''}}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source2_office_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->source2_number }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->source2_date }}</a></td>
                        {{-- <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_office_id }}</a></td> --}}
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source3_office_txt}}</a></td> --}}
                        {{-- <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_number }}</a></td> --}}
                        {{-- <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_date }}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ isset($appeal->amount_docum) ? $appeal->amount_docum->title : ''}}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->amount_dokum_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{isset($appeal->content_resolution) ? $appeal->content_resolution->title : ''}}</a>
                        </td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->content_resolution_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->avtor_resolution }}</a></td>
                        {{-- <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->group_docum_id }}</a></td> --}}
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->group_docum_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> 
                            {{ isset($appeal->executor_ophone->surname) ? $appeal->executor_ophone->surname : ''   }}
                            {{ isset($appeal->executor_ophone->name) ? $appeal->executor_ophone->name : ''   }}
                            {{ isset($appeal->executor_ophone->patronymic) ? $appeal->executor_ophone->patronymic : ''    }}
                        </a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->executor_ophone_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{isset($appeal->executor_branch) ? $appeal->executor_branch->branch : ''}}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->executor_branch_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->data_implementation }}</a>
                        </td>
                        {{-- <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->namber_implementation }}</a> --}}
                        </td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{isset($appeal->title_implementation) ? $appeal->title_implementation->title : ''}}</a>
                        </td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->title_implementation_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{isset($appeal->validity) ? $appeal->validity->title : ''}}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->validity_txt}}</a></td> --}}
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->data_our_implementation }}</a>
                        </td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->namber_our }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->date_removal_control }}</a>
                        </td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->name_removal_control }}</a>
                        </td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->notes }}</a></td>
                        <td> <a href="{{ route('kmr.appeal.show', $item->id) }}"> {{ $item->user_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->user_id_txt}}</a></td> --}}


                    </tr>
                @endforeach

                <div>
                    <form action="{{ route('kmr.appeal.update', $appeal->id) }}" method="post">
                        @csrf
                        @method('patch')
                        {{-- <table class="table table-hover">
                        <tbody> --}}


                        <tr>

                            {{-- {{dd($appeal)}} --}}
                            {{-- <th> <a href="{{route('appeal.show', $appeal->id)}}"> {{appeal->category->title}}</a> </th> --}}
                            {{-- <th> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->id}} </a> </th> --}}
                            <th>

                                <div class="mb-3">
                                    <input type="text" name="number" class="form-control" id="number"
                                        placeholder="Порядковий номер з початку року (number)"
                                        value="{{ $appeal->number }}">
                                    @error('number')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <label for="number" class="form-label">Порядковий номер з початку року
                                        (number)</label>

                                </div>

                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="date" name="data_reg" class="form-control" id="data_reg"
                                        placeholder="Дата запису в цей журнал (data_reg)" value="{{ $appeal->data_reg }}">
                                    @error('data_reg')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <label for="data_reg" class="form-label">Дата запису в цей журнал (data_reg)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="number_reg" class="form-control" id="number_reg"
                                        placeholder="Індекс внутрішній номер (number_reg)"
                                        value="{{ $appeal->number_reg }}">
                                    @error('number_reg')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="number_reg" class="form-label">Індекс внутрішній номер
                                        (number_reg)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="surname_reg" class="form-control" id="surname_reg"
                                        placeholder="Призвище (surname_reg)" value="{{ $appeal->surname_reg }}">
                                    @error('surname_reg')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="surname_reg" class="form-label"> Призвище (surname_reg) </label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="name_reg" class="form-control" id="name_reg"
                                        placeholder="Ім'я (name_reg)" value="{{ $appeal->name_reg }}">
                                    @error('name_reg')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="name_reg" class="form-label">Ім'я (name_reg)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="patronymic" class="form-control" id="patronymic"
                                        placeholder="По батькові (patronymic)" value="{{ $appeal->patronymic }}">
                                    @error('patronymic')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="patronymic" class="form-label">По батькові (patronymic)</label>

                                </div>
                            </th>


                            <th>
                                <div class="mb-3">

                                    <select class="form-control" aria-label="street" name="street_id" id="street">
                                        <option selected></option>
                                        @foreach ($streets as $street)
                                            <option {{ $appeal->street_id == $street->id ? 'selected' : '' }}
                                                value="{{ $street->id }}">{{ $street->town_pre }} {{ $street->town }}
                                                {{ $street->street_pre }} {{ $street->street }} {{ $street->house }}
                                                {{ $street->flat }}</option>
                                        @endforeach
                                    </select>


                                    {{-- <input type="text" name="street_id" class="form-control" id="street_id"
                                    placeholder="Адреса заявника (street_id)" value="{{ old('street_id') }}"> --}}
                                    @error('street_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="street_id" class="form-label">Адреса заявника (street_id)</label>
                                </div>
                                <div>
                                        <a href="{{ route('kmr.street.index') }}" class="btn btn-primary mb-3">Довідник адрес</a>

                                </div>
                                

                            </th>


                            {{-- <th>
                        <div class="mb-3">
                        <label for="street_txt" class="form-label">Адреса заявника (street_txt)</label>
                        <input type="text" name= "street_txt"class="form-control" id="street_txt" placeholder="Адреса заявника (street_txt)" value="{{ old('street_txt') }}">
                        @error('street_txt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        </th> --}}
                            <th>
                                <div class="mb-3">

                                    <input type="text" name="phone_reg" class="form-control" id="phone_reg"
                                        placeholder="Номер телефону заявника (phone_reg)"
                                        value="{{ $appeal->phone_reg }}">
                                    @error('phone_reg')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="phone_reg" class="form-label">Номер телефону заявника (phone_reg)</label>
                                </div>
                            </th>
                            <th>
                                <div class="mb-3">

                                    <select class="form-control" aria-label="type_docum" name="type_docum_id"
                                        id="type_docum">
                                        <option selected></option>
                                        @foreach ($type_docums as $item)
                                       
                                            <option {{ $appeal->type_docum_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->title }} </option>
                                        @endforeach
                                    </select>

                                    {{-- <input type="text" name="type_docum_id" class="form-control" id="type_docum_id"
                                    placeholder="Вид документа скарга/подяка/запит/пропозиція (type_docum_id)"
                                    value="{{ old('type_docum_id') }}"> --}}


                                    @error('type_docum_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <label for="type_docum_id" class="form-label">Вид документа
                                        скарга/подяка/запит/пропозиція
                                        (type_docum_id)</label>
                                </div>
                                <div>
                                        <a href="{{ route('kmr.type_docum.index') }}" class="btn btn-primary mb-3">Довідник</a>

                                </div>
                            </th>






                            {{-- <th>
                            <div class="mb-3">
                            <label for="type_docum_txt" class="form-label">Вид документа скарга/подяка/запит/пропозиція (type_docum_txt)</label>
                            <input type="text" name= "type_docum_txt"class="form-control" id="type_docum_txt" placeholder="Вид документа скарга/подяка/запит/пропозиція (type_docum_txt)" value="{{ old('type_docum_txt') }}">
                                @error('type_docum_txt')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </th> --}}
                            <th>
                                <div class="mb-3">

                                    <select class="form-control" aria-label="question_docum" name="question_docum_id"
                                        id="question_docum">
                                        <option selected></option>
                                        @foreach ($question_docums as $item)
                                            <option {{ $appeal->question_docum_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->title }} </option>
                                        @endforeach
                                    </select>

                                    {{-- <input type="text" name="question_docum_id" class="form-control"
                                    id="question_docum_id" placeholder="Порушені питання (question_docum_id)"
                                    value="{{ old('question_docum_id') }}"> --}}

                                    @error('question_docum_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="content_docum" class="form-label">Порушені питання
                                        (question_docum_id)</label>
                                </div>
                                <div>
                                        <a href="{{ route('kmr.question_docum.index') }}" class="btn btn-primary mb-3">Довідник</a>

                                </div>
                            </th>


                            <th>
                                <div class="mb-3">

                                    <input type="text" name="content_docum" class="form-control" id="content_docum"
                                        placeholder="Порушені питання зміст (content_docum)"
                                        value="{{ $appeal->content_docum }}">
                                    @error('content_docum')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="content_docum" class="form-label">Порушені питання зміст
                                        (content_docum)</label>
                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="income_number" class="form-control" id="income_number"
                                        placeholder="Вхідний номер наш (income_number)"
                                        value="{{ $appeal->income_number }}">
                                    @error('income_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="income_number" class="form-label">Вхідний номер наш
                                        (income_number)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="date" name="income_date" class="form-control" id="income_date"
                                        placeholder="Вхідна дата наша (income_date)" value="{{ $appeal->income_date }}">
                                    @error('income_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="income_date" class="form-label">Вхідна дата наша (income_date)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">

                                    <select class="form-control" aria-label="destination_office"
                                        name="destination_office_id" id="destination_office">
                                        <option selected></option>
                                        @foreach ($destination_offices as $item)
                                            <option {{ $appeal->destination_office_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->title }} </option>
                                        @endforeach
                                    </select>

                                    {{-- <input type="text" name="destination_office_id" class="form-control"
                                    id="destination_office_id"
                                    placeholder="Куди надійшло звернення... (destination_office_id)"
                                    value="{{ old('destination_office_id') }}"> --}}

                                    @error('destination_office_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="destination_office_id" class="form-label">Куди надійшло звернення...
                                        (destination_office_id)</label>

                                </div>
                                 <div>
                                        <a href="{{ route('kmr.office.index') }}" class="btn btn-primary mb-3">Довідник</a>

                                    </div>
                            </th>
                            {{-- <th>
                                    div class="mb-3">
                                    <label for="destination_office_txt" class="form-label">Куди надійшло звернення... (destination_office_txt)</label>
                                    <input type="text" name= "destination_office_txt"class="form-control" id="destination_office_txt" placeholder="Куди надійшло звернення... (destination_office_txt)" value="{{ old('destination_office_txt') }}">
                                    @error('destination_office_txt')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </th> --}}
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="destination_number" class="form-control"
                                        id="destination_number"
                                        placeholder="Вхідний номер надходження … (destination_number)"
                                        value="{{ $appeal->destination_number }}">
                                    @error('destination_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="destination_number" class="form-label">Вхідний номер надходження …
                                        (destination_number)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="date" name="destination_date" class="form-control"
                                        id="destination_date" placeholder="Дата надходження …(destination_date)"
                                        value="{{ $appeal->destination_date }}">
                                    @error('destination_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="destination_date" class="form-label">Дата надходження
                                        …(destination_date)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">

                                    <select class="form-control" aria-label="source1_office" name="source1_office_id"
                                        id="source1_office">
                                        <option selected></option>
                                        @foreach ($source1_offices as $item)
                                            <option {{ $appeal->source1_office_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->title }} </option>
                                        @endforeach
                                    </select>

                                    {{-- <input type="text" name="source1_office_id" class="form-control"
                                    id="source1_office_id" placeholder="Звідки одержано (1) (source1_office_id)"
                                    value="{{ old('source1_office_id') }}"> --}}


                                    @error('source1_office_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="source1_office_id" class="form-label">Звідки одержано (1)
                                        (source1_office_id)</label>

                                </div>
                                 <div>
                                        <a href="{{ route('kmr.office.index') }}" class="btn btn-primary mb-3">Довідник</a>

                                    </div>
                            </th>
                            {{-- <th>
                                    <div class="mb-3">
                                    <label for="source1_office_txt" class="form-label">Звідки одержано (1) (source1_office_txt)</label>
                                    <input type="text" name= "source1_office_txt"class="form-control" id="source1_office_txt" placeholder="Звідки одержано (1) (source1_office_txt)" value="{{ old('source1_office_txt') }}">
                                        @error('source1_office_txt')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                </th> --}}
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="source1_number" class="form-control" id="source1_number"
                                        placeholder="Номер (1) (source1_number)" value="{{ $appeal->source1_number }}">
                                    @error('source1_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="source1_number" class="form-label">Номер (1) (source1_number)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="date" name="source1_date" class="form-control" id="source1_date"
                                        placeholder="Дата реєстрації (1) (source1_date)"
                                        value="{{ $appeal->source1_date }}">
                                    @error('source1_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="source1_date" class="form-label">Дата реєстрації (1)
                                        (source1_date)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <select class="form-control" aria-label="source2_office" name="source2_office_id"
                                        id="source2_office">
                                        <option selected></option>
                                        @foreach ($source1_offices as $item)
                                            <option {{ $appeal->source2_office_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->title }} </option>
                                        @endforeach
                                    </select>

                                    {{-- <input type="text" name="source2_office_id" class="form-control"
                                    id="source2_office_id" placeholder="Звідки одержано (2) (source2_office_id)"
                                    value="{{ old('source2_office_id') }}"> --}}


                                    @error('source2_office_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="source2_office_id" class="form-label">Звідки одержано (2)
                                        (source2_office_id)</label>

                                </div>
                                 <div>
                                        <a href="{{ route('kmr.office.index') }}" class="btn btn-primary mb-3">Довідник</a>

                                    </div>
                            </th>
                            {{-- <th>
                                <div class="mb-3">
                                <label for="source2_office_txt" class="form-label">Звідки одержано (2) (source2_office_txt)</label>
                                <input type="text" name= "source2_office_txt"class="form-control" id="source2_office_txt" placeholder="Звідки одержано (2) (source2_office_txt)" value="{{ old('source2_office_txt') }}">
                                @error('source2_office_txt')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                </th> --}}
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="source2_number" class="form-control" id="source2_number"
                                        placeholder="Номер реєстрації (2) (source2_number)"
                                        value="{{ $appeal->source2_number }}">
                                    @error('source2_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="source2_number" class="form-label">>Номер реєстрації (2)
                                        (source2_number)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="date" name="source2_date" class="form-control" id="source2_date"
                                        placeholder="Дата реєстрації (2) (source2_date)"
                                        value="{{ $appeal->source2_date }}">
                                    @error('source2_date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="source2_date" class="form-label">Дата реєстрації (2)
                                        (source2_date)</label>

                                </div>
                            </th>
                            {{-- <th>
                                        <div class="mb-3">
                                                <label for="source3_office_id" class="form-label">Звідки одержано (3)
                                                    (source3_office_id)</label>
                                                <input type="text" name="source3_office_id" class="form-control"
                                                    id="source3_office_id" placeholder="Звідки одержано (3) (source3_office_id)"
                                                    value="{{ old('source3_office_id') }}">
                                                @error('source3_office_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                    </th> --}}
                            {{-- <th>
                                        <div class="mb-3">
                                        <label for="source3_office_txt" class="form-label">Звідки одержано (3) (source3_office_txt)</label>
                                        <input type="text" name= "source3_office_txt"class="form-control" id="source3_office_txt" placeholder="Звідки одержано (3) (source3_office_txt)" value="{{ old('source3_office_txt') }}">
                                        @error('source3_office_txt')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </th> --}}
                            {{-- <th>
                                        <div class="mb-3">
                                                <label for="source3_number" class="form-label">Номер реєстрації (3)
                                                    (source3_number)</label>
                                                <input type="text" name="source3_number" class="form-control" id="source3_number"
                                                    placeholder="Номер реєстрації (3) (source3_number)"
                                                    value="{{ old('source3_number') }}">
                                                @error('source3_number')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                    </th> --}}
                            {{-- <th>
                                        <div class="mb-3">
                                                <label for="source3_date" class="form-label">Дата реєстрації (3) (source3_date)</label>
                                                <input type="text" name="source3_date" class="form-control" id="source3_date"
                                                    placeholder="Дата реєстрації (3) (source3_date)" value="{{ old('source3_date') }}">
                                                @error('source3_date')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                    </th> --}}
                            <th>
                                <div class="mb-3">

                                    <select class="form-control" aria-label="amount_docum" name="amount_docum_id"
                                        id="amount_docum">
                                        <option selected></option>
                                        @foreach ($amount_docums as $item)
                                            <option {{ $appeal->amount_docum_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->title }} </option>
                                        @endforeach
                                    </select>


                                    {{-- <input type="text" name="amount_docum_id" class="form-control" id="amount_docum_id"
                                    placeholder="Первинне/повторне/дубль (amount_docum_id)"
                                    value="{{ old('amount_docum_id') }}"> --}}


                                    @error('amount_docum_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="amount_docum_id" class="form-label">Первинне/повторне/дубль
                                        (amount_docum_id)</label>

                                </div>
                                <div>
                                        <a href="{{ route('kmr.amount_docum.index') }}" class="btn btn-primary mb-3">Довідник</a>

                                </div>
                            </th>
                            {{-- <th>
                                    <div class="mb-3">
                                    <label for="amount_docum_txt" class="form-label">Первинне/повторне/дубль (amount_docum_txt)</label>
                                    <input type="text" name= "amount_dokum_txt"class="form-control" id="amount_docum_txt" placeholder="Первинне/повторне/дубль (amount_docum_txt)" value="{{ old('amount_docum_txt') }}">
                                    @error('amount_docum_txt')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </th> --}}
                            <th>
                                <div class="mb-3">

                                    <select class="form-control" aria-label="content_resolution"
                                        name="content_resolution_id" id="content_resolution">
                                        <option selected></option>
                                        @foreach ($content_resolutions as $item)
                                            <option {{ $appeal->content_resolution_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->title }} </option>
                                        @endforeach
                                    </select>

                                    {{-- <input type="text" name="content_resolution_id" class="form-control"
                                    id="content_resolution_id"
                                    placeholder="Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_id)"
                                    value="{{ old('content_resolution_id') }}"> --}}

                                    @error('content_resolution_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="content_resolution_id" class="form-label">Зміст резолюції розгляд
                                        відповідь/розгляд/ не за адресою/ (content_resolution_id)</label>

                                </div>
                            </th>
                            {{-- <th>
                                    <div class="mb-3">
                                    <label for="content_resolution_txt" class="form-label">Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_txt)</label>
                                    <input type="text" name= "content_resolution_txt"class="form-control" id="content_resolution_txt" placeholder="Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_txt)" value="{{ old('content_resolution_txt') }}">
                                    @error('content_resolution_txt')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </th> --}}
                            <th>
                                <div class="mb-3">

                                    {{-- <select class="form-control" aria-label="avtor_resolution" name="avtor_resolution_id"
                                        id="avtor_resolution">
                                        <option selected></option>
                                        @foreach ($avtor_resolutions as $item)
                                            <option {{ $appeal->avtor_resolution_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->func->func }}
                                                {{ $item->surname }} {{ $item->name }} {{ $item->patronymic }}
                                            </option>
                                        @endforeach
                                    </select> --}}

                                    <input type="text" name="avtor_resolution" class="form-control" id="avtor_resolution"
                                    placeholder="Директор центру КМДтаМК (avtor_resolution)"
                                    value="{{ 'Директор центру КМДтаМК ' }}">
                                    @error('avtor_resolution')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="avtor_resolution" class="form-label">Автор резолюції
                                        (avtor_resolution)</label>

                                </div>
                            </th>
                            {{-- <th>
                                        видалено !! <div class="mb-3">
                                                <label for="group_docum_id" class="form-label">Вид/Група документа
                                                    (group_docum_id)</label>
                                                <input type="text" name="group_docum_id" class="form-control" id="group_docum_id"
                                                    placeholder="Вид/Група документа (group_docum_id)"
                                                    value="{{ old('group_docum_id') }}">
                                                @error('group_docum_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                    </th> --}}
                            {{-- <th>
                                        <div class="mb-3">
                                        <label for="group_docum_txt" class="form-label">Вид/Група документа (group_docum_txt)</label>
                                        <input type="text" name= "group_docum_txt"class="form-control" id="group_docum_txt" placeholder="Вид/Група документа (group_docum_txt)" value="{{ old('group_docum_txt') }}">
                                        @error('group_docum_txt')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </th> --}}
                            <th>
                                <div class="mb-3">

                                    <select class="form-control" aria-label="executor_ophone" name="executor_ophone_id"
                                        id="executor_ophone">
                                        <option selected></option>
                                        @foreach ($executor_ophones as $item)
                                            <option {{ $appeal->executor_ophone_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}"> {{ $item->surname }} {{ $item->name }}
                                                {{ $item->patronymic }}</option>
                                        @endforeach
                                    </select>

                                    {{-- <input type="text" name="executor_ophone_id" class="form-control"
                                    id="executor_ophone_id" placeholder="Виконавець (executor_ophone_id)"
                                    value="{{ old('executor_ophone_id') }}"> --}}
                                    @error('executor_ophone_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="executor_ophone_id" class="form-label">Виконавець
                                        (executor_ophone_id)</label>

                                </div>
                            </th>
                            {{-- <th>
                                        <div class="mb-3">
                                        <label for="executor_ophone_txt" class="form-label">Виконавець (executor_ophone_txt)</label>
                                        <input type="text" name= "executor_ophone_txt"class="form-control" id="executor_ophone_txt" placeholder="Виконавець (executor_ophone_txt)" value="{{ old('executor_ophone_txt') }}">
                                        @error('executor_ophone_txt')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </th> --}}
                            <th>
                                <div class="mb-3">

                                    <select class="form-control" aria-label="executor_branch" name="executor_branch_id"
                                        id="executor_branch">
                                        <option selected></option>
                                        @foreach ($executor_branches as $item)
                                            <option {{ $appeal->executor_branch_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->branch }}</option>
                                        @endforeach
                                    </select>

                                    {{-- <input type="text" name="executor_branch_id" class="form-control"
                                    id="executor_branch_id"
                                    placeholder="Структурний підрозділ  (executor_branch_id)"
                                    value="{{ old('executor_branch_id') }}"> --}}
                                    @error('executor_branch_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="executor_branch_id" class="form-label">Структурний підрозділ
                                        (executor_branch_id)</label>

                                </div>
                            </th>
                            {{-- <th>
                                        <div class="mb-3">
                                        <label for="executor_branch_txt" class="form-label">Відділ виконавця  (executor_branch_txt)</label>
                                        <input type="text" name= "executor_branch_txt"class="form-control" id="executor_branch_txt" placeholder="Відділ виконавця  (executor_branch_txt)" value="{{ old('executor_branch_txt') }}">
                                        @error('executor_branch_txt')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </th> --}}
                            <th>
                                <div class="mb-3">
                                    <input type="date" name="data_implementation" class="form-control"
                                        id="data_implementation" placeholder="Термін виконання (data_implementation)"
                                        value="{{ $appeal->data_implementation }}">
                                    @error('data_implementation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="data_implementation" class="form-label">Термін виконання
                                        (data_implementation)</label>

                                </div>
                            </th>
                            {{-- <th>
                                            видалити !! <div class="mb-3">
                                                <label for="namber_implementation" class="form-label">Номер справи
                                                    (namber_implementation)</label>
                                                <input type="text" name="namber_implementation" class="form-control"
                                                    id="namber_implementation" placeholder="Номер справи (namber_implementation)"
                                                    value="{{ old('namber_implementation') }}">
                                                @error('namber_implementation')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </th> --}}
                            <th>
                                <div class="mb-3">

                                    <select class="form-control" aria-label="title_implementation"
                                        name="title_implementation_id" id="title_implementation">
                                        <option selected></option>
                                        @foreach ($title_implementations as $item)
                                            <option {{ $appeal->title_implementation_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}"> {{ $item->title }}</option>
                                        @endforeach
                                    </select>

                                    {{-- <input type="text" name="title_implementation_id" class="form-control"
                                    id="title_implementation_id"
                                    placeholder="Результат розгляду (title_implementation_id)"
                                    value="{{ old('title_implementation_id') }}"> --}}

                                    @error('title_implementation_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="title_implementation_id" class="form-label">Результат розгляду
                                        (title_implementation_id)</label>

                                </div>
                            </th>
                            {{-- <th>
                                            <div class="mb-3">
                                        <label for="title_implementation_txt" class="form-label">Результат розгляду (title_implementation_txt)</label>
                                                            <input type="text" name= "title_implementation_txt"class="form-control" id="title_implementation_txt" placeholder="Результат розгляду (title_implementation_txt)" value="{{ old('title_implementation_txt') }}">
                                        @error('title_implementation_txt')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        </div>
                                        </th> --}}
                            <th>
                                <div class="mb-3">
                                    <select class="form-control" aria-label="validity" name="validity_id"
                                        id="validity">
                                        <option selected></option>
                                        @foreach ($validities as $item)
                                            <option {{ $appeal->validity_id == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}"> {{ $item->title }}</option>
                                        @endforeach
                                    </select>

                                    {{-- <input type="text" name="validity_id" class="form-control" id="validity_id"
                                    placeholder="Результат розгляду (validity_id)" value="{{ old('validity_id') }}"> --}}

                                    @error('validity_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="validity_id" class="form-label">Обгрунтованість (validity_id)</label>

                                </div>
                            </th>
                            {{-- <th>
                                                    <div class="mb-3">
                                            <label for="validity_txt" class="form-label">Результат розгляду (validity_txt)</label>
                                            <input type="text" name= "validity_txt"class="form-control" id="validity_txt" placeholder="Результат розгляду (validity_txt)" value="{{ old('validity_txt') }}">
                                            @error('validity_txt')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            </div> 
                                            </th> --}}
                            <th>
                                <div class="mb-3">
                                    <input type="date" name="data_our_implementation" class="form-control"
                                        id="data_our_implementation"
                                        placeholder="Дата виконання (data_our_implementation)"
                                        value="{{ $appeal->data_our_implementation }}">
                                    @error('data_our_implementation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="data_our_implementation" class="form-label">Дата виконання
                                        (data_our_implementation)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="namber_our" class="form-control" id="namber_our"
                                        placeholder="Вихідний номер (namber_our)" value="{{ $appeal->namber_our }}">
                                    @error('namber_our')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="namber_our" class="form-label">Вихідний номер (namber_our)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="date" name="date_removal_control" class="form-control"
                                        id="date_removal_control"
                                        placeholder="Дата зняття з контолю (date_removal_control)"
                                        value="{{ $appeal->date_removal_control }}">
                                    @error('date_removal_control')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="date_removal_control" class="form-label">Дата зняття з контолю
                                        (date_removal_control)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="name_removal_control" class="form-control"
                                        id="name_removal_control"
                                        placeholder="Ким знято з контролю (name_removal_control)"
                                        value="{{ $appeal->name_removal_control }}">
                                    @error('name_removal_control')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="name_removal_control" class="form-label">Ким знято з контролю
                                        (name_removal_control)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                    <input type="text" name="notes" class="form-control" id="notes"
                                        placeholder="Приміткии (notes)" value="{{ $appeal->notes }}">
                                    @error('notes')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="notes" class="form-label">Приміткии (notes)</label>

                                </div>
                            </th>
                            <th>
                                <div class="mb-3">
                                                <input type="text" name="user_id" class="form-control" id="user_id"
                                                    placeholder="Хто зробив запис (user_id)" value="{{Auth()->user()->id}}" readonly>
                                                    
                                                @error('user_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <label for="user_id" class="form-label">Хто редагував запис (user_id)</label>
                                                
                                            </div>


                            </th>
                            {{-- <th>
                                        <div class="mb-3">
                                    <label for="user_id_txt" class="form-label">user_id_txt</label>
                                    <input type="text" name= "user_id_txt"class="form-control" id="user_id_txt" placeholder="user_id_txt" value="{{ old('user_id_txt') }}">
                                    @error('user_id_txt')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    </th> --}}
                            <th>

                            </th>





                        </tr>


                        {{-- </tbody>
                                                                </table> --}}



                </div>






            </tbody>
        </table>

    </div>



    <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Зберегти</button>
        <a href="{{ route('kmr.appeal.index') }}" class="btn btn-primary mb-3">Повернутися</a>
    </div>
    <div>
        
    </div>



    </form>
@endsection
