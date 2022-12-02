
@extends('layouts.admin')
@section('content')
    <div>
        <form action="{{route('admin.office.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" name= "title" class="form-control" id="title" placeholder="title" >
            </div>
           <div class="mb-3">
                <label for="title_full" class="form-label">title_full</label>
                <input type="text" name= "title_full" class="form-control" id="title_full" placeholder="title_full" >
            </div>
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>      
            </div>
        </form> 
        
    </div>



@endsection