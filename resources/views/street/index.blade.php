@extends('layouts.main')
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
                    <th scope="col">town_pre</th>
                    <th scope="col">town</th>
                    <th scope="col">street_pre</th>
                    <th scope="col">street</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">deleted_at</th>

                </tr>
            </thead>



            <tbody>

                @foreach ($streets as $street)
                    <tr>

                        <th> <a href="{{ route('street.show', $street->id) }}"> {{ $street->town_pre }}</a> </th>
                        <th> <a href="{{ route('street.show', $street->id) }}"> {{ $street->town }}</a></th>
                        <th> <a href="{{ route('street.show', $street->id) }}"> {{ $street->street_pre }}</a></th>
                        <th> <a href="{{ route('street.show', $street->id) }}"> {{ $street->street }}</a></th>
                        <td> <a href="{{ route('street.show', $street->id) }}"> {{ $street->created_at }} </a></td>
                        <td> <a href="{{ route('street.show', $street->id) }}"> {{ $street->updated_at }}</a></td>
                        <td> <a href="{{ route('street.show', $street->id) }}"> {{ $street->deleted_at }}</a></td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>

    <!-- <div>
            <a href="{{ route('street.create') }}">Add One</a>

        </div>
    -->
@endsection
