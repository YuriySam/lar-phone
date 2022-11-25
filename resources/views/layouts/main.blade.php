<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </link>
    <title>Document</title>
</head>

<body>
    

    <div role="navigation">
        
        <nav class="navbar navbar-expand-lg bg-light">
            <nav class="navbar bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="/phone.png" alt="Центр ШМД та МК" width="30" height="24"> Центр ШМД та МК
                </a>
            </div>
        </nav>
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('ophone.index') }}">Довідник</a>
                <!--<a class="navbar-brand" href="{{ route('branch.index') }}">Відділ(Branch)</a>-->
                <!--`<a class="navbar-brand" href="{{ route('func.index') }}">Посада(Func)</a>-->
                <a class="navbar-brand" href="{{ route('message.index') }}">Помилки які виправляються</a>
                <!--<a class="navbar-brand" href="{{ route('quote.index') }}">Мудрі вислови(Quote)</a>-->
                <!--<a class="nav-link "href="{{ route('about.index') }}">About</a>
                <a class="navbar-brand" href="{{ route('post.index') }}">Post</a>
                <a class="navbar-brand" href="{{ route('category.index') }}">Category</a>
                <a class="navbar-brand" href="{{ route('tag.index') }}">Tag</a>
                -->
                <div class="info">
                    
                    @if (isset(auth()->user()->name))
                                <a href="{{ route ('home')}}" class="d-block">{{ auth()->user()->name }}</a>
                                                         
                            @endif
                        
                    </div>
            </div>

        </nav>
        <a href="{{ route('message.create') }}">Є помилка? Додай запит на виправлення.</a>
    </div>
    <div>
        @yield('content')
    </div>





</body>

</html>
