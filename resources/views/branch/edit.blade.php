
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('branch.update', $branch->id)}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="branch" class="form-label">branch</label>
                <input type="text" name= "branch" class="form-control" id="branch" placeholder="branch" value="{{$branch->branch}}">
            </div>
            <div class="mb-3">
                <label for="bransort" class="form-label">bransort</label>
                <input type="text" name= "bransort" class="form-control" id="bransort" placeholder="bransort" value="{{$branch->bransort}}">
            </div>
            
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Update</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('branch.update', $branch->id )}}">Back</a>
    </div> 


@endsection