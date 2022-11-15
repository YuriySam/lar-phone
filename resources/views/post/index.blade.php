
@extends('layouts.main')
@section('content')
    <div>
        <!-- for serch item began-->
            <script>
                function tableSearch() {
                    var phrase = document.getElementById('search-text');
                    var table = document.getElementById('serch-table');
                    var regPhrase = new RegExp(phrase.value, 'i');
                    var flag = false;
                    for (var i = 1; i < table.rows.length; i++) {
                        flag = false;
                        for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
                            flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
                            if (flag) break;
                        }
                        if (flag) {
                            table.rows[i].style.display = "";
                        } else {
                            table.rows[i].style.display = "none";
                        }

                    }
                }
                </script>
                <input class="form-control" type="text" placeholder="Пошук" id="search-text" onkeyup="tableSearch()">
        <!-- for serch item  end-->
</div>    

<div>


        <table class="table table-hover" id="serch-table">
  <thead>
    <tr>
      
      <th scope="col">Category</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">image</th>
      <th scope="col">likes</th>
      <th scope="col">is_published</th>

    </tr>
  </thead>

  

  <tbody>

    @foreach($posts as $post)
        <tr>
            
                
                <th> <a href="{{route('post.show', $post->id)}}"> {{$post->category->title}}</a> </th>
                <th> <a href="{{route('post.show', $post->id)}}"> {{$post->title}}</a> </th>
                <th> <a href="{{route('post.show', $post->id)}}"> {{$post->content}}</a></th>
                <td> <a href="{{route('post.show', $post->id)}}"> {{$post->image}} </a></td>
                <td> <a href="{{route('post.show', $post->id)}}"> {{$post->image}}</a></td>
                <td> <a href="{{route('post.show', $post->id)}}"> {{$post->is_published}}</a></td>
            
        </tr>
  
  @endforeach
   
  </tbody>
</table>
        
    </div>

   <div>
        <a href="{{route('post.create')}}">Add One</a>

    </div>
@endsection