
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
            <th> {{$category->title}}</th>
            <td> {{$category->created_at}} </td>
            <td> {{$category->updated_at}}</td>
            <td> {{$category->deleted_at}}</td>
          
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('category.edit', $category->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('category.destroy', $category->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('category.index')}}">Back</a>

 </div>
    
@endsection