@extends('layouts.mst_company')
@section('title', 'Contact | '.env('APP_COMPANY'))
@push('styles')
    <style>
        #page-title:hover .video-wrap,
        #page-title:hover .container {
            opacity: 0;
            z-index: -99;
        }

        .border-form-control { border-color: #DDD }

        .gm-style-iw {
            width: 350px !important;
            top: 15px;
            left: 22px;
            background-color: #fff;
            box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
            border: 1px solid rgb(227, 27, 35, .6);
            border-radius: 2px 2px 10px 10px;
        }

        .gm-style-iw > div:first-child {
            max-width: 350px !important;
        }

        #iw-container {
            margin-bottom: 10px;
        }

        #iw-container .iw-title {
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 22px;
            font-weight: 400;
            padding: 10px;
            background-color: #E31B23;
            color: white;
            margin: 0;
            border-radius: 2px 2px 0 0;
        }

        #iw-container .iw-content {
            font-size: 13px;
            line-height: 18px;
            font-weight: 400;
            margin-right: 1px;
            padding: 15px 5px 20px 15px;
            max-height: 140px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .iw-content a {
            color: #E31B23;
            text-decoration: none;
        }

        .iw-content img {
            float: right;
            margin: 0 5px 5px 10px;
            width: 30%;
        }

        .iw-subTitle {
            font-size: 16px;
            font-weight: 700;
            padding: 5px 0;
        }

        .iw-bottom-gradient {
            position: absolute;
            width: 326px;
            height: 25px;
            bottom: 10px;
            right: 18px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
            background: -ms-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
        }
    </style>
    <script src='https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit' async defer></script>
@endpush
@section('content')
    <section id="page-title" class="page-title-dark" style="padding: 160px 0;">
        <div class="container clearfix" style="z-index: 9;">
            <h1>Get in Touch</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home-company')}}">HOME</a></li>
                <li class="breadcrumb-item"><a href="{{url()->current()}}">CONTACT</a></li>
                <li class="breadcrumb-item active" aria-current="page">FORM</li>
            </ol>
        </div>

        <div id="page-title-gmap" class="gmap-bg gmap" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>

        <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%;">
            <div class="video-overlay" style="background-color: rgba(0,0,0,0.6);"></div>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="heading-block">
                            <h2>Drop Us a Line</h2>
                            <p>Every single comment or critics that you gave will make us be a better company, so feel free to get in touch with us!</p>
                        </div>
                        <div class="form-widget">
                            <div class="form-result"></div>
                            <form class="nobottommargin no-ajax" id="template-contactform"
                                  action="{{route('submit.contact')}}" method="post">
                                @csrf
                                <div class="col_half">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="name"
                                           class="sm-form-control border-form-control" required>
                                </div>

                                <div class="col_half col_last">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="email"
                                           class="sm-form-control border-form-control" required>
                                </div>

                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="template-contactform-subject">Subject <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="subject"
                                           class="sm-form-control border-form-control" required>
                                </div>

                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="sm-form-control border-form-control" rows="5" cols="30"
                                              id="template-contactform-message" name="message" required></textarea>
                                </div>

                                <div class="col_full">
                                    <div id="recaptcha-contact" class="g-recaptcha"></div>
                                </div>

                                <div class="col_full">
                                    <button class="button button-3d nomargin" type="submit"
                                            id="template-contactform-submit" disabled>Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mt-4">
                            <img class="card-img-top" src="{{asset('company/demos/car/images/call.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="mb-1 color">Call Center:</h4>
                                <h2 class="card-title mb-2">
                                    <a href="tel:+62817597777">
                                        <i class="icon-phone-sign position-relative mr-1 color"
                                           style="top: 4px;"></i> +62 817-597-777</a>
                                </h2>
                                <p class="card-text">We are 24/7 available. Our expert staff is standing by to answer your questions. You can also contact by email: <a class="btn-link" href="mailto:{{env('MAIL_USERNAME')}}">{{env('MAIL_USERNAME')}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68&libraries=places"></script>
    <script src="{{asset('company/js/jquery.gmap.js')}}"></script>
    <script>
        var google;

        function init() {
            var myLatlng = new google.maps.LatLng(-7.2480988,112.7797288);

            var mapOptions = {
                zoom: 15,
                center: myLatlng,
            };

            var mapElement = document.getElementById('page-title-gmap');

            var map = new google.maps.Map(mapElement, mapOptions);

            var contentString =
                '<div id="iw-container">' +
                '<div class="iw-title">{{env('APP_COMPANY')}}</div>' +
                '<div class="iw-content">' +
                '<img class="img-fluid" src="{{asset('company/demos/car/images/logo.png')}}">' +
                '<div class="iw-subTitle">Contact</div>' +
                '<p>Raya Kenjeran 469 Gading, Tambaksari, Surabaya, Jawa Timur — 60134.<br>' +
                '<br>Phone: <a href="tel:+62817597777">+62 817-597-777</a>' +
                '<br>E-mail: <a href="mailto:{{env('MAIL_USERNAME')}}">{{env('MAIL_USERNAME')}}</a>' +
                '</p></div><div class="iw-bottom-gradient"></div></div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 350
            });

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: '{{asset('images/pin.png')}}',
                anchorPoint: new google.maps.Point(0, -29)
            });

            // infowindow.open(map, marker);

            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });

            google.maps.event.addListener(map, 'click', function () {
                infowindow.close();
            });

            google.maps.event.addListener(infowindow, 'domready', function () {
                var iwOuter = $('.gm-style-iw');
                var iwBackground = iwOuter.prev();

                iwBackground.children(':nth-child(2)').css({'display': 'none'});
                iwBackground.children(':nth-child(4)').css({'display': 'none'});

                iwOuter.css({left: '5px', top: '1px'});
                iwOuter.parent().parent().css({left: '0'});

                iwBackground.children(':nth-child(1)').attr('style', function (i, s) {
                    return s + 'left: -39px !important;'
                });

                iwBackground.children(':nth-child(3)').attr('style', function (i, s) {
                    return s + 'left: -39px !important;'
                });

                iwBackground.children(':nth-child(3)').find('div').children().css({
                    'box-shadow': 'rgba(72, 181, 233, 0.6) 0 1px 6px',
                    'z-index': '1'
                });

                var iwCloseBtn = iwOuter.next();
                iwCloseBtn.css({
                    background: '#fff',
                    opacity: '1',
                    width: '30px',
                    height: '30px',
                    right: '15px',
                    top: '6px',
                    border: '6px solid #48b5e9',
                    'border-radius': '50%',
                    'box-shadow': '0 0 5px #3990B9'
                });

                if ($('.iw-content').height() < 140) {
                    $('.iw-bottom-gradient').css({display: 'none'});
                }

                iwCloseBtn.mouseout(function () {
                    $(this).css({opacity: '1'});
                });
            });
        }

        google.maps.event.addDomListener(window, 'load', init);

        var recaptcha_contact, recaptchaCallback = function () {
            recaptcha_contact = grecaptcha.render(document.getElementById('recaptcha-contact'), {
                'sitekey': '{{env('reCAPTCHA_v2_SITEKEY')}}',
                'callback': 'enable_btnContact',
                'expired-callback': 'disabled_btnContact'
            });
        };

        function enable_btnContact() {
            $("#template-contactform-submit").removeAttr('disabled');
        }

        function disabled_btnContact() {
            $("#template-contactform-submit").attr('disabled', 'disabled');
        }

        $("#template-contactform").on("submit", function (e) {
            if (grecaptcha.getResponse(recaptcha_contact).length === 0) {
                e.preventDefault();
                swal('ATTENTION!', 'Please confirm us that you\'re not a robot by clicking in ' +
                    'the reCAPTCHA dialog-box.', 'warning');
            }
        });

        @if(session('contact'))
        swal('Successfully sent a message!', '{{ session('contact') }}', 'success');
        @endif
    </script>
@endpush
