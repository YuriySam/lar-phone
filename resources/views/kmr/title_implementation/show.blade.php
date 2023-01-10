
@extends('layouts.main')
@section('content')

<!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Довідник Результат розгляду </h1>
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

      <th scope="col">Назва</th>
      {{-- <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">deleted_at</th> --}}
    </tr>
  </thead>
  <tbody>
      <tr>
            <th> {{$title_implementation->title}}</th>
            {{-- <td> {{$title_implementation->created_at}} </td>
            <td> {{$title_implementation->updated_at}}</td>
            <td> {{$title_implementation->deleted_at}}</td> --}}
          
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('kmr.title_implementation.edit', $title_implementation->id)}}" class="btn btn-primary mb-3">Редагувати</a>

</div>
<div>
    <form action="{{route('kmr.title_implementation.destroy', $title_implementation->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Видалити" class="btn btn-primary mb-3">
    </form>
        
</div>
    
<div>
        <a href="{{route('kmr.title_implementation.index')}}" class="btn btn-primary mb-3">Повернутися</a>

 </div>
    
@endsection