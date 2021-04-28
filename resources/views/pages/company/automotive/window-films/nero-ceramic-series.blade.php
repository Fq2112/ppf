@extends('layouts.mst_company')
@section('title', 'Automotive: Window Films - NERO CERAMIC™ SERIES | '.env('APP_COMPANY'))
@push('styles')
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

        .ul-product {
            margin-left: 1em;
            text-align: justify;
        }

        .ul-product li {
            list-style: none;
        }

        .ul-product li:not(:first-child) {
            margin-top: .5em;
        }

        .ul-product li:before {
            font-family: "Font Awesome 5 Free";
            content: '\f054';
            font-weight: 900;
            color: #E31B23;
            margin-left: -1.1em;
            padding-right: .5em;
        }

        .ul-product li a {
            color: #777;
            text-decoration: none;
            transition: all .3s ease-in-out;
        }

        .ul-product li a:hover, .ul-product li a:focus, .ul-product li a:active {
            color: #E31B23;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
@endpush
@section('content')
    <section id="page-title" class="page-title-parallax page-title-dark page-title-center"
             data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;"
             style="background-image:url('{{asset('company/demos/car/images/accessories/footer.jpg')}}');background-size:cover;padding:120px 0;">
        <div class="parallax-overlay"></div>
        <div class="container clearfix">
            <h1>NERO CERAMIC&trade; Series</h1>
            <span>NR Nano Ceramic IR Series Non-Reflective Film</span>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('home-company')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Automotive</a></li>
                <li class="breadcrumb-item"><a href="{{url()->current()}}">Window Films</a></li>
                <li class="breadcrumb-item active" aria-current="page">NERO CERAMIC&trade; Series</li>
            </ol>
        </div>
    </section>

    <div id="page-menu">
        <div id="page-menu-wrap">
            <div class="container clearfix">
                <div class="menu-title text-uppercase"><span>NERO CERAMIC&trade;</span> Series</div>
                <nav class="one-page-menu text-uppercase">
                    <ul>
                        <li><a href="#" data-href="#features"><div>Features</div></a></li>
                        <li><a href="#" data-href="#applications"><div>Applications</div></a></li>
                        <li><a href="#" data-href="#specifications"><div>Specifications</div></a></li>
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
                    <div class="col-md-7">
                        <div id="features" class="page-section">
                            <h3 class="mb-3">Overview</h3>
                            <p align="justify">Avery Dennison&reg; NERO CERAMIC&trade; Series ( NR Nano Ceramic IR Series )
                                automotive window films are constructed with advanced durable inorganic ceramic
                                nano particles. NR Nano Ceramic IR Series delivers phenomenal solar protection with
                                long lasting color stability for exceptional protection and appearance. Its high
                                optical clarity and deep graphic color tone upgrades vehicle aesthetics for a stunning
                                looking and comfortable ride.</p>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <ul class="ul-product">
                                        <li>High optical clarity and deep graphite color tone upgrades vehicle appearance to a high standard</li>
                                        <li>Premium performance delivering excellent IR rejection and up to 93% glare reduction with minimal reflective effect</li>
                                        <li>Blocks 99+% of harmful UV</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="ul-product">
                                        <li>Zero interference of electronic equipment (metal free)</li>
                                        <li>Specially designed high performance adhesive for professional installation and clean removal</li>
                                        <li>Easy to install with excellent dot matrix fitting and optimal shrink capabilities</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div id="applications" class="page-section mt-5">
                            <h3 class="mb-3">Applications</h3>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td style="vertical-align: middle" scope="row" class="text-black-50">Technology</td>
                                    <td style="vertical-align: middle" class="tright t600">Nanotechnology<br>Nano ceramic+IR<br>UV Stable Dye<br>Metal-Free</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" scope="row" class="text-black-50">Color Tone</td>
                                    <td style="vertical-align: middle" class="tright t600">Deep Graphite</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" scope="row" class="text-black-50">Construction</td>
                                    <td style="vertical-align: middle" class="tright t600">Weatherable</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" scope="row" class="text-black-50">Thickness</td>
                                    <td style="vertical-align: middle" class="tright t600">1.5 Mil</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" scope="row" class="text-black-50">Warranty</td>
                                    <td style="vertical-align: middle" class="tright t600">Lifetime<br>Limited Non-Transferable</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle" scope="row" class="text-black-50">Color Stable</td>
                                    <td style="vertical-align: middle" class="tright t600">Yes</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="specifications" class="page-section mt-5">
                            <h3 class="mb-3">Specifications</h3>
                            <table class="table table-striped">
                                <thead class="text-center">
                                <tr>
                                    <th rowspan="2" colspan="2" scope="col" class="text-uppercase" style="vertical-align:middle">Film</th>
                                    <th rowspan="2" scope="col" class="text-uppercase" style="vertical-align:middle">Ultraviolet Block</th>
                                    <th colspan="2" scope="col" class="text-uppercase" style="vertical-align:middle">Visible Light</th>
                                    <th rowspan="2" scope="col" class="text-uppercase" style="vertical-align:middle">Glare Reduction</th>
                                </tr>
                                <tr>
                                    <th style="vertical-align:middle">Transmitted</th>
                                    <th style="vertical-align:middle">Reflected<br>(Exterior)</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <tr>
                                    <td style="vertical-align: middle">NR Nano Ceramic IR 05</td>
                                    <td style="vertical-align: middle">R058P0IR</td>
                                    <td style="vertical-align: middle;">&gt; 99%</td>
                                    <td style="vertical-align: middle">6%</td>
                                    <td style="vertical-align: middle">7%</td>
                                    <td style="vertical-align: middle;">93%</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:middle">NR Nano Ceramic IR 15</td>
                                    <td style="vertical-align:middle">R058P9IR</td>
                                    <td style="vertical-align:middle">&gt; 99%</td>
                                    <td style="vertical-align:middle">17%</td>
                                    <td style="vertical-align:middle">7%</td>
                                    <td style="vertical-align:middle">82%</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:middle">NR Nano Ceramic IR 20</td>
                                    <td style="vertical-align:middle">R058P6IR</td>
                                    <td style="vertical-align:middle">&gt; 99%</td>
                                    <td style="vertical-align:middle">20%</td>
                                    <td style="vertical-align:middle">7%</td>
                                    <td style="vertical-align:middle">78%</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:middle">NR Nano Ceramic IR 30</td>
                                    <td style="vertical-align:middle">R058P8IR</td>
                                    <td style="vertical-align:middle">&gt; 99%</td>
                                    <td style="vertical-align:middle">30%</td>
                                    <td style="vertical-align:middle">7%</td>
                                    <td style="vertical-align:middle">66%</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:middle">NR Nano Ceramic IR 35</td>
                                    <td style="vertical-align:middle">R058P5IR</td>
                                    <td style="vertical-align:middle">&gt; 99%</td>
                                    <td style="vertical-align:middle">35%</td>
                                    <td style="vertical-align:middle">7%</td>
                                    <td style="vertical-align:middle">60%</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:middle">NR Nano Ceramic IR 40</td>
                                    <td style="vertical-align:middle">R058P4IR</td>
                                    <td style="vertical-align:middle">&gt; 99%</td>
                                    <td style="vertical-align:middle">40%</td>
                                    <td style="vertical-align:middle">7%</td>
                                    <td style="vertical-align:middle">54%</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:middle">NR Nano Ceramic IR 50</td>
                                    <td style="vertical-align:middle">R058P7IR</td>
                                    <td style="vertical-align:middle">&gt; 99%</td>
                                    <td style="vertical-align:middle">48%</td>
                                    <td style="vertical-align:middle">8%</td>
                                    <td style="vertical-align:middle">45%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-speed="900"
                             data-pagi="false" data-thumbs="true">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide" data-thumb="{{asset('company/images/automotive/window-films/nero-ceramic-series.png')}}">
                                        <img src="{{asset('company/images/automotive/window-films/nero-ceramic-series.png')}}" alt="Image">
                                    </div>
                                    <div class="slide" data-thumb="{{asset('company/images/automotive/window-films/nero-2.jpg')}}">
                                        <img src="{{asset('company/images/automotive/window-films/nero-2.jpg')}}" alt="Image">
                                    </div>
                                    <div class="slide" data-thumb="{{asset('company/images/automotive/window-films/stealth-3.jpg')}}">
                                        <img src="{{asset('company/images/automotive/window-films/stealth-3.jpg')}}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="line line-sm my-4"></div>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/oqlTqaKG-t8"
                                title="Automotive Window Films" frameborder="0" allowfullscreen
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>

                        <div class="line line-sm my-4"></div>

                        <div class="card shadow-sm">
                            <div class="card-body text-uppercase">
                                <h3 class="card-title">NERO CERAMIC&trade; Series - Datasheet</h3>
                                <p>( PDF 1,17 MB )</p>
                                <a href="{{route('download.data-sheet',['file' => 'po-nero-ceramic-series.pdf'])}}"
                                   class="button button-rounded nomargin button-large btn-block side-panel-trigger center nott">
                                    <i class="icon-cloud-download mr-2"></i>DOWNLOAD</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
