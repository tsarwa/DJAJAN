<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D'JAJAN</title>
    <link rel="stylesheet" href="bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style/navbar.css">
    <title>@yield('DJAJAN')</title>
</head>
<body>
    <nav>
        <header>
            <div class="navbar">
                <img src="logo.png" alt=" " width=" " height="70" class="d-inline-block align-text-top">
                <ul>
                    <li class="active"><a href="{{ URL('/home') }}">Beranda</a></li>
                    <li><a href="{{ URL('/regis') }}">Daftar</a></li>
                    <li><a href="{{ URL('/login') }}">Masuk</a></li>
                    <li><a href="{{ URL('/about') }}">About</a></li>
                </ul>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
            </div>
        </header>
    </nav>

        <div id="content">
          @yield('content')
        </div>
</body>
</html>