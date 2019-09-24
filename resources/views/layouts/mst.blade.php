<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- Bootstrap-Core-CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/> <!-- Style-CSS -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
    <link href="{{asset('css/JiSlider.css')}}" rel="stylesheet"> <!-- Banner-Slider-CSS -->
    <!-- Flexslider-CSS -->
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" type="text/css" media="screen" property=""/>
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="{{asset('vendor/sweetalert/sweetalert2.css')}}">
    <!-- Media queries -->
    <link rel="stylesheet" href="{{asset('css/media-query.css')}}">
    <!-- //css files -->
    <!-- online-fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <!-- //online-fonts -->
    @stack('styles')
</head>
<body class="use-nicescroll">
<!-- content -->
<div class="banner-silder">
    <!-- header -->
    <div class="header-w3l">
        <div class="col-md-6 header">
            <div class="col-xs-4 agileits_w3layouts_logo">
                <i class="fa fa-car car-w3l" aria-hidden="true"></i>
                <h1><a href="{{route('home')}}">Joy Ride</a><span>Driving School</span></h1>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-4 w3_agileits_header_text">
                <h3>Call Us: 012 345 6789</h3>
            </div>
            <div class="col-xs-4 agileinfo_social_icons">
                <ul class="agileits_social_list">
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
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
            <div class="col-md-4 agileits_w3layouts_footer_grid">
                <h3>Call Us</h3>
                <ul>
                    <li><span>Office Phone :</span> (+123) 2302 232</li>
                    <li><span>Fax :</span> (+123) 123 456 455</li>
                </ul>
            </div>
            <div class="col-md-4 agileits_w3layouts_footer_grid">
                <h3>Visit Us</h3>
                <p>132 New Lenox, 868 1st Avenue <i>4th Street NYC.</i></p>
            </div>
            <div class="col-md-4 agileits_w3layouts_footer_grid">
                <h3>Write Us</h3>
                <ul>
                    <li><span>Email :</span> <a href="mailto:info@example.com">info@example1.com</a></li>
                    <li><span>Enquiry :</span> <a href="mailto:info@enquiry.com">info@enquiry.com</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="agileits_w3layouts_logo logo2">
            <h2><a href="{{route('home')}}">Joy Ride</a><span>Driving School</span></h2>
            <div class="w3social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="wthree_copy_right">
    <div class="container">
        <p>© {{now()->format('Y')}} PPF Indonesia. All rights reserved. Template by <a href="http://w3layouts.com" target="_blank">W3layouts</a> | Designed & Developed by <a href="http://rabbit-media.net" target="_blank">Rabbit Media</a>
        </p>
    </div>
</div>
<a href="#" onclick="scrollToTop()" class="to-top" title="Go to top">Top</a>
<div class="myProgress">
    <div class="bar"></div>
</div>

<!-- js-scripts -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
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
<script type="text/javascript">
    $(function () {
        window.mobilecheck() ? $("body").removeClass('use-nicescroll') : '';

        $(".use-nicescroll").niceScroll({
            cursorcolor: "rgba(207,0,15,1)",
            cursorwidth: "8px",
            background: "rgba(222, 222, 222, .75)",
            cursorborder: 'none',
            // cursorborderradius:0,
            autohidemode: 'leave',
            zindex: 99999999,
        });

        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    });

    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if ($(this).scrollTop() > 100) {
            $('.to-top').addClass('show-to-top');
        } else {
            $('.to-top').removeClass('show-to-top');
        }
    }

    function scrollToTop(callback) {
        if ($('html').scrollTop()) {
            $('html').animate({scrollTop: 0}, callback);
            return;
        }
        if ($('body').scrollTop()) {
            $('body').animate({scrollTop: 0}, callback);
            return;
        }
        callback();
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
        var $bgColor = progress > 99 ? '#ff1e26' : '#ED1C24';
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
    });

    $(window).load(function () {
        $('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff');

        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

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
</script>
@stack('scripts')
</body>
</html>
