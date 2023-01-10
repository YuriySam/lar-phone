@extends('layouts.main')
@section('content')
    {{-- {{dd($street)}} --}}
    <div>
        <table class="table table-hover" id="serch-table">
            <thead>
                <tr>

                    <th scope="col">Тип поселенння</th>
                    <th scope="col">Назва поселення</th>
                    <th scope="col">Тип вулиці</th>
                    <th scope="col">Назва вулиці</th>
                    <th scope="col">Будинок</th>
                    <th scope="col">Квартира/Кабінет</th>
                    <th scope="col">Хто зробив запис (user_id)</th>
                    {{-- <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">deleted_at</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th> {{ $street->town_pre }}</th>
                    <th> {{ $street->town }}</th>
                    <th> {{ $street->street_pre }}</th>
                    <th> {{ $street->street }}</th>
                    <th> {{ $street->house }}</th>
                    <th> {{ $street->flat }}</th>
                    <th> {{ $street->user_id }}</th>
                    {{-- <td> {{$street->created_at}}</td>
            <td> {{$street->updated_at}}</td>
            <td> {{$street->deleted_at}}</td> --}}


                </tr>
            </tbody>
        </table>

        <div>
            <a href="{{ route('kmr.street.createEdit', $street->id) }}" class="btn btn-primary mb-3">Створити по шаблону</a>


            {{-- <a href="{{ route('kmr.street.edit', $street->id) }}" class="btn btn-primary mb-3">Редагувати</a> --}}




            {{-- <div>
                <form action="{{route('kmr.street.destroy', $street->id)}}" method ='post'>
                  @csrf
                  @method('delete')
                  <input type= 'submit' value="видалити">
                </form>
                    
            </div> --}}


            <a href="{{ route('kmr.street.index') }}" class="btn btn-primary mb-3">Повернутися</a>

        </div>
    @endsection
