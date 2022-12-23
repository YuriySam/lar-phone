@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> ---</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"> </a>_</li>
                                <li class="breadcrumb-item active"> _</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        <!-- /.content-header -->
        
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
                    <th scope="col">ПІБ</th>
                    <th scope="col">Посада</th>
                    <th scope="col">Відділ</th>
                    <th scope="col">ВАТС</th>
                    <th scope="col">МАТС</th>
                    <th scope="col">Ел.Пошта</th>
                    <th scope="col">Адреса</th>
                    <th scope="col">Примітки</th>
                </tr>
            </thead>



            <tbody>

                @foreach ($ophones as $ophone)
                    <tr>

                        <td> <a href="{{ route('admin.ophone.show', $ophone->id) }}"> {{ $ophone->surname }}
                                {{ $ophone->name }}
                                {{ $ophone->patronymic }}</a> </td>
                        <td> <a href="{{ route('admin.ophone.show', $ophone->id) }}"> {{ $ophone->func->func }} </a></td>
                        <td> <a href="{{ route('admin.ophone.show', $ophone->id) }}"> {{ $ophone->branch->branch }}</a></td>
                        <th> <a href="{{ route('admin.ophone.show', $ophone->id) }}"> {{ $ophone->number }}</a></th>
                        <th> <a href="{{ route('admin.ophone.show', $ophone->id) }}"> {{ $ophone->number1 }}</a></th>
                        <th> <a href="{{ route('admin.ophone.show', $ophone->id) }}"> {{ $ophone->userMail }}</a></th>
                        <th> <a href="{{ route('admin.ophone.show', $ophone->id) }}"> {{ $ophone->street->town_pre }}
                                {{ $ophone->street->town }} {{ $ophone->street->street_pre }}
                                {{ $ophone->street->street }} {{ $ophone->house }}, каб. {{ $ophone->flat }} </a></th>
                        <th> <a href="{{ route('admin.ophone.show', $ophone->id) }}"> {{ $ophone->note }}</a></th>
                        
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>




    <div>
        





    </div>
@endsection
