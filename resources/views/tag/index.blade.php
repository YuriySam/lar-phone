
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
      <th scope="col">title</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">deleted_at</th>

    </tr>
  </thead>

  

  <tbody>

    @foreach($tags as $tag)
        <tr>
            
                <th> <a href="{{route('tag.show', $tag->id)}}"> {{$tag->title}}</a> </th>
                <td> <a href="{{route('tag.show', $tag->id)}}"> {{$tag->created_at}} </a></td>
                <td> <a href="{{route('tag.show', $tag->id)}}"> {{$tag->updated_at}}</a></td>
                <td> <a href="{{route('tag.show', $tag->id)}}"> {{$tag->deleted_at}}</a></td>
                
        </tr>
  
  @endforeach
   
  </tbody>
</table>
        
    </div>

   <div>
        <a href="{{route('tag.create')}}">Add One</a>

    </div>
@endsection