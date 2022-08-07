<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" sizes="32x32" href="/storage/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/storage/images/favicon-16x16.png">
    <link rel="shortcut icon" href="/storage/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/storage/images/favicon.ico" type="image/x-icon">

    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>AVA-GARANT</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/popup-style.css">
    <!-- style css -->
    <link rel="stylesheet" href="/css/style.css">
    @hasSection('css')
          @yield('css')
    @endif
    @hasSection('calculator_css')
        @yield('calculator_css')
    @endif
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">

<!--header for mobile\tablet with menu gamburger-->
<div class="topnav">
    <div class="container">
        <a href="{{ url('/') }}"><img src="/storage/images/logo.png" width="80" height="80" alt="#" /></a>
    </div>
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Каталог</a>
                <ul class="submenu">
                    @foreach($categories as $category)
                        <li><a href="{{ $category->url . '/' . $category->id}}">{{ $category->cat_name }}<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                @foreach($subcat as $sub)
                                    @if($sub->category_id == $category->id)
                                        <li><a href="/subcategory/{{ $sub->id }}">{{ $sub->subcat_name }}@if(!empty($sub->rulon_shtor))<span class="fa fa-angle-down"></span>@endif</a>
                                            @if(!empty($sub->rulon_shtor))
                                                <ul class="submenu">
                                                    <li><a href="/subcategory/{{ $sub->id }}/system_rulon">{{ $sub->rulon_shtor}}</a></li>
                                                    <li><a href="/subcategory/{{ $sub->id }}/system_gor">{{ $sub->gor_galuzi}}</a></li>
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Регионы</a>
                <ul class="submenu">
                    <li><a href="#">Симферополь<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 080-77-56</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Севастополь<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 740-62-03</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Ялта<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 080-77-56</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Алупка<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 740-62-03</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Гурзуф<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 080-77-56</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Евпатория<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 740-62-03</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Алушта<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 080-77-56</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Саки<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 740-62-03</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Белогорск<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 080-77-56</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Бахчисарай<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 740-62-03</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Судак<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 080-77-56</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Феодосия<span class="fa fa-angle-down"></span></a>
                        <ul class="submenu">
                            <li><a href="#">+7 (978) 080-77-03</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('prices') }}">Цены</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('calculator') }}">Калькулятор</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Контакты</a>
            </li>
        </ul>
    </div>
    <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="/storage/images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="/storage/images/logo.png" width="80" height="80" style="position: absolute;top: -16px;" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col">
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col">
                        <div class="none">
                            <p style="color: #f4cb1e;font-size: 20px"> Тел. +7 (978) 080-77-56</p>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col">
                        <div class="none">
                            <p style="color: #f4cb1e;font-size: 20px">Тел. +7 (978) 740-62-03</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('products') }}">Каталог</a>
                                    <ul class="submenu">
                                        @foreach($categories as $category)
                                            <li><a href="{{ $category->url . '/' . $category->id}}">{{ $category->cat_name }}<span class="fa fa-angle-down"></span></a>
                                                <ul class="submenu">
                                        @foreach($subcat as $sub)
                                                @if($sub->category_id == $category->id)
                                                        <li><a href="/subcategory/{{ $sub->id }}">{{ $sub->subcat_name }}@if(!empty($sub->rulon_shtor))<span class="fa fa-angle-down"></span>@endif</a>
                                                             @if(!empty($sub->rulon_shtor))
                                                                <ul class="submenu">
                                                                    <li><a href="/subcategory/{{ $sub->id }}/system_rulon">{{ $sub->rulon_shtor}}</a></li>
                                                                    <li><a href="/subcategory/{{ $sub->id }}/system_gor">{{ $sub->gor_galuzi}}</a></li>
                                                                </ul>
                                                             @endif
                                                        </li>
                                                @endif
                                        @endforeach
                                                </ul>
                                            </li>
                                    @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Регионы</a>
                                    <ul class="submenu">
                                        <li><a href="#">Симферополь<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 080-77-56</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Севастополь<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 740-62-03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Ялта<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 080-77-56</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Алупка<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 740-62-03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Гурзуф<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 080-77-56</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Евпатория<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 740-62-03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Алушта<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 080-77-56</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Саки<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 740-62-03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Белогорск<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 080-77-56</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Бахчисарай<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 740-62-03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Судак<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 080-77-56</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Феодосия<span class="fa fa-angle-down"></span></a>
                                            <ul class="submenu">
                                                <li><a href="#">+7 (978) 080-77-03</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('prices') }}">Цены</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('calculator') }}">Калькулятор</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contact') }}">Контакты</a>
                                </li>
                                <li class="nav-item d_none">
                                    <a class="nav-link" href="https://vk.com/ava.garant"><img src="/storage/images/vk-circled.png" width="30" style="position: absolute;top: 10px;" alt="#" /></a>
                                </li>
                                <li style="width: 300px">
                                    <a class="popup-modal button" href="#form">Обратный звонок</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
