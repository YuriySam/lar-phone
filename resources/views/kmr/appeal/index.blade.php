@extends('layouts.main')
@section('content')
    {{-- {{dd('appeal.index.blade')}} --}}
    {{-- {{'appeal.index'}} --}}
    {{-- {{dd($appeals)}} --}}
    <div>
        <!-- for serch item began-->
        <script>
            function tableSearch() {
                var phrase = document.getElementById('search-text');
                var table = document.getElementById('serch-table');
                var regPhrase = new RegExp(phrase.value, 'i');
                var flag = false;
                for (var i = 1; i < table.rows.length; i++) {
                    flag = false;
                    for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
                        flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
                        if (flag) break;
                    }
                    if (flag) {
                        table.rows[i].style.display = "";
                    } else {
                        table.rows[i].style.display = "none";
                    }

                }
            }
        </script>
        <input class="form-control" type="text" placeholder="Пошук" id="search-text" onkeyup="tableSearch()">
        <!-- for serch item  end-->


    </div>

    <div>

        {{-- <div class="table-vert fixed_header"> --}}
         <div class="table-vert ">


            {{-- <table class="table table-hover fixed_header table table-bordered" id="serch-table"> --}}
            {{-- <table class="table table-bordered table-striped  table-hover  table-wrapper" id="serch-table"> --}}
            <table class=" table fixed_header " id="serch-table">
                <thead>
                    <tr>

                        {{-- <th scope="col">id</th> --}}
                        <th scope="col">№ п/п</th>       {{-- number --}}
                        <th scope="col">Дата Вх.</th>           {{--data_reg  --}}
                        <th scope="col">№ Вх.</th>                        {{-- number_reg  --}}
                        <th scope="col">Призвище</th>                        {{-- surname_reg --}}
                        <th scope="col">Ім'я</th>                        {{-- name_reg --}}
                        <th scope="col">По батькові</th>                        {{-- patronymic --}}
                        <th scope="col">Адреса</th>                        {{-- street --}}
                        {{-- <th scope="col">Адреса заявника (street_txt)</th> --}}
                        <th scope="col">Телефон</th>                        {{-- phone_reg --}}
                        {{-- <th scope="col">Вид документа (type_docum_id)</th> --}}
                        {{-- <th scope="col">Вид документа скарга/подяка/запит/пропозиція (type_docum_txt)</th> --}}
                        <th scope="col">Порушені питання </th>                        {{-- (question_docum_id) --}}
                        <th scope="col">Короткий зміст</th>   {{-- (content_docum) --}}
                        {{-- <th scope="col">Вхідний номер наш (income_number)</th> --}}
                        {{-- <th scope="col">Вхідна дата наша (income_date)</th> --}}
                        <th scope="col">Дата ДОЗ(destination_date)</th> {{-- (destination_date) --}}
                        <th scope="col">Номер ДОЗ(destination_number)</th> {{-- (destination_number) --}}
                        <th scope="col">Джерело надходження (destination_office_id)</th> {{-- (destination_office_id) --}}
                        {{-- <th scope="col">Куди надійшло звернення... (destination_office_txt)</th> --}}
                        
                        
                        {{-- <th scope="col">Звідки одержано (1) (source1_office_id)</th> --}}
                        {{-- <th scope="col">Звідки одержано (1) (source1_office_txt)</th> --}}
                        <th scope="col">>Дата реєстрації </th> {{-- ((source1_date)) --}}
                        <th scope="col">>Індекс</th> {{-- (source1_number) --}}
                        
                        {{-- <th scope="col">Звідки одержано (2) (source2_office_id)</th> --}}
                        {{-- <th scope="col">Звідки одержано (2) (source2_office_txt)</th> --}}
                        {{-- <th scope="col">Номер реєстрації (2) (source2_number)</th> --}}
                        {{-- <th scope="col">Дата реєстрації (2) (source2_date)</th> --}}
                        {{-- <th scope="col">Звідки одержано (3) (source3_office_id)</th> --}}
                        {{-- <th scope="col">Звідки одержано (3) (source3_office_txt)</th> --}}
                        {{-- <th scope="col">Номер реєстрації (3) (source3_number)</th> --}}
                        {{-- <th scope="col">Дата реєстрації (3) (source3_date)</th> --}}

                        <th scope="col">Первинне/повторне </th> {{-- (amount_dokum_id) --}}
                        {{-- <th scope="col">Первинне/повторне/дубль (amount_dokum_txt)</th> --}}
                        <th scope="col">Зміст резолюції   </th>{{-- (content_resolution_id) --}}
                        {{-- <th scope="col">Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_txt)</th> --}}
                        
                        <th scope="col">Автор резолюції </th> {{-- (avtor_resolution) --}}

                        {{-- <th scope="col">Вид/Група документа (group_docum_id)</th> --}}
                        {{-- <th scope="col">Група документа (group_docum_txt)</th> --}}
                        <th scope="col">Виконавець </th>  {{-- (executor_ophone_id) --}}

                        {{-- <th scope="col">Виконавець (executor_ophone_txt)</th> --}}
                        <th scope="col">Структурний підрозділ</th>                        {{-- (executor_branch_id) --}}
                        {{-- <th scope="col">Відділ виконавця  (executor_branch_txt)</th> --}}
                        <th scope="col">Термін виконання </th>  {{-- (data_implementation) --}}

                        <th scope="col">Номер справи </th>  {{-- (namber_implementation) --}}
                        <th scope="col">Обгрунтованість</th> {{-- (validity_id) --}}

                        <th scope="col">Результат розгляду </th> {{-- (title_implementation_id) --}}
                        {{-- <th scope="col">Результат розгляду (title_implementation_txt)</th> --}}

                        
                        {{-- <th scope="col">Результат розгляду (validity_txt)</th> --}}

                        {{-- <th scope="col">Дата виконання (data_our_implementation)</th> --}}
                       
                        <th scope="col">Дата зняття з контолю </th> {{-- (date_removal_control) --}}
                        <th scope="col">Ким знято з контролю </th> {{-- (name_removal_control) --}}
                         <th scope="col">№ вихідний </th> {{-- (namber_our) --}}

                        <th scope="col">Приміткии (notes)</th>
                        <th scope="col">Хто зробив запис (user_id)</th>
                        {{-- <th scope="col">user_id_txt</th> --}}



                    </tr>
                </thead>





                <tbody>

                    @foreach ($appeals as $appeal)
                        <tr>

                            {{-- {{dd($appeal)}} --}}
                            {{-- <th> <a href="{{route('appeal.show', $appeal->id)}}"> {{appeal->category->title}}</a> </th> --}}
                            {{-- <th> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->id}} </a> </th> --}}
                            <td scope="col"> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">{{ $appeal->number }}</a> </td>
                            <td scope="col"> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">{{ $appeal->data_reg }}</a></td>
                            <td scope="col"> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">{{ $appeal->number_reg }} </a></td>
                            <td scope="col"> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">{{ $appeal->surname_reg }}</a></td>
                            <td scope="col"> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">{{ $appeal->name_reg }}</a></td>
                            <td scope="col"> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">{{ $appeal->patronymic }}</a></td>
                            <td scope="col"> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->street->town_pre) ? $appeal->street->town_pre : '' }}
                                    {{ isset($appeal->street->town) ? $appeal->street->town : '' }}
                                    {{ isset($appeal->street->street_pre) ? $appeal->street->street_pre : '' }}
                                    {{ isset($appeal->street->street) ? $appeal->street->street : '' }}
                                    {{ isset($appeal->street->house) ? $appeal->street->house : '' }}
                                    {{ isset($appeal->street->flat) ? $appeal->street->flat : '' }}

                                </a>

                            </td>
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->street_txt}}</a></td> --}}
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->phone_reg }}</a></td>
                            {{-- <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->type_docum) ? $appeal->type_docum->title : '' }}</a></td> --}}
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->type_docum_txt}}</a></td> --}}
                            {{-- {{dd($appeal->question_docum)}} --}}
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->question_docum) ? $appeal->question_docum->title : '' }}</a></td> {{-- (question_docum_id) --}}
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->content_docum }}</a>
                            </td>
                            {{-- <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->income_number }}</a>  </td> --}}
                            {{-- <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->income_date }}</a>   </td> --}}
                            
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">  {{ $appeal->destination_date }}</a></td>
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">  {{ $appeal->destination_number }}</a></td>
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->destination_office) ? $appeal->destination_office->title : '' }}</a>
                            </td>
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->destination_office_txt}}</a></td> --}}
                            

                            {{-- <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">  {{ isset($appeal->source1_office) ? $appeal->source1_office->title : '' }}</a></td> --}}
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source1_office_txt}}</a></td> --}}
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->source1_number }}</a>
                            </td>
                            {{-- <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->source1_date }}</a>
                            </td> --}}
                            {{-- <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->source2_office) ? $appeal->source2_office->title : '' }}</a></td> --}}
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source2_office_txt}}</a></td> --}}
                            {{-- <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->source2_number }}</a>
                            </td> --}}
                            {{-- <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->source2_date }}</a>
                            </td> --}}
                            {{-- <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_office_id }}</a></td> --}}
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source3_office_txt}}</a></td> --}}
                            {{-- <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_number }}</a></td> --}}
                            {{-- <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_date }}</a></td> --}}
                            
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->amount_docum) ? $appeal->amount_docum->title : '' }}</a></td>
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->amount_dokum_txt}}</a></td> --}}
                            
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->content_resolution) ? $appeal->content_resolution->title : '' }}</a>
                            </td>
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->content_resolution_txt}}</a></td> --}}
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ $appeal->avtor_resolution }}</a></td>
                            {{-- <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->group_docum_id }}</a></td> --}}
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->group_docum_txt}}</a></td> --}}
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->executor_ophone->surname) ? $appeal->executor_ophone->surname : '' }}
                                    {{ isset($appeal->executor_ophone->name) ? $appeal->executor_ophone->name : '' }}
                                    {{ isset($appeal->executor_ophone->patronymic) ? $appeal->executor_ophone->patronymic : '' }}
                                </a></td>

                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->executor_ophone_txt}}</a></td> --}}

                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->executor_branch) ? $appeal->executor_branch->branch : '' }}</a></td>
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->executor_branch_txt}}</a></td> --}}
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ $appeal->data_implementation }}</a>
                            </td>
                            <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->namber_implementation }}</a>  </td>

                             <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->validity) ? $appeal->validity->title : '' }}</a></td>

                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ isset($appeal->title_implementation) ? $appeal->title_implementation->title : '' }}</a>
                            </td>
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->title_implementation_txt}}</a></td> --}}
                           

                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->validity_txt}}</a></td> --}}
                            {{-- <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ $appeal->data_our_implementation }}</a>
                            </td> --}}
                            
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ $appeal->date_removal_control }}</a>
                            </td>
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}">
                                    {{ $appeal->name_removal_control }}</a>
                            </td>
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->namber_our }}</a></td>

                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->notes }}</a></td>
                            <td> <a href="{{ route('kmr.appeal.show', $appeal->id) }}"> {{ $appeal->user_id }}</a></td>
                            {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->user_id_txt}}</a></td> --}}


                        </tr>
                    @endforeach

                </tbody>



            </table>
        </div>
    </div>


    <div>
        <a href="{{ route('kmr.appeal.create') }}" class="btn btn-primary mb-3">Додати запис</a>

    </div>
@endsection
