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
        text-align: left;
        width: 200px;
      }
    </style>  --}}

    <div>
        <table class="table table-hover fixed_header" id="serch-table">
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
                 @foreach ($ophones as $ophone)
                <tr>
                    <th> {{ $ophone->number }}</th>
                    <th> {{ $ophone->number1 }}</th>
                    <td> {{ $ophone->surname }} {{ $ophone->name }} {{ $ophone->patronymic }}</td>
                    <td> {{ $ophone->func->func }}</td>
                    <td> {{ $ophone->branch->branch }}</td>
                    <th> {{ $ophone->street->town_pre }} {{ $ophone->street->town }} {{ $ophone->street->street_pre }} {{ $ophone->street->street }} {{ $ophone->house }} {{ $ophone->flet }}</th>
                    {{-- <th> {{ $ophone->userMail }}</th> --}}
                    <th> <a href = "mailto: {{ $ophone->userMail }}">{{ $ophone->userMail }}</a></th>
                        

                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <!--<div>
            <a href="{{ route('ophone.edit', $ophone->id) }}">Edit</a>

    </div> --}}
    {{-- <div>
        <form action="{{ route('ophone.destroy', $ophone->id) }}" method ='post'>
          @csrf
          @method('delete')
          <input type= 'submit' value="Delete">
        </form>
            
    </div> --}}
      
    <div>
        <a href="{{ route('ophone.index') }}" class="btn btn-primary mb-3">Повернутися</a>

    </div>
@endsection
