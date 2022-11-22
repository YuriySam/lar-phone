
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
      <th scope="col">quote</th>
      

    </tr>
  </thead>

  

  <tbody>

    @foreach($quotes as $quote)
        <tr>
            
                <th> <a href="{{route('quote.show', $quote->id)}}"> {{$quote->quote}}</a> </th>
               
        </tr>
  
  @endforeach
   
  </tbody>
</table>
        
    </div>

   <div>
        <a href="{{route('quote.create')}}">Add One</a>

    </div>
@endsection