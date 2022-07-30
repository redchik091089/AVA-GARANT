@extends('layouts.master')


@section('content')

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>О нас</h2>

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
                                                    <h4>Валерия М.</h4>
                                                    <p>Спасибо профессионалам!
Хочу сказать, побольше бы таких спецов! Рассчитали потолки на кухню, ванну и в коридор. Все подробно объяснили по материалу, ценам, дали выбрать цвет потолка да еще и светильники подобрали под  мои комнаты! Монтажники приехали во время. Все установили быстро и качественно. Спасибо.</p>
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
                                                    <h4>Константин Ц.</h4>
                                                    <p>Заказывали у этой фирмы натяжной потолок в зал и спальню своей новенькой квартиры. Все сделали аккуратно и хорошо. Потолки очень красивые и качественные, запаха совсем не было ни на монтаже ни после (делали Bauf), нишиевые конструкции выполнены идеально,  сделали быстро и достаточно чисто. Результатом, я доволен на все 100 процентов. </p>
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
                                                    <h4>Максим М.</h4>
                                                    <p>Нам надо было срочно сделать косметический ремонт в спальне - переклеить обои и поставить натяжные потолки. Многие фирмы при обращении отказывали по срокам, графики рабочих уже расписаны, а здесь вошли в положение. За что большое спасибо! Сделали все запланированное за три дня и по адекватной... </p>
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


@endsection
