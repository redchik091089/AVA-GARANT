@extends('layouts.master')

@section('css')

    <link rel="stylesheet" href="css/styleprices.css">

@endsection


@section('content')

    <div class="page-content shadow">
        <div class="main" itemscope="" itemtype="http://schema.org/Article">

<span itemprop="publisher" itemscope="" itemtype="http://schema.org/Organization">
<meta itemprop="name" content="Star-Potolok">
<span itemprop="logo" itemscope="" itemtype="http://schema.org/ImageObject">
<link itemprop="url" href="https://star-potolok.ru/image/data/logo.jpg">
</span>
</span>

            <meta itemprop="author" content="Star-Potolok">
            <meta itemprop="datePublished" content="2019-05-08 03:41:49">

            <div class="article-form">
                <div class="order-block">
                    <div class="order-block-pad">
                        <div class="h3">Заказать натяжной потолок от 290 руб./м<sup>2</sup></div>
                        <p>Заполните поля ниже, и наши менеджеры обязательно свяжутся с вами и ответят на все интересующие вас вопросы</p>
                        <form class="product" action="https://star-potolok.ru/index.php?route=information/contact/order" onsubmit="sendForm(this);return false;">
                            <input type="hidden" name="form_type" value="consult">
                            <input type="text" value="" name="name" placeholder="Ваше имя">
                            <input type="text" value="" name="phone" class="phone-input" placeholder="Телефон">
                            <div>
                                <input name="pconf" id="article-form-pconf" type="checkbox" checked="" required=""> <label for="article-form-pconf">Даю согласие на обработку <a target="_blank" href="/politika-konfidentsialnosti/">персональных данных</a></label>
                            </div>
                            <div id="product_captcha"></div>
                            <input type="submit" value="Отправить" onclick="yaCounter40424600.reachGoal('zakaz-potolka'); return true;">
                        </form>
                    </div>
                </div>

            </div>

            <h1 itemprop="headline name">Двухуровневые натяжные потолки с подсветкой </h1>
            <div itemprop="articleBody">
                <div class="prodsflex mainflex">
                    <div class="prodflex_left gallery-box">
                        <a href="storage/images/work_1.jpg" onclick="return hs.expand(this);"><img alt="" class="lazy" data-="" src="storage/images/work_1.jpg" style="max-width:100%;height:auto"> </a></div>
                    <div class="prodsflex_right">
                        <div class="tablewrap"><table class="prime_table">
                                <tbody>
                                <tr>
                                    <td>
                                        Где установлен (помещение)</td>
                                    <td>
                                        столовая</td>
                                </tr>
                                <tr>
                                    <td>
                                        Размер помещения</td>
                                    <td>
                                        17 м2</td>
                                </tr>
                                <tr>
                                    <td>
                                        Полотно</td>
                                    <td>
                                        Pongs</td>
                                </tr>
                                <tr>
                                    <td>
                                        Профиль</td>
                                    <td>
                                        алюминий</td>
                                </tr>
                                <tr>
                                    <td>
                                        Количество встраиваемых светильников шт.</td>
                                    <td>
                                        10</td>
                                </tr>
                                <tr>
                                    <td>
                                        Диодная лента (если использовалась) сколько м.п.</td>
                                    <td>
                                        16</td>
                                </tr>
                                <tr>
                                    <td>
                                        Стоимость руб.</td>
                                    <td>
                                        33000</td>
                                </tr>
                                </tbody>
                            </table></div>
                    </div>
                </div>
            </div>
            <br clear="all">


            <br>





        </div>
    </div>

@endsection


@section('tag_js')

    <script src="js/tag.js"></script>

@endsection
