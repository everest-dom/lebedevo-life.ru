﻿<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <title>Коттеджный поселок Лебедево Лайф</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">    
	<link rel="stylesheet" href="style.v1.css">
    <link rel="stylesheet" href="media.v1.css">
    <link rel="stylesheet" href="animate.css" media="none" onload="if(media!='all')media='all'"><noscript><link rel="stylesheet" href="animate.css"></noscript>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MVQVTLC');
    </script>
    <!-- End Google Tag Manager -->

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVQVTLC" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- =========== Начало header =========== -->
    <!-- <style>
        .preloader__container {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            background-color: #518b4d;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .preloader__container.active {
            opacity: 1;
        }
        .preloader {
        position: relative;
        width: 40px;
        height: 40px;
        margin: auto;
        border: 3px solid #fff;
        border-radius: 50%;
        }

        .preloader:before,
        .preloader:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 5px;
            background-color: #fff;
        }

        .preloader:before {
            transform: translate(-50%, -50%) rotate(90deg);
        }
        .preloader__container.active .preloader {
        animation: rotate 1s ease-in-out infinite running;
        }
        .preloader__wrap {
        display: flex;
        max-width: 50px;
        max-height: 50px;
        margin: auto;
        }
        @keyframes rotate {
        0% {
            transform: rotate(0);
        }
        100% {
            transform: rotate(360deg);
        }
    }
    </style> -->
    <!-- <div class="preloader__container active">
        <div class="preloader__wrap">
            <div class="preloader"></div>
        </div>
    </div> -->
    <!-- <script>
        document.addEventListener('ready', () => document.querySelector('.preloader__container').classList.remove('active'));
    </script> -->
    <section id="header" style="position:relative">
        <picture>
            <source media="(max-width: 580px)" srcset="./img/bg_new_phone.jpg">
            <img class="header__bg" style="position:absolute;visibility:hidden" src="./img/bg_new.jpg" width="0" height="auto" alt="Коттедж для всей семъи">
        </picture>
        <div class="hero__wrap">
            <div class="container cont-pos">
                <div class="row">
                    <div class="header_col">
                        <div class="looked-heading__wrap">
                        <div class="header-top">
                            <div class="header-top_left">
                                <img src="img/logo_2.svg" alt="" class="header-top_left_img">
                            </div>
                            <div class="header-top_right">
                                <p class="contant_info_tel contant_info_tel_white "><a href="tel:84852684176" class="phone_alloka">8 (4852) 68-41-76 </a><br><span>ежедневно с 9 до 18</span></p><br>
                                <a href="#15_plus" class="button_red" data-toggle="modal" class="item_button">записаться на просмотр</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- end header top -->
                        <h1 class="header_h1">Неповторимый коттеджный поселок <br> для комфортной жизни <br>всей семьи в Ярославле</h1>
                        <p class="looked-subtitle">Гибкие условия продажи.</p>
                        </div>
                    </div>
                </div>
                <!-- end action home -->
            </div>
            </div>
    </section>
    <!-- =========== Конец header  =========== -->
  <!-- =========== Начало main menu =========== -->
    <div class="main_menu RBsticky-element">
        <div class="container">
            <div class="sandwich-button">
                <div class="sandwich-menu"></div>
                <div class="sandwich-menu"></div>
                <div class="sandwich-menu"></div>
            </div>
            <div class="main_menu_left">
                <a href="#header" class="toplink"><img src="img/logo_min_2.svg" alt="" class="logo_min"></a>
            </div>

            <div class="contant_info">
                <p class="contant_info_tel">
                	<img src="img/tel_min.png" alt="" class="contant_info_tel_img">
                    <a class="phone_alloka" href="tel:+74852440202">+7 (4852) 44-02-02</a>
                    <span style="color:#fff;text-align:left;"> ежедневно с 9 до 18</span>
                </p>
                <a href="#15_plus" class="contant_info_a" data-toggle="modal" class="item_button">заказать звонок</a>
            </div>
            <a href="#Genplan" class="genplan_wrap" data-toggle="modal" class="item_button">
                <img src="img/genplan_link.png" alt="">
                <p class="genplan_p">Генплан<br> поселка</p>
            </a>
            <ul class="main_menu_ul">
                <li><a href="#section2" class="toplink">Коммуникации</a></li>
                <li><a href="#section3" class="toplink">Инфраструктура</a></li>
                <li><a href="#section5" class="toplink">Планировки с ценами</a></li>
                <li><a href="#section6" class="toplink">Отзывы</a></li>
                <li><a href="#section8" class="toplink">Контакты</a></li>
            </ul>
                <!-- end ul -->
            <!-- end main menu right -->
            <div class="clearfix"></div>
        </div>
        <!-- end container -->

    </div>
    <!-- =========== Конец main menu  =========== -->

    <!-- =========== Начало section2 =========== -->
    <section id="section2">
        <div class="container">
            <h2 class="h2_main h2_main_white">Почему он один такой или<br> 23 причины приехать посмотреть
            </h2>
            <div class="row row_section_2">
                <div class="col-md-4 col-sm-6 col-xs-6 col-numbers">
                    <p class="bg_numbers_p">1</p>
                    <div class="numbers_content_wrap">
                        <p class="numbers_title_p">Закрытый коттеджный<br> поселок с видеонаблюдением<br> в черте города</p>
                        <p class="numbers_sub-title_p">Коттеджный поселок по периметру огорожен 3 метровым забором и будет закрываться на ночь. Для гостей выполнена гостевая парковка.</p>

                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4 col-sm-6 col-xs-6 col-numbers">
                    <p class="bg_numbers_p">2</p>
                    <div class="numbers_content_wrap">
                        <p class="numbers_title_p">Детский городок и<br> спортивная площадка<br> на территории поселка</p>


                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4 col-sm-6 col-xs-6 col-numbers">
                    <p class="bg_numbers_p">3</p>
                    <div class="numbers_content_wrap">
                        <p class="numbers_title_p">Дороги с уличным<br> освещением, которые<br> чистятся </p>


                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4 col-sm-6 col-xs-6 col-numbers">
                    <p class="bg_numbers_p">4</p>
                    <div class="numbers_content_wrap">
                        <p class="numbers_title_p">Тарифы и налоги меньше,<br> а пользуетесь всеми<br> городскими удобствами</p>
                        <p class="numbers_sub-title_p">Категория земли – ИЖС. У вас будет сельская прописка, тарифы и налоги. А пользоваться будете всеми городскими удобствами – сады, школы, магазины и аптеки в шаговой доступности</p>

                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4 col-sm-6 col-xs-6 col-numbers">
                    <p class="bg_numbers_p">5</p>
                    <div class="numbers_content_wrap">
                        <p class="numbers_title_p">Поселок газифицирован.<br> Коммуникации подведены<br> и оформлены
                        </p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4 col-sm-6 col-xs-6 col-numbers">
                    <p class="bg_numbers_p">6</p>
                    <div class="numbers_content_wrap">
                        <p class="numbers_title_p">Есть готовые дома,<br> которые можно<br> посмотреть
                        </p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4 col-sm-6 col-xs-6 col-numbers">
                    <p class="bg_numbers_p">7</p>
                    <div class="numbers_content_wrap">
                        <p class="numbers_title_p">Всего 15 мин до<br> Красной площади Ярославля<br> на автобусе и 10 на авто
                        </p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4 col-sm-6 col-xs-6 col-numbers">
                    <p class="bg_numbers_p">8</p>
                    <div class="numbers_content_wrap">
                        <p class="numbers_title_p">Почтовый адрес и<br> прописка
                        </p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="col-numbers col-numbers-last">
                    <a href="#15_plus" class="col-numbers-last_wrap" data-toggle="modal" class="item_button">
                        <p class="numbers-last-title-p">
                            Узнать еще<br>
                            15 причин
                        </p>
                        <div class="youtube-btn"></div>
                    </a>
                    <!-- end col-numbers-last_wrap -->
                </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- =========== Конец section2  =========== -->
    <!-- =========== Начало section3 =========== -->
    <section id="section3">
    <div class="container">
        <h2 class="h2_main">Городская инфраструктура<br> в шаговой доступности</h2>
        <img src="img/infrastr.png" alt="" class="infrastr_img">
    </div>
        <!-- end container -->
    </section>
    <!-- =========== Конец section3  =========== -->
    
    <!-- =========== Начало section4 =========== -->
    <section id="section4">
        <div class="container">
            <div class="section4_wrap">
                <h2 class="h2_main h2_main_white">Фотогаллерея поселка</h2>

                <ul class="rslides">
                        <li><img src="img/gallery/gallery-foto-1.jpg" alt=""></li>
                        <li><img src="img/gallery/gallery-foto-2.jpg" alt=""></li>
                        <li><img src="img/gallery/gallery-foto-3.jpg" alt=""></li>
                        <li><img src="img/gallery/gallery-foto-4.jpg" alt=""></li>
                        <li><img src="img/gallery/gallery-foto-5.jpg" alt=""></li>
                        <li><img src="img/gallery/gallery-foto-6.jpg" alt=""></li>
                        <li><img src="img/gallery/gallery-foto-7.jpg" alt=""></li>
                        <li><img src="img/gallery/gallery-foto-8.jpg" alt=""></li>
                        <li><img src="img/gallery/gallery-foto-9.jpg" alt=""></li>
                        <li><img src="img/gallery/gallery-foto-10.jpg" alt=""></li>
                        <li><img src="img/gallery/gallery-foto-11.jpg" alt=""></li>
                    </ul>
            </div>
            <!-- end section4_wrap -->
        </div>
        <!-- end container -->
    </section>
        <!-- =========== Начало section5 =========== -->
    <section id="section5">
        <div class="container">
            <h2 class="h2_main">Дома которые вы можете посмотреть</h2>
            <div class="section5_wrap">

                <!-- begin item_house -->
                <div class="item_house col-md-4 col-sm-6 col-xs-6">
                    <a href="#Projects" class="item_house_wrap" data-toggle="modal" class="item_button">
                        <img src="img/house/tx74_obr.jpg" alt="" class="item_img">
                        <div class="item_left">
                            <p class="item_p_title">таунхаус </p>
                            <p class="item_p plocad">площадь: 74 м2</p>
                            <a href="#Projects" data-toggle="modal" class="item_button">Посмотреть</a>
                        </div>
                        <!-- end left -->
                        <div class="item_right">
                            <p class="item_p gotovn">Готовность<br> 100%
                            </p>
                            <p class="item_p">
                                Цена от:<br>
                                <span>2,105</span><br> млн.р.
                            </p>
                        </div>
                        <!-- end right -->
                    </a>
                    <!-- end item house wrap  -->
                </div>
                <!-- end item_house -->

                <!-- begin item_house -->
                <div class="item_house col-md-4 col-sm-6 col-xs-6">
                    <a href="#Projects" class="item_house_wrap" data-toggle="modal" class="item_button">
                        <img src="img/house/tx100_obr.jpg" alt="" class="item_img">
                        <div class="item_left">
                            <p class="item_p_title">таунхаус </p>
                            <p class="item_p plocad">площадь: 100 м2</p>
                            <a href="#Projects" data-toggle="modal" class="item_button">Посмотреть</a>
                        </div>
                        <!-- end left -->
                        <div class="item_right">
                            <p class="item_p gotovn">Готовность<br> 100%
                            </p>
                            <p class="item_p">
                                Цена от:<br>
                                <span>2,35</span><br> млн.р.
                            </p>
                        </div>
                        <!-- end right -->
                    </a>
                    <!-- end item house wrap  -->
                </div>
                <!-- end item_house -->

                <!-- begin item_house -->
                <div class="item_house col-md-4 col-sm-6 col-xs-6">
                    <a href="#Projects" class="item_house_wrap" data-toggle="modal" class="item_button">
                        <img src="img/house/tx205_obr.jpg" alt="" class="item_img">
                        <div class="item_left">
                            <p class="item_p_title">таунхаус </p>
                            <p class="item_p plocad">площадь: 105 м2</p>
                            <a href="#Projects" data-toggle="modal" class="item_button">Посмотреть</a>
                        </div>
                        <!-- end left -->
                        <div class="item_right">
                            <p class="item_p gotovn">Готовность<br> 70%
                            </p>
                            <p class="item_p">
                                Цена от:<br>
                                <span>2,324</span><br> млн.р.
                            </p>
                        </div>
                        <!-- end right -->
                    </a>
                    <!-- end item house wrap  -->
                </div>
                <!-- end item_house -->

                <!-- begin item_house -->
                <div class="item_house col-md-4 col-sm-6 col-xs-6">
                    <a href="#Projects" class="item_house_wrap" data-toggle="modal" class="item_button">
                        <img src="img/house/dom80_obr.jpg" alt="" class="item_img">
                        <div class="item_left">
                            <p class="item_p_title">Дом 1 эт</p>
                            <p class="item_p plocad">площадь: 80 м2</p>
                            <a href="#Projects" data-toggle="modal" class="item_button">Посмотреть</a>
                        </div>
                        <!-- end left -->
                        <div class="item_right">
                            <p class="item_p gotovn">Готовность<br> 80%
                            </p>
                            <p class="item_p">
                                Цена от:<br>
                                <span>2,81</span><br> млн.р.
                            </p>
                        </div>
                        <!-- end right -->
                    </a>
                    <!-- end item house wrap  -->
                </div>
                <!-- end item_house -->

                <!-- begin item_house -->
                <div class="item_house col-md-4 col-sm-6 col-xs-6">
                    <a href="#Projects" class="item_house_wrap" data-toggle="modal" class="item_button">
                        <img src="img/house/kottedg110_obr.jpg" alt="" class="item_img">
                        <div class="item_left">
                            <p class="item_p_title">Коттедж</p>
                            <p class="item_p plocad">площадь: 110 м2</p>
                            <a href="#Projects" data-toggle="modal" class="item_button">Посмотреть</a>
                        </div>
                        <!-- end left -->
                        <div class="item_right">
                            <p class="item_p gotovn">Готовность<br> 100%
                            </p>
                            <p class="item_p">
                                Цена от:<br>
                                <span>3,11</span><br> млн.р.
                            </p>
                        </div>
                        <!-- end right -->
                    </a>
                    <!-- end item house wrap  -->
                </div>
                <!-- end item_house -->

                <!-- begin item_house -->
                <div class="item_house col-md-4 col-sm-6 col-xs-6">
                    <a href="#Projects" class="item_house_wrap" data-toggle="modal" class="item_button">
                        <img src="img/house/kottedg125_obr.jpg" alt="" class="item_img">
                        <div class="item_left">
                            <p class="item_p_title">Коттедж</p>
                            <p class="item_p plocad">площадь: 125 м2</p>
                            <a href="#Projects" data-toggle="modal" class="item_button">Посмотреть</a>
                        </div>
                        <!-- end left -->
                        <div class="item_right">
                            <p class="item_p gotovn">Готовность<br> 100%
                            </p>
                            <p class="item_p">
                                Цена от:<br>
                                <span>3,37</span><br> млн.р.
                            </p>
                        </div>
                        <!-- end right -->
                    </a>
                    <!-- end item house wrap  -->
                </div>
                <!-- end item_house -->

                <!-- begin item_house -->
                <div class="item_house col-md-4 col-sm-6 col-xs-6">
                    <a href="#Projects" class="item_house_wrap" data-toggle="modal" class="item_button">
                        <img src="img/house/kottedg140_obr.jpg" alt="" class="item_img">
                        <div class="item_left">
                            <p class="item_p_title">Коттедж</p>
                            <p class="item_p plocad">площадь: 140 м2</p>
                            <a href="#Projects" data-toggle="modal" class="item_button">Посмотреть</a>
                        </div>
                        <!-- end left -->
                        <div class="item_right">
                            <p class="item_p gotovn">Готовность<br> 100%
                            </p>
                            <p class="item_p">
                                Цена от:<br>
                                <span>3,48</span><br> млн.р.
                            </p>
                        </div>
                        <!-- end right -->
                    </a>
                    <!-- end item house wrap  -->
                </div>
                <!-- end item_house -->

                <!-- begin item_house -->
                <div class="item_house col-md-4 col-sm-6 col-xs-6">
                    <a href="#Projects" class="item_house_wrap" data-toggle="modal" class="item_button">
                        <img src="img/house/kottedg160_obr.jpg" alt="" class="item_img">
                        <div class="item_left">
                            <p class="item_p_title">Коттедж</p>
                            <p class="item_p plocad">площадь: 160 м2</p>
                            <a href="#Projects" data-toggle="modal" class="item_button">Посмотреть</a>
                        </div>
                        <!-- end left -->
                        <div class="item_right">
                            <p class="item_p gotovn">Готовность<br> 80%
                            </p>
                            <p class="item_p">
                                Цена от:<br>
                                <span>3,62</span><br> млн.р.
                            </p>
                        </div>
                        <!-- end right -->
                    </a>
                    <!-- end item house wrap  -->
                </div>
                <!-- end item_house -->
                <!-- begin item_house -->
                <div class="item_house item_house_last col-md-4 col-sm-6 col-xs-6">
                    <p class="item_house_last_title">
                        большой каталог<br> проектов с<br> готовыми домами<br> в поселке
                    </p>
                    <p class="item_house_last_subtitle">
                        с ценами и <br> планировками
                    </p>

                    <a href="#Projects_download" class="download" data-toggle="modal">
                        <span>Скачать</span>
                    </a>


                </div>
                <!-- end item_house -->
            </div>
            <!-- end section_wrap_5 -->
        </div>
        <!-- end container -->
    </section>
    <!-- =========== Конец section5  =========== -->
    <!-- =========== Начало section6 =========== -->
    <section id="section6">
        <div class="container">
            <h2 class="h2_main">Отзывы о поселке и застройщике
            </h2>
            <div class="opinion-video__wrap">
                <div class="opinion-video__preview active"></div>
                <iframe class="opinion-video" width="560" height="315" data-src="https://www.youtube.com/embed/1YAMMGbFFSM?autoplay=1&enablejsapi=1&version=3&playerapiid=ytplayer" src="" frameborder="0" gesture="media" allow="encrypted-media"  allowfullscreen allowscriptaccess="always"></iframe>
            </div>
            <div class="section6_wrap">
                <div class="row">
                    <!-- otziv -->
                    <div class="col-md-6 col-sm-6 col-xs-12 otziv">
                        <div class="otziv_left">
                            <img src="img/1.png" alt="" class="otziv_img">
                        </div>
                        <!-- end left -->
                        <div class="otziv_right">
                            <div class="text_review_wrap">
                                <p class="text_review_title">– Для морозов -25 все приспособлено</p>
                                <p class="text_review_p text_review">
                                    Пишу свой отзыв через год, прожил в нем зиму. Поэтому объективно могу сказать, для морозов -25, здесь все приспособлено. Котел отработал без единого замечания. Купил коттедж добротный, оконные блоки, отдельное спасибо ребятам, экономить не стали. Меня все устраивает, сам переехал с севера, и сейчас наслаждаюсь собственным участком. Про метраж – отдельная благодарность: огромная кухня - зал, на которой можно собраться всей семьей. Три комнаты на втором этаже – мне раньше и в голову бы не пришло, что все это могу себе позволить. Одно беспокоит, пока ни разу не соприкасался с автономной канализацией, но говорят, что это не проблема. Спасибо Андрею, Константину за внимание и понимание к моим опасениям.
                                </p>
                            </div>
                            <!-- конец текста -->
                            <p class="text_review_avtor_p"><img src="img/vk_logo.png" alt="" class="vk_reviev_img">Виктор Михайлович Сеньчюков
                            </p>
                        </div>
                        <!-- end right -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- end otziv -->
                    <!-- otziv -->
                    <div class="col-md-6 col-sm-6 col-xs-12 otziv">
                        <div class="otziv_left">
                            <img src="img/2.png" alt="" class="otziv_img">
                        </div>
                        <!-- end left -->
                        <div class="otziv_right">
                            <div class="text_review_wrap">
                                <p class="text_review_title">– Сдали вовремя, качественно и без замечаний</p>
                                <p class="text_review_p text_review">
                                    Сам из Коноши, работаю в Архангельской области. Имеем подряды и выполняем работы так же в Ярославле, вот и присмотрел для себя вариант строительства дома. В один из выходных с моим коллегой проехали посмотреть на строительную площадку, там велось строительство 5 домов. Посмотрев саму стройку, а мы сами строители, был немножко удивлен качеству и соответствию выполняемых работ проекту. Работу в Ярославле нашел, а вот с жильем был выбор. Остановились все-таки на доме, место выбрали исходя из удобства, рядом садик, аптека, магазины, да до центра города, до Красной площади от дома 17 минут на машине. Очень порадовало то, что оплачивал строительство по этапам, вносил деньги после того как мой товарищ лично приезжал и принимал объем работ.
                                </p>
                            </div>
                            <!-- конец текста -->
                            <p class="text_review_avtor_p"><img src="img/vk_logo.png" alt="" class="vk_reviev_img">Сергей Волошко
                            </p>
                        </div>
                        <!-- end right -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- end otziv -->
                </div>
                <!-- end row -->
                <div class="row">
                    <!-- otziv -->
                    <div class="col-md-6 col-sm-6 col-xs-12 otziv">
                        <div class="otziv_left">
                            <img src="img/3.png" alt="" class="otziv_img">
                        </div>
                        <!-- end left -->
                        <div class="otziv_right">
                            <div class="text_review_wrap">
                                <p class="text_review_title">– Для такого качества строительства и материалов очень приятный ценник</p>
                                <p class="text_review_p text_review">
                                    Купил таунхаус в Ярославле вдвоем с братом, на две семьи. Сейчас приезжаю туда раз в неделю и смотрю, как идут отделочные работы. Дифирамбы петь не буду, но работают без остановок, все в графике. Как оговаривали, так и делают. Правда бригадир постоянно со мной на связи, иногда даже устаю, то там плитку нашел дешевле, согласуете?, то давайте лампы все светодиодные поставим для экономии, короче крутятся парни. Меня это радует. Еще одно наблюдение (в принципе, из-за него и купил жилье именно тут), для такого качества строительства и материалов, ну очень приятный ценник. Советую всем обратить внимание.
                                </p>
                            </div>
                            <!-- конец текста -->
                            <p class="text_review_avtor_p"><img src="img/vk_logo.png" alt="" class="vk_reviev_img">Владислав Суранов
                            </p>
                        </div>
                        <!-- end right -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- end otziv -->
                    <!-- otziv -->
                    <div class="col-md-6 col-sm-6 col-xs-12 otziv">
                        <div class="otziv_left">
                            <img src="img/4.png" alt="" class="otziv_img">
                        </div>
                        <!-- end left -->
                        <div class="otziv_right">
                            <div class="text_review_wrap">
                                <p class="text_review_title">– Дешевле квартиры и плюс 4 сотки</p>
                                <p class="text_review_p text_review">
                                    Основными условиями в выборе жилья для меня были уют и удобство. Что касается цен, то вообще я начала искать себе квартиру, и самые низкие цены были в пределах 37 000 руб/м2, и то на 0 цикле строительства. Поняла, что готовое не осилю, а вот с нулевым циклом страшновато на год вперед заглядывать. И тут обратила внимание на цены в 20 000 руб/м2. Да конечно это не квартира в многоэтажке, но у тебя тут плюс 4 сотки, да срок возведения от 2 до 2,5 месяцев. Посмотрев полтора месяца на строительство, сама без всяких гидов, решилась - заключила договор, оговорили сроки. Сейчас идет отделка, я не жалею.
                                </p>
                            </div>
                            <!-- конец текста -->
                            <p class="text_review_avtor_p"><img src="img/vk_logo.png" alt="" class="vk_reviev_img">Ольга Суханова
                            </p>
                        </div>
                        <!-- end right -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- end otziv -->

                </div>
                <!-- end row -->

            </div>
            <!-- end section6_wrap -->
        </div>
        <!-- end container -->
    </section>
    <!-- =========== Конец section6  =========== -->
    <!-- =========== Начало section7  =========== -->
    <section id="section7">
        <div class="container">
            <h2 class="h2_main">Заказать экскурсию в поселок</h2>
            <form class="zakaz_ekrsk_form validate alloka-catch-form form-send" action="https://crm.everest-dom.com/index.php?entryPoint=WebToLeadCapture" method="POST" name="WebToLeadForm">
                <div class="form_group">
                    <input type="text" id="section_intro_name" value="" name="name" class="alloka-name zakaz_ekrsk_input required" placeholder="Ваше имя">
                </div>

                <div class="form_group">
                    <input type="tel" id="section_intro_tel" class="alloka-catch-form-input-phone zakaz_ekrsk_input required" value="" name="phone" placeholder="Ваш телефон">
                </div>

                <input type="submit" value="Оставить заявку" class="btn zakaz_ekrsk_button required form-submit">
                <input id="assigned_user_id" type="hidden" name="assigned_user_id" value="" />
                <input id="campaign_id" type="hidden" name="campaign_id" value="8797054e-8c36-5671-5e39-5572a5526bf3" />
                <input type="hidden" name="hidden" value="Посетите готовые дома" />
                <input type="hidden" name="lead_source" value="Web Site" />
                <input type="hidden" name="redirect_url" value="/thank-you.php" />
                <input type="hidden" name="req_id" value="name;" />
                <input type="hidden" name="lead_source_description" value="" />
                <input type="hidden" name="location" value="Ярославль" />
            </form>


            <img src="img/ukaz.png" alt="" class="ukaz_img">

        </div>
        <!-- end container -->
    </section>
    <!-- =========== Конец section7  =========== -->

    <!-- =========== Начало section8  =========== -->
    <section id="section8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 location_left">
                   <div class="row">
                    <div class="location_left_wrap">
                        <p class="location_title_p">ЗВОНИТЕ</p>
                        <p class="location_sub-title_p phone_alloka">8 (4852) 44-02-02</p>

                        <p class="location_title_p">ПРИХОДИТЕ</p>
                        <p class="location_sub-title_p">г. Ярославль, ул. Лебедево, 1<br> (вход с улицы)
                        </p>

                        <img src="img/logo_everest.png" alt="" class="logo_everest_img">
                        <p class="logo_everest_p">Коттеджный поселок Лебедево-Лайф<br> в черте Ярославля</p>
                        </div>
                    </div>
                    <!-- end location left wrap -->
                </div>
                <!-- end location_left -->
                <div class="col-md-7 location_right">
                    <div class="mapYa__preview" data-map="кликни для загрузки интерактивной карты" style="position:absolute;z-index:20;top:0;left:0;right:0;bottom:0;background: url('./img/map_preview.png') no-repeat center/cover;background-clip:content-box;cursor:pointer;overflow:hidden"></div>
                    <div id="mapYa" style="width: 100%; height: 500px"></div>
                </div>
                <!-- end location_right -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- =========== Конец section8  =========== -->
    <footer class="footer">
        <p style="display:block;width:100%;margin-top:24px;color:#000;font-size:12px;text-align:center;">Вся используемая на сайте информация предоставлена исключительно в информационных целях и не является публичной офертой определенной положениями ст 437 ГК РФ</p>
    </footer>
    
    
    
    <!-- =========== Конец section8  =========== -->
    <!-- Modal Projects-->
    <div class="modal fade modal-progects" id="Projects" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-projects">
                    <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close"><span class="close-button-span" aria-hidden="true">&times;</span></button>
                    <div class="clearfix"></div>
                </div>
                <!-- end header -->
                <div class="modal-body modal-body-projects">
                    <h3 class="projects-modal-h3">Получите цены, планировки и фото<br>этого проекта</h3>
                    <form class="plan_form form_center validate alloka-catch-form form-send" action="https://crm.everest-dom.com/index.php?entryPoint=WebToLeadCapture" method="POST" name="WebToLeadForm">

                        <div class="form_group">
                            <input type="text" id="section_intro_name" value="" name="name" class="alloka-name plan_form_input margin-right-full no-margin-right required" placeholder="Ваше имя">
                        </div>
                        <br>
                        <div class="form_group">
                            <input type="tel" id="section_intro_tel" class="alloka-catch-form-input-phone plan_form_input required" value="" name="phone" placeholder="Ваш телефон">
                        </div>
                        <br>
                        <input type="submit" value="получить" class="btn form-submit plan_form_submit form_submit_red form_submit_red_modal required">

                        <input id="assigned_user_id" type="hidden" name="assigned_user_id" value="" />
                        <input id="campaign_id" type="hidden" name="campaign_id" value="8797054e-8c36-5671-5e39-5572a5526bf3" />
                        <input type="hidden" name="hidden" value="Посетите готовые дома" />
                        <input type="hidden" name="lead_source" value="Web Site" />
                        <input type="hidden" name="redirect_url" value="/thank-you.php" />
                        <input type="hidden" name="req_id" value="name;" />
                        <input type="hidden" name="lead_source_description" value="" />
                        <input type="hidden" name="location" value="Ярославль" />
                    </form>
                </div>
                <!-- end body -->
                <div class="modal-footer modal-footer-projects">

                </div>
                <!-- end footer -->
            </div>
        </div>
    </div>
    <!-- end modal progect -->
    <!-- Modal Projects download-->
    <div class="modal fade modal-progects" id="Projects_download" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-projects">
                    <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close"><span class="close-button-span" aria-hidden="true">&times;</span></button>
                    <div class="clearfix"></div>
                </div>
                <!-- end header -->
                <div class="modal-body modal-body-projects">
                    <h3 class="projects-modal-h3">Каталог с готовыми домами<br>в поселке</h3>
                    <form class="plan_form form_center validate alloka-catch-form form-send" action="https://crm.everest-dom.com/index.php?entryPoint=WebToLeadCapture" method="POST" name="WebToLeadForm">

                        <div class="form_group">
                            <input type="text" id="section_intro_name" value="" name="name" class="alloka-name plan_form_input margin-right-full no-margin-right required" placeholder="Ваше имя">
                        </div>
                        <br>
                        <div class="form_group">
                            <input type="tel" id="section_intro_tel" class="alloka-catch-form-input-phone plan_form_input required" value="" name="phone" placeholder="Ваш телефон">
                        </div>
                        <br>
                        <input type="submit" value="получить" class="btn form-submit plan_form_submit form_submit_red form_submit_red_modal required">

                        <input id="assigned_user_id" type="hidden" name="assigned_user_id" value="" />
                        <input id="campaign_id" type="hidden" name="campaign_id" value="8797054e-8c36-5671-5e39-5572a5526bf3" />
                        <input type="hidden" name="hidden" value="Посетите готовые дома" />
                        <input type="hidden" name="lead_source" value="Web Site" />
                        <input type="hidden" name="redirect_url" value="/thank-you.php" />
                        <input type="hidden" name="req_id" value="name;" />
                        <input type="hidden" name="lead_source_description" value="" />
                        <input type="hidden" name="location" value="Ярославль" />
                    </form>
                </div>
                <!-- end body -->
                <div class="modal-footer modal-footer-projects">

                </div>
                <!-- end footer -->
            </div>
        </div>
    </div>
    <!-- end modal progect download-->


    <!-- Modal 15 plus-->
    <div class="modal fade modal-progects" id="15_plus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-projects">
                    <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close"><span class="close-button-span" aria-hidden="true">&times;</span></button>
                    <div class="clearfix"></div>
                </div>
                <!-- end header -->
                <div class="modal-body modal-body-projects">
                    <div class="opinion-video__wrap">
                        <div class="opinion-video__preview modal-previev active"></div>
                        <iframe class="modal-youtube" width="560" height="315" data-src="https://www.youtube.com/embed/N6lz46P0VgY?autoplay=1&enablejsapi=1&version=3&playerapiid=ytplayer" src="" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen allowscriptaccess="always"></iframe>
                    </div>
                    <h3 class="projects-modal-h3">Посмотреть готовые дома в поселке.</h3>
                    <form class="plan_form form_center validate alloka-catch-form form-send" action="https://crm.everest-dom.com/index.php?entryPoint=WebToLeadCapture" method="POST" name="WebToLeadForm">

                        <div class="form_group">
                            <input type="text" id="section_intro_name" value="" name="name" class="alloka-name plan_form_input margin-right-full no-margin-right required" placeholder="Ваше имя">
                        </div>
                        <br>
                        <div class="form_group">
                            <input type="tel" id="section_intro_tel" class="alloka-catch-form-input-phone plan_form_input required" value="" name="phone" placeholder="Ваш телефон">
                        </div>
                        <br>
                        <input type="submit" value="Посмотреть" class="btn form-submit plan_form_submit form_submit_red form_submit_red_modal required">

                        <input id="assigned_user_id" type="hidden" name="assigned_user_id" value="" />
                        <input id="campaign_id" type="hidden" name="campaign_id" value="8797054e-8c36-5671-5e39-5572a5526bf3" />
                        <input type="hidden" name="hidden" value="15 причин о Поселке Лебедево" />
                        <input type="hidden" name="lead_source" value="Web Site" />
                        <input type="hidden" name="redirect_url" value="/thank-you.php" />
                        <input type="hidden" name="req_id" value="name;" />
                        <input type="hidden" name="lead_source_description" value="" />
                        <input type="hidden" name="location" value="Ярославль" />
                    </form>
                </div>
                <!-- end body -->
                <div class="modal-footer modal-footer-projects">

                </div>
                <!-- end footer -->
            </div>
        </div>
    </div>
    <!-- end modal 15 plus-->


    <!-- Modal genplan-->
    <div class="modal fade modal-progects" id="Genplan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-projects">
                    <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close"><span class="close-button-span" aria-hidden="true">&times;</span></button>
                    <div class="clearfix"></div>
                </div>
                <!-- end header -->
                <div class="modal-body modal-body-projects">
                    <h3 class="projects-modal-h3">Получите генплан поселка<br>прямо сейчас</h3>

                    <form class="plan_form form_center validate alloka-catch-form form-send" action="https://crm.everest-dom.com/index.php?entryPoint=WebToLeadCapture" method="POST" name="WebToLeadForm">
                        <div class="form_group">
                            <input type="text" id="section_intro_name" value="" name="name" class="alloka-name plan_form_input margin-right-full no-margin-right required" placeholder="Ваше имя">
                        </div>
                        <br>
                        <div class="form_group">
                            <input type="tel" id="section_intro_tel" class="alloka-catch-form-input-phone plan_form_input required" value="" name="phone" placeholder="Ваш телефон">
                        </div>
                        <br>
                        <input type="submit" value="Получить генплан" class="btn form-submit plan_form_submit form_submit_red form_submit_red_modal required">

                        <input id="assigned_user_id" type="hidden" name="assigned_user_id" value="" />
                        <input id="campaign_id" type="hidden" name="campaign_id" value="8797054e-8c36-5671-5e39-5572a5526bf3" />
                        <input type="hidden" name="hidden" value="Посетите готовые дома" />
                        <input type="hidden" name="lead_source" value="Web Site" />
                        <input type="hidden" name="redirect_url" value="/thank-you.php" />
                        <input type="hidden" name="req_id" value="name;" />
                        <input type="hidden" name="lead_source_description" value="" />
						<input type="hidden" name="location" value="Ярославль" />
                    </form>
                </div>
                <!-- end body -->
                <div class="modal-fooessr modal-footer-projects">

                </div>
                <!-- end footer -->
            </div>
        </div>
    </div>
    <!-- end modal genplan-->
	    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/fix_menu.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
