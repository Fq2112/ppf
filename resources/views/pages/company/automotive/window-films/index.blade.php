@extends('layouts.mst_company')
@section('title', 'Automotive: Window Films | '.env('APP_COMPANY'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <style>
        .product-title h3 {
            text-transform: uppercase;
        }
    </style>
@endpush
@section('content')
    <section id="page-title" class="page-title-parallax page-title-dark page-title-center"
             data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;"
             style="background-image:url('{{asset('company/demos/car/images/accessories/footer.jpg')}}');background-size:cover;padding:120px 0;">
        <div class="parallax-overlay"></div>
        <div class="container clearfix">
            <h1>Window Films</h1>
            <span>Unmatched style, privacy and solar protection</span>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('home-company')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url()->current()}}">Automotive</a></li>
                <li class="breadcrumb-item active" aria-current="page">Window Films</li>
            </ol>
        </div>
    </section>

    <section id="content" class="clearfix">
			<div class="content-wrap">
				<div class="container">
                    <div class="heading-block center section nobottomborder content-area py-5 mt-0">
                        <h3 class="highlight-me px-2 d-inline-block">Automotive Window Films</h3>
                        <p class="mb-0 px-4">Avery Dennison Automotive Window Films combine superior aesthetics and
                            performance with remarkable heat shrink properties for easy and efficient application.
                            Our color stable films won’t fade to purple and are developed with an acrylic scratch
                            resistant hardcoat to enable scratch-free installation and maintenance. Choose from a
                            variety of shades and light transmission levels to give vehicles a custom appearance
                            while improving comfort for passengers, protecting vehicle interiors and blocking
                            harmful UV radiation and glare.</p>
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <svg id="play-1" class="play" data-toggle="tooltip" title="Click here to play!"
                                     data-placement="bottom" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px"
                                     width="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                     xml:space="preserve" onclick="overviewFilm()">
                                    <path class="stroke-solid" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="stroke-dotted" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                    <path class="icon" fill="#E31B23"
                                          d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30"
                         data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="2"
                         data-items-lg="2" data-items-xl="2" data-autoplay="5000">
                        <div class="iproduct center">
                            <div class="product-image px-4 py-1">
                                <a href="{{route('show.window-films.stealth')}}">
                                    <img src="{{asset('company/images/automotive/window-films/stealth-series.png')}}" alt=""></a>
                            </div>
                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="{{route('show.window-films.stealth')}}">Stealth&trade; Series</a></h3></div>
                                <div class="product-price"><ins>NR Pro Series Non-Reflective Film</ins></div>
                                <p>NR Pro automotive window films provide a cool and comfortable ride for riders.</p>
                            </div>
                        </div>
                        <div class="iproduct center">
                            <div class="product-image px-4 py-1">
                                <a href="{{route('show.window-films.nero')}}">
                                    <img src="{{asset('company/images/automotive/window-films/nero-ceramic-series.png')}}" alt=""></a>
                            </div>
                            <div class="product-desc">
                                <div class="product-title">
                                    <h3><a href="{{route('show.window-films.nero')}}">Nero Ceramic&trade; Series</a></h3></div>
                                <div class="product-price"><ins>NR Nano Ceramic IR Series Non Reflective Film</ins></div>
                                <p>NR Nano Ceramic IR automotive window films deliver exceptional performance with
                                    their advanced Nano ceramic components for long lasting color stability and
                                    outstanding heat rejection.</p>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="section nomargin footer-stick clearfix"
                     style="background: #FFF url('{{asset('company/demos/car/images/features/section-bg.jpg')}}') left bottom no-repeat; background-size: cover; padding: 120px 0">
					<div class="container clearfix">
						<div class="row">
							<div class="col-md-6">
								<h2 class="h2 t700 mb-4">You still can't find your automotive needs, then please Contact Us!</h2>
								<a href="{{route('show.contact')}}"
                                   class="button button-color button-large button-rounded">Contact Now</a>
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
