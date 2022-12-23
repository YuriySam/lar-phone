
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

      <th scope="col">title</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">deleted_at</th>
    </tr>
  </thead>
  <tbody>
      <tr>
            <th> {{$type_docum->title}}</th>
            <td> {{$type_docum->created_at}} </td>
            <td> {{$type_docum->updated_at}}</td>
            <td> {{$type_docum->deleted_at}}</td>
          
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('admin.type_docum.edit', $type_docum->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('admin.type_docum.destroy', $type_docum->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('admin.type_docum.index')}}">Back</a>

 </div>
    
@endsection