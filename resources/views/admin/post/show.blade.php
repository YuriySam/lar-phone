
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
      <th scope="col">category</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">image</th>
      <th scope="col">likes</th>
      <th scope="col">is_published</th>
      
    </tr>
  </thead>
  <tbody>
      <tr>
          <!--<a href="{{route('admin.post.show', $post->id)}}">-->
            <th> {{$post->category->title}}</th>
            <th> {{$post->title}}</th>
            <th> {{$post->content}}</th>
            <td> {{$post->image}} </td>
            <td> {{$post->likes}}</td>
            <td> {{$post->is_published}}</td>
           <!--</a>  -->
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('admin.post.edit', $post->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('admin.post.destroy', $post->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('admin.post.index')}}">Back</a>

 </div>
    
@endsection