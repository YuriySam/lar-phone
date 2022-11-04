
@extends('layouts.main')
@section('content')
<div>
  <table class="table table-hover" id="serch-table">
  <thead>
    <tr>

      <th scope="col">func</th>
      <th scope="col">funindex</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">deleted_at</th>
    </tr>
  </thead>
  <tbody>
      <tr>
            <th> {{$func->func}}</th>
            <th> {{$func->funindex}}</th>
            <td> {{$func->created_at}} </td>
            <td> {{$func->updated_at}}</td>
            <td> {{$func->deleted_at}}</td>
          
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('func.edit', $func->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('func.destroy', $func->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('func.index')}}">Back</a>

 </div>
    
@endsection