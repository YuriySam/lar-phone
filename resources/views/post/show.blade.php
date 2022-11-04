
@extends('layouts.main')
@section('content')
<div>
  <table class="table table-hover" id="serch-table">
  <thead>
    <tr>

      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">image</th>
      <th scope="col">likes</th>
      <th scope="col">is_published</th>
    </tr>
  </thead>
  <tbody>
      <tr>
          <!--<a href="{{route('post.show', $post->id)}}">-->
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
        <a href="{{route('post.edit', $post->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('post.destroy', $post->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('post.index')}}">Back</a>

 </div>
    
@endsection