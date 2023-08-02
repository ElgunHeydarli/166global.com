<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <title>{{$settings->title}}</title>
</head>
<body>
<header class="header_section">
    <div class="top_header">
        <div class="container">
            <div class="top_header_box">
                <div class="top_header_left">
                    <ul class="social_links">
                        <li>
                            <a href="{{$settings->facebook}}">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$settings->instagram}}">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{$settings->linkedin}}">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="top_header_right">
                    <div class="call_back">
                        <a href="tel:0000">
                            <i class="fas fa-phone-alt"></i>
                            <span>@lang('dil.Call back')</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom_nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('image/'.$settings->image)}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end w-100">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('index',app()->getLocale())}}">@lang('dil.Əsas səhifə') @endlang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about',app()->getLocale())}}">@lang('dil.Haqqımızda')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('blog',app()->getLocale())}}">@lang('dil.Xəbərlər')</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('contact',app()->getLocale())}}">@lang('dil.Əlaqə')</a>
                            </li>
                            <li class="nav-item lang-link-left">
                                <a class="nav-link" href="{{ route('index', ['lang'=>'az']) }}"><button
                                        @if (Config::get('app.locale') == 'az') class="active" @endif>Az</button></a>                            </li>
                            <li class="nav-item lang-link">
                                <a class="nav-link" href="{{ route('index', ['lang'=>'en']) }}"><button
                                        @if (Config::get('app.locale') == 'en') class="active" @endif>En</button></a>                            </li>
                            <li class="nav-item lang-link">
                                <a class="nav-link" href="{{ route('index', ['lang'=>'ru']) }}"><button
                                        @if (Config::get('app.locale') == 'ru') class="active" @endif>Ru</button></a>                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
