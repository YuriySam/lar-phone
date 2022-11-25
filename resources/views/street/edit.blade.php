
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('street.update', $street->id)}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="town_pre" class="form-label">town_pre</label>
                <input type="text" name= "town_pre" class="form-control" id="town_pre" placeholder="town_pre" value="{{$street->town_pre}}">
            </div>
            <div class="mb-3">
                <label for="town" class="form-label">town</label>
                <input type="text" name= "town" class="form-control" id="town" placeholder="town" value="{{$street->town}}">
            </div>
             <div class="mb-3">
                <label for="street_pre" class="form-label">street_pre</label>
                <input type="text" name= "street_pre" class="form-control" id="street_pre" placeholder="street_pre" value="{{$street->street_pre}}">
            </div>
             <div class="mb-3">
                <label for="street" class="form-label">street</label>
                <input type="text" name= "street" class="form-control" id="street" placeholder="street" value="{{$street->street    }}">
            </div>
            
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Update</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('street.update', $street->id )}}">Back</a>
    </div> 


@endsection