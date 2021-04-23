<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="SemiColonWeb">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- main css -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani:300,400,500,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('company/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('company/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('company/css/dark.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('company/css/swiper.css')}}" type="text/css">
    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="{{asset('company/css/components/bs-select.css')}}" type="text/css">
    <!-- car Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('company/demos/car/car.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('company/demos/car/css/car-icons/style.css')}}" type="text/css">
    <!-- other css -->
    <link rel="stylesheet" href="{{asset('company/css/font-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('company/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('company/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('company/demos/car/css/fonts.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('company/css/responsive.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('company/css/colors.php?color=e31b23')}}" type="text/css">
    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('company/include/rs-plugin/css/settings.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('company/include/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('company/include/rs-plugin/css/navigation.css')}}">
    <!-- Fontawesome 5.10.1 -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <!-- Loading.io -->
    <link href="{{asset('css/loading.css')}}" rel="stylesheet">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="{{asset('company/js/plugins/sweetalert/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('company/css/custom.css')}}" type="text/css">
    <!-- Media queries -->
    <link rel="stylesheet" href="{{asset('company/css/media-query.css')}}">

    <style>
        /* Revolution Slider */
        .ares .tp-tab { border: 1px solid #eee; }
        .ares .tp-tab-content { margin-top: -4px; }
        .ares .tp-tab-content { padding: 15px 15px 15px 110px; }
        .ares .tp-tab-image { width: 80px;height: 80px; }

        @if(!request()->is('*blog*'))
        .css3-spinner { background-color: #e6e6e6; }

        .css3-spinner > div {
            margin-top: -65px;
            margin-left: -80px;
            width: 160px;
            height: 120px;
            background-color: transparent;
            -webkit-animation: none;
            animation: none;
        }
        @endif
    </style>
    @stack('styles')

    <script src='https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit' async defer></script>
</head>

<body class="stretched side-push-panel use-nicescroll"
      data-loader-html="<div><img src='{{asset('company/demos/car/images/page-loader.gif')}}' alt='Loader'></div>">

<!-- Side Panel Overlay -->
<div class="body-overlay"></div>
<!-- Side Panel -->
<div id="side-panel">
    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>
    <div class="side-panel-wrap">
        <div class="widget clearfix">
            <a href="{{route('home-company')}}">
                <img src="{{asset('company/demos/car/images/logotype-red-168x100.png')}}" alt="Logo" height="50"></a>
            <p>Every single comment or critics that you gave will make us be a better company, so feel free to get in touch with us!</p>
            <div class="widget quick-contact-widget form-widget noborder notoppadding clearfix">
                <h4>Drop Us a Line</h4>
                <div class="form-result"></div>
                <form id="quick-contact-form" name="quick-contact-form" action="{{route('submit.contact')}}"
                      method="post" class="quick-contact-form nobottommargin no-ajax">
                    @csrf
                    <input type="text" class="sm-form-control input-block-level" id="quick-contact-form-name"
                           name="name_qc" placeholder="Full Name" required>
                    <input type="email" class="sm-form-control email input-block-level" id="quick-contact-form-email"
                           name="email_qc" placeholder="Email Address" required>
                    <textarea class="required sm-form-control input-block-level short-textarea"
                              id="quick-contact-form-message" name="message_qc" rows="4" cols="30"
                              placeholder="Message" required></textarea>
                    <div id="recaptcha-quick-contact" class="g-recaptcha mb-2"></div>
                    <button type="submit" id="quick-contact-form-submit"
                            class="button button-small button-3d nomargin" disabled>Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Document Wrapper -->
<div id="wrapper" class="clearfix">
    <header id="header" class="static-sticky full-header clearfix">
        <div id="header-wrap">
            <div class="container-fluid clearfix">
                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <div id="logo">
                    <a href="{{route('home-company')}}" class="standard-logo">
                        <img src="{{asset('company/demos/car/images/logotype-red-84x50.png')}}" alt="Logo"></a>
                    <a href="{{route('home-company')}}" class="retina-logo">
                        <img src="{{asset('company/demos/car/images/logotype-red-168x100.png')}}" alt="Logo"></a>
                </div>

                <nav id="primary-menu" class="with-arrows clearfix">
                    @include('layouts.partials.company._headermenuCompany')
                </nav>
            </div>
        </div>
        <div id="header-trigger"><i class="icon-line-menu"></i><i class="icon-line-cross"></i></div>
    </header>

    @yield('content')

    <!-- Before Footer Section -->
    <div class="section nomargin clearfix"
         style="background: #FFF url('{{asset('company/demos/car/images/footer-bg.jpg')}}') center bottom no-repeat; background-size: cover; height: 770px">
        <div class="divcenter dark center clearfix" style="max-width: 570px">
            <div class="heading-block dark bottommargin-sm noborder">
                <blockquote class="quote">
                    <p style="color:#DDD;">We believe that if you have the right people, your business will do well. A key strength of our business has always been the talent of our people and their ability to forge strong relationships, which is reflected by the loyalty of our clients. We are proud to have a strong and positive culture which allows our people to thrive and deliver the best service possible.</p>
                    <footer class="blockquote-footer" style="color:#aaa;">David Cobb.</footer>
                </blockquote>
            </div>
        </div>
    </div>

    <footer id="footer" class="dark noborder" style="background-color: #080808;">
        <div class="container-fluid clearfix">
            <!-- Footer Widgets -->
            <div class="footer-widgets-wrap clearfix" style="padding: 30px;">
                <div class="row clearfix">
                    <div class="col-lg-6">
                        <div class="col_half">
                            <address class="nobottommargin">
                                <abbr title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>Head Office:</strong></abbr><br>
                                <div style="color: #999">
                                    Raya Kenjeran 469 Surabaya<br>
                                    East Java, Indonesia 60134<br><br>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> <a href="tel:+62817597777">+62 817-597-777</a><br>
                                    <abbr title="Whatsapp Number"><strong>Whatsapp:</strong></abbr> <a href="http://wa.me/62817597777" target="_blank">+62 817-597-777</a><br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> <a href="mailto:{{env('MAIL_USERNAME')}}">{{env('MAIL_USERNAME')}}</a>
                                </div>
                            </address>
                        </div>
                        <div class="col_half col_last">
                            <address class="nobottommargin">
                                <abbr title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>Representative Office Jakarta:</strong></abbr><br>
                                <div style="color: #999">
                                    Raya Kenjeran 469 Surabaya<br>
                                    East Java, Indonesia 60134<br><br>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> <a href="tel:+62817597777">+62 817-597-777</a><br>
                                    <abbr title="Whatsapp Number"><strong>Whatsapp:</strong></abbr> <a href="http://wa.me/62817597777" target="_blank">+62 817-597-777</a><br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> <a href="mailto:{{env('MAIL_USERNAME')}}">{{env('MAIL_USERNAME')}}</a>
                                </div>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-5 fright tright col_last">
                        <a href="{{route('home-company')}}">
                            <img src="{{asset('company/demos/car/images/logotype-full-white.png')}}"
                                 class="img-fluid mb-3" alt="logo" width="200">
                        </a>
                        <div style="color: #999">
                            <span>&copy; {{now()->format('Y')}} <a href="{{route('home-company')}}">{{env('APP_COMPANY')}}</a>. All Rights Reserved.</span><div class="clear"></div>
                            <p class="mt-2 mb-0">Our Company, {{env('APP_COMPANY')}}, is the authorized distributor
                                channel of Avery Dennison&reg; in Indonesia.</p>
                            <a href="https://facebook.com/AveryDennisonCorporation" target="_blank"
                               class="fright social-icon si-small si-rounded mt-3 si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="https://twitter.com/AveryDennison" target="_blank"
                               class="fright social-icon si-small si-rounded mt-3 si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                            <a href="https://instagram.com/averydennison.id" target="_blank"
                               class="fright social-icon si-small si-rounded mt-3 si-instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>
                            <a href="https://youtube.com/AveryDennisonVideo" target="_blank"
                               class="fright social-icon si-small si-rounded mt-3 si-youtube">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Go To Top -->
<div id="gotoTop" class="icon-angle-up"></div>
<div class="myProgress">
    <div class="bar"></div>
</div>
<!-- Contact Button -->
<div id="contact-me" class="icon-line-mail side-panel-trigger bgcolor"></div>

<!-- External JavaScripts -->
<script src="{{asset('company/js/jquery.js')}}"></script>
<script src="{{asset('company/js/plugins.js')}}"></script>
<script src="{{asset('company/demos/car/js/360rotator.js')}}"></script>
<!-- Bootstrap Typeaheadjs Plugin -->
<script src="{{asset('company/js/components/typehead.js')}}"></script>
<script src="{{asset('company/js/components/underscore-min.js')}}"></script>
<!-- Bootstrap Select Plugin -->
<script src="{{asset('company/js/components/bs-select.js')}}"></script>
<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="{{asset('company/include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('company/include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('company/include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('company/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('company/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('company/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('company/include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('company/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('company/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('company/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('company/include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- check-mobile -->
<script src="{{asset('company/js/checkMobileDevice.js')}}"></script>
<!-- Nicescroll -->
<script src="{{asset('company/js/plugins/nicescroll/jquery.nicescroll.js')}}"></script>
<!-- sweetalert2 -->
<script src="{{asset('company/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
<!-- Footer Scripts -->
<script src="{{asset('company/js/functions.js')}}"></script>
@include('layouts.partials.company._scriptsCompany')
@include('layouts.partials._alert')
@include('layouts.partials._confirm')
@stack('scripts')
</body>
</html>
