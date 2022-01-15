<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Presioso</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Presioso ">
    <meta name="keywords" content="Presioso">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Didact+Gothic&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    {{--<link rel="stylesheet" href="style.css">--}}


    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/stil.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>


    <!--[if lt IE 9]>
    <script src="{{ asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
    <script src="{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="{{route('/index')}}" class="site-logo">
                        <img src="img/logo.png" alt="">
                    </a>

                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form">
                        <input type="text" placeholder="Поиск в precioso ....">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5 ">
                    <div class="user-panel">
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="{{route('login')}}">Вход</a>&emsp;&emsp;<a href="{{route('register')}}">Регистрация</a>
                        </div>
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                <span>{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity()}}</span>
                            </div>
                            <a href="/cart">Корзина</a>
                        </div>
                        <div class="up-item">
                            <a href="tg://resolve?domain=Presios_o">+380630511778
                            <img src="img/telegram-28x28.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li><a href="{{route('/index')}}">Главная</a></li>
                <li><a href="{{route('/products')}}">Платья</a>
                    <ul class="sub-menu">
                        <li><a href="http://127.0.0.1:8000/products/1">Женские платья</a></li>
                        {{--<li><a href="http://127.0.0.1:8000/products/2">Коктейльные платья</a></li>
                        <li><a href="http://127.0.0.1:8000/products/3">Выпускные платья</a></li>
                        <li><a href="http://127.0.0.1:8000/products/4">маленькие черные платья</a></li>
                        <li><a href="http://127.0.0.1:8000/products/5">короткие платья</a></li>--}}
                    </ul>
                </li>
                <li><a href="#">Женские костюмы</a>
                    <ul class="sub-menu">
                        <li><a href="http://127.0.0.1:8000/products/2">Брючный костюм</a></li>
                        <li><a href="http://127.0.0.1:8000/products/3">Костюм тройка</a></li>
                        <li><a href="http://127.0.0.1:8000/products/4">Замшевый костюм</a></li>
                        {{--<li><a href="#">Little Black Dresses</a></li>
                        <li><a href="#">Mini Dresses</a></li>--}}
                    </ul>
                </li>

                <li><a href="#">Платья миди<span class="new">New</span></a>
                     <ul class="sub-menu">
                        <li><a href="http://127.0.0.1:8000/products/5">Коктельные платья</a></li>
                        <li><a href="http://127.0.0.1:8000/products/6">Повседневные платья</a></li>
                        <li><a href="http://127.0.0.1:8000/products/7">Платья с кружевом</a></li>
                        {{--<li><a href="#">сапоги</a></li>
                        <li><a href="#">шлепки</a></li>--}}
                     </ul>
                </li>
                <li><a href="#">Женские брюки</a>
                    <ul class="sub-menu">
                        <li><a href="#">Женские брюки</a></li>
                        <li><a href="http://127.0.0.1:8000/products/8">Женские шорты</a></li>
                        <li><a href="http://127.0.0.1:8000/products/9">Женские футболки</a></li>
                        {{--<li><a href="#">сапоги</a></li>
                        <li><a href="#">шлепки</a></li>--}}
                    </ul>
                </li>
                <li><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('/product')}}">Product Page</a></li>
                        <li><a href="#">Category Page</a></li>
                        <li><a href="{{route('/cart')}}">Cart Page</a></li>
                        <li><a href="{{route('/checkout')}}">Checkout Page</a></li>
                        <li><a href="#">Contact Page</a></li>
                    </ul>
                </li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
    </nav>
</header>
