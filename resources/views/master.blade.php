<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}css/style.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('series')}}" class="nav-link">Series</a></li>
            <li><a href="{{route('calculator')}}" class="nav-link">Calculator</a></li>
            <li><a href="{{route('password')}}" class="nav-link">Password</a></li>
            <li><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
            <li><a href="{{route('number')}}" class="nav-link">Number</a></li>
        </ul>
    </div>
</nav>
<div class="carousel slide" data-ride="carousel" data-interval="1800" data-target="#slider">
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1" class=""></li>
        <li data-target="#slider" data-slide-to="2" class=""></li>
        <li data-target="#slider" data-slide-to="3" class=""></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('/img/3.jpg')}}" alt="" class="w-100" style="height: 550px;">
            <div class="carousel-caption">
                <h1>This Is A Child Book</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at autem blanditiis cum cumque deleniti enim, excepturi facilis fuga ipsa iure laudantium maxime perferendis provident quae quis saepe sed sit?</p>
                <a href="" class=" btn btn-outline-success">Read More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('/img/4.jpg')}}" alt="" class="w-100" style="height: 550px;">
            <div class="carousel-caption">
                <h1>This Is A Child Book</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at autem blanditiis cum cumque deleniti enim, excepturi facilis fuga ipsa iure laudantium maxime perferendis provident quae quis saepe sed sit?</p>
                <a href="" class="btn btn-outline-success">Read More</a>
            </div>
        </div>
        <div class="carousel-item ">
            <img src="{{asset('/img/5.jpg')}}" alt="" class="w-100" style="height: 550px;">
            <div class="carousel-caption">
                <h1>This Is A Child Book</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at autem blanditiis cum cumque deleniti enim, excepturi facilis fuga ipsa iure laudantium maxime perferendis provident quae quis saepe sed sit?</p>
                <a href="" class=" btn btn-outline-success">Read More</a>
            </div>
        </div>
        <div class="carousel-item ">
            <img src="{{asset('/img/6.jpg')}}" alt="" class="w-100" style="height: 550px;">
            <div class="carousel-caption">
                <h1>This Is A Child Book</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at autem blanditiis cum cumque deleniti enim, excepturi facilis fuga ipsa iure laudantium maxime perferendis provident quae quis saepe sed sit?</p>
                <a href="" class=" btn btn-outline-success">Read More</a>
            </div>
        </div>
    </div>
</div>
@yield('body')


<script src="{{asset('/')}}js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
