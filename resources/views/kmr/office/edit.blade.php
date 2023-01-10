
@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Довідник Установ/Офісів </h1>
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
        <form action="{{route('kmr.office.update', $office->id)}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Назва</label>
                <input type="text" name= "title" class="form-control" id="title" placeholder="" value="{{$office->title}}">
            </div>
            <div class="mb-3">
                <label for="title_full" class="form-label">Повна назва</label>
                <input type="text" name= "title_full" class="form-control" id="title_full" placeholder="" value="{{$office->title_full}}">
            </div>
            
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Оновити</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('kmr.office.update', $office->id )}}" class="btn btn-primary mb-3">Повернутися</a>
    </div> 


@endsection