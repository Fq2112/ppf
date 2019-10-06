@extends('layouts.mst')
@section('title', 'Product Overview | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/comparison-table-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <style>
        .banner-2 {
            background: url({{asset('images/banner/product-overview.jpg')}});
        }

        .content-area {
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .custom-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            background: rgba(0, 0, 0, .7);
            opacity: 0;
            transition: all 400ms ease-in-out;
            height: 100%;
        }

        .custom-overlay:hover {
            opacity: 1;
        }

        .custom-text {
            position: absolute;
            top: 50%;
            left: 10px;
            right: 10px;
            transform: translateY(-50%);
        }

        .content-area img {
            transition: transform .5s ease;
        }

        .content-area:hover img {
            transform: scale(1.2);
        }

        #myTabContent ul li a{
            color: #777;
            text-transform: none;
            transition: all .3s ease-in-out;
        }

        #myTabContent ul li a:hover, #myTabContent ul li a:focus, #myTabContent ul li a:active {
            color: #E31B23;
            font-weight: 600;
            text-transform: none;
        }
    </style>
@endpush
@section('content')
    <!-- product-overview -->
    <div class="what-w3ls" style="padding-bottom: 0">
        <div class="container">
            <h3 data-aos="fade-right" class="w3l-title work-title">Our Product</h3>
            <div class="what-grids">
                <div class="col-md-7 what-grid1">
                    <div data-aos="zoom-out" class="content-area">
                        <img id="img-switch" src="{{asset('images/home/exc_'.rand(1,5).'.jpg')}}"
                             class="img-responsive" alt="Product Excellence">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <svg id="play-1" class="play" data-toggle="tooltip" title="Click here to play!"
                                     data-placement="bottom" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px"
                                     width="100px"
                                     viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path class="stroke-solid" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="stroke-dotted" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="icon" fill="#E31B23"
                                          d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-down" class="what-agile-info">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#po" id="po-tab" role="tab" data-toggle="tab" aria-controls="po"
                                       aria-expanded="true">
                                        <span class="text">OVERVIEW</span>
                                    </a>
                                </li>
                                <li role="presentation" class="next">
                                    <a href="#ta" id="ta-tab" role="tab" data-toggle="tab" aria-controls="ta"
                                       aria-expanded="true">
                                        <span class="text">APPLICATIONS</span>
                                    </a>
                                </li>
                                <li role="presentation" class="next">
                                    <a href="#kb" role="tab" id="kb-tab" data-toggle="tab" aria-controls="kb">
                                        <span class="text">BENEFITS</span>
                                    </a>
                                </li>
                                <li role="presentation" class="next">
                                    <a href="#kf" role="tab" id="kf-tab" data-toggle="tab" aria-controls="kf">
                                        <span class="text">FEATURES</span>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#download" role="tab" id="download-tab" data-toggle="tab" aria-controls="download">
                                        <span class="text">DOWNLOAD</span>
                                    </a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="po" aria-labelledby="po-tab">
                                    <table>
                                        <tr>
                                            <th style="color: #E31B23">Product Name</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>Avery Dennison SPF-XI</td>
                                        </tr>
                                        <tr>
                                            <th style="color: #E31B23">Thickness</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>6.5 mil</td>
                                        </tr>
                                        <tr>
                                            <th style="color: #E31B23">Roll Size</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>59.8” x 49.2 ft</td>
                                        </tr>
                                        <tr>
                                            <th style="color: #E31B23">Durability</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td>Up to 10 years for vertical applications in Zone 1</td>
                                        </tr>
                                        {{--<tr>
                                            <th style="color: #E31B23">Data Sheet</th>
                                            <td>&nbsp;:&nbsp;</td>
                                            <td><a href="http://graphics.averydennison.eu/spf" target="_blank">http://graphics.averydennison.eu/spf</a></td>
                                        </tr>--}}
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="ta" aria-labelledby="ta-tab">
                                    <ul align="justify">
                                        <li>Wrapping of full-body or high-impact areas of cars, trucks, buses and mass
                                            transit, motorcycles and RV’s.
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="kb" aria-labelledby="kb-tab">
                                    <ul align="justify">
                                        <li>High scratch resistance with “self-healing” performance.</li>
                                        <li>Resistant to corrosion and acidic contaminants to protect against bug splatters,
                                            bird droppings or acid rain.
                                        </li>
                                        <li>Preserves appearance while helping retain resale value.</li>
                                        <li>Enhances vehicle look with high gloss finish.</li>
                                        <li>Long term durability and yellowing resistance.</li>
                                        <li>Fast and easy to install with excellent conformability around curves and
                                            recesses.
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="kf" aria-labelledby="kf-tab">
                                    <ul align="justify">
                                        <li>Durable optical clarity provides almost invisible protection for painted
                                            surfaces.
                                        </li>
                                        <li>Room temperature ‘self-healing’ performance.</li>
                                        <li>Excellent UV, temperature, humidity and salt-spray resistance.</li>
                                        <li>Enhances vehicle look with high gloss finish.</li>
                                        <li>Up to 10 years UV resistance*.</li>
                                        <li>Low initial tack for wet application; easy to trim.</li>
                                        <li>Easy to remove.</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="download" aria-labelledby="download-tab">
                                    <ul align="justify">
                                        <li><a href="{{asset('storage/premier-spf-xi.pdf')}}"
                                               data-toggle="tooltip" title="Click here to download!"
                                               data-placement="right">SPF-XI Brochure</a></li>
                                        <li><a href="{{asset('storage/premier-tds-spf-xi-en.pdf')}}"
                                               data-toggle="tooltip" title="Click here to download!"
                                               data-placement="right">SPF-XI Technical Data Sheet</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 what-grid1">
                    <h4 data-aos="fade-left">Avery Dennison® SPF-XI Supreme Protection™ Film</h4>
                    <p data-aos="fade-down" align="justify">Avery Dennison Supreme Protection™ Film (SPF-XI)
                        improves and protects a vehicle’s appearance, while helping to retain resale value.
                        A high quality, top coated polyurethane film protects the paint from stone chips,
                        road debris, insect stains, weathering and minor abrasions. It’s “self-healing”
                        top coat helps absorb the impact from scratches and debris, without degrading the
                        original paint finish. The film is easy to apply and ultra-clear for a beautiful
                        aesthetic.</p>
                    <div data-aos="zoom-out" class="content-area" style="margin-top: 1em">
                        <img src="{{asset('images/home/avspf2.png')}}" class="img-responsive" alt="Product Excellence">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <svg id="play-2" class="play" data-toggle="tooltip" title="Click here to play!"
                                     data-placement="bottom" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px"
                                     width="100px"
                                     viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path class="stroke-solid" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="stroke-dotted" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="icon" fill="#E31B23"
                                          d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg>
                            </div>
                        </div>
                    </div>
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
                    <a href="{{route('show.gallery')}}" class="button button--bubble">
                        <strong><i class="fa fa-photo-video"></i>&ensp;MORE VIDEOS</strong></a>
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

    <!-- feature-comparison -->
    <div class="about" id="about">
        <div class="container">
            <div class="w3-agileits-about-grids vertical-center">
                <div class="col-md-12 agile-about-left">
                    <h3 data-aos="fade-right" class="w3l-title work-title">Comparison</h3>
                    <h5 data-aos="fade-down" style="text-align: justify">Here is a feature comparison chart of the Avery
                        Dennison brand against the others.</h5>
                    <article data-aos="zoom-out" class="comparison">
                        <ul>
                            <li class="bg-red active">
                                <button>Avery Dennison SPF-XI</button>
                            </li>
                            <li class="bg-gray">
                                <button>Major Brand 1</button>
                            </li>
                            <li class="bg-gray">
                                <button>Major Brand 2</button>
                            </li>
                            <li class="bg-gray">
                                <button>High-end Luxury Brand</button>
                            </li>
                            <li class="bg-gray">
                                <button>High-end Brand</button>
                            </li>
                        </ul>

                        <table>
                            <thead>
                            <tr>
                                <th class="hide"></th>
                                <th class="bg-red default">Avery Dennison SPF-XI</th>
                                <th class="bg-gray">Major Brand 1</th>
                                <th class="bg-gray">Major Brand 2</th>
                                <th class="bg-gray">High-end Luxury Brand</th>
                                <th class="bg-gray">High-end Brand</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td colspan="6" class="sep">
                                    Ratings based on internal testing, highest score is 5 stars and lowerst score is 1 star.
                                </td>
                            </tr>
                            <tr>
                                <td>Elongation at Break</td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                            </tr>
                            <tr>
                                <td>Gloss/60°C (5000 hours)</td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                            </tr>
                            <tr>
                                <td>Appearance</td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                            </tr>
                            <tr>
                                <td>Scratch</td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                            </tr>
                            <tr>
                                <td>Application Temperature</td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i></span></td>
                            </tr>
                            <tr>
                                <td>Removability (5000 hours)</td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                            </tr>
                            <tr>
                                <td>Super UV</td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i><i
                                            class="far fa-star"></i><i class="far fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                                <td align="center"><span class="txt-l"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="far fa-star"></i></span></td>
                            </tr>
                            </tbody>
                        </table>
                    </article>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js"></script>
    <script>
        $(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function (e) {
                var $target = $(e.target);
                var $tabs = $target.closest('.nav-tabs-responsive');
                var $current = $target.closest('li');
                var $parent = $current.closest('li.dropdown');
                $current = $parent.length > 0 ? $parent : $current;
                var $next = $current.next();
                var $prev = $current.prev();
                var updateDropdownMenu = function ($el, position) {
                    $el
                        .find('.dropdown-menu')
                        .removeClass('pull-xs-left pull-xs-center pull-xs-right')
                        .addClass('pull-xs-' + position);
                };

                $tabs.find('>li').removeClass('next prev');
                $prev.addClass('prev');
                $next.addClass('next');

                updateDropdownMenu($prev, 'left');
                updateDropdownMenu($current, 'center');
                updateDropdownMenu($next, 'right');
            });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            setTimeout(function () {
                $('.use-nicescroll').getNiceScroll().resize()
            }, 600);
        });

        var $img = $("#img-switch"), images = ['exc_1.jpg', 'exc_2.jpg', 'exc_3.jpg', 'exc_4.jpg', 'exc_5.jpg'],
            index = 0, maxImages = images.length - 1, timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.attr("src", '{{asset('images/home')}}/' + currentImage);
                    $img.fadeIn("slow");
                });
            }, 5000);

        $('#play-1').on('click', function () {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                    {
                        "src": 'https://youtu.be/6jOPQDNHQjE',
                        'thumb': 'https://youtu.be/6jOPQDNHQjE',
                    },
                    {
                        "src": 'https://youtu.be/wFzwt2my2TQ',
                        'thumb': 'https://youtu.be/wFzwt2my2TQ',
                    }]
            });
        });

        $('#play-2').on('click', function () {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                    {
                        "src": 'https://youtu.be/wFzwt2my2TQ',
                        'thumb': 'https://youtu.be/wFzwt2my2TQ',
                    },
                    {
                        "src": 'https://youtu.be/6jOPQDNHQjE',
                        'thumb': 'https://youtu.be/6jOPQDNHQjE',
                    }]
            });
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

        $(".comparison ul").on("click", "li", function () {
            var pos = $(this).index() + 2;
            $(".comparison tr").find('td:not(:eq(0))').hide();
            $('.comparison td:nth-child(' + pos + ')').css('display', 'table-cell');
            $(".comparison tr").find('th:not(:eq(0))').hide();
            $('.comparison li').removeClass('active');
            $(this).addClass('active');
        });

        var mediaQuery = window.matchMedia('(min-width: 640px)');

        mediaQuery.addListener(doSomething);

        function doSomething(mediaQuery) {
            if (mediaQuery.matches) {
                $('.sep').attr('colspan',6);
            } else {
                $("#ta-tab").click();
                $("#po-tab").click();
                $(".comparison ul .bg-red").click();
                $('.sep').attr('colspan',2);
            }
        }

        doSomething(mediaQuery);
    </script>
@endpush
