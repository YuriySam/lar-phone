
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('branch.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="branch" class="form-label">branch</label>
                <input type="text" name= "branch" class="form-control" id="branch" placeholder="branch" >
            </div>
           <div class="mb-3">
                <label for="bransort" class="form-label">bransort</label>
                <input type="text" name= "bransort" class="form-control" id="bransort" placeholder="bransort" >
            </div>
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>      
            </div>
        </form> 
        
    </div>



@endsection