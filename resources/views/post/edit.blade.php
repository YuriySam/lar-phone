
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.update', $post->id)}}" method= "post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" name= "title" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <input type="text" name= "content" class="form-control" id="content" placeholder="content" value="{{$post->content}}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" name= "image" class="form-control" id="image" placeholder="image" value="{{$post->image}}">
            </div>
            <div class="mb-3">
                <label for="likes" class="form-label">likes</label>
                <input type="number" name= "likes" class="form-control" id="likes" placeholder="likes" value="{{$post->likes}}">
            </div>
            <div class="mb-3">
                <label for="is_published" class="form-label">is_published</label>
                <input type="text" name= "is_published"class="form-control" id="is_published" placeholder="is_published" value="{{$post->is_published}}">
            </div>
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Update</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('post.update', $post->id )}}">Back</a>
    </div> 


@endsection