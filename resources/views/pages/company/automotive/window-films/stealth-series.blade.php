@extends('layouts.mst_company')
@section('title', 'Automotive: Window Films - Stealth™ Series | '.env('APP_COMPANY'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <style>
        .product-title h3 {
            text-transform: uppercase;
        }

        .dark .swiper-pagination span:nth-child(1):hover,
        .dark .swiper-pagination span:nth-child(1) { background-color: #7F858D }
        .dark .swiper-pagination span:nth-child(2):hover,
        .dark .swiper-pagination span:nth-child(2) { background-color: #CB394E }
        .dark .swiper-pagination span:nth-child(3):hover,
        .dark .swiper-pagination span:nth-child(3) { background-color: #75787B }
        .dark .swiper-pagination span:nth-child(4):hover,
        .dark .swiper-pagination span:nth-child(4) { background-color: #9C780E }

        .bg {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
        }
        .slider-text {
            position: absolute;
            top: 150px;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            text-align: center;
        }

        .slider-text h2 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .slider-text p {
            font-size: 17px;
            font-weight: 300;
            opacity: .7;
        }
    </style>
@endpush
@section('content')
    <section id="page-title" class="page-title-parallax page-title-dark page-title-center"
             data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;"
             style="background-image:url('{{asset('company/demos/car/images/accessories/footer.jpg')}}');background-size:cover;padding:120px 0;">
        <div class="parallax-overlay"></div>
        <div class="container clearfix">
            <h1>Stealth&trade; Series</h1>
            <span>NR Pro Series Automotive Window Film</span>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('home-company')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Automotive</a></li>
                <li class="breadcrumb-item"><a href="{{url()->current()}}">Window Films</a></li>
                <li class="breadcrumb-item active" aria-current="page">Stealth&trade; Series</li>
            </ol>
        </div>
    </section>

    <div id="page-menu">
        <div id="page-menu-wrap">
            <div class="container clearfix">
                <div class="menu-title text-uppercase"><span>Stealth&trade;</span> Series</div>
                <nav class="one-page-menu">
                    <ul>
                        <li><a href="#" data-href="#section-features"><div>Features</div></a></li>
                        <li><a href="#" data-href="#section-spec"><div>Technical Specs</div></a></li>
                        <li><a href="#" data-href="#section-price"><div>Price</div></a></li>
                        <li><a href="#" data-href="#section-gallery"><div>Gallery</div></a></li>
                        <li><a href="#" data-href="#section-brochures"><div>Brochures</div></a></li>
                        <li><a href="#" data-href="#section-store"><div>Find a Centre</div></a></li>
                    </ul>
                </nav>
                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
            </div>
        </div>
    </div>

    <section id="content" class="clearfix">
        <div class="content-wrap pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Page Section - features
                        ============================================= -->
                        <div id="section-features" class="page-section">
                            <h3 class="mb-3">Overview</h3>
                            <p>Avery Dennison NR Pro Series automotive window films are non-reflective, color-stable and
                                weather durable films in a warm graphite tone. Using sophisticated nanotechnology,
                                NR Pro Series delivers long lasting, great looks and impressive solar performance along
                                with optimal shrink capabilities and zero electronic signal interference.</p>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <ul class="iconlist">
                                        <li><i class="icon-car-paint"></i><span class="ml-2">Different Color Varients</span></li>
                                        <li class="mt-2"><i class="icon-car-stearing"></i><span class="ml-2">Powerful Stearings</span></li>
                                        <li class="mt-2"><i class="icon-car-fuel"></i><span class="ml-2">Goof Fuel Efficiency</span></li>
                                        <li class="mt-2"><i class="icon-car-signal"></i><span class="ml-2">Automatic / Manual</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="iconlist">
                                        <li><i class="icon-car-meter"></i><span class="ml-2">Modern Dashboard</span></li>
                                        <li class="mt-2"><i class="icon-car-wheel"></i><span class="ml-2">Beautiful Alloy-wheels</span></li>
                                        <li class="mt-2"><i class="icon-car-signal"></i><span class="ml-2">Automatic / Manual</span></li>
                                        <li class="mt-2"><i class="icon-car-alert"></i><span class="ml-2">App Technology</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Page Section - spec
                        ============================================= -->
                        <div id="section-spec" class="page-section mt-5">
                            <h3 class="mb-3">Technical Specs</h3>
                            <p>From March 2017, a total of five variants will be available in Germany: the 911 Carrera GTS with rear-wheel drive, the 911 Carrera 4 GTS with all-wheel drive – both of the above available as a Coupé and Cabriolet – and the 911 Targa 4 GTS with all-wheel drive.</p>
                            <div class="row">
                                <div class="col-lg-6 mt-3">
                                    <table class="table">
                                        <thead class="">
                                        <tr>
                                            <th scope="col" class="color">Engine</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td scope="row" class="text-black-50">Engine layout:</td>
                                            <td class="tright t600">Rear engine</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Number of cylinders:</td>
                                            <td class="tright t600">6</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Displacement:</td>
                                            <td class="tright t600">2,981 cm³</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Power (kW):</td>
                                            <td class="tright t600">331 kW</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Power (hp):</td>
                                            <td class="tright t600">450 PS</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="color">Fuel</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td scope="row" class="text-black-50">Fuel consumption* urban:</td>
                                            <td class="tright t600">10.9 l/100 km</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Fuel consumption* non-urban:</td>
                                            <td class="tright t600">7.1 l/100 km</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Fuel consumption* combined:</td>
                                            <td class="tright t600">8.5 l/100 km</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">CO2 emissions* combined:</td>
                                            <td class="tright t600">192 g/km</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="color">Body</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td scope="row" class="text-black-50">Length:</td>
                                            <td class="tright t600">4,528 mm</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Width:</td>
                                            <td class="tright t600">1,852 mm</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Height:</td>
                                            <td class="tright t600">1,284 mm</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Wheelbase:</td>
                                            <td class="tright t600">.31 cW</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Drag coefficient (Cd):</td>
                                            <td class="tright t600">2,450 mm</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Unladen weight (DIN):</td>
                                            <td class="tright t600">1,515 kg</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Unladen weight (EU):</td>
                                            <td class="tright t600">1,590 kg</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="color">Performance</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td scope="row" class="text-black-50">Top speed:</td>
                                            <td class="tright t600">4,528 mm</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Acceleration:</td>
                                            <td class="tright t600">1,852 mm</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">In-gear acceleration:</td>
                                            <td class="tright t600">1,284 mm</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-black-50">Flexibility/5th Gear:</td>
                                            <td class="tright t600">.31 cW</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a href="#" class="button button-rounded button-dark nomargin fright nott">View all Specs <i class="icon-line-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Page Section - gallery
                        ============================================= -->
                        <div id="section-price" class="page-section mt-5">
                            <h3 class="mb-3">Price Lists</h3>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Models</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#">911 Carrera Petrol</a><br><small>2981 cc Petrol, Manual, 14.2 kmpl</small></td>
                                    <td style="vertical-align: middle">New York</td>
                                    <td style="vertical-align: middle" class="t600">$2,15,600</td>
                                </tr>
                                <tr>
                                    <td><a href="#">911 Carrera Cabriolet Petrol</a><br><small>2981 cc Petrol, Manual, 14.2 kmpl</small></td>
                                    <td style="vertical-align: middle">San Fransisco</td>
                                    <td style="vertical-align: middle" class="t600">$2,36,809</td>
                                </tr>
                                <tr>
                                    <td><a href="#">911 Carrera s Cabriolet</a><br><small>2981 cc Petrol, Manual, 13.9 kmpl</small></td>
                                    <td style="vertical-align: middle">Chicago</td>
                                    <td style="vertical-align: middle" class="t600">$2,66,606</td>
                                </tr>
                                <tr>
                                    <td><a href="#">911 Carrera Turbo</a><br><small>3800 cc Petrol, Manual, 12.9 kmpl</small></td>
                                    <td style="vertical-align: middle">Washington</td>
                                    <td style="vertical-align: middle" class="t600">$2,47,225</td>
                                </tr>
                                <tr>
                                    <td><a href="#">911 Carrera GT3</a><br><small>3996 cc Petrol, Manual, 12.8 kmpl</small></td>
                                    <td style="vertical-align: middle">North Carolina</td>
                                    <td style="vertical-align: middle" class="t600">$3,23,153</td>
                                </tr>
                                <tr>
                                    <td><a href="#">911 Carrera Turbo Cabriolet</a><br><small>3800 cc Petrol, Manual, 12.9 kmpl</small></td>
                                    <td style="vertical-align: middle">Texas</td>
                                    <td style="vertical-align: middle" class="t600">$3,62,538</td>
                                </tr>
                                <tr>
                                    <td><a href="#">911 Carrera Turbo S Cabriolet</a><br><small>3800 cc Petrol, Manual, 12.8 kmpl</small></td>
                                    <td style="vertical-align: middle">Denver</td>
                                    <td style="vertical-align: middle" class="t600">$4,27,675</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Page Section - gallery
                        ============================================= -->
                        <div id="section-gallery" class="page-section my-5">
                            <h3 class="mb-3">Gallery</h3>
                            <div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-speed="900" data-pagi="false" data-thumbs="true">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/1.jpg">
                                            <img src="images/single/911cars/1.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">HighWay View</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/2.jpg">
                                            <img src="images/single/911cars/2.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Premium Dashboard</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/3.jpg">
                                            <img src="images/single/911cars/3.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Beautiful Backlight</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/4.jpg">
                                            <img src="images/single/911cars/4.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Front View</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/5.jpg">
                                            <img src="images/single/911cars/5.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Whaite Exterior</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/6.jpg">
                                            <img src="images/single/911cars/6.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Extended Music Systems</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/7.jpg">
                                            <img src="images/single/911cars/7.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Analog Speed Meters</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/8.jpg">
                                            <img src="images/single/911cars/8.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Comfort Air Conditions</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/9.jpg">
                                            <img src="images/single/911cars/9.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Premium Backside</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/10.jpg">
                                            <img src="images/single/911cars/10.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Baggage Space</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/11.jpg">
                                            <img src="images/single/911cars/11.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Red Wine GTS</div>
                                        </div>
                                        <div class="slide" data-thumb="images/single/911cars/thumbs/12.jpg">
                                            <img src="images/single/911cars/12.jpg" alt="Image">
                                            <div class="flex-caption slider-caption-bg slider-caption-bg-light">Premium Leather Interior</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-4">
                        <div class="mb-4">
                            <h2 class="mb-0 h1 t600 ls0">450 PS/331 kW</h2>
                            <small>Power (hp)/Power (kW)</small>
                        </div>
                        <div class="line line-sm my-3"></div>
                        <div class="">
                            <h2 class="mb-0 t600 h2 ls0">3.6 s</h2>
                            <small>Acceleration from 0 - 100 km/h</small>
                        </div>
                        <div class="card bgcolor mt-5 shadow-sm dark">
                            <div class="card-body">
                                <h3 class="card-title">Fuel Efficiency Rating / KMPH</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisg elit. Perspiciatis maxime consequuntur, beatae modi corporis.</p>
                                <div class="card-text d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="mb-0">In City</h4>
                                        <h4 class="mb-0 ls1 h1 t700">19</h4>
                                    </div>
                                    <div>
                                        <div class="t700 h1"><i class="icon-car-pump"></i></div>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Highway</h4>
                                        <h4 class="mb-0 ls1 h1 t700">24</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <img class="mt-5" src="images/single/features.jpg" alt="">
                        <div class="card mt-5 shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title">Get to know On-Road-Price in your City.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisg elit. Perspiciatis maxime consequuntur, beatae modi corporis.</p>
                                <a href="#" class="button button-rounded nomargin button-large btn-block side-panel-trigger center nott">On Road Price</a>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h3 class="mb-3">Videos</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/lTbGdV3NlNk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="line line-sm"></div>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/-hTLk1rU_ZI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>

                <!-- Page Section - brochuresent
                ============================================= -->
                <div id="section-brochures" class="page-section clearix mb-5">

                    <div class="row">
                        <div class="col-md-4 mt-5">
                            <i class="i-plain icon-line2-cloud-download inline-block mb-4" style="font-size: 42px"></i>
                            <div class="heading-block noborder mb-2">
                                <h4>911 GTS - Catalogue</h4>
                                <small class="subtitle text-muted">(PDF 11.7 KB)</small>
                            </div>
                            <p>Microsite GTS-Modelle</p>
                            <a href="#" class="button button-rounded nomargin">Download</a>
                        </div>
                        <div class="col-md-4 mt-5">
                            <i class="i-plain icon-file3 inline-block mb-4" style="font-size: 42px"></i>
                            <div class="heading-block noborder mb-2">
                                <h4>Via Bluetooth® - The new PCM</h4>
                                <small class="subtitle text-muted">(PDF 204.92 KB)</small>
                            </div>
                            <p>Dynamic, comfortable and efficient – the new Porsche 911 GTS models, press release, 01/09/2017, Porsche AG</p>
                            <a href="#" class="button button-rounded nomargin">Download</a>
                        </div>
                        <div class="col-md-4 mt-5">
                            <i class="i-plain icon-file-alt inline-block mb-4" style="font-size: 42px"></i>
                            <div class="heading-block noborder mb-2">
                                <h4>Media Package</h4>
                                <small class="subtitle text-muted">(PDF 24.88 MB)</small>
                            </div>
                            <p>Synergistically reinvent progressive users vis-a-vis plug-and-play core competencies.</p>
                            <a href="#" class="button button-rounded nomargin">Download</a>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <!-- Page Section - store
                ============================================= -->
                <div id="section-store" class="page-section mt-3">
                    <h3 class="mb-3">Find a Porsche Centre</h3>
                    <!-- Google Map
                    ============================================= -->
                    <section id="google-map" class="gmap mb-4"></section>

                    <div class="row">
                        <div class="col-md-4">
                            <address>
                                <strong>Cars Dawydiak:</strong><br>
                                1540 Pine St, San Francisco<br>
                                San Francisco, CA 94109<br>
                            </address>
                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                            <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                        </div>
                        <div class="col-md-4">
                            <address>
                                <strong>Porsche of Larchmont</strong><br>
                                2500 Boston Post Rd<br>
                                Larchmont, NY 10538, USA<br>
                            </address>
                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (123) 456-7890
                            <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> noreply@canvas.com
                        </div>

                        <div class="col-md-4">
                            <address>
                                <strong>Porsche Loeber Motors</strong><br>
                                7101 North Lincoln Avenue<br>
                                Lincolnwood, IL 60712<br>
                            </address>
                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (123) 456-7890
                            <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> noreply@canvas.com
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
@push('scripts')
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
    <script>
        function overviewFilm() {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                    {
                        "src": 'https://youtu.be/oqlTqaKG-t8',
                        'thumb': 'https://youtu.be/oqlTqaKG-t8',
                    }]
            });
        }
    </script>
@endpush
