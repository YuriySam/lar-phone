
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('tag.update', $category->id)}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">category title</label>
                <input type="text" name= "title" class="form-control" id="title" placeholder="tag title" value="{{$category->title}}">
            </div>
            
            
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Update</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('tag.update', $category->id )}}">Back</a>
    </div> 


@endsection