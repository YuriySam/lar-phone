@extends('layouts.main')
@section('content')
    <div>
        <table class="table table-hover" id="serch-table">
            <thead>
                <tr>
                    <th scope="col">ВАТС</th>
                    <th scope="col">МАТС</th>
                    <th scope="col">ПІБ</th>
                    <th scope="col">Посада</th>
                    <th scope="col">Відділ</th>
                    <th scope="col">Адреса</th>
                    <th scope="col">Ел.Пошта</th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <th> {{ $ophone->number }}</th>
                    <th> {{ $ophone->number1 }}</th>
                    <td> {{ $ophone->surname }} {{ $ophone->name }} {{ $ophone->patronymic }}</td>
                    <td> {{ $ophone->func->func }}</td>
                    <td> {{ $ophone->branch->branch }}</td>
                    <th> {{ $ophone->street->town_pre }} {{ $ophone->street->town }} {{ $ophone->street->street_pre }} {{ $ophone->street->street }} {{ $ophone->house }} {{ $ophone->flet }}</th>
                    <th> {{ $ophone->userMail }}</th>

                </tr>


            </tbody>
        </table>
    </div>
    <!--<div>
            <a href="{{ route('ophone.edit', $ophone->id) }}">Edit</a>

    </div>
    <div>
        <form action="{{ route('ophone.destroy', $ophone->id) }}" method ='post'>
          @csrf
          @method('delete')
          <input type= 'submit' value="Delete">
        </form>
            
    </div>
        -->
    <div>
        <a href="{{ route('ophone.index') }}">Back</a>

    </div>
@endsection
