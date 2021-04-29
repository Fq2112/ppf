@extends('layouts.mst_company')
@section('title', 'Industrials: Matic Case Sealers | '.env('APP_COMPANY'))
@push('styles')
    <style>
        .product-title h3 {
            text-transform: uppercase;
        }
    </style>
@endpush
@section('content')
    <section id="page-title" class="page-title-parallax page-title-dark page-title-center"
             data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;"
             style="background-image:url('{{asset('company/demos/car/images/accessories/page-title.jpg')}}');background-size:cover;padding:120px 0;">
        <div class="parallax-overlay"></div>
        <div class="container clearfix">
            <h1>Matic Case Sealers</h1>
            <span></span>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('home-company')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url()->current()}}">Industrials</a></li>
                <li class="breadcrumb-item active" aria-current="page">Matic Case Sealers</li>
            </ol>
        </div>
    </section>

    <div id="page-menu">
        <div id="page-menu-wrap">
            <div class="container clearfix">
                <div class="menu-title text-uppercase"><span>Matic Case</span> Sealers</div>
                <nav class="one-page-menu text-uppercase">
                    <ul>
                        <li><a href="#" data-href="#masa" data-highlight="yellow"><div>MA, SA</div></a></li>
                        <li><a href="#" data-href="#maaff" data-highlight="yellow"><div>MA, AFF</div></a></li>
                        <li><a href="#" data-href="#sarsa" data-highlight="yellow"><div>SAR, SA</div></a></li>
                        <li><a href="#" data-href="#sarfa" data-highlight="yellow"><div>SAR, FA</div></a></li>
                        <li><a href="#" data-href="#ath" data-highlight="yellow"><div>ATH</div></a></li>
                        <li><a href="#" data-href="#ocs" data-highlight="yellow"><div>OCS</div></a></li>
                        <li><a href="#" data-href="#sbst" data-highlight="yellow"><div>SBST</div></a></li>
                    </ul>
                </nav>
                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
            </div>
        </div>
    </div>

    <section id="content" class="clearfix">
			<div class="content-wrap">
				<div class="container">
					<div id="masa" class="page-section">
						<div class="heading-block center section nobottomborder py-5 mt-0">
							<h3 class="highlight-me px-2 d-inline-block">Manual Adjustable, Semi-Automatic</h3>
							<p class="mb-0">{{\Faker\Factory::create()->paragraph}}</p>
						</div>
						<div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30"
                             data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
                             data-items-lg="3" data-items-xl="3" data-autoplay="5000">
                            @for($i=1;$i<=6;$i++)
                                <div class="iproduct center">
                                    <div class="product-image px-4 py-1">
                                        <a href="javascript:void(0)"><img src="{{asset('company/demos/car/images/accessories/engines/'.$i.'.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="javascript:void(0)">{{\Faker\Factory::create()->words(3, true)}}</a></h3></div>
                                        <div class="product-price"><ins>{{\Faker\Factory::create()->words(4, true)}}</ins></div>
                                        <p>{{\Faker\Factory::create()->paragraph}}</p>
                                    </div>
                                </div>
                            @endfor
						</div>
					</div>

                    <div id="maaff" class="page-section">
                        <div class="heading-block section nobottomborder py-5 center">
                            <h3 class="highlight-me px-2 d-inline-block">Manual Adjustable, Automatic Flap Folding</h3>
							<p class="mb-0">{{\Faker\Factory::create()->paragraph}}</p>
                        </div>
						<div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30"
                             data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
                             data-items-lg="3" data-items-xl="3" data-autoplay="5000">
                            @for($i=1;$i<=5;$i++)
                                <div class="iproduct center">
                                    <div class="product-image px-4 py-1">
                                        <a href="javascript:void(0)"><img src="{{asset('company/demos/car/images/accessories/lights/'.$i.'.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="javascript:void(0)">{{\Faker\Factory::create()->words(3, true)}}</a></h3></div>
                                        <div class="product-price"><ins>{{\Faker\Factory::create()->words(4, true)}}</ins></div>
                                        <p>{{\Faker\Factory::create()->paragraph}}</p>
                                    </div>
                                </div>
                            @endfor
						</div>
                    </div>

                    <div id="sarsa" class="page-section">
                        <div class="heading-block section nobottomborder py-5 center">
                            <h3 class="highlight-me px-2 d-inline-block">Self-Adjustable Random, Semi-Automatic</h3>
							<p class="mb-0">{{\Faker\Factory::create()->paragraph}}</p>
                        </div>
						<div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30"
                             data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
                             data-items-lg="3" data-items-xl="3" data-autoplay="5000">
                            @for($i=1;$i<=6;$i++)
                                <div class="iproduct center">
                                    <div class="product-image px-4 py-1">
                                        <a href="javascript:void(0)"><img src="{{asset('company/demos/car/images/accessories/wheels/'.$i.'.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="javascript:void(0)">{{\Faker\Factory::create()->words(3, true)}}</a></h3></div>
                                        <div class="product-price"><ins>{{\Faker\Factory::create()->words(4, true)}}</ins></div>
                                        <p>{{\Faker\Factory::create()->paragraph}}</p>
                                    </div>
                                </div>
                            @endfor
						</div>
                    </div>

                    <div id="sarfa" class="page-section">
                        <div class="heading-block center section nobottomborder py-5 mt-0">
                            <h3 class="highlight-me px-2 d-inline-block">Self-Adjustable Random, Fully Automatic</h3>
                            <p class="mb-0">{{\Faker\Factory::create()->paragraph}}</p>
                        </div>
                        <div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30"
                             data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
                             data-items-lg="3" data-items-xl="3" data-autoplay="5000">
                            @for($i=1;$i<=6;$i++)
                                <div class="iproduct center">
                                    <div class="product-image px-4 py-1">
                                        <a href="javascript:void(0)"><img src="{{asset('company/demos/car/images/accessories/engines/'.$i.'.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="javascript:void(0)">{{\Faker\Factory::create()->words(3, true)}}</a></h3></div>
                                        <div class="product-price"><ins>{{\Faker\Factory::create()->words(4, true)}}</ins></div>
                                        <p>{{\Faker\Factory::create()->paragraph}}</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div id="ath" class="page-section">
                        <div class="heading-block section nobottomborder py-5 center">
                            <h3 class="highlight-me px-2 d-inline-block">Accuglide&trade; Taping Heads</h3>
                            <p class="mb-0">{{\Faker\Factory::create()->paragraph}}</p>
                        </div>
                        <div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30"
                             data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
                             data-items-lg="3" data-items-xl="3" data-autoplay="5000">
                            @for($i=1;$i<=5;$i++)
                                <div class="iproduct center">
                                    <div class="product-image px-4 py-1">
                                        <a href="javascript:void(0)"><img src="{{asset('company/demos/car/images/accessories/lights/'.$i.'.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="javascript:void(0)">{{\Faker\Factory::create()->words(3, true)}}</a></h3></div>
                                        <div class="product-price"><ins>{{\Faker\Factory::create()->words(4, true)}}</ins></div>
                                        <p>{{\Faker\Factory::create()->paragraph}}</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div id="ocs" class="page-section">
                        <div class="heading-block section nobottomborder py-5 center">
                            <h3 class="highlight-me px-2 d-inline-block">Options Case Sealer</h3>
                            <p class="mb-0">{{\Faker\Factory::create()->paragraph}}</p>
                        </div>
                        <div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30"
                             data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
                             data-items-lg="3" data-items-xl="3" data-autoplay="5000">
                            @for($i=1;$i<=6;$i++)
                                <div class="iproduct center">
                                    <div class="product-image px-4 py-1">
                                        <a href="javascript:void(0)"><img src="{{asset('company/demos/car/images/accessories/wheels/'.$i.'.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="javascript:void(0)">{{\Faker\Factory::create()->words(3, true)}}</a></h3></div>
                                        <div class="product-price"><ins>{{\Faker\Factory::create()->words(4, true)}}</ins></div>
                                        <p>{{\Faker\Factory::create()->paragraph}}</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div id="sbst" class="page-section">
                        <div class="heading-block center section nobottomborder py-5 mt-0">
                            <h3 class="highlight-me px-2 d-inline-block">SCOTCH&reg; BOX Sealing Tape</h3>
                            <p class="mb-0">{{\Faker\Factory::create()->paragraph}}</p>
                        </div>
                        <div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30"
                             data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
                             data-items-lg="3" data-items-xl="3" data-autoplay="5000">
                            @for($i=1;$i<=6;$i++)
                                <div class="iproduct center">
                                    <div class="product-image px-4 py-1">
                                        <a href="javascript:void(0)"><img src="{{asset('company/demos/car/images/accessories/engines/'.$i.'.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title"><h3><a href="javascript:void(0)">{{\Faker\Factory::create()->words(3, true)}}</a></h3></div>
                                        <div class="product-price"><ins>{{\Faker\Factory::create()->words(4, true)}}</ins></div>
                                        <p>{{\Faker\Factory::create()->paragraph}}</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

				<div class="section nomargin footer-stick clearfix"
                     style="background: #FFF url('{{asset('company/demos/car/images/features/section-bg.jpg')}}') left bottom no-repeat; background-size: cover; padding: 120px 0">
					<div class="container clearfix">
						<div class="row">
							<div class="col-md-6">
								<h2 class="h2 t700 mb-4">You still can't find your industrial needs, then please Contact Us!</h2>
								<a href="{{route('show.contact')}}"
                                   class="button button-color button-large button-rounded">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
    </section>
@endsection
