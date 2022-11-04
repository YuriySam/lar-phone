
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('func.update', $func->id)}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="func" class="form-label">func</label>
                <input type="text" name= "func" class="form-control" id="func" placeholder="func" value="{{$func->func}}">
            </div>
            <div class="mb-3">
                <label for="funindex" class="form-label">funindex</label>
                <input type="text" name= "funindex" class="form-control" id="funindex" placeholder="funindex" value="{{$func->funindex}}">
            </div>
            
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Update</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('func.update', $func->id )}}">Back</a>
    </div> 


@endsection