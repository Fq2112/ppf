@extends('layouts.mst')
@section('title', 'Home | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/swiper/dist/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ig-feed.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog-swiper.css')}}">
    <style>
        .what-grid1 {
            padding-left: 0;
        }

        h3.w3l-title.cert-title:after {
            left: 65%;
        }

        #blog .agile-about-left h5 {
            padding-right: 2em;
            font-size: 1.9em;
        }

        @media (max-width: 1080px) {
            h3.w3l-title.cert-title:after {
                left: 70%;
            }

            #blog .agile-about-left h5 {
                padding-right: 1.5em;
                font-size: 1.9em;
            }
        }

        @media (max-width: 991px) {
            h3.w3l-title.cert-title:after {
                left: 37%;
            }

            #blog .agile-about-left h5 {
                padding-right: 0;
                font-size: 1.9em;
            }
        }

        @media (max-width: 736px) {
            h3.w3l-title.cert-title:after {
                left: 33%;
            }

            #blog .agile-about-left h5 {
                padding-right: 0;
                font-size: 1.9em;
            }

            .blog-slider {
                margin-bottom: 1em;
            }
        }

        @media (max-width: 568px) {
            h3.w3l-title.cert-title:after {
                left: 40%;
            }

            #blog .agile-about-left h5 {
                padding-right: 0;
                font-size: 1.7em;
            }

            .blog-slider {
                margin-bottom: 1em;
            }
        }

        @media (max-width: 480px) {
            h3.w3l-title.cert-title:after {
                left: 42%;
            }

            #blog .agile-about-left h5 {
                padding-right: 0;
                font-size: 1.6em;
            }

            .blog-slider {
                margin-bottom: 1em;
            }
        }

        @media (max-width: 414px) {
            h3.w3l-title.cert-title:after {
                left: 45%;
            }

            #blog .agile-about-left h5 {
                padding-right: 0;
                font-size: 1.5em;
            }

            .blog-slider {
                margin-bottom: 1em;
            }
        }

        @media (max-width: 384px) {
            h3.w3l-title.cert-title:after {
                left: 49%;
            }

            #blog .agile-about-left h5 {
                padding-right: 0;
                font-size: 1.4em;
            }

            .blog-slider {
                margin-bottom: 1em;
            }
        }

        @media (max-width: 320px) {
            h3.w3l-title.cert-title:after {
                left: 53%;
            }

            #blog .agile-about-left h5 {
                padding-right: 0;
                font-size: 1.1em;
            }

            .blog-slider {
                margin-bottom: 1em;
            }
        }

        .vertical-center {
            display: flex;
            align-items: center;
        }

        #ig-feed .content-area {
            overflow: hidden;
        }

        #ig-feed .content-area img {
            transition: transform .5s ease;
        }

        #ig-feed .content-area:hover img {
            transform: scale(1.2);
        }
    </style>
@endpush
@section('content')
    @push('carousels')
        <div id="JiSlider" class="jislider">
            <ul>
                <li>
                    <div class="w3layouts-banner-top" style="background: url({{asset('images/carousels/3.jpg')}})">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <p>Welcome to Our Site</p>
                                <h3>PPF (Paint Protection Film)</h3>
                                <div class="agileits_w3layouts_more menu__item">
                                    <a href="#blog" class="scroll menu__link">Learn More</a>
                                </div>
                                <div class="thim-click-to-bottom">
                                    <a href="#about" class="scroll">
                                        <i class="fa fa-long-arrow-alt-down" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="ftr-text">
                                    <p><a href="mailto:info@ppf.co.id">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>info@ppf.co.id</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top"
                         style="background: url({{asset('images/carousels/2.jpg')}})">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <p>Welcome to Our Site</p>
                                <h3>Avery Dennison Supreme PPF</h3>
                                <div class="agileits_w3layouts_more menu__item">
                                    <a href="#" class="menu__link">Learn More</a>
                                </div>
                                <div class="thim-click-to-bottom">
                                    <a href="#about" class="scroll">
                                        <i class="fa fa-long-arrow-alt-down" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="ftr-text">
                                    <p><a href="mailto:info@ppf.co.id">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>info@ppf.co.id</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top"
                         style="background: url({{asset('images/carousels/1.jpg')}})">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <p>Welcome to Our Site</p>
                                <h3>Authorized Sole Distributor in indonesia</h3>
                                <div class="agileits_w3layouts_more menu__item">
                                    <a href="#about" class="scroll menu__link">Learn More</a>
                                </div>
                                <div class="thim-click-to-bottom">
                                    <a href="#about" class="scroll">
                                        <i class="fa fa-long-arrow-alt-down" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="ftr-text">
                                    <p><a href="mailto:info@ppf.co.id">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>info@ppf.co.id</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <h5 class="w3l-posi">PPF by <a href="https://averydennison.com" target="_blank"><span>Avery Dennison</span></a>
            </h5>
        </div>
    @endpush
    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <div class="w3-agileits-about-grids vertical-center">
                <div class="col-md-5 agile-about-left">
                    <h3 data-aos="fade-right" class="w3l-title title">Welcome</h3>
                    <h5 data-aos="fade-right" style="text-align: justify">Our Company, <b>Premier Autostyling</b>, is
                        the one and only authorized distributor of <b>Avery Dennison</b> PPF (Paint Protection Film) in
                        <b>Indonesia</b>.</h5>
                    <p data-aos="fade-down" align="justify">The need for <b>PPF</b> products is now becoming a new trend
                        that continues to grow among premium, luxury, sporty, and dandy car lovers in Indonesia to
                        maintain the durability of car paint and make the car look more luxurious. <b>Premier
                            Autostyling</b> is the <b>Authorized Sole Distributor</b> of PPF brand <b>Avery
                            Dennison</b> in Indonesia who has been appointed directly by the Principal based in
                        Singapore to be able to distribute optimally through cooperation with dealers in cities that
                        have a large number of product-user markets, such as Jakarta, Bandung, Semarang, Yogyakarta,
                        Denpasar, Banjarmasin, Balikpapan, Makassar, Medan, Palembang.</p>
                </div>
                <div data-aos="fade-left" class="col-md-7 agile-about-right">
                    <img src="{{asset('images/home/avspf2.png')}}" alt="Avery Dennison PPF (SPF-XI)">
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
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#spfModal"
                       class="button button--bubble">
                        <strong>LEARN MORE&ensp;<i class="fa fa-search"></i></strong></a>
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

    <!-- product-excellence -->
    <div class="what-w3ls" style="padding-top: 2em">
        <div class="container">
            <h3 data-aos="fade-right" class="w3l-title stat-title spe">Why Choose Us?</h3>
            <p data-aos="fade-down" style="text-align: justify;margin-top: 1em">
                Avery Dennison Corporation is a global manufacturer and distributor of pressure-sensitive adhesive
                materials (such as self-adhesive labels), apparel branding labels and tags, RFID inlays, and specialty
                medical products. The company is a member of the Fortune 500 and is headquartered in Glendale,
                California that employs approximately 30,000 employees in more than 50 countries.</p>
            <div class="what-grids" style="margin-top: 2.5em">
                <div class="col-md-6 what-grid1">
                    <img data-aos="fade-right" id="img-switch" src="{{asset('images/home/exc_'.rand(1,3).'.jpg')}}"
                         class="img-responsive" alt="Product Excellence">
                    <div data-aos="fade-down" class="what-agile-info">
                        <h4>Product Excellence</h4>
                        <p align="justify">Get ready with the excellence of Avery Dennison PPF (SPF-XI) against the
                            similar PPF products!</p>
                    </div>
                    <div data-aos="fade-down" class="what-top1">
                        <div class="what-left">
                            <i class="fa fa-registered" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Originality Guarantee</h4>
                            <p align="justify">The original Avery Dennison PPF (SPF-XI) has a unique holographic emblem
                                sticker
                                that is not easily imitated.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div data-aos="fade-down" class="what-top1">
                        <div class="what-left">
                            <i class="fa fa-shield-alt" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Durability Guarantee</h4>
                            <p align="justify">Avery Dennison PPF (SPF-XI) has the durability for product quality
                                between 4 to 10
                                years since the installation on the car, depends on the usage level.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 what-grid1">
                    <div data-aos="fade-down" class="what-top">
                        <div class="what-left">
                            <i class="fa fa-gem" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Luxury & Premium</h4>
                            <p align="justify">Avery Dennison PPF (SPF-XI) has materials that provide a more luxurious
                                and
                                premium quality appearance to the vehicle unit.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div data-aos="fade-down" class="what-top1">
                        <div class="what-left">
                            <i class="fa fa-heartbeat" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Instant Healing</h4>
                            <p align="justify">Avery Dennison PPF (SPF-XI) has a special material that can eliminate
                                soft
                                scratches by itself at room temperature without any preheating.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div data-aos="fade-down" class="what-top1">
                        <div class="what-left">
                            <i class="fa fa-layer-group" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Layer Thickness</h4>
                            <p align="justify">Avery Dennison PPF (SPF-XI) has a dimension of layer thickness 6.5 mil
                                which gives
                                superior protection to car paint better than car paint.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div data-aos="fade-down" class="what-top1">
                        <div class="what-left">
                            <i class="fa fa-tools" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Easy Installation</h4>
                            <p align="justify">Avery Dennison PPF (SPF-XI) has the advantage because it's easier to
                                adjust the
                                vehicle shape design and the installation method.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div data-aos="fade-down" class="what-top1">
                        <div class="what-left">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Self Cleaning</h4>
                            <p align="justify">Avery Dennison PPF (SPF-XI) has a coating material that causes dirt to
                                not easily
                                stick and does not imprint on the coating.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div data-aos="fade-down" class="bubble-button" style="text-align: center;margin-top: 0">
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
                    <a href="#" class="button button--bubble">
                        <strong>LEARN MORE&ensp;<i class="fa fa-search"></i></strong></a>
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

    <!-- certified-installer -->
    <div class="about" style="padding-top: 2em">
        <div class="container">
            <div class="w3-agileits-about-grids vertical-center">
                <div class="col-md-5 agile-about-left">
                    <h3 data-aos="fade-right" class="w3l-title title">Installers</h3>
                    <h5 data-aos="fade-right" style="text-align: justify">Do you need a certified installer?</h5>
                    <p data-aos="fade-down" align="justify">We've been set up a network of approved installers with a
                        high-performance and responsive service.</p>
                </div>
                <div data-aos="fade-left" class="col-md-7 agile-about-right">
                    <img src="{{asset('images/home/world_map.png')}}" alt="World Map">
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
                    <a href="{{route('show.installers')}}" class="button button--bubble">
                        <strong>FIND ONE&ensp;<i class="fa fa-map-marked-alt"></i></strong></a>
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

    <!-- blog -->
    <div class="about" style="padding-top: 2em" id="blog">
        <div class="container">
            <div class="w3-agileits-about-grids vertical-center">
                <div class="col-md-5 agile-about-left">
                    <h3 data-aos="fade-right" class="w3l-title title">Our Blog</h3>
                    <h5 data-aos="fade-right" style="text-align: justify;">We're also provide you with a recent news
                        related to PPF or any automobile things. Click SHOW MORE button below if you don't wanna miss
                        anything about it!</h5>
                </div>
                <div data-aos="fade-left" class="col-md-7 agile-about-right">
                    <div class="blog-slider">
                        <div class="blog-slider__wrp swiper-wrapper">
                            @foreach($blog as $row)
                                @php
                                    $date = \Carbon\Carbon::parse($row->created_at);
                                    $url = route('detail.blog', ['author' => $row->getUser->username,
                                    'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                                    'title' => $row->title_uri]);
                                @endphp
                                <div class="blog-slider__item swiper-slide">
                                    <div class="blog-slider__img">
                                        <img src="{{asset('storage/blog/thumbnail/'.$row->thumbnail)}}" alt="Thumbnail">
                                    </div>
                                    <div class="blog-slider__content">
                                        <span class="blog-slider__code">{{$date->format('F d, Y')}}<br>
                                            <sub>by <a href="{{route('detail.blog', ['author' => $row->getUser->username])}}">{{$row->getUser->username}}</a></sub>
                                        </span>
                                        <div class="blog-slider__title">{{$row->title}}</div>
                                        <div class="blog-slider__text">{!!\Illuminate\Support\Str::words($row->content, 20, '...')!!}</div>
                                        <a href="{{$url}}" class="blog-slider__button">READ MORE</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="blog-slider__pagination"></div>
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
                    <a href="{{route('show.blog')}}" class="button button--bubble">
                        <strong>SHOW MORE&ensp;<i class="fa fa-blog"></i></strong></a>
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

    <!-- instagram-feed -->
    <div class="middle-w3l" style="padding: 3em 0;">
        {{--<div id="ig-feed" class="owl-carousel">
            @foreach($posts as $post)
                <div data-aos="zoom-out" class="item content-area"
                     data-src="{{$post->images->standard_resolution->url}}"
                     data-sub-html="<h4><a href='{{$post->link}}' target='_blank' class='ig-link'><i class='fa fa-external-link-alt'></i>&ensp;ORIGINAL POST</a></h4><p style='color: #fff;'>{{\Illuminate\Support\Str::words($post->caption->text, 20, '...')}}</p>">
                    <img src="{{$post->images->standard_resolution->url}}" alt="{{$post->user->username}}'s Feed">
                    <div class="custom-overlay">
                        <div class="custom-text">
                            <table width="100%">
                                <tr>
                                    <td class="likes">{{$post->likes->count}}</td>
                                    <td class="comments">{{$post->comments->count}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>--}}
        <div class="elfsight-app-6f559c77-3076-4c8e-bd40-6188d9784b78"></div>
        <div data-aos="fade-down" class="bubble-button" style="text-align: center;margin-top: 3.5em;margin-bottom:5em">
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
                    <a href="https://instagram.com/averydennison.id" target="_blank" class="button button--bubble">
                        <strong><i class="fab fa-instagram"></i> averydennison.id</strong></a>
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
        <div class="clearfix"></div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="spfModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <img src="{{asset('images/home/avspf2.png')}}" alt="Avery Dennison SPF" class="img-responsive">
                    <h5>AVERY SPF-XI PAINT PROTECTION 1520MM</h5>
                    <p align="justify">Avery Dennison Supreme Protection Film (SPF-XI) will help improve and safeguard
                        the vehicles aesthetics, all while helping to retain the cars resale value. SPF-X1 is a high
                        quality Termoplastic Polyurethane film the prevents damage from a range of things like, stone
                        chips, road debris, insect stains and weathering, thanks to the self-healing top-coat. The film
                        is easy to apply and is ultra-clear to ensure excellent aesthetics. Wet application is
                        recommended, with soap solution of 100% water with 2ml of soap per 1lt of water.</p>
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <script src="{{asset('vendor/swiper/dist/js/swiper.min.js')}}"></script>
    <script src="{{asset('vendor/owlcarousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js"></script>
    <script>
        $(function () {
            window.mobilecheck() ? $(".w3-agileits-about-grids").removeClass('vertical-center') : '';
            window.mobilecheck() ? $("#certModal .modal-dialog").css('width', 'unset') : $("#certModal .modal-dialog").css('width', '40%');

            $('.owl-carousel').owlCarousel({
                loop: false,
                rewind: true,
                nav: false,
                dots: false,
                autoHeight: true,
                autoplay: true,
                items: 5,
                stage: 1,
                rtl: false,
                navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    320: {
                        items: 3,
                    },
                    768: {
                        items: 5,
                    }
                }
            });

            $('#ig-feed').lightGallery({selector: '.content-area'});
        });

        var $img = $("#img-switch"), images = ['exc_1.jpg', 'exc_2.jpg', 'exc_3.jpg'], index = 0,
            maxImages = images.length - 1,
            timer = setInterval(function () {
                var currentImage = images[index];
                index = (index == maxImages) ? 0 : ++index;
                $img.fadeOut("slow", function () {
                    $img.attr("src", '{{asset('images/home')}}/' + currentImage);
                    $img.fadeIn("slow");
                });
            }, 5000);

        var swiper = new Swiper('.blog-slider', {
            spaceBetween: 30,
            effect: 'fade',
            loop: true,
            mousewheel: {
                invert: false,
            },
            // autoHeight: true,
            pagination: {
                el: '.blog-slider__pagination',
                clickable: true,
            }
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

        @if(session('certification'))
        swal('Successfully submitted!', '{{session('certification')}}', 'success');
        @endif
    </script>
@endpush
