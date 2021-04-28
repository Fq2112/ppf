@extends('layouts.mst_company')
@section('title', 'Industrials: Tapes | '.env('APP_COMPANY'))
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
            <h1>Tapes</h1>
            <span>A complete list of accessories and vinyl installation tools to help you achieve a professional end result no matter what your application</span>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('home-company')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url()->current()}}">Automotive</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tapes</li>
            </ol>
        </div>
    </section>

    <div id="page-menu">
        <div id="page-menu-wrap">
            <div class="container clearfix">
                <div class="menu-title text-uppercase"><span>Wrapping</span> Tools</div>
                <nav class="one-page-menu text-uppercase">
                    <ul>
                        <li><a href="#" data-href="#squeegees" data-highlight="yellow"><div>Squeegees</div></a></li>
                        <li><a href="#" data-href="#knives" data-highlight="yellow"><div>Knives, Cutters, Spare Blade & Others</div></a></li>
                        <li><a href="#" data-href="#liquids" data-highlight="yellow"><div>Liquids</div></a></li>
                    </ul>
                </nav>
                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
            </div>
        </div>
    </div>

    <section id="content" class="clearfix">
			<div class="content-wrap">
				<div class="container">
					<div id="squeegees" class="page-section">
						<div class="heading-block center section nobottomborder py-5 mt-0">
							<h3 class="highlight-me px-2 d-inline-block">Squeegees</h3>
							<p class="mb-0">A Squeegee is a necessary tool for all application of self adhesive
                                products. We offer a wide variety of Squeegees for different substrates,
                                products and applications</p>
						</div>
						<div id="oc-wheel" class="owl-carousel shop-carousel carousel-widget" data-margin="30"
                             data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
                             data-items-lg="3" data-items-xl="3" data-autoplay="5000">
							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/squeegee-pro.jpg')}}" alt=""></a>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="javascript:void(0)">Squeegee Pro</a></h3></div>
                                    <div class="product-price"><ins>144 pcs / box (size 100 x 75 mm)</ins></div>
									<p>The Squeegee Pro is a medium flex squeegee with one felt side. It is a highly
                                        effective tool for flat or slightly curved surfaces. A great choice for vehicle
                                        wraps and day-to-day applications like flat wall panels.</p>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/squeegee-pro-flexible.jpg')}}" alt=""></a>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="javascript:void(0)">Squeegee Pro Flexible</a></h3></div>
									<div class="product-price"><ins>144 pcs / box (size 100 x 75 mm)</ins></div>
									<p>The Squeegee Pro Flexible is a softer and more flexible version of the Squeegee
                                        Pro with one felt side; an excellent choice for curved applications such as
                                        wheel arches and car bonnets / bumpers.</p>
								</div>
							</div>

							<div class="iproduct center">
								<div class="product-image px-4 py-1">
									<a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/squeegee-flextreme.jpg')}}" alt=""></a>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="javascript:void(0)">Squeegee FleXtreme</a></h3></div>
									<div class="product-price"><ins>25 sets / box</ins></div>
									<p>The FleXtreme is a micro-squeegee that is specifically designed for vinyl
                                        graphics applications. The blue (harder) FleXtreme is designed to apply film at
                                        narrow curves and edges, to ensure seamless application. The red (softer)
                                        FleXtreme is the ideal tool to support film application in narrow, concave
                                        parts of a car. This set contains 1 red and 1 blue FleXtreme.</p>
								</div>
							</div>
						</div>
					</div>

                    <div id="knives" class="page-section">
                        <div class="heading-block section nobottomborder py-5 center">
                            <h3 class="highlight-me px-2 d-inline-block">Knives, Cutters, Spare Blades, & Others</h3>
                            <p class="mb-0">Your skills combined with our high quality cutting tools help you to cut
                                quick and precise during your application</p>
                        </div>
                        <div class="owl-carousel shop-carousel carousel-widget mb-5" data-margin="30" data-nav="true"
                             data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="3"
                             data-items-xl="3" data-autoplay="5000">
                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/cutter.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="javascript:void(0)">Cutter</a></h3></div>
                                    <div class="product-price"><ins>36 pcs / box</ins></div>
                                    <p>The Cutter has a strong, durable metal casing that holds a 30°-angled blade
                                        securely, for accurate cutting. It offers robust durability and better control,
                                        with a casing that does not flex.</p>
                                </div>
                            </div>

                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/snitty.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="javascript:void(0)">Snitty</a></h3></div>
                                    <div class="product-price"><ins>120 pcs / box</ins></div>
                                    <p>The Snitty is a mini-slitting tool, used for cutting self adhesive material.
                                        With the blade not exposed, cutting material from a roll is easy and safe done.
                                        The Snitty comes with a one blade refill.</p>
                                </div>
                            </div>

                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/magnets.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="javascript:void(0)">Magnets</a></h3></div>
                                    <div class="product-price"><ins>50 pairs / box</ins></div>
                                    <p>The Magnets are a highly practical aid for holding and positioning graphics on a
                                        substrate. The strength of magnetic attraction is sufficient to replace
                                        masking tape.</p>
                                </div>
                            </div>

                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/application-gloves.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="javascript:void(0)">Application Gloves</a></h3></div>
                                    <div class="product-price"><ins>100 pcs / box</ins></div>
                                    <p>The Application Glove is a soft, seamless glove that helps smooth graphics over
                                        the application surface and into curves and recesses. The glove has one size
                                        and is packed individually.</p>
                                </div>
                            </div>

                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/application-set.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="javascript:void(0)">Application Set</a></h3></div>
                                    <div class="product-price"><ins>1 set / box</ins></div>
                                    <p>The Application Set contains several useful tools, and is a great choice as a
                                        starter set, for promotional purposes, customer relationship gifts and sales
                                        incentives. Contents: Toolbelt, Magnets, Snitty, Application Knife, Squeegee
                                        Pro and Application Glove.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="liquids" class="page-section">
                        <div class="heading-block section nobottomborder py-5 center">
                            <h3 class="highlight-me px-2 d-inline-block">Liquids</h3>
                            <p class="mb-0">No matter if prior or past application with our AD liquids you always have
                                the right support</p>
                        </div>
                        <div class="owl-carousel shop-carousel carousel-widget mb-5" data-margin="30" data-nav="true"
                             data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="3"
                             data-items-xl="3" data-autoplay="5000">
                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/flat-surface-cleaner.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="javascript:void(0)">Flat Surface Cleaner</a></h3></div>
                                    <div class="product-price"><ins>4 x 5 L / box</ins></div>
                                    <p>The Flat Surface Cleaner is suitable for large flat panels and rigid-sided
                                        trucks. An effective choice for removing day-to-day dirt from substrates during
                                        first pass cleaning. A great cost effective solution for large surface
                                        preparation.</p>
                                </div>
                            </div>

                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/adhesive-remover.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="javascript:void(0)">Adhesive Remover UN 1993 LQ Class lll</a></h3></div>
                                    <div class="product-price"><ins>6 x 0.5 L / box</ins></div>
                                    <p>The Adhesive Remover is a high performance cleaner designed to remove adhesive
                                        left on the substrate after removal of graphics. It is supplied in a pistol-grip
                                        spray can for easy and accurate targeting of adhesive residue.</p>
                                </div>
                            </div>

                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="http://supremewrap.co.id/product/overview/supreme-wrap-care" target="_blank">
                                        <img src="{{asset('company/images/automotive/wrapping-tools/swc-cleaner.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title">
                                        <h3><a href="http://supremewrap.co.id/product/overview/supreme-wrap-care" target="_blank">SWC Cleaner</a></h3></div>
                                    <div class="product-price"><ins>6 x 946 ml / box</ins></div>
                                    <p>The Supreme Wrap Care Cleaner is a general cleaning product to be used on
                                        wrapped surfaces. The Cleaner eliminates dust, light dirt, fingerprints and
                                        other marks.</p>
                                </div>
                            </div>

                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="http://supremewrap.co.id/product/overview/supreme-wrap-care" target="_blank">
                                        <img src="{{asset('company/images/automotive/wrapping-tools/swc-power-cleaner.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title">
                                        <h3><a href="http://supremewrap.co.id/product/overview/supreme-wrap-care" target="_blank">SWC Power Cleaner</a></h3></div>
                                    <div class="product-price"><ins>6 x 946 ml / box</ins></div>
                                    <p>The Supreme Wrap Care Power Cleaner provides extra power to deal with difficult
                                        localized stains such as bird droppings, road grime, tree sap and much more on
                                        wrapped surfaces. After use of the Power Cleaner we advise to re apply the
                                        Supreme Wrap Care Sealant to the same spot.</p>
                                </div>
                            </div>

                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="http://supremewrap.co.id/product/overview/supreme-wrap-care" target="_blank">
                                        <img src="{{asset('company/images/automotive/wrapping-tools/swc-sealant.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title">
                                        <h3><a href="http://supremewrap.co.id/product/overview/supreme-wrap-care" target="_blank">SWC Sealant</a></h3></div>
                                    <div class="product-price"><ins>6 x 946 ml / box</ins></div>
                                    <p>Supreme Wrap Care Sealant provides a protective layer on wrapped surfaces.
                                        This makes it easier to clean off everyday challenges like dirt, bird droppings
                                        and tree sap, protecting the film and keeping it in good condition.</p>
                                </div>
                            </div>

                            <div class="iproduct center">
                                <div class="product-image px-4 py-1">
                                    <a href="javascript:void(0)"><img src="{{asset('company/images/automotive/wrapping-tools/application-gel.jpg')}}" alt=""></a>
                                </div>

                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="javascript:void(0)">Application Gel</a></h3></div>
                                    <div class="product-price"><ins>6 x 1 L; 4 x 5 L / box</ins></div>
                                    <p>Avery Dennison Application Gel is a transparent gel designed to support the
                                        application of paint protection film including SPF-XI. The gel facilitates
                                        the ease of application keeping the substrate well moisturized providing
                                        the right tack and positioning of the film during installation. The Avery
                                        Dennison Application Gel residues can be easily cleaned after application,
                                        even when fully dried. The Avery Dennison Application Gel is available in a
                                        1.0 L bottle and in a 5L refill canister, the gel can be used with the Avery
                                        Dennison Spray Bottle 1.2 L as well.</p>
                                </div>
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
