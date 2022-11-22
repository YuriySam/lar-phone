
@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{route('admin.ophone.update', $ophone->id )}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="number" class="form-label">ВАТ</label>
                <input type="text" name= "number" class="form-control" id="number" placeholder="Номкр внутрішнього телефону" value="{{$ophone->number}}">
            </div>
            <div class="mb-3">
                <label for="number1" class="form-label">МАТС</label>
                <input type="text" name= "number1" class="form-control" id="number1" placeholder="Номкр міського телефону"value="{{$ophone->number1}}">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Призвище</label>
                <input type="text" name= "surname" class="form-control" id="surname" placeholder="Призвище" value="{{$ophone->surname}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Ім'я</label>
                <input type="text" name= "name" class="form-control" id="name" placeholder="Ім'я" value="{{$ophone->name}}">
            </div>
            <div class="mb-3">
                <label for="patronymic" class="form-label">По батькові</label>
                <input type="text" name= "patronymic" class="form-control" id="patronymic" placeholder="По батькові" value="{{$ophone->patronymic}}">
            </div>
            <div class="mb-3">
                <label for="funid" class="form-label">Посада</label>
                <input type="text" name= "funid" class="form-control" id="funid" placeholder="Посада" value="{{$ophone->funid}}">
            </div>
            <div class="mb-3">
                <label for="branid" class="form-label">Відділ</label>
                <input type="text" name= "branid" class="form-control" id="branid" placeholder="Відділ" value="{{$ophone->branid}}">
            </div>
            <div class="mb-3">
                <label for="offid" class="form-label">Назва організації</label>
                <input type="text" name= "offid" class="form-control" id="offid" placeholder="Назва організації" value="{{$ophone->offid}}">
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Update</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('admin.ophone.update', $ophone->id )}}">Back</a>
     </div> 

@endsection