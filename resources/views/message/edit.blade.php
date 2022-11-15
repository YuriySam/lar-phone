
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('message.update', $message->id)}}" method= "post">
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
        <a href="{{route('message.update', $message->id )}}">Back</a>
    </div> 


@endsection