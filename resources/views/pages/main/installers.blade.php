@extends('layouts.mst')
@section('title', 'Installers | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('css/downloadCard-gridList.css')}}">
    <style>
        .banner-2 {
            background: url({{asset('images/banner/installers.jpg')}});
        }

        .gm-style-iw {
            width: 350px !important;
            top: 15px;
            left: 22px;
            background-color: #fff;
            box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
            border: 1px solid rgba(227, 27, 35, 0.6);
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
            background-color: #e31b23;
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

        #pac-input {
            background-color: #fff;
            margin: 1em;
            text-overflow: ellipsis;
            width: 400px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        h3.w3l-title.cert-title:after {
            left: 65%;
        }

        h3.w3l-title.find-title:after {
            left: 38%;
        }

        article.download-card{
            max-height: 235px;
        }

        @media (max-width: 1080px) {
            h3.w3l-title.cert-title:after {
                left: 70%;
            }

            h3.w3l-title.find-title:after {
                left: 41%;
            }

            #pac-input {
                width: 320px;
            }
        }

        @media (max-width: 991px) {
            h3.w3l-title.cert-title:after {
                left: 37%;
            }

            h3.w3l-title.find-title:after {
                left: 54%;
            }

            #pac-input {
                width: 550px;
            }
        }

        @media (max-width: 736px) {
            h3.w3l-title.cert-title:after {
                left: 33%;
            }

            h3.w3l-title.find-title:after {
                left: 48%;
            }

            #pac-input {
                width: 550px;
            }
        }

        @media (max-width: 568px) {
            h3.w3l-title.cert-title:after {
                left: 40%;
            }

            h3.w3l-title.find-title:after {
                left: 57%;
            }

            #pac-input {
                width: 380px;
            }
        }

        @media (max-width: 480px) {
            h3.w3l-title.cert-title:after {
                left: 42%;
            }

            h3.w3l-title.find-title:after {
                left: 60%;
            }

            #pac-input {
                width: 300px;
            }
        }

        @media (max-width: 414px) {
            h3.w3l-title.cert-title:after {
                left: 45%;
            }

            h3.w3l-title.find-title:after {
                left: 65%;
            }

            #pac-input {
                width: 240px;
            }
        }

        @media (max-width: 384px) {
            h3.w3l-title.cert-title:after {
                left: 49%;
            }

            h3.w3l-title.find-title:after {
                left: 70%;
            }

            #pac-input {
                width: 220px;
            }
        }

        @media (max-width: 320px) {
            h3.w3l-title.cert-title:after {
                left: 53%;
            }

            h3.w3l-title.find-title:after {
                left: 75%;
            }

            #pac-input {
                width: 160px;
            }
        }

        .vertical-center {
            display: flex;
            align-items: center;
        }

        .btn:hover, .btn:active, .btn:focus {
            background: #E31B23 !important;
            color: #fff;
            outline: none !important;
        }

        .download-card__content-box a {
            text-decoration: none;
            color: #333;
            transition: all .3s ease-in-out;
        }

        .download-card__content-box a:hover, .download-card__content-box a:focus {
            text-decoration: none;
            color: #E31B23;
            box-shadow: none;
        }
    </style>
@endpush
@section('content')
    <!-- certified-installer -->
    <div class="about">
        <div class="container">
            <div class="w3-agileits-about-grids">
                <div class="col-md-12 agile-about-left">
                    <h3 data-aos="fade-right" class="w3l-title find-title">Certified Installers</h3>
                    <h5 data-aos="fade-right" style="text-align: justify">Feel free to get in touch with our certified
                        installers! We've been set up a
                        network of approved installers with a high-performance and responsive service.</h5>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="w3-agileits-about-grids">
                <div data-aos="fade-right" class="col-md-6 agile-about-left">
                    <div id="map" class="img-thumbnail" style="width: 100%;height: 575px"></div>
                    <input data-aos="zoom-out" data-aos-delay="100" id="pac-input" class="form-control" type="text"
                           placeholder="Enter your location">
                </div>
                <div data-aos="fade-left" class="col-md-6 agile-about-right">
                    <img src="{{asset('images/loading.gif')}}" id="image" class="img-responsive ld ld-breath">
                    <div data-view="list-view" class="download-cards nicescroll" id="ins-contacts"
                         style="height: 575px">
                    </div>
                    <form id="form-contact-installer" action="{{route('submit.contact.installers')}}"
                          method="post" style="display: none">
                        @csrf
                        <input type="hidden" name="ins_email">
                        <div class="modal-header" style="border-bottom: 1px solid #e5e5e5;padding: 0 0 .5em 0;margin-bottom: 1.5em;">
                            <button type="button" class="close" style="font-size: 2.5em">&times;</button>
                            <h3 class="modal-title"></h3>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="con_fname">First Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="con_fname" type="text" class="form-control" name="con_fname"
                                           placeholder="First name" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="con_lname">Last Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="con_lname" type="text" class="form-control" name="con_lname"
                                           placeholder="Last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="con_email">Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="con_email" type="email" class="form-control" name="con_email"
                                           placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="con_company">Company <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input id="con_company" type="text" class="form-control" name="con_company"
                                           placeholder="Company name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="con_phone">Phone <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input placeholder="Phone number" type="text" maxlength="13" class="form-control"
                                           name="con_phone" onkeypress="return numberOnly(event, false)" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="con_country">Country <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                    <select id="con_country" class="form-control selectpicker" name="con_country"
                                            data-live-search="true" title="-- Choose --" required>
                                        @foreach($countries as $row)
                                            <option value="{{$row->name}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="con_subject">Subject <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                    <input id="con_subject" type="text" class="form-control" name="con_subject"
                                           placeholder="Subject" minlength="3" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="con_message">Message <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
                                    <textarea id="con_message" class="form-control" name="con_message"
                                              placeholder="Write something here&hellip;" rows="5"
                                              style="resize: vertical" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block"><b>SUBMIT</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- certification -->
    <div class="about" style="padding-top: 2em">
        <div class="container">
            <div class="w3-agileits-about-grids vertical-center">
                <div class="col-md-5 agile-about-left">
                    <h3 data-aos="fade-right" class="w3l-title title cert-title">Certification</h3>
                    <h5 data-aos="fade-right" style="text-align: justify">Do you want to be a certified installer?</h5>
                    <p data-aos="fade-down" align="justify">To integrate the certified installers network, we will
                        evaluate your technical skills and knowledge.</p>
                </div>
                <div data-aos="fade-left" class="col-md-7 agile-about-right">
                    <img class="img-responsive" alt="Certified Installer" src="{{asset('images/home/about.png')}}">
                </div>
                <div class="clearfix"></div>
            </div>
            <div data-aos="fade-down" class="bubble-button" style="text-align: center;margin-top: 3.5em;">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
                    <defs>
                        <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"/>
                            <feColorMatrix in="blur" mode="matrix"
                                           values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"/>
                            <feComposite in="SourceGraphic" in2="goo"/>
                        </filter>
                    </defs>
                </svg>
                <span class="button--bubble__container ld ld-breath">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#certModal"
                       class="button button--bubble">
                        <strong>APPLY NOW&ensp;<i class="fa fa-paper-plane"></i></strong></a>
                    <span class="button--bubble__effect-container">
                        <span class="circle top-left"></span>
                        <span class="circle top-left"></span>
                        <span class="circle top-left"></span>
                        <span class="button effect-button"></span>
                        <span class="circle bottom-right"></span>
                        <span class="circle bottom-right"></span>
                        <span class="circle bottom-right"></span>
                    </span>
                </span>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="certModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" style="width: 40%">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 1px solid #e5e5e5;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">CERTIFICATION REQUEST</h4>
                </div>
                <form method="post" action="{{route('submit.certification')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="fname">First Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="fname" type="text" class="form-control" name="fname"
                                           placeholder="First name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Last Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="lname" type="text" class="form-control" name="lname"
                                           placeholder="Last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="email">Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="email" type="email" class="form-control" name="email"
                                           placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="phone">Phone <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input placeholder="Phone number" type="text" maxlength="13" class="form-control"
                                           name="phone" onkeypress="return numberOnly(event, false)" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label for="type">Certification Type <span class="required">*</span></label>
                                <p>
                                    <input type="radio" id="ppf" name="type" value="PPF" required>
                                    <label for="ppf">PPF</label>&ensp;
                                    <input type="radio" id="wrap" name="type" value="Wrap">
                                    <label for="wrap">Wrap</label>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <label for="company">Company <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input id="company" type="text" class="form-control" name="company"
                                           placeholder="Company name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="country">Country</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                    <select id="country" class="form-control selectpicker" name="country"
                                            data-live-search="true" title="-- Choose --">
                                        <option value="" selected>Rather not say</option>
                                        @foreach($countries as $row)
                                            <option value="{{$row->name}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('js/filter-gridList.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js"></script>
    <!-- Google Map -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68&libraries=places"></script>
    <script>
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: new google.maps.LatLng(-7.250445, 112.768845),
            mapTypeControl: false,
            styles: [
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "landscape.man_made",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}]
                }, {"featureType": "poi", "elementType": "labels", "stylers": [{"visibility": "on"}]}, {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [{"visibility": "simplified"}, {"lightness": 20}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [{"hue": "#f49935"}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{"hue": "#fad959"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "road.local",
                    "elementType": "labels",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{"hue": "#a1cdfc"}, {"saturation": 30}, {"lightness": 49}]
                }]
        });

        var infowindow = new google.maps.InfoWindow({maxWidth: 350});

        var marker, i, markers = [];

        var input = document.getElementById('pac-input');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        @foreach($installers as $ins)
        marker = new google.maps.Marker({
            position: new google.maps.LatLng('{{$ins->lat}}', '{{$ins->long}}'),
            map: map,
            icon: '{{asset('images/marker.png')}}',
            anchorPoint: new google.maps.Point(0, -29),
        });

        markers.push(marker);

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                map.panTo(marker.getPosition());
                map.setZoom(12);

                var contentString =
                    '<div id="iw-container">' +
                    '<div class="iw-title">{{$ins->name}}</div>' +
                    '<div class="iw-content">' +
                    '<img class="img-responsive" src="{{$ins->logo != "" ? asset('storage/installers/'. $ins->logo) : asset('images/logo/icon.png')}}" alt="{{$ins->name}} logo">' +
                    '<div class="iw-subTitle">Contacts</div>' +
                    '<p>{{$ins->address}}<br>Phone: <a href="tel:{{$ins->phone}}">{{$ins->phone}}</a><br>' +
                    'Email: <a href="mailto:{{$ins->email}}">{{$ins->email}}</a></p>' +
                    '</div><div class="iw-bottom-gradient"></div></div>';

                infowindow.setContent(contentString);
                infowindow.open(map, marker);

                $("#ins-contacts").hide();
                $("#form-contact-installer").show();
                $("#form-contact-installer .modal-title").text('{{$ins->name}}');
                $("#form-contact-installer input:not(:input[name=_token]), #form-contact-installer textarea").val('');
                $("#con_country").val('default').selectpicker('refresh');
                $("#form-contact-installer input[name='ins_email']").val('{{$ins->email}}');
                $("#map").css('height', map_height_form);
                $('html,body').animate({scrollTop: $("#ins-contacts").parent().offset().top}, 500);
            }
        })(marker, i));

        google.maps.event.addListener(map, 'click', (function (marker, i) {
            return function () {
                input.value = null;
                $("#ins-contacts, #form-contact-installer").hide();
                $("#form-contact-installer .modal-title").text('');
                $("#form-contact-installer input:not(:input[name=_token]), #form-contact-installer textarea").val('');
                $("#con_country").val('default').selectpicker('refresh');
                loadInstallers();
                infowindow.close();

                map.panTo(new google.maps.LatLng(-7.250445, 112.768845));
                map.setZoom(4);
            }
        })(marker, i));
        @endforeach

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

        // autoComplete
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.bindTo('bounds', map);

        autocomplete.setFields(['address_components', 'geometry', 'icon', 'name']);

        autocomplete.addListener('place_changed', function () {
            $("#ins-contacts, #form-contact-installer").hide();
            $("#form-contact-installer .modal-title").text('');
            $("#form-contact-installer input:not(:input[name=_token]), #form-contact-installer textarea").val('');
            $("#con_country").val('default').selectpicker('refresh');
            infowindow.close();

            var place = autocomplete.getPlace(), city = '';

            for (var i = 0; i < place.address_components.length; i++) {
                for (var j = 0; j < place.address_components[i].types.length; j++) {
                    if (place.address_components[i].types[j] == "administrative_area_level_2") {
                        city = place.address_components[i].long_name;
                    }
                }
            }

            loadInstallers(city);

            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
        });

        var map_height = '', map_height_form = '';
        $(function () {
            window.mobilecheck() ? $(".w3-agileits-about-grids").removeClass('vertical-center') : '';
            window.mobilecheck() ? $("#certModal .modal-dialog").css('width', 'unset') : $("#certModal .modal-dialog").css('width', '40%');

            map_height = window.mobilecheck() ? '475px': '575px';
            map_height_form = window.mobilecheck() ? '475px': '712px';

            $(".nicescroll").niceScroll({
                cursorcolor: "rgb(227,27,35)",
                cursorwidth: "8px",
                background: "rgba(222, 222, 222, .75)",
                cursorborder: 'none',
                // cursorborderradius:0,
                autohidemode: 'leave',
            });

            loadInstallers();
        });

        function loadInstallers(city) {
            clearTimeout(this.delay);
            this.delay = setTimeout(function () {
                $.ajax({
                    url: '{{route('get.city.installers')}}?city=' + city,
                    type: 'GET',
                    beforeSend: function () {
                        $('#image').show();
                        $("#ins-contacts").hide();
                    },
                    complete: function () {
                        $('#image').hide();
                        $("#ins-contacts").show();
                    },
                    success: function (data) {
                        var content = '';
                        $.each(data, function (i, val) {
                            var logo = val.logo != null ? '{{asset('storage/installers')}}/' + val.logo : '{{asset('images/logo/icon.png')}}',
                                link = val.link != null ? val.link : 'javascript:void(0)';

                            content +=
                                '<article class="download-card">' +
                                '<a onclick="contactInstaller(' + i + ',' + val.lat + ', ' + val.long + ', \''+val.name+'\', \''+val.email+'\')" href="javascript:void(0)">' +
                                '<div class="download-card__icon-box"><img src="' + logo + '" alt="' + val.name + ' logo"></div></a>' +
                                '<div class="download-card__content-box">' +
                                '<div class="content">' +
                                '<a href="' + link + '" target="_blank"><h3 class="download-card__content-box__title">' + val.name + '</h3></a>' +
                                '<table style="font-size: 16px"><tbody>' +
                                '<tr><td><i class="fa fa-map-marked-alt"></i></td><td>&nbsp;</td><td>' + val.address + '</td></tr>' +
                                '<tr><td><i class="fa fa-phone"></i></td><td>&nbsp;</td><td><a href="tel:' + val.phone + '">' + val.phone + '</a></td></tr>' +
                                '<tr><td><i class="fa fa-envelope"></i></td><td>&nbsp;</td><td><a href="mailto:' + val.email + '">' + val.email + '</a></td></tr>' +
                                '<tr><td><i class="fa fa-external-link-alt"></i></td><td>&nbsp;</td><td><a href="' + link + '" target="_blank">Learn More</a></td></tr>' +
                                '</tbody></table></div></div>' +
                                '<div class="card-read-more">' +
                                '<a onclick="contactInstaller(' + i + ',' + val.lat + ', ' + val.long + ', \''+val.name+'\', \''+val.email+'\')" href="javascript:void(0)" ' +
                                'class="btn btn-link btn-block">Contact</a></div></article>'
                        });

                        if(content != ''){
                            $("#ins-contacts").empty().append(content);
                        } else {
                            swal('There seems to be none of the certified installer was found', '','warning');
                            $("#ins-contacts").empty().append('<em>There seems to be none of the certified installer was found&hellip;</em>');
                        }
                    },
                    error: function () {
                        swal('Oops..', 'Something went wrong! Please refresh this page.', 'error');
                    }
                });
            }.bind(this), 800);

            return false;
        }

        function contactInstaller(i, lat, long, name, email) {
            google.maps.event.trigger(markers[i], 'click');
            map.panTo(new google.maps.LatLng(lat, long));
            map.setZoom(17);

            $("#ins-contacts").hide();
            $("#form-contact-installer").show();
            $("#form-contact-installer .modal-title").text(name);
            $("#form-contact-installer input:not(:input[name=_token]), #form-contact-installer textarea").val('');
            $("#con_country").val('default').selectpicker('refresh');
            $("#form-contact-installer input[name='ins_email']").val(email);

            $("#map").css('height', map_height_form);
            $('html,body').animate({scrollTop: $("#ins-contacts").parent().offset().top}, 500);
        }

        $("#form-contact-installer .close").on('click', function () {
            google.maps.event.trigger(map, 'click');

            $("#ins-contacts").show();
            $("#form-contact-installer").hide();
            $("#form-contact-installer .modal-title").text('');
            $("#form-contact-installer input:not(:input[name=_token]), #form-contact-installer textarea").val('');
            $("#con_country").val('default').selectpicker('refresh');

            $("#map").css('height', map_height);
            $('html,body').animate({scrollTop: $("#ins-contacts").parent().offset().top}, 500);
        });

        $('.button--bubble').each(function () {
            var $circlesTopLeft = $(this).parent().find('.circle.top-left');
            var $circlesBottomRight = $(this).parent().find('.circle.bottom-right');

            var tl = new TimelineLite();
            var tl2 = new TimelineLite();

            var btTl = new TimelineLite({paused: true});

            tl.to($circlesTopLeft, 1.2, {x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false)});
            tl.to($circlesTopLeft.eq(0), 0.1, {scale: 0.2, x: '+=6', y: '-=2'});
            tl.to($circlesTopLeft.eq(1), 0.1, {scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7'}, '-=0.1');
            tl.to($circlesTopLeft.eq(2), 0.1, {scale: 0.2, x: '-=15', y: '+=6'}, '-=0.1');
            tl.to($circlesTopLeft.eq(0), 1, {scale: 0, x: '-=5', y: '-=15', opacity: 0});
            tl.to($circlesTopLeft.eq(1), 1, {scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0}, '-=1');
            tl.to($circlesTopLeft.eq(2), 1, {scale: 0, x: '-=15', y: '+=5', opacity: 0}, '-=1');

            var tlBt1 = new TimelineLite();
            var tlBt2 = new TimelineLite();

            tlBt1.set($circlesTopLeft, {x: 0, y: 0, rotation: -45});
            tlBt1.add(tl);

            tl2.set($circlesBottomRight, {x: 0, y: 0});
            tl2.to($circlesBottomRight, 1.1, {x: 30, y: 30, ease: SlowMo.ease.config(0.1, 0.7, false)});
            tl2.to($circlesBottomRight.eq(0), 0.1, {scale: 0.2, x: '-=6', y: '+=3'});
            tl2.to($circlesBottomRight.eq(1), 0.1, {scale: 0.8, x: '+=7', y: '+=3'}, '-=0.1');
            tl2.to($circlesBottomRight.eq(2), 0.1, {scale: 0.2, x: '+=15', y: '-=6'}, '-=0.2');
            tl2.to($circlesBottomRight.eq(0), 1, {scale: 0, x: '+=5', y: '+=15', opacity: 0});
            tl2.to($circlesBottomRight.eq(1), 1, {scale: 0.4, x: '+=7', y: '+=7', opacity: 0}, '-=1');
            tl2.to($circlesBottomRight.eq(2), 1, {scale: 0, x: '+=15', y: '-=5', opacity: 0}, '-=1');

            tlBt2.set($circlesBottomRight, {x: 0, y: 0, rotation: 45});
            tlBt2.add(tl2);

            btTl.add(tlBt1);
            btTl.to($(this).parent().find('.button.effect-button'), 0.8, {scaleY: 1.1}, 0.1);
            btTl.add(tlBt2, 0.2);
            btTl.to($(this).parent().find('.button.effect-button'), 1.8, {
                scale: 1,
                ease: Elastic.easeOut.config(1.2, 0.4)
            }, 1.2);

            btTl.timeScale(2.6);

            $(this).on('mouseover', function () {
                btTl.restart();
            });
        });

        $(document).on('mouseover','.use-nicescroll', function () {
            $(this).getNiceScroll().resize();
        });

        @if(session('certification'))
        swal('Successfully submitted!', '{{session('certification')}}', 'success');
        @elseif(session('contact'))
        swal('Successfully sent a message!', '{{session('contact')}}', 'success');
        @endif
    </script>
@endpush
