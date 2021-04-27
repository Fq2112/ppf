@extends('layouts.mst_company')
@section('title', 'About Us | '.env('APP_COMPANY'))
@push('styles')
    <style>
        .feature-box .fbox-icon a {
            cursor: default;
        }

        .feature-box .fbox-icon a:hover i {
            color: #fff;
        }

        #about p {
            margin-bottom: 1rem;
            text-align: justify;
            font-size: 15px;
        }

        @media (min-width: 481px) and (max-width: 767px) {
            .col_one_fourth.--custom {
                width: 22%;
                float: left;
                margin-right: 4%;
            }

            .col_one_fourth.--custom .feature-box.fbox-center .fbox-icon {
                width: 50px;
                height: 50px;
                margin-bottom: 1em;
            }

            .col_one_fourth.--custom .feature-box.fbox-center.fbox-border .fbox-icon i {
                font-size: 25px;
                line-height: 48px !important;
            }

            .col_one_fourth.--custom .feature-box.fbox-center.fbox-border h3,
            .col_one_fourth.--custom .feature-box.fbox-center.fbox-border p {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .col_one_fourth.--custom {
                width: 22%;
                float: left;
                margin-right: 4%;
            }

            .col_one_fourth.--custom .feature-box.fbox-center .fbox-icon {
                width: 45px;
                height: 45px;
                margin-bottom: 1em;
            }

            .col_one_fourth.--custom .feature-box.fbox-center.fbox-border .fbox-icon i {
                font-size: 20px;
                line-height: 45px !important;
            }

            .col_one_fourth.--custom .feature-box.fbox-center.fbox-border h3,
            .col_one_fourth.--custom .feature-box.fbox-center.fbox-border p {
                font-size: 10px;
            }
        }

        @media (max-width: 360px) {
            .col_one_fourth.--custom {
                width: 22%;
                float: left;
                margin-right: 4%;
            }

            .col_one_fourth.--custom .feature-box.fbox-center .fbox-icon {
                width: 40px;
                height: 40px;
                margin-bottom: 1em;
            }

            .col_one_fourth.--custom .feature-box.fbox-center.fbox-border .fbox-icon i {
                font-size: 18px;
                line-height: 38px !important;
            }

            .col_one_fourth.--custom .feature-box.fbox-center.fbox-border h3,
            .col_one_fourth.--custom .feature-box.fbox-center.fbox-border p {
                font-size: 8px;
            }
        }
    </style>
@endpush
@section('content')
    <section id="page-title" class="page-title-parallax page-title-dark"
             data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;"
             style="background-image:url('{{asset('company/demos/car/images/banner/about.jpg')}}');background-size:cover;padding:120px 0;">
        <div class="parallax-overlay"></div>
        <div class="container clearfix">
            <h1>About Us</h1>
            <span>Want to know more about us? Scroll it down!</span>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('home-company')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url()->current()}}">Info</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap pb-0">
            <div class="container clearfix">
                <div class="fancy-title title-dotted-border title-center mb-4">
                    <h4>Why Choose Us?</h4>
                </div>
                <div class="col_one_fourth --custom">
                    <div class="feature-box fbox-center fbox-border fbox-effect noborder">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-registered"></i></a>
                        </div>
                        <h3>ORIGINALITY GUARANTEE</h3>
                        <p>Has a unique holographic emblem sticker that is not easily imitated</p>
                    </div>
                </div>
                <div class="col_one_fourth --custom">
                    <div class="feature-box fbox-center fbox-border fbox-effect noborder">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-shield-alt"></i></a>
                        </div>
                        <h3>DURABILITY GUARANTEE</h3>
                        <p>Has an outstanding durability and weathering protection up to 7 years</p>
                    </div>
                </div>
                <div class="col_one_fourth --custom">
                    <div class="feature-box fbox-center fbox-border fbox-effect noborder">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-gem"></i></a>
                        </div>
                        <h3>LUXURY & PREMIUM</h3>
                        <p>Has a luxurious and premium quality appearance to the vehicle unit</p>
                    </div>
                </div>
                <div class="col_one_fourth --custom col_last">
                    <div class="feature-box fbox-center fbox-border fbox-effect noborder">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-toolbox"></i></a>
                        </div>
                        <h3>EASE APPLICATION</h3>
                        <p>Has a great conformability and optimal adhesive tack</p>
                    </div>
                </div>
            </div>

            <div class="container clearfix"
                 style="background: url('{{asset('images/world_map.png')}}') no-repeat center center; background-size: 100%;">
                <div class="col_half">
                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>Our <span>Vision</span></h4>
                    </div>
                    <p class="mb-0">Become the most trusted and popular company.</p>
                </div>
                <div class="col_half col_last">
                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>Our <span>Mission</span></h4>
                    </div>
                    <ul class="mb-0" style="margin-left: 1.25em">
                        <li>Provide the solution products for consumers with a high quality and best prices</li>
                        <li>Being the fulfilment of Consumer demands as guideline company mission</li>
                        <li>Be trusted partner to customers as well as principal</li>
                    </ul>
                </div>
            </div>

            <div id="about" class="row align-items-stretch clearfix">
                <div class="col-md-5 col-padding"
                     style="background: url('{{asset('company/demos/car/images/about.jpg')}}') center center no-repeat; background-size: cover;"></div>
                <div class="col-md-7 col-padding">
                    <div class="heading-block mb-4">
                        <span class="before-heading color">The Professional's Choice</span>
                        <h4>It's all about detail</h4>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <p>As part of Premier Group, {{env('APP_COMPANY')}} is the Authorized distributor channel
                                of self adhesive and associated accessories of Avery Dennison in Automotive Industries.
                                We place high standards on everything we sell. As a trade-only company we understand
                                our customer and respect their business.</p>
                            <p>Our culture and values are at the heart of everything we do. We value a personal
                                approach to our work, driven by trusted and talented people. We also have a strong
                                sense of corporate responsibility, aiming to manage the impact of our business on
                                people, suppliers, communities and the environment.</p>
                            <p>We put our clients first and focus on delivering the right solutions. We are driven by
                                our clients’ success, developing long-term relationships and achieving high levels of
                                client satisfaction. We have proudly served our clients for over a century, taking the
                                time to understand their individual circumstances and delivering tailored solutions.</p>
                            <p>We have high-quality people who deliver excellent service. Our success is based on the
                                quality and commitment of our employees and partners. Their continued development and
                                our ability to attract and retain the best people is at the forefront of the people
                                programmes we have in place and are enhancing. We strive to create a rewarding and
                                fulfilling work environment, providing career development and training opportunities
                                while promoting an appropriate work/life balance</p>
                            <p>We are trustworthy and act with integrity. Our approach to working with our clients
                                means our people spend more time developing strong relationships, built on trust and
                                understanding. We value our excellent reputation, and are committed to maintaining
                                the highest level of ethical standards in the conduct of our business affairs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
