<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Joy Ride Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>

    <!-- css files -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/modal-dark.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- Bootstrap-Core-CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/bootstrap-select.css')}}" rel="stylesheet">
    <!-- Fontawesome 5.10.1 -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <!-- JiSlider-CSS -->
    <link href="{{asset('css/JiSlider.css')}}" rel="stylesheet">
    <!-- Animate-CSS -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Loadiong.io -->
    <link href="{{asset('css/loading.css')}}" rel="stylesheet">
    <!-- lang-switcher -->
    <link href="{{asset('css/lang-switcher.css')}}" rel="stylesheet">
    <!-- bubble-button -->
    <link href="{{asset('css/bubble-button.css')}}" rel="stylesheet">
    <!-- Flexslider-CSS -->
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" type="text/css" media="screen" property=""/>
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="{{asset('vendor/sweetalert/sweetalert2.css')}}">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- Media queries -->
    <link rel="stylesheet" href="{{asset('css/media-query.css')}}">

    <!-- online-fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <style>
        ::selection {
            background: #E31B23;
            color: #fff;
        }

        ::-moz-selection {
            background: #E31B23;
            color: #fff;
        }

        #gotoTop {
            display: none;
            z-index: 299;
            position: fixed;
            width: 40px;
            height: 40px;
            background-color: #333;
            background-color: rgba(0, 0, 0, 0.3);
            font-size: 20px;
            line-height: 36px;
            text-align: center;
            color: #FFF;
            top: auto;
            left: auto;
            right: 30px;
            bottom: 30px;
            cursor: pointer;
            border-radius: 2px;
        }

        body:not(.device-touch) #gotoTop {
            transition: background-color .2s linear;
            -webkit-transition: background-color .2s linear;
            -o-transition: background-color .2s linear;
        }

        #gotoTop:hover {
            background-color: #E31B23;
        }

        .images-preloader {
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: 10000000;
            background-color: #fff;
        }

        .images-preloader .preloader4 {
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            height: 50px;
            width: 50px;
            margin: -25px 0 0 -25px;
            border-radius: 50%;
        }

        .images-preloader .preloader4:before,
        .images-preloader .preloader4:after {
            content: "";
            border: 3px solid #e31b23;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            position: absolute;
            left: 0;
        }

        .images-preloader .preloader4:before {
            transform: scale(1, 1);
            opacity: 1;
            -webkit-animation: outside .6s infinite linear;
            animation: outside .6s infinite linear
        }

        .images-preloader .preloader4:after {
            transform: scale(0, 0);
            opacity: 0;
            -webkit-animation: inside .6s infinite linear;
            animation: inside .6s infinite linear
        }

        @-webkit-keyframes inside {
            from {
                -webkit-transform: scale(.5, .5);
                opacity: 0
            }
            to {
                -webkit-transform: scale(1, 1);
                opacity: 1
            }
        }

        @keyframes inside {
            from {
                transform: scale(.5, .5);
                opacity: 0
            }
            to {
                transform: scale(1, 1);
                opacity: 1
            }
        }

        @-webkit-keyframes outside {
            from {
                -webkit-transform: scale(1, 1);
                opacity: 1
            }
            to {
                -webkit-transform: scale(1.5, 1.5);
                opacity: 0
            }
        }

        @keyframes outside {
            from {
                -webkit-transform: scale(1, 1);
                opacity: 1
            }
            to {
                -webkit-transform: scale(1.5, 1.5);
                opacity: 0
            }
        }

        ul.dropdown-menu.agile_short_dropdown {
            width: 250px;
            background: #fff !important;
        }

        ul.dropdown-menu.agile_short_dropdown li a,
        ul.dropdown-menu.agile_short_dropdown li a:hover,
        ul.dropdown-menu.agile_short_dropdown li a:focus,
        ul.dropdown-menu.agile_short_dropdown li a:active {
            padding-top: 5px;
            padding-bottom: 5px;
            color: #E31B23 !important;
        }

        .link--kumya--custom {
            overflow: hidden;
            line-height: 1;
        }

        .link--kumya--custom:hover, .menu__list .active a {
            color: #E31B23;
        }

        .link--kumya--custom::after {
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            z-index: -1;
            background: #E31B23;
            -webkit-transform: translate3d(101%, 0, 0);
            transform: translate3d(101%, 0, 0);
            -webkit-transition: -webkit-transform 0.5s;
            transition: transform 0.5s;
            -webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
            transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
        }

        .link--kumya--custom:hover::after, .menu__list .active a::after {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .link--kumya--custom span {
            display: inline-block;
            position: relative;
        }

        .link--kumya--custom span::before {
            content: attr(data-letters);
            position: absolute;
            color: #fff;
            left: 2px;
            overflow: hidden;
            white-space: nowrap;
            width: 0%;
            -webkit-transition: width 0.5s;
            transition: width 0.5s;
            -webkit-transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
            transition-timing-function: cubic-bezier(0.7, 0, 0.3, 1);
        }

        .link--kumya--custom:hover span::before, .menu__list .active a span::before {
            width: 100%;
        }

        .off.link--kumya--custom span::before {
            width: 0 !important;
        }

        .off.link--kumya--custom::after {
            transform: translate3d(101%, 0, 0) !important;
        }

        .off.link--kumya--custom:hover {
            color: #E31B23 !important;
        }

        .off.link--kumya--custom:hover::after {
            -webkit-transform: translate3d(0, 0, 0) !important;
            transform: translate3d(0, 0, 0) !important;
        }

        .off.link--kumya--custom:hover span::before {
            width: 100% !important;
        }

        @media (max-width: 320px) {
            .link--kumya--custom span {
                font-size: .9em;
            }
        }

        .input-group-addon {
            padding: 9px 12px;
        }

        .modal-title {
            color: #E31B23;
        }

        .required {
            color: #E31B23;
        }

        .bootstrap-select .dropdown-menu {
            min-width: 100% !important;
            background: #fff !important;
            text-align: justify !important;
        }

        .bootstrap-select .dropdown-menu > .active > a,
        .bootstrap-select .dropdown-menu > .active > a:hover,
        .bootstrap-select .dropdown-menu > .active > a:focus {
            background: #E31B23 !important;
        }

        .bootstrap-select .dropdown-menu li:hover,
        .bootstrap-select .dropdown-menu li:focus {
            background: #eee !important;
        }

        .form-control:focus {
            border-color: #E31B23 !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(227, 27, 35, 0.6) !important;
        }

        .has-feedback .form-control-feedback {
            position: absolute;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
        }

        [type="radio"]:checked,
        [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }

        [type="radio"]:checked + label,
        [type="radio"]:not(:checked) + label {
            position: relative;
            padding-left: 28px;
            cursor: pointer;
            line-height: 20px;
            display: inline-block;
            color: #666;
        }

        [type="radio"]:checked + label:before,
        [type="radio"]:not(:checked) + label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
            border: 1px solid #ccc;
            border-radius: 100%;
            background: #fff;
        }

        [type="radio"]:checked + label:before {
            border: 1px solid #E31B23;
        }

        [type="radio"]:checked + label:after,
        [type="radio"]:not(:checked) + label:after {
            content: '';
            width: 12px;
            height: 12px;
            background: #E31B23;
            position: absolute;
            top: 4px;
            left: 4px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        [type="radio"]:not(:checked) + label:after {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        [type="radio"]:checked + label:after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .btn-primary {
            background-color: #E31B23;
            border-color: #cd1b23;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary.focus,
        .btn-primary:active,
        .btn-primary.active,
        .open > .dropdown-toggle.btn-primary {
            background-color: #c3181f;
            border-color: #af181f;
        }

        .btn-primary.disabled,
        .btn-primary[disabled],
        fieldset[disabled] .btn-primary,
        .btn-primary.disabled:hover,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary:hover,
        .btn-primary.disabled:focus,
        .btn-primary[disabled]:focus,
        fieldset[disabled] .btn-primary:focus,
        .btn-primary.disabled.focus,
        .btn-primary[disabled].focus,
        fieldset[disabled] .btn-primary.focus,
        .btn-primary.disabled:active,
        .btn-primary[disabled]:active,
        fieldset[disabled] .btn-primary:active,
        .btn-primary.disabled.active,
        .btn-primary[disabled].active,
        fieldset[disabled] .btn-primary.active {
            background-color: #E31B23;
            border-color: #cd1b23;
        }

        .btn-primary .badge {
            color: #E31B23;
            background-color: #fff;
        }

        .button:hover, .button:focus, .button:active,
        .button--bubble:active + .button--bubble__effect-container {
            text-decoration: none;
        }

        #myTab a {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            background: transparent;
        }

        #myTab li.active a {
            border-color: transparent transparent #777;
            border-bottom: 4px solid #E31B23 !important;
        }
    </style>
    @stack('styles')
</head>
<body class="use-nicescroll">
<!-- preloader -->
<div class="images-preloader">
    <div class="preloader4"></div>
</div>
<!-- content -->
<div class="banner-silder {{!Illuminate\Support\Facades\Request::is('/*') ? 'banner-2' : ''}}">
    <!-- header -->
    <div class="header-w3l">
        <div class="col-md-6 header">
            <div class="col-xs-4 agileits_w3layouts_logo">
                <a href="{{route('home')}}">
                    <img id="logo" src="{{asset('images/logo/white_horizontal.png')}}" class="img-responsive"></a>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-4 w3_agileits_header_text">
                <h3><a href="tel:+62817597777"><i class="fa fa-phone fa-flip-horizontal"></i>&ensp;+62 817 597 777</a></h3>
            </div>
            <div class="col-xs-4 agileinfo_social_icons">
                <ul class="agileits_social_list">
                    <li><a href="https://facebook.com/AveryDennisonCorporation" class="w3_agile_facebook"
                           target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/AveryDennison" class="agile_twitter" target="_blank"><i
                                class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://instagram.com/averydennison.id" class="w3_agile_instagram" target="_blank"><i
                                class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://youtube.com/AveryDennisonVideo" class="w3_agile_youtube" target="_blank"><i
                                class="fab fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- Nav -->
        <div class="col-md-6 w3_agile_menu">
            <div class="agileits_w3layouts_nav">
                <div id="toggle_m_nav">
                    <div id="m_nav_menu" class="m_nav">
                        <div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
                        <div class="m_nav_ham" id="m_ham_2"></div>
                        <div class="m_nav_ham" id="m_ham_3"></div>
                    </div>
                </div>
                <div id="m_nav_container" class="m_nav wthree_bg">
                    <nav class="menu menu--sebastian">
                        @include('layouts.partials._headermenu')
                    </nav>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- //Nav -->
    </div>
    <!-- carousels -->
    @stack('carousels')
</div>
@yield('content')

<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="agileits_w3layouts_footer_grids">
            <div data-aos="fade-down" class="col-md-3 agileits_w3layouts_footer_grid">
                <h3>Call Us</h3>
                <ul>
                    <li><span>Phone :</span> <a href="tel:+62817597777">+62 817 597 777</a></li>
                    <li><span>WhatsApp :</span> <a href="https://wa.me/62817597777" target="_blank">+62 817 597 777</a>
                    </li>
                </ul>
            </div>
            <div data-aos="fade-down" class="col-md-3 agileits_w3layouts_footer_grid">
                <h3>Visit Us</h3>
                <p>Raya Kenjeran 469, Surabaya <i>East Java, Indonesia &ndash; 60134.</i></p>
            </div>
            <div data-aos="fade-down" class="col-md-3 agileits_w3layouts_footer_grid">
                <h3>Write Us</h3>
                <ul>
                    <li><span>Email :</span> <a href="mailto:info@ppf.co.id"
                                                style="text-transform: none">info@ppf.co.id</a></li>
                    <li><span>Enquiry :</span> <a href="mailto:sindhu@ppf.co.id" style="text-transform: none">sindhu@ppf.co.id</a>
                    </li>
                </ul>
            </div>
            <div data-aos="fade-down" class="col-md-3 agileits_w3layouts_footer_grid">
                <h3>Get in Touch</h3>
                <ul>
                    <li><a href="{{route('show.contact')}}">Contact Us</a></li>
                    <li><a href="https://averydennison.com/en/home/legal-and-privacy-notices.html" target="_blank"
                           style="text-transform: none">Legal and Privacy Notices</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="agileits_w3layouts_logo logo2">
            <a href="{{route('home-company')}}" target="_blank">
                <img data-aos="zoom-out" id="logo2" src="{{asset('images/logo/red_horizontal.png')}}"
                     class="img-responsive" style="margin: 0 auto 1.5em auto"></a>
            <div data-aos="fade-up" class="w3social-icons">
                <ul>
                    <li><a href="https://facebook.com/AveryDennisonCorporation" target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/AveryDennison" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li><a href="https://instagram.com/averydennison.id" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="https://youtube.com/AveryDennisonVideo" target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="wthree_copy_right">
    <div class="container">
        <p>© {{now()->format('Y')}} <a href="{{route('home-company')}}" target="_blank">{{env('APP_COMPANY')}}</a>. All rights reserved. {{--| Designed & Developed by
            <a href="http://rabbit-media.net" target="_blank">Rabbit Media</a>--}}</p>
    </div>
</div>

<!-- lang-switcher -->
{{--<div class="translate_wrapper">
    <div class="current_lang">
        <div class="lang">
            <img src="{{asset('images/united-states.svg')}}">
            <span class="lang-txt">EN</span>
            <span class="fa fa-chevron-up chevron"></span>
        </div>
    </div>
    <div class="more_lang">
        <div class="lang" data-value='id'>
            <img src="{{asset('images/indonesia.svg')}}">
            <span class="lang-txt">Indonesia <span>(ID)</span></span>
        </div>

        <div class="lang selected" data-value='en'>
            <img src="{{asset('images/united-states.svg')}}">
            <span class="lang-txt">English <span>(US)</span></span>
        </div>
    </div>
</div>--}}

<div id="gotoTop" class="fa fa-arrow-up"></div>
<div class="myProgress">
    <div class="bar"></div>
</div>

<!-- js-scripts -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-select.js')}}"></script>
<!-- banner-slider -->
<script src="{{asset('js/JiSlider.js')}}"></script>
<!-- menu -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/counterup.min.js')}}"></script>
<!-- flexSlider -->
<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script src="{{asset('vendor/checkMobileDevice.js')}}"></script>
<!-- Nicescroll -->
<script src="{{asset('vendor/nicescroll/jquery.nicescroll.js')}}"></script>
<!-- Sweetalert2 -->
<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript">
    $(function () {
        window.mobilecheck() ? $("body").removeClass('use-nicescroll') : '';

        AOS.init({
            duration: 800,
            easing: 'slide',
            once: true,
        });

        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();

        scrollToTop();
    });

    $('#logo').hover(
        function () {
            $(this).attr('src', '{{asset('images/logo/red_horizontal.png')}}')
        },
        function () {
            $(this).attr('src', '{{asset('images/logo/white_horizontal.png')}}')
        }
    );

    $('#logo2').hover(
        function () {
            $(this).attr('src', '{{asset('images/logo/white_horizontal.png')}}')
        },
        function () {
            $(this).attr('src', '{{asset('images/logo/red_horizontal.png')}}')
        }
    );

    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        /*if ($(this).scrollTop() > 100) {
            $('.to-top').addClass('show-to-top');
        } else {
            $('.to-top').removeClass('show-to-top');
        }*/
        var $goToTopEl = $('#gotoTop'),
            elementMobile = $goToTopEl.attr('data-mobile'),
            elementOffset = $goToTopEl.attr('data-offset');

        if (!elementOffset) {
            elementOffset = 100;
        }

        /*if (elementMobile != 'true' && ($body.hasClass('device-sm') || $body.hasClass('device-xs'))) {
            return true;
        }*/

        if ($(window).scrollTop() > Number(elementOffset)) {
            $goToTopEl.fadeIn();
            $('body').addClass('gototop-active');
        } else {
            $goToTopEl.fadeOut();
            $('body').removeClass('gototop-active');
        }
    }

    function scrollToTop() {
        /*if ($('html').scrollTop()) {
            $('html').animate({scrollTop: 0}, callback);
            return;
        }
        if ($('body').scrollTop()) {
            $('body').animate({scrollTop: 0}, callback);
            return;
        }
        callback();*/
        var $goToTopEl = $('#gotoTop'),
            elementScrollSpeed = $goToTopEl.attr('data-speed'),
            elementScrollEasing = $goToTopEl.attr('data-easing');

        if (!elementScrollSpeed) {
            elementScrollSpeed = 700;
        }
        if (!elementScrollEasing) {
            elementScrollEasing = 'easeOutQuad';
        }

        $goToTopEl.off('click').on('click', function () {
            $('body,html').stop(true).animate({
                'scrollTop': 0
            }, Number(elementScrollSpeed), elementScrollEasing);
            return false;
        });
    }

    function numberOnly(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else if (e) {
            key = e.which;
        } else return true;
        keychar = String.fromCharCode(key);
        if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27) || (key == 188)) {
            return true;
        } else if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else if (decimal && (keychar == ".")) {
            return true;
        } else return false;
    }

    var title = document.getElementsByTagName("title")[0].innerHTML;
    (function titleScroller(text) {
        document.title = text;
        setTimeout(function () {
            titleScroller(text.substr(1) + text.substr(0, 1));
        }, 500);
    }(title + " ~ "));

    <!--Scroll Progress Bar-->
    function progress() {
        var windowScrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var windowHeight = $(window).height();
        var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
        var $bgColor = progress > 99 ? '#ff1f27' : '#E31B23';
        var $textColor = progress > 99 ? '#fff' : '#333';

        $('.myProgress .bar').width(progress + '%').css({backgroundColor: $bgColor});
        // $('h1').text(Math.round(progress) + '%').css({color: $textColor});
        $('.fill').height(progress + '%').css({backgroundColor: $bgColor});
    }

    progress();

    $(document).on('scroll', progress);

    $(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        $(".scroll").on('click', function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 800);
        });

        $(document).on('click', function (e) {
            $('.translate_wrapper, .more_lang').removeClass('active');
        });

        $('.translate_wrapper .current_lang').on('click', function (e) {
            e.stopPropagation();
            $(this).parent().toggleClass('active');

            setTimeout(function () {
                $('.more_lang').toggleClass('active');
            }, 5);
        });

        $('.more_lang .lang').on('click', function () {
            $(this).addClass('selected').siblings().removeClass('selected');
            $('.more_lang').removeClass('active');

            var img = $(this).find('img').attr('src'), lang = $(this).attr('data-value');

            $('.current_lang .lang-txt').text(lang);
            $('.current_lang img').attr('src', img);

            window.location.href = '/' + lang;
        });
    });

    window.onload = function () {
        $('.images-preloader').fadeOut();

        $(".use-nicescroll").niceScroll({
            cursorcolor: "rgb(227,27,35)",
            cursorwidth: "8px",
            background: "rgba(222, 222, 222, .75)",
            cursorborder: 'none',
            // cursorborderradius:0,
            autohidemode: 'leave',
            zindex: 99999999,
        });

        $('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff');

        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });

        var options = {
            whatsapp: "+62817597777",
            email: "sindhu@ppf.co.id",
            call_to_action: "Contact us",
            button_color: "#e31b23",
            position: "left",
            order: "email,whatsapp",
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    };

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

    $(document).on('mouseover', '.use-nicescroll', function () {
        $(this).getNiceScroll().resize();
    });
</script>
@stack('scripts')
</body>
</html>
