
@extends('layouts.main')
@section('content')
<div>
  <table class="table table-hover" id="serch-table">
  <thead>
    <tr>

      <th scope="col">content</th>
      <th scope="col">host</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">deleted_at</th>
    </tr>
  </thead>
  <tbody>
      <tr>
            <th> {{$message->content}}</th>
            <td> {{$message->host}} </td>
            <td> {{$message->created_at}} </td>
            <td> {{$message->updated_at}}</td>
            <td> {{$message->deleted_at}}</td>
          
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('message.edit', $message->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('message.destroy', $message->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('message.index')}}">Back</a>

 </div>
    
@endsection