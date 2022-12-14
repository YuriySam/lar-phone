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
    <div>

        <div>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('phone.index') }}">Phone</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('ophone.index') }}">Довідник(Ophone)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about.index') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('post.index') }}">Post</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('about.index') }}" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('about.index') }}">Action</a></li>
                                    <li><a class="dropdown-item" href="{{ route('about.index') }}">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('about.index') }}">About Something else
                                            here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('branch.index') }}">Відділ(Branch)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('func.index') }}">Посада(Func)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('quote.index') }}">Quote</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('category.index') }}">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tag.index') }}">Tag</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('message.index') }}">message</a>
                            </li>
                        </ul>

                        <form action="{{ route('message.store') }}" method="post" class="d-flex" role="search">
                            <input name="mess" class="form-control me-2" type="search" placeholder="Опис помилки"
                                aria-label="Search">
                            @error('mess')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <button class="btn btn-outline-success" type="submit">Є_помилка?</button>
                        </form>


                    </div>
                </div>
            </nav>




            <div>
                @yield('content')
            </div>





</body>

</html>
