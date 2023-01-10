<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </link>
    <title>Довідник</title>

    <style>
        .fixed_header {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
           display: block;
                overflow-y: auto;
          height: 450px;    

        }
        
        
            .fixed_header tbody {
               
                width: 100%;
                
                
                /* overflow-x: auto;  */
                
            }

         /* .fixed_header thead {
            display:block;
            
        }  */

        

        /* .fixed_header th,
        .fixed_header td {
            padding: 5px;
            text-align: left;
            width: 100%;
        } */
        
         /* table фіксація першого стовпця у классі table*/
        .table  th:first-child,
        .table  td:first-child {
            position: sticky;
            left: 0;
            background-color: #a5cd83;
            color: #373737;
            
        }
        
        .table thead tr:first-child {
            position:sticky;
            top: 0;
            background-color:#a5cd83;
            color: #373737;
            z-index: 1;
        }
        /**/
        .fix_thead  tr:first-child{
            position:sticky;
            top: 0;
            background-color: #f0efc4;
            color: #373737;
            /* z-index: 1; */
        }
        
         /* /table фіксація першого стовпця у классі */

        /* обмеження таблиці по вертикалі з полосою прокрутки*/
        /* .table-vert {
            overflow-y: auto;
            /* height: 600px; */
            /* margin: 0 auto; */
        } */
        /* /обмеження таблиці по вертикалі з полосою прокрутки*/
        
    </style>
</head>

<body>


    <div role="navigation">

        <nav class="navbar navbar-expand-lg bg-light">
            <nav class="navbar bg-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="/dist/img/phone.png" alt="Центр ШМД та МК" width="30" height="24"> Центр ЕМД та
                        МК
                    </a>
                </div>
            </nav>
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('ophone.index') }}"><b>Довідник</b></a>
                <!--<a class="navbar-brand" href="{{ route('branch.index') }}">Відділ(Branch)</a>-->
                <!--`<a class="navbar-brand" href="{{ route('func.index') }}">Посада(Func)</a>-->
                {{-- <a class="navbar-brand" href="{{ route('message.index') }}">Помилки які виправляються</a> --}}
                <!--<a class="navbar-brand" href="{{ route('quote.index') }}">Мудрі вислови(Quote)</a>-->
                <!--<a class="nav-link "href="{{ route('about.index') }}">About</a>-->
                {{-- <a class="navbar-brand" href="{{ route('post.index') }}">Post</a> --}}

                {{-- {{dd(Auth()->user()->role)}} --}}
                {{-- {{dd('role',dirname(__DIR__),$_SERVER['DOCUMENT_ROOT'], dirname(dirname(dirname(__DIR__))), __DIR__)}}  --}}
                {{-- {{dd(route('ophone.index'))}} --}}


                @can('view', auth()->user())
                    <a class="navbar-brand" href="{{ route('kmr.appeal.index') }}"><b>Звернення</b></a>
                @endcan

                {{-- <!--<a class="navbar-brand" href="{{ route('category.index') }}">Category</a> --> --}}
                {{-- <a class="navbar-brand" href="{{ route('tag.index') }}">Tag</a> --}}
                <a class="navbar-brand" href="{{ route('message.create') }}">Є помилка? Додай запит на виправлення.</a>
                <div class="info">

                    @if (isset(auth()->user()->name))
                        <a href="{{ route('home') }}" class="d-block">{{ auth()->user()->name }}</a>
                    @endif

                </div>
            </div>

        </nav>

    </div>
    <div>
        @yield('content')
    </div>





</body>

</html>
