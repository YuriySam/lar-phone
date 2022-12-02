@extends('layouts.admin')
@section('content')
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
                    <th scope="col">Дата ноародження</th>
                    <th scope="col">Повних років</th>
                    <th scope="col">Посада</th>
                    <th scope="col">Відділ</th>
                    <th scope="col">ВАТС</th>
                    <th scope="col">МАТС</th>
                    <th scope="col">Ел.Пошта</th>
                </tr>
            </thead>



            <tbody>

                @foreach ($ophonesBirthdayToday as $birthdayToday)
                    <tr>

                        <td> <a href="{{ route('admin.ophone.show', $birthdayToday->id) }}">{{ $birthdayToday->birthday }}</a> </td>
                        <td> <a href="{{ route('admin.ophone.show', $birthdayToday->id) }}">{{ $birthdayToday->old }}</a> </td>
                        <td> <a href="{{ route('admin.ophone.show', $birthdayToday->id) }}">{{ $birthdayToday->surname }} {{ $birthdayToday->name }} {{ $birthdayToday->patronymic }}</a> </td>
                        <td> <a href="{{ route('admin.ophone.show', $birthdayToday->id) }}">{{ $birthdayToday->func->func }}</a></td>
                        <td> <a href="{{ route('admin.ophone.show', $birthdayToday->id) }}">{{ $birthdayToday->branch->branch }}</a></td>
                        <th> <a href="{{ route('admin.ophone.show', $birthdayToday->id) }}">{{ $birthdayToday->number }}</a></th>
                        <th> <a href="{{ route('admin.ophone.show', $birthdayToday->id) }}">{{ $birthdayToday->number1 }}</a></th>
                        <th> <a href="{{ route('admin.ophone.show', $birthdayToday->id) }}">{{ $birthdayToday->userMail }}</a></th>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>




    <div>
        this is phone page (admin.ophone.birthday.blade)





    </div>
@endsection
