@extends('layouts.main')
@section('content')


    {{-- <style>
      .fixed_header {
        /* width: 400px; */
        table-layout: fixed;
        border-collapse: collapse;
      }
      .fixed_header tbody {
        display: block;
        width: 100%;
        overflow: auto;
        height: 500px;
      }
      .fixed_header thead tr {
        display: block;
      }
      .fixed_header thead {
        background: rgb(36, 69, 235);
        color: #fff;
      }
      .fixed_header th,
      .fixed_header td {
        padding: 5px;
        text-align: center;
        width: 200px;
      }
    </style>  --}}




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
    

    <div >


        {{-- <table class="table table-hover" id="serch-table" > --}}
        <table   class="table table-hover fixed_header" id="serch-table" >
            
            <thead >
                <tr>
                    <th scope="col">ПІБ</th>
                    <th scope="col">Посада</th>
                    <th scope="col">Відділ</th>
                    <th scope="col">ВАТС</th>
                    <th scope="col">МАТС</th>
                    <th scope="col">Адреса</th>
                    <th scope="col">Ел.Пошта</th>
                    <th scope="col">Примітки</th>
                </tr>
            </thead>



            <tbody >

                @foreach ($ophones as $ophone)
                    <tr>
                        <td>  {{ $ophone->surname }} {{ $ophone->name }} {{ $ophone->patronymic }} </td>
                        <td>  {{ $ophone->func->func }} </td>
                        <td> <a href="{{ route('ophone.showBranch', $ophone->id) }}"> {{ $ophone->branch->branch }}</a></td>
                        <td>  {{ $ophone->number }}</td>
                        <td>  {{ $ophone->number1 }}</td>
                        <td>  {{ $ophone->street->town_pre }} {{ $ophone->street->town }} {{ $ophone->street->street_pre }} {{ $ophone->street->street }} {{ $ophone->house }} {{ $ophone->flet }}</td>
                        {{-- <th> <a href="{{ route('ophone.show', $ophone->id) }}"> {{ $ophone->userMail }}</a></th> --}}
                        <td> <a href = "mailto: {{ $ophone->userMail }}">{{ $ophone->userMail }}</a></td>
                        <td>  {{ $ophone->note }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    


    
@endsection
