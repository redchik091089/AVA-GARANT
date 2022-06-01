<footer id="contact">
    <!-- А это код формы в «обёртке» -->

    <div id="magnific-modal" class="white-popup-block mfp-hide clearfix">

        <div class="mfpcontentBorder">

            <a class="popup-modal-dismiss" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>

            <form id="form">
                @csrf

                <p class="title">Оставьте ваш номер<br> и мы перезвоню вам</p>

                <input type="text" class="putName" name="name" placeholder="Ваше имя" required>

                <input type="tel" class="putPhone" name="phone" placeholder="Ваш телефон" required>

                {{--                                    <input type="datetime-local" class="putNumber" name="date" value="2017-12-09">--}}

                <input type="submit" name="submit" class="btn" value="ЗАКАЗАТЬ ЗВОНОК">

                <input type="hidden" name="formData" value="Заявка с сайта">

            </form>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="titlepage">
                        <h2>Контакты</h2>
                    </div>
                </div>
                <div class="col-md-12">

                </div>
                <div class="col-md-3 border_right">
                    <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> ул.Ленина 39</li>
                        <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> +7 (978) 080-77-56</li>
                        <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> +7 (978) 740-62-03</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>info@ava-garant.ru</li>
                    </ul>
                </div>
                <div class="col-md-3 border_right">
                    <h3>Полезные ссылки</h3>
                    <ul class="link">
                        <li><a href="#">humour, or </a></li>
                        <li><a href="#">randomised words </a> </li>
                        <li><a href="#">which don't look </a></li>
                        <li><a href="#">even slightly  </a> </li>
                        <li><a href="#">believable. If   </a></li>
                    </ul>
                </div>
                <div class="col-md-3 border_right">
                    <h3>Меню</h3>
                    <ul class="link">
                        <li><a href="{{ url('index') }}">Главная</a></li>
                        <li><a href="{{ url('products') }}">Каталог</a></li>
                        <li>
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
                        <li><a href="{{ url('prices') }}">Цены</a></li>
                        <li><a href="{{ url('blog') }}">Калькулятор</a></li>
                        <li><a href="{{ url('contact') }}">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>О нас</h3>
                    <ul>
                        <li>
                            <p style="color: white; text-align: left">Мы готовы проработать состав работ и материалов в зависимости от вашего бюджета. Мы подскажем на чем лучше сэкономить, а на чем этого делать не следует. Вам не нужно опасаться, что экономия приведет к потере качества.</p>
                        </li>
                        <li style="width:300px; padding-top: 22px; padding-right: 8px">
                            <a class="popup-modal button" href="#form">Обратный звонок</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright 2022 All Right Reserved By AVA-GARANT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/maskedinput.min.js"></script>
<script>
    $('input[name="phone"]').mask("+7 (999) 999-99-99");

    $(function () {
        $('.popup-modal').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#username',
            modal: false,
            showCloseBtn: true
        });
        $(document).on('click', '.popup-modal-dismiss', function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    });

    //E-mail Ajax Send

    $("#form").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "/recall", //Change
            data: th.serialize()
        }).done(function(data) {
            console.log(data);
            alert("Спасибо за обращение! Ждите звонка ближайшее время.");
            location.reload();
        });
        return false;
    });


</script>
<!-- sidebar -->
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
@hasSection('tag_js')
    @yield('tag_js')
@endif
<script src="/js/custom.js"></script>
</body>
</html>
