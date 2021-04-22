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
    </style>
    @stack('styles')
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
                <img src="{{asset('company/demos/car/images/logo@2x.png')}}" alt="Logo" height="50"></a>
            <p>It has always been, and will always be, about quality. We're passionate about ethically sourcing the finest coffee beans, roasting them with great care. We'd like to hear your message!</p>
            <div class="widget quick-contact-widget form-widget noborder notoppadding clearfix">
                <h4>Quick Contact</h4>
                <div class="form-result"></div>
                <form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form nobottommargin">
                    <div class="form-process"></div>
                    <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                    <input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                    <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                    <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                    <input type="hidden" name="prefix" value="quick-contact-form-">
                    <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
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
                        <img src="{{asset('company/demos/car/images/logo.png')}}" alt="Logo"></a>
                    <a href="{{route('home-company')}}" class="retina-logo">
                        <img src="{{asset('company/demos/car/images/logo@2x.png')}}" alt="Logo"></a>
                </div>

                <nav id="primary-menu" class="with-arrows clearfix">
                    @include('layouts.partials.company._headermenuCompany')
                </nav>
            </div>
        </div>
        <div id="header-trigger"><i class="icon-line-menu"></i><i class="icon-line-cross"></i></div>
    </header>

    @yield('content')

    <footer id="footer" class="dark noborder" style="background-color: #080808;">
        <div class="container-fluid clearfix">
            <!-- Footer Widgets -->
            <div class="footer-widgets-wrap clearfix" style="padding: 30px;">
                <div class="row clearfix">
                    <div class="col-lg-6">
                        <div class="col_one_fourth">
                            <div class="widget widget_links clearfix">
                                <h4>Hire</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_fourth">
                            <div class="widget widget_links clearfix">
                                <h4>Community</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                    <li><a href="#">Support Forums</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_fourth">
                            <div class="widget widget_links clearfix">
                                <h4>Learn</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col_one_fourth col_last">
                            <div class="widget widget_links clearfix">
                                <h4>About</h4>
                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Plugins</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 fright tright col_last">
                        <img src="{{asset('company/demos/car/images/logo-footer.png')}}" alt="" height="50"><br>
                        <div style="color: #444">
                            <span>&copy; {{now()->format('Y')}} <a href="{{route('home-company')}}">{{env('APP_COMPANY')}}</a>. All Rights Reserved.</span><div class="clear"></div>
                            <p style="margin-top: 10px;">Our Company, {{env('APP_COMPANY')}}, is the one and only
                                authorized distributor of Avery Dennison&reg; in Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Go To Top -->
<div id="gotoTop" class="icon-angle-up"></div>
<!-- Contact Button -->
<div id="contact-me" class="icon-line-mail side-panel-trigger bgcolor"></div>

<!-- External JavaScripts -->
<script src="{{asset('company/js/jquery.js')}}"></script>
<script src="{{asset('company/js/plugins.js')}}"></script>
<script src="{{asset('company/demos/car/js/360rotator.js')}}"></script>
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
@include('layouts.partials.company._alertCompany')
@include('layouts.partials.company._confirmCompany')
@stack('scripts')
</body>
</html>
