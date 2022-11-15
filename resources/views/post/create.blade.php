
@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.store')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input  type="text" name= "title" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <input type="text" name= "content" class="form-control" id="content" placeholder="content" value="{{ old('content') }}">
                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" name= "image" class="form-control" id="image" placeholder="image" value="{{ old('image') }}">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="likes" class="form-label">likes</label>
                <input type="number" name= "likes" class="form-control" id="likes" placeholder="likes" value="{{ old('likes') }}">
                @error('likes')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="is_published" class="form-label">is_published</label>
                <input type="text" name= "is_published"class="form-control" id="is_published" placeholder="is_published" value="{{ old('is_published') }}">
                @error('is_published')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-control" aria-label="category"  name="category_id" id= "category">
                <option selected></option>
                @foreach($categories as $category)
                    <option 
                    {{old('category_id') == $category->id ? 'selected' : '' }}
                    value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
                </select>
                @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div><!--multiple select-->
                <label for="tags" class="form-label">Tags</label>
                <select class="form-select" multiple aria-label="tags" id= "tags" name= "tags_id[]">
                @foreach($tags as $tag)
                    <option 
                     {{old('category_id') == $category->id ? 'selected' : '' }}
                    value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
                </select>
                @error('tags_id[]')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Додати</button>      
            </div>
            



        </form> 
        
    </div>




    <div>
        this is phone page (post /  create.blad)

       



    </div>    


@endsection