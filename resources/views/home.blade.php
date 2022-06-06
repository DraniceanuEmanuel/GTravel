<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GTravel</title>


</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                @guest()
                <a class="nav-link" href="/register">Register</a>
                @endguest
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Log In</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        @foreach($test as $test)
        <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $test->title }}</h5>
                    <p class="card-text">{{$test->description}}</p>
                    <p class="card-text">{{$test->location}}</p>
                    <p class="card-text">{{$test->price}}</p>
                    @if(Auth::check())
                    <a href="#" class="btn btn-primary">Rezerva acum!</a>
                        @else
                        <p class="card-text">Pentru a rezerva trebuie sa va logati!</p>
                    @endif
                </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
