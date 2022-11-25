
@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{route('admin.numerology.update', $numerology->id)}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="number" class="form-label">number</label>
                <input type="text" name= "number" class="form-control" id="number" placeholder="number" value="{{$numerology->number}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <input type="text" name= "content" class="form-control" id="content" placeholder="content" value="{{$numerology->content}}">
            </div>
            
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Update</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('admin.numerology.update', $numerology->id )}}">Back</a>
    </div> 


@endsection