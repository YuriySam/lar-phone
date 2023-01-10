
@extends('layouts.main')
@section('content')
        <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Довідник Первинне/повторне/дубль </h1>
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
        <form action="{{route('kmr.amount_docum.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">amount_docum title</label>
                <input type="text" name= "title" class="form-control" id="title" placeholder="type_docum title" >
            </div>
           
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>     

            </div>

        </form> 
         <a href="{{route('kmr.amount_docum.index')}}" class="btn btn-primary mb-3">Повернутися</a>
    </div>



@endsection