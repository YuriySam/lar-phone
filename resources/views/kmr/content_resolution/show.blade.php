
@extends('layouts.main')
@section('content')

<!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Довідник Зміст резолюції  </h1>
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
            <th> {{$content_resolution->title}}</th>
            {{-- <td> {{$content_resolution->created_at}} </td>
            <td> {{$content_resolution->updated_at}}</td>
            <td> {{$content_resolution->deleted_at}}</td>
           --}}
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('kmr.content_resolution.edit', $content_resolution->id)}}" class="btn btn-primary mb-3">Редагувати</a>

</div>
<div>
    <form action="{{route('kmr.content_resolution.destroy', $content_resolution->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Видалити" class="btn btn-primary mb-3">
    </form>
        
</div>
    
<div>
        <a href="{{route('kmr.content_resolution.index')}}" class="btn btn-primary mb-3">Повернутися</a>

 </div>
    
@endsection