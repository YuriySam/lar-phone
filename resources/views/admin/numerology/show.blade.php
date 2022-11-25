
@extends('layouts.admin')
@section('content')
<div>
  <table class="table table-hover" id="serch-table">
  <thead>
    <tr>

      <th scope="col">number</th>
      <th scope="col">content</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">deleted_at</th>
    </tr>
  </thead>
  <tbody>
      <tr>
          <!--<a href="{{route('admin.numerology.show', $numerology->id)}}">-->
            <th> {{$numerology->number}}</th>
            <th> {{$numerology->content}}</th>
            <td> {{$numerology->created_at}} </td>
            <td> {{$numerology->updated_at}}</td>
            <td> {{$numerology->deleted_at}}</td>
           <!--</a>  -->
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('admin.numerology.edit', $numerology->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('admin.numerology.destroy', $numerology->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('admin.numerology.index')}}">Back</a>

 </div>
    
@endsection