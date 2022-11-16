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
                <a class="navbar-brand" href="#">
                    <img src="/phone.png" alt="Центр ШМД та МК" width="30" height="24"> Центр ШМД та МК
                </a>
            </div>
        </nav>
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('ophone.index') }}">Довідник(Ophone)</a>
                <a class="navbar-brand" href="{{ route('branch.index') }}">Відділ(Branch)</a>
                <a class="navbar-brand" href="{{ route('func.index') }}">Посада(Func)</a>
                <a class="navbar-brand" href="{{ route('message.index') }}">message</a>
                <a class="navbar-brand" href="{{ route('quote.index') }}">Quote</a>
                <a class="navbar-brand" href="{{ route('about.index') }}">About</a>
                <a class="nav-link " href="{{ route('post.index') }}">Post</a>
                <a class="nav-link " href="{{ route('category.index') }}">Category</a>
                <a class="nav-link " href="{{ route('tag.index') }}">Tag</a>

            </div>

        </nav>
        <a href="{{ route('message.create') }}">Є помилка? Додай запит на виправлення.</a>
    </div>
    <div>
        @yield('content')
    </div>





</body>

</html>
