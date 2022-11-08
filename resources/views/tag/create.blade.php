
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('tag.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">tag title</label>
                <input type="text" name= "title" class="form-control" id="title" placeholder="tag title" >
            </div>
           
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>      
            </div>
        </form> 
        
    </div>



@endsection