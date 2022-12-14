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
