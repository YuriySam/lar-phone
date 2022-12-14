
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
        <form action="{{route('admin.message.update', $message->id)}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">message title</label>
                <input type="text" name= "content" class="form-control" id="content" placeholder="message content" value="{{$message->content}}">
            </div>
            
            
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Update</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('admin.message.update', $message->id )}}">Back</a>
    </div> 


@endsection