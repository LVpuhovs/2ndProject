<!doctype html>
<html lang="lv">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Project 2 - {{ $title }}</title>
    <img src="/loading.gif" alt="Loading..." id="loading-indicator" style="display: none;">
    <meta name="description" content="Tīmekļa Tehnoloģiju 2. praktiskais darbs">

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous"
>
</head>

<body>

    <nav class="navbar bg-primary mb-3" data-bs-theme="dark">
        <header class="container">
        <nav class="navbar navbar-expand-md bg-primary mb-3" data-bs-theme="dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Project 2</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
            @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/authors">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/genres">Genres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/books">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Log out</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Log in</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
        </header>
    </nav>

    <main class="container">
        <div class="row">
            <div class="col">

                @yield('content')
            </div>
        </div>
    </main>

    <footer class="text-bg-dark mt-3">
        <div class="container">
            <div class="row py-5">
                <div class="col">

                    M.Puhovs, 2024
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eedCIJXK9lFOE4HzfuN+Lxk+YoCWYp25BZRdDhGg6mdfcWlr50C5FaQ1P00NZAsj" crossorigin="anonymous"></script>
    <script src="./js/admin.js"></script>
</body>

</html>
