@extends('layouts.master')



@section('content')

<div class="container">
    <div class="titlepage">
        <h2>Напишите нам</h2>
    </div>
    <div class="row">
        <div class="col-md-8">
            <form id="request" class="main_form">
                <div class="row">
                    <div class="col-md-3 ">
                        <input class="contactus" placeholder="Имя" type="type" name="Full Name">
                    </div>
                    <div class="col-md-3">
                        <input class="contactus" placeholder="Ваш Email" type="type" name="Email">
                    </div>
                    <div class="col-md-3">
                        <input class="contactus" placeholder="Ваш номер телефона" type="type" name="Phone Number">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <ul class="social_icon">
                            <li>
                                <a class="nav-link" href="https://vk.com/ava.garant"><img src="storage/images/vk-circled.png" width="30" style="position: absolute;top: 10px;" alt="#" /></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <textarea class="contactus1" placeholder="Сообщение" type="type" Message="Name"></textarea>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" style="padding-right: 20px;">
                        <button class="send_btn">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4" style="padding-bottom: 30px; padding-left: 0px;">
            <p><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7c17dd550bf7a4e621989f41ecca4ae856c03eafa47473ab36620166aaaa8ec8&amp;source=constructor" width="370" height="300" frameborder="0"></iframe></p>
        </div>
    </div>
</div>

@endsection
