
@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Довідник Установ/Офісів </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"> </a>_</li>
                                <li class="breadcrumb-item active"> _</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        <!-- /.content-header -->
        
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
      <th scope="col">Назва</th>
      <th scope="col">Повна назва</th>
      {{-- <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
      <th scope="col">deleted_at</th> --}}

    </tr>
  </thead>

  

  <tbody>

    @foreach($offices as $office)
        <tr>
            
                <th> <a href="{{route('kmr.office.show', $office->id)}}"> {{$office->title}}</a> </th>
                <th> <a href="{{route('kmr.office.show', $office->id)}}"> {{$office->title_full}}</a></th>
                {{-- <td> <a href="{{route('kmr.office.show', $office->id)}}"> {{$office->created_at}} </a></td>
                <td> <a href="{{route('kmr.office.show', $office->id)}}"> {{$office->updated_at}}</a></td>
                <td> <a href="{{route('kmr.office.show', $office->id)}}"> {{$office->deleted_at}}</a></td> --}}
                
        </tr>
  
  @endforeach
   
  </tbody>
</table>
        
    </div>

   <div>
        <a href="{{route('kmr.office.create')}}" class="btn btn-primary mb-3">Додати</a>
         <a href="{{ route('kmr.appeal.index') }}" class="btn btn-primary mb-3">Повернутися</a>

    </div>
@endsection