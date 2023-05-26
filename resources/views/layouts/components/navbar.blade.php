<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
            </ul>
            <div class="text-end">

                @guest
                <a  href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                <a  href="{{ route('register') }}"class="btn btn-warning">Sign-up</a>
                @else
                <a  href="{{ route('logout') }}" class="btn btn-outline-light me-2" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
</header>
{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/stylee.css'); }}">   
</head>

<header class="header">
        <a href="#" class="logo">Poem Project</a>
        <nav class="navbar">
            <a href="#home" style="--i:4;" class="active">Home</a>
            <a href="#about" style="--i:5;" >About</a>
            <a href="#poem" style="--i:6;" >Poem</a>
            <a href="gallery" style="--i:7;" >Gallery</a>
            @guest
            <a  href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
            <a  href="{{ route('register') }}"class="btn btn-warning">Sign-up</a>
            @else
            <a  href="{{ route('logout') }}" class="btn btn-outline-light me-2" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
            <form action="{{ route('logout') }}" id="logout-form" method="POST">
            @csrf
            </form>
            @endguest

           
        </nav>
            <div class='bx bx-moon' id="darkMode-icon"></div>
            <div class='bx bx-menu' id="menu-icon"></div>
    </header>

    <script src="js/script.js"></script>
</body>
</html> --}}