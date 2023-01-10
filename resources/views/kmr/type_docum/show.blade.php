
@extends('layouts.main')
@section('content')

<!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Довідник "Вид документа"</h1>
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

      <th scope="col">Вид документа</th>
      {{-- <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">deleted_at</th> --}}
    </tr>
  </thead>
  <tbody>
      <tr>
            <th> {{$type_docum->title}}</th>
            {{-- <td> {{$type_docum->created_at}} </td>
            <td> {{$type_docum->updated_at}}</td>
            <td> {{$type_docum->deleted_at}}</td> --}}
          
      </tr>
  </tbody>
</table>

        <a href="{{route('kmr.type_docum.edit', $type_docum->id)}}" class="btn btn-primary mb-3">Редагувати</a>

    <form action="{{route('kmr.type_docum.destroy', $type_docum->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Видалити" class="btn btn-primary mb-3">
    </form>
        
        <a href="{{route('kmr.type_docum.index')}}" class="btn btn-primary mb-3">Повернутися</a>


    
@endsection