
@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{route('admin.message.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="content" class="form-label">message content</label>
                <input type="text" name= "content" class="form-control" id="content" placeholder="message content" >
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">host</label>
                <input type="text" name= "host" class="form-control" id="content " placeholder="message content" value="{{$_SERVER['REMOTE_ADDR']}}" readonly>
            </div>
           
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>      
            </div>
        </form> 
        
    </div>



@endsection