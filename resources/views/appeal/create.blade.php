@extends('layouts.main')
@section('content')
    {{-- {{dd('appeal.index.blade')}} --}}
    {{ 'appeal.index' }}
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


        <table class="table table-hover" id="serch-table">
            <thead>
                <tr>

                    {{-- <th scope="col">id</th> --}}
                    <th scope="col">Порядковий номер з початку року (number)</th>
                    <th scope="col">Дата запису в цей журнал (data_reg)</th>
                    <th scope="col">Індекс внутрішній номер (number_reg)</th>
                    <th scope="col">Призвище (surname_reg)</th>
                    <th scope="col">Ім'я (name_reg)</th>
                    <th scope="col">По батькові (patronymic)</th>
                    <th scope="col">Адреса заявника (address_id)</th>
                    {{-- <th scope="col">Адреса заявника (address_txt)</th> --}}
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
                    <th scope="col">Звідки одержано (3) (source3_office_id)</th>
                    {{-- <th scope="col">Звідки одержано (3) (source3_office_txt)</th> --}}
                    <th scope="col">Номер реєстрації (3) (source3_number)</th>
                    <th scope="col">Дата реєстрації (3) (source3_date)</th>
                    <th scope="col">Первинне/повторне/дубль (amount_dokum_id)</th>
                    {{-- <th scope="col">Первинне/повторне/дубль (amount_dokum_txt)</th> --}}
                    <th scope="col">Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_id)
                    </th>
                    {{-- <th scope="col">Зміст резолюції розгляд відповідь/розгляд/ не за адресою/ (content_resolution_txt)</th> --}}
                    <th scope="col">Автор резолюції (avtor_resolution)</th>
                    <th scope="col">Вид/Група документа (group_docum_id)</th>
                    {{-- <th scope="col">Група документа (group_docum_txt)</th> --}}
                    <th scope="col">Виконавець (executor_ophone_id)</th>
                    {{-- <th scope="col">Виконавець (executor_ophone_txt)</th> --}}
                    <th scope="col">Структурний підрозділ виконавця (executor_branch_id)</th>
                    {{-- <th scope="col">Відділ виконавця  (executor_branch_txt)</th> --}}
                    <th scope="col">Термін виконання (data_implementation)</th>
                    <th scope="col">Номер справи (namber_implementation)</th>
                    <th scope="col">Результат розгляду (title_implementation_id)</th>
                    {{-- <th scope="col">Результат розгляду (title_implementation_txt)</th> --}}
                    <th scope="col">Результат розгляду (validity_id)</th>
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

                @foreach ($appeals as $appeal)
                    <tr>

                        {{-- {{dd($appeal)}} --}}
                        {{-- <th> <a href="{{route('appeal.show', $appeal->id)}}"> {{appeal->category->title}}</a> </th> --}}
                        {{-- <th> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->id}} </a> </th> --}}
                        <th> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->number }}</a> </th>
                        <th> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->data_reg }}</a></th>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->number_reg }} </a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->surname_reg }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->name_reg }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->patronymic }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->address_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->address_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->phone_reg }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->type_docum_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->type_docum_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->question_docum_id }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->content_docum }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->income_number }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->income_date }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->destination_office_id }}</a>
                        </td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->destination_office_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->destination_number }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->destination_date }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source1_office_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source1_office_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source1_number }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source1_date }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source2_office_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source2_office_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source2_number }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source2_date }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_office_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source3_office_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_number }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_date }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->amount_dokum_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->amount_dokum_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->content_resolution_id }}</a>
                        </td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->content_resolution_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->avtor_resolution }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->group_docum_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->group_docum_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->executor_ophone_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->executor_ophone_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->executor_branch_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->executor_branch_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->data_implementation }}</a>
                        </td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->namber_implementation }}</a>
                        </td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->title_implementation_id }}</a>
                        </td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->title_implementation_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->validity_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->validity_txt}}</a></td> --}}
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->data_our_implementation }}</a>
                        </td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->namber_our }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->date_removal_control }}</a>
                        </td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->name_removal_control }}</a>
                        </td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->notes }}</a></td>
                        <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->user_id }}</a></td>
                        {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->user_id_txt}}</a></td> --}}


                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
    <div>
        <form action="{{ route('appeal.store') }}" method="post">
            @csrf
            <table class="table table-hover">
                <tbody>


                    <tr>

                        {{-- {{dd($appeal)}} --}}
                        {{-- <th> <a href="{{route('appeal.show', $appeal->id)}}"> {{appeal->category->title}}</a> </th> --}}
                        {{-- <th> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->id}} </a> </th> --}}
                        <th>

                            <div class="mb-3">
                                <label for="number" class="form-label">Порядковий номер з початку року (number)</label>
                                <input type="text" name="number" class="form-control" id="number"
                                    placeholder="Порядковий номер з початку року (number)" value="{{ old('number') }}">
                                @error('number')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </th>
                        <th>
                        <div class="mb-3">
                            <label for="data_reg" class="form-label">Дата запису в цей журнал (data_reg)</label>
                            <input type="date" name="data_reg" class="form-control" id="data_reg"
                                placeholder="Дата запису в цей журнал (data_reg)" value="{{ old('data_reg') }}">
                            @error('data_reg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </th>


                    </tr>
                    
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->number_reg }} </a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->surname_reg }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->name_reg }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->patronymic }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->address_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->address_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->phone_reg }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->type_docum_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->type_docum_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->question_docum_id }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->content_docum }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->income_number }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->income_date }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->destination_office_id }}</a>
                    </td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->destination_office_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->destination_number }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->destination_date }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source1_office_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source1_office_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source1_number }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source1_date }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source2_office_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source2_office_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source2_number }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source2_date }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_office_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->source3_office_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_number }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->source3_date }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->amount_dokum_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->amount_dokum_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->content_resolution_id }}</a>
                    </td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->content_resolution_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->avtor_resolution }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->group_docum_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->group_docum_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->executor_ophone_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->executor_ophone_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->executor_branch_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->executor_branch_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->data_implementation }}</a>
                    </td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->namber_implementation }}</a>
                    </td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->title_implementation_id }}</a>
                    </td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->title_implementation_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->validity_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->validity_txt}}</a></td> --}}
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->data_our_implementation }}</a>
                    </td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->namber_our }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->date_removal_control }}</a>
                    </td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->name_removal_control }}</a>
                    </td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->notes }}</a></td>
                    <td> <a href="{{ route('appeal.show', $appeal->id) }}"> {{ $appeal->user_id }}</a></td>
                    {{-- <td> <a href="{{route('appeal.show', $appeal->id)}}"> {{$appeal->user_id_txt}}</a></td> --}}



                </tbody>
            </table>


            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Додати</button>
            </div>




        </form>

    </div>


    <div>
        <a href="{{ route('appeal.index') }}">Повернутися</a>

    </div>
@endsection
