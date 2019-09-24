@extends('layouts.mst')
@section('title', 'Home | '.env('APP_TITLE'))
@section('content')
    @push('carousels')
        <div id="JiSlider" class="jislider">
            <ul>
                <li>
                    <div class="w3layouts-banner-top">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <p>Welcome to Our Driving School</p>
                                <h3>Offering careful training</h3>
                                <div class="agileits_w3layouts_more menu__item">
                                    <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn
                                        More</a>
                                </div>
                                <div class="thim-click-to-bottom">
                                    <a href="#about" class="scroll">
                                        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="ftr-text">
                                    <p><a href="mailto:info@example.com"><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i>info@example.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <p>Welcome to Our Driving School</p>
                                <h3>Drive a New Car With Us</h3>
                                <div class="agileits_w3layouts_more menu__item">
                                    <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn
                                        More</a>
                                </div>
                                <div class="thim-click-to-bottom">
                                    <a href="#about" class="scroll">
                                        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="ftr-text">
                                    <p><a href="mailto:info@example.com"><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i>info@example.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <p>Welcome to Our Driving School</p>
                                <h3>Online Driving Classes</h3>
                                <div class="agileits_w3layouts_more menu__item">
                                    <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn
                                        More</a>
                                </div>
                                <div class="thim-click-to-bottom">
                                    <a href="#about" class="scroll">
                                        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="ftr-text">
                                    <p><a href="mailto:info@example.com"><i class="fa fa-envelope"
                                                                            aria-hidden="true"></i>info@example.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <h5 class="w3l-posi">PPF by <a href="https://averydennison.com" target="_blank"><span>Avery Dennison</span></a></h5>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <img src="images/model1.jpg" alt=" " class="img-responsive">
                        <h5>Donec lobortis pharetra dolor</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, rds which don't look even slightly
                            believable..</p>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>
        </div>
    @endpush
    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <div class="w3-agileits-about-grids">
                <div class="col-md-5 agile-about-left">
                    <h3 class="w3l-title title">Welcome</h3>
                    <h5>Our Company is the leading manufacturer of traffic, regulatory and safety signs in the country
                        today.</h5>
                    <p>Lorem ipsum dolor sit amet, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-md-7 agile-about-right">
                    <img src="images/ab.jpg" alt=""/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- middle -->
    <div class="middle-w3l">
        <div class="col-md-4 w3ls-special-img w3l-grid-1">
            <div class="w3ls-special-text effect-1">
                <h4>New Adult Drivers</h4>
                <ul>
                    <li>Ultimate Beginner</li>
                    <li>Adult Intermediate</li>
                    <li>Adult Beginner</li>
                </ul>
                <div class="agileits_w3layouts_more menu__item middle-button-w3">
                    <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 w3ls-special-img w3l-grid-2">
            <div class="w3ls-special-text effect-1">
                <h4>New Teen Drivers</h4>
                <ul>
                    <li>Complete Course Options</li>
                    <li>Partial Course Options</li>
                    <li>Teen Starter Courses</li>
                </ul>
                <div class="agileits_w3layouts_more menu__item middle-button-w3">
                    <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 w3ls-special-img w3l-grid-3">
            <div class="w3ls-special-text effect-1">
                <h4>Excellent Training</h4>
                <ul>
                    <li>Complete Course Options</li>
                    <li>Partial Course Options</li>
                    <li>Teen Starter Courses</li>
                </ul>
                <div class="agileits_w3layouts_more menu__item middle-button-w3">
                    <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //middle -->
    <!-- work -->
    <div class="what-w3ls">
        <div class="container">
            <h3 class="w3l-title work-title">Work Process</h3>
            <div class="what-grids">
                <div class="col-md-6 what-grid">
                    <img src="images/work.jpg" class="img-responsive" alt=""/>
                    <div class="what-agile-info">
                        <h4>100% Driving Success</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit
                            incidunt.</p>
                    </div>
                </div>
                <div class="col-md-6 what-grid1">
                    <div class="what-top">
                        <div class="what-left">
                            <i class="fa fa-car" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Full Car Insurance</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit
                                incidunt, laboriosam consectetur adipisicing elit.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="what-top1">
                        <div class="what-left">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Experienced Instructors</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit
                                incidunt, laboriosam consectetur adipisicing elit.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="what-top1">
                        <div class="what-left">
                            <i class="fa fa-road" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>DRIVING EDUCATION</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit
                                incidunt, laboriosam consectetur adipisicing elit.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //work -->
    <!-- stats -->
    <div class="stats">
        <div class="container">
            <h3 class="w3l-title stat-title">Stats</h3>
            <div class="agileits_stats_grids">
                <div class="col-md-3 col-xs-4 agileinfo_stats">
                    <div class="agileinfo_stats_grid">
                        <p class="counter">654</p>
                        <h3>Customers</h3>
                    </div>
                    <p class="w3l-par-st">Dolor sit amet, consectetur elit lorem ipsum sit.</p>
                </div>
                <div class="col-md-3 col-xs-4 agileinfo_stats mid-w3l-stat">
                    <div class="agileinfo_stats_grid">
                        <p class="counter">432</p>
                        <h3>Branches</h3>
                    </div>
                    <p class="w3l-par-st">Dolor sit amet, consectetur elit lorem ipsum sit.</p>
                </div>
                <div class="col-md-3 col-xs-4 agileinfo_stats">
                    <div class="agileinfo_stats_grid">
                        <p class="counter">231</p>
                        <h3>Popularity</h3>
                    </div>
                    <p class="w3l-par-st">Dolor sit amet, consectetur elit lorem ipsum sit.</p>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!-- //stats -->
    <!-- testimonials -->
    <div class="testimonials">
        <div class="container">
            <h3 class="w3l-title work-title">Testimonials</h3>
            <div class="w3_testimonials_grids">
                <div class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="col-md-7 w3_testimonials_grid_left">
                                    <p><img src="images/q1.png" alt=" " class=""/>Morbi cursus, turpis quis laoreet blandit,
                                        odio turpis imperdiet nisl,
                                        quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien
                                        pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet
                                        egestas erat.<img src="images/q2.png" alt=" " class=""/></p>
                                </div>
                                <div class="col-md-5 w3_testimonials_grid_right">
                                    <img src="images/te1.jpg" alt=" " class="img-responsive"/>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="col-md-7 w3_testimonials_grid_left">
                                    <p><img src="images/q1.png" alt=" " class=""/>Morbi cursus, turpis quis laoreet blandit,
                                        odio turpis imperdiet nisl,
                                        quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien
                                        pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet
                                        egestas erat.<img src="images/q2.png" alt=" " class=""/></p>
                                </div>
                                <div class="col-md-5 w3_testimonials_grid_right">
                                    <img src="images/te2.jpg" alt=" " class="img-responsive"/>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
@endsection
