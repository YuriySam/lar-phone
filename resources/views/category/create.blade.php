
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('category.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">category title</label>
                <input type="text" name= "title" class="form-control" id="title" placeholder="category title" >
            </div>
           
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>      
            </div>
        </form> 
        
    </div>



@endsection