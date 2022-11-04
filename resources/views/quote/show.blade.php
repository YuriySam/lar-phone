
@extends('layouts.main')
@section('content')
<div>
  <table class="table table-hover" id="serch-table">
  <thead>
    <tr>

      <th scope="col">quote</th>
     
    </tr>
  </thead>
  <tbody>
      <tr>
            <th> {{$quote->quote}}</th>
            
      </tr>
  </tbody>
</table>
<div>
        <a href="{{route('quote.edit', $quote->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('quote.destroy', $quote->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('quote.index')}}">Back</a>

 </div>
    
@endsection