
@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{route('admin.numerology.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">number</label>
                <input type="text" name= "number" class="form-control" id="number" placeholder="number" >
            </div>
           <div class="mb-3">
                <label for="content" class="form-label">bransort</label>
                <input type="text" name= "content" class="form-control" id="content" placeholder="content" >
            </div>
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>      
            </div>
        </form> 
        
    </div>



@endsection