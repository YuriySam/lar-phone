
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('func.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="func" class="form-label">func</label>
                <input type="text" name= "func" class="form-control" id="func" placeholder="func" >
            </div>
           <div class="mb-3">
                <label for="funindex" class="form-label">funindex</label>
                <input type="text" name= "funindex" class="form-control" id="funindex" placeholder="funindex" >
            </div>
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>      
            </div>
        </form> 
        
    </div>



@endsection