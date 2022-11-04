
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('quote.update', $quote->id)}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="quote" class="form-label">quote</label>
                <input type="text" name= "quote" class="form-control" id="quote" placeholder="quote" value="{{$quote->quote}}">
            </div>
            
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Update</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('quote.update', $quote->id )}}">Back</a>
    </div> 


@endsection