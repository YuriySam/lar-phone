
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('message.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="content" class="form-label">message content</label>
                <input type="text" name= "content" class="form-control" id="content" placeholder="message content" >
            </div>
           <div class="mb-3">
                {{-- <label for="host" class="form-label">ПЕОМ</label> --}}
                <input type="text" name= "host" class="form-control" id="host" placeholder="ip" value= "{{$_SERVER['REMOTE_ADDR']}}" hidden>
            </div>
            
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>      
            </div>
        </form> 
        
    </div>



@endsection