@extends('layouts.master')

    {{--@php--}}
    {{--dump($categories);--}}
    {{--die;--}}
    {{--@endphp--}}

@section('content')

    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="text-bg">
                        <h1>AVA-GARANT</h1>
{{--                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it</p>--}}
                        <a href="#">БЕСПЛАТНЫЙ ЗАМЕР</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- three_box -->
    <div class="three_box">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box_text">
                        <figure><a href="#"><div class="index_img">ПОТОЛКИ</div><img src="storage/images/natyaznie_potolki_index.jpg" width="350" height="245" alt="#"/></a></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_text">
                        <figure><div class="index_img">ЖАЛЮЗИ</div><img src="storage/images/shtori_index.jpg" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_text">
                        <figure><div class="index_img">КОДИЦИОНЕРЫ</div><img src="storage/images/Tosot Lord Euro II T24H-SLEu2-I - T24H-SLEu2-O.jpg" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- three_box -->
    <!-- hottest -->
    <div  class="hottest">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>компания<br>AVA GARANT</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="hottest_box">
                        <p>Доверьте нашей компании! Профессиональная команда выполнит работы точно по желанию заказчика в соответствии со всеми технологическими нормативами. Мы готовы проработать состав работ и материалов в зависимости от вашего бюджета. Мы подскажем на чем лучше сэкономить, а на чем этого делать не следует. Вам не нужно опасаться, что экономия приведет к потере качества. Мы гибко оптимизируемся под ваш бюджет, но с сохранением гарантии качества. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- end hottest -->
    <!-- choose  section -->
    <div class="choose ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="titlepage">
                        <h2>Почему выбираете нас?</h2>
                        <p>Мы готовы проработать состав работ и материалов в зависимости от вашего бюджета. Мы подскажем на чем лучше сэкономить, а на чем этого делать не следует. Вам не нужно опасаться, что экономия приведет к потере качества. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="padding_with">
                        <div class="row">
                            <div class="col-md-6 padding_bottom">
                                <div class="choose_box">
                                    <i style="width: 130px;"><img src="storage/images/Tilda_Icons_21re_dismantling.svg" alt="#"/></i>
                                    <div class="choose_text">
                                        <h3>Напрямую от производителя</h3>
                                        <p>Цены выгоднее на 15%. Вам не нужно переплачивать за услуги посредников.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding_bottom">
                                <div class="choose_box">
                                    <i style="width: 95px;"><img src="storage/images/Tilda_Icons_21re_redecorating.svg" alt="#"/></i>
                                    <div class="choose_text">
                                        <h3>Более 300 цветов</h3>
                                        <p>В наличии большой выбор расцветки и материалов.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding_bottom">
                                <div class="choose_box">
                                    <i style="width: 55px;"><img src="storage/images/Tilda_Icons_21re_hammer.svg" alt="#"/></i>
                                    <div class="choose_text">
                                        <h3>Монтаж от 1 часа</h3>
                                        <p>Выезд в удобное для Вас время.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding_bottom">
                                <div class="choose_box">
                                    <i style="width: 77px;"><img src="storage/images/Tilda_Icons_21re_guarantee.svg" alt="#"/></i>
                                    <div class="choose_text">
                                        <h3>Гарантии от 12 месяцев</h3>
                                        <p>На всю продукцию и работу даем гарантию.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="choose_box">
                                    <i style="width: 55px;"><img src="storage/images/Tilda_Icons_21re_quality.svg" alt="#"/></i>
                                    <div class="choose_text">
                                        <h3>Профессионализм</h3>
                                        <p>Опыт работы более 12 лет</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="choose_box">
                                    <i style="width: 60px;"><img src="storage/images/Tilda_Icons_21re_estimate.svg" alt="#"/></i>
                                    <div class="choose_text">
                                        <h3>Честная смета</h3>
                                        <p>Фиксированная цена при замере</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="choose_img">
                        <figure><img src="storage/images/why_choose_us.jpg" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <a class="read_more" href="{{ url('about') }}">Читать больше</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end choose  section -->
    <!-- product  section -->
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="titlepage">
                        <h2>Наши работы</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_left0">
                    <div class="product_box">
                        <figure><img src="storage/images/nasha_rabota_1.jpg" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="product_box">
                        <figure><img src="storage/images/nasha_rabota_4.jpg" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 padding_right0">
                    <div class="product_box">
                        <figure><img src="storage/images/work_2.jpg" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 padding_left0">
                    <div class="product_box">
                        <figure><img src="storage/images/gor_pot.jpg" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 padding_right0">
                    <div class="product_box">
                            <figure><img src="storage/images/work_5.jpg" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product  section -->
    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Отзывы наших клиентов</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide about_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption ">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="test_box">
                                                    <i><img src="storage/images/tes1.png" alt="#"/></i>
                                                    <h4>ОЛЕГ Галимурза</h4>
                                                    <p>Ну это просто ШИКАРДОООООоооооос, я в просто в шоооке, супер круто. Молодцы вааааще ребята, вот это они БАЦАЮТ. Прооосттооо уллёёёт. Вот пришли и БааЦ потолок УУххххх. АГОооНь ваааще!!!!!! Валят рубята потолки)))) Надо брать!!! ДАЁШЬ ПОТОЛОК ЗА ЧАС!!! Ухххххххххххххххххххххх..... </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="test_box">
                                                    <i><img src="storage/images/tes1.png" alt="#"/></i>
                                                    <h4>Валя Квартиркина</h4>
                                                    <p>Ну это просто ШИКАРДОООООоооооос, я в просто в шоооке, супер круто. Молодцы вааааще ребята, вот это они БАЦАЮТ. Прооосттооо уллёёёт. Вот пришли и БааЦ потолок УУххххх. АГОооНь ваааще!!!!!! Валят рубята потолки)))) Надо брать!!! ДАЁШЬ ПОТОЛОК ЗА ЧАС!!! Ухххххххххххххххххххххх..... </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="test_box">
                                                    <i><img src="storage/images/tes1.png" alt="#"/></i>
                                                    <h4>ОЛЕГ</h4>
                                                    <p>Ну это просто ШИКАРДОООООоооооос, я в просто в шоооке, супер круто. Молодцы вааааще ребята, вот это они БАЦАЮТ. Прооосттооо уллёёёт. Вот пришли и БааЦ потолок УУххххх. АГОооНь ваааще!!!!!! Валят рубята потолки)))) Надо брать!!! ДАЁШЬ ПОТОЛОК ЗА ЧАС!!! Ухххххххххххххххххххххх..... </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    </div>

@endsection
