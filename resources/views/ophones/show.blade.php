
@extends('layouts.main')
@section('content')
<div>
    <table class="table table-hover" id="serch-table">
        <thead>
            <tr>
            <th scope="col">ВАТС</th>
            <th scope="col">МАТС</th>
            <th scope="col">ПІБ</th>
            <th scope="col">Посада</th>
            <th scope="col">Відділ</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <th> {{$ophone->number}}</th>
                <th> {{$ophone->number1}}</th>
                <td> {{$ophone->surname}} {{$ophone->name}} {{$ophone->patronymic}}</td>
                <td> {{$ophone->funid}}</td>
                <td> {{$ophone->branid}}</td>
            </tr>
            
    
        </tbody>
    </table>
</div>
<div>
        <a href="{{route('ophone.edit', $ophone->id)}}">Edit</a>

</div>
<div>
    <form action="{{route('ophone.destroy', $ophone->id)}}" method ='post'>
      @csrf
      @method('delete')
      <input type= 'submit' value="Delete">
    </form>
        
</div>
    
<div>
        <a href="{{route('ophone.index')}}">Back</a>

 </div> 


@endsection