
@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> ---</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"> </a>_</li>
                                <li class="breadcrumb-item active"> _</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        <!-- /.content-header -->
        
    <div>
        <form action="{{route('admin.ophone.update', $ophone->id )}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="number" class="form-label">ВАТ</label>
                <input type="text" name= "number" class="form-control" id="number" placeholder="Номкр внутрішнього телефону" value="{{$ophone->number}}">
                 @error('number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="number1" class="form-label">МАТС</label>
                <input type="text" name= "number1" class="form-control" id="number1" placeholder="Номкр міського телефону"value="{{$ophone->number1}}">
                 @error('number1')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Призвище</label>
                <input type="text" name= "surname" class="form-control" id="surname" placeholder="Призвище" value="{{$ophone->surname}}">
                @error('surname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Ім'я</label>
                <input type="text" name= "name" class="form-control" id="name" placeholder="Ім'я" value="{{$ophone->name}}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="patronymic" class="form-label">По батькові</label>
                <input type="text" name= "patronymic" class="form-control" id="patronymic" placeholder="По батькові" value="{{$ophone->patronymic}}">
                @error('patronymic')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">День народження</label>
                <input type="date" name= "birthday" class="form-control" id="birthday" placeholder="День народження" value="{{$ophone->birthday }}">
                @error('birthday')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="func_id" class="form-label">Посада</label>
                <select class="form-control" aria-label="func_id"  name="func_id" id= "func_id">
                    @foreach($funcs as $func)
                        <option {{$func->id === $ophone->func_id ? 'selected' :''}}
                            value="{{$func->id}}">{{$func->func}}</option>
                    @endforeach
                </select>
                @error('func_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="branch_id" class="form-label">Відділ</label>
                 <select class="form-control" aria-label="branch_id"  name="branch_id" id= "branch_id">
                    @foreach($branches as $branch)
                        <option {{$branch->id === $ophone->branch_id ? 'selected' :''}}
                            value="{{$branch->id}}">{{$branch->branch}}</option>
                    @endforeach
                </select>
                @error('branch_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="strid" class="form-label">Адреса</label>
                
                <select class="form-control" aria-label="strid"  name="strid" id= "strid">
                    @foreach($streets as $street)
                        <option {{$street->id === $ophone->strid ? 'selected' :''}}
                            value="{{$street->id}}">{{$street->town_pre}} {{$street->town}}, {{$street->street_pre}} {{$street->street}} </option>
                    @endforeach
                </select>
                @error('strid')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="house" class="form-label">Будинок</label>
                <input type="text" name= "house" class="form-control" id="house" placeholder="Будинок" value="{{$ophone->house}}">
                @error('house')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="flat" class="form-label">Кабінет</label>
                <input type="text" name= "flat" class="form-control" id="flat" placeholder="Кабінет" value="{{$ophone->flat}}">
                @error('flat')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

             <div class="mb-3">
                <label for="userMail" class="form-label">Електронна пошта</label>
                <input type="text" name= "userMail" class="form-control" id="userMail" placeholder="Поштова адреса" value="{{$ophone->userMail}}">
                @error('userMail')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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