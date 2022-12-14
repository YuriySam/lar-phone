@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> ---</h1>
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

        <div class="mb-3">
            <?php if (isset($datadata)): ?>
            <p > Нумерологічний стан на дату {{ date_format($datadata, 'd-m-Y')}}   </p>
            
        </div>
        <div>
  <table class="table table-hover" id="serch-table">
  <thead>
    <tr>

      <th scope="col">день</th>
      <th scope="col">місяць</th>
      <th scope="col">рік</th>
      
    </tr>
  </thead>
  <tbody>
      <tr>
            <th> {{$dayNumber}}</th>
            <th> {{$monthNumber}}</th>
            <td> {{$yearNumber}} </td>
            
           <!--</a>  -->
      </tr>
  </tbody>
</table>
<?php endif ?>
<div>


<div>
        <form action="{{route('admin.numerology.calculateset')}}" method= "post">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">Введіть дату народження</label>
                <input type="date" name= "dataBirthday" class="form-control" id="dataBirthday" placeholder="dataBirthday" >
            </div>
           
            
            <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Розрахувати нумерологічний гороскоп</button>      
            </div>
        </form> 
        
    </div>
    <div>
        <a href="{{route('admin.numerology.index')}}">Back</a>

 </div>


@endsection
