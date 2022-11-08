
@extends('layouts.main')
@section('content')
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
            <th> {{$tag->title}}</th>
            <td> {{$tag->created_at}} </td>
            <td> {{$tag->updated_at}}</td>
            <td> {{$tag->deleted_at}}</td>
          
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('tag.edit', $tag->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('tag.destroy', $tag->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('tag.index')}}">Back</a>

 </div>
    
@endsection