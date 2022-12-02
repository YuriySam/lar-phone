@extends('layouts.admin')
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
                    <th scope="col">Ел.пошта</th>
                    <th scope="col">Адреса</th>
                    
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th> {{ $ophone->number }}</th>
                    <th> {{ $ophone->number1 }}</th>
                    <td> {{ $ophone->surname }} {{ $ophone->name }} {{ $ophone->patronymic }}</td>
                    <td> {{ $ophone->func->func }}</td>
                    <td> {{ $ophone->branch->branch }}</td>
                    <td> {{ $ophone->userMail }}</td>
                    <td> {{ $ophone->street->town_pre }}
                        {{ $ophone->street->town }} {{ $ophone->street->street_pre }}
                        {{ $ophone->street->street }} {{ $ophone->house }}, каб. {{ $ophone->flat }} </td>
                </tr>


            </tbody>
        </table>
    </div>
    <div>
        <a href="{{ route('admin.ophone.edit', $ophone->id) }}">Edit</a>

    </div>
    <div>
        <form action="{{ route('admin.ophone.destroy', $ophone->id) }}" method='post'>
            @csrf
            @method('delete')
            <input type='submit' value="Delete">
        </form>

    </div>

    <div>
        <a href="{{ route('admin.ophone.index') }}">Back</a>

    </div>
@endsection
