
@extends('layouts.main')
@section('content')
<div>
  <table class="table table-hover" id="serch-table">
  <thead>
    <tr>

      <th scope="col">branch</th>
      <th scope="col">bransort</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">deleted_at</th>
    </tr>
  </thead>
  <tbody>
      <tr>
          <!--<a href="{{route('branch.show', $branch->id)}}">-->
            <th> {{$branch->branch}}</th>
            <th> {{$branch->bransort}}</th>
            <td> {{$branch->created_at}} </td>
            <td> {{$branch->updated_at}}</td>
            <td> {{$branch->deleted_at}}</td>
           <!--</a>  -->
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('branch.edit', $branch->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('branch.destroy', $branch->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('branch.index')}}">Back</a>

 </div>
    
@endsection