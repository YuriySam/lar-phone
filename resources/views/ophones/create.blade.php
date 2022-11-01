
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('ophone.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">ВАТ</label>
                <input type="text" name= "number" class="form-control" id="number" placeholder="Номкр внутрішнього телефону">
            </div>
            <div class="mb-3">
                <label for="number1" class="form-label">МАТС</label>
                <input type="text" name= "number1" class="form-control" id="number1" placeholder="Номкр міського телефону">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Призвище</label>
                <input type="text" name= "surname" class="form-control" id="surname" placeholder="Призвище">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Ім'я</label>
                <input type="text" name= "name" class="form-control" id="name" placeholder="Ім'я">
            </div>
            <div class="mb-3">
                <label for="patronymic" class="form-label">По батькові</label>
                <input type="text" name= "patronymic"class="form-control" id="patronymic" placeholder="По батькові">
            </div>
            <div class="mb-3">
                <label for="funid" class="form-label">Посада</label>
                <input type="text" name= "funid" class="form-control" id="funid" placeholder="Посада">
            </div>
            <div class="mb-3">
                <label for="branid" class="form-label">Відділ</label>
                <input type="text" name= "branid" class="form-control" id="branid" placeholder="Відділ">
            </div>
            <div class="mb-3">
                <label for="offid" class="form-label">Назва організації</label>
                <input type="text" name= "offid" class="form-control" id="offid" placeholder="Назва організації">
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>      
            </div>
        </form> 
        
    </div>




    <div>
        this is phone page (phone.blade)

       



    </div>    


@endsection