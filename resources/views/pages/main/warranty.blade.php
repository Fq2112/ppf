@extends('layouts.mst')
@section('title', 'Warranty | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('admins/modules/bootstrap-datepicker/bootstrap-datepicker.css')}}">
    <style>
        .banner-2 {
            background: url({{asset('images/banner/warranty.jpg')}});
        }

        h3.w3l-title.warranty-title:after {
            left: 50%;
        }

        .vertical-center {
            display: flex;
            align-items: center;
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

        .hr-text {
            line-height: 1em;
            position: relative;
            outline: 0;
            border: 0;
            color: black;
            text-align: center;
            height: 1.5em;
            opacity: .5;
        }

        .hr-text:before {
            content: '';
            background: -webkit-gradient(linear, left top, right top, from(transparent), color-stop(#ccc), to(transparent));
            background: linear-gradient(to right, transparent, #ccc, transparent);
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
        }

        .hr-text:after {
            content: attr(data-content);
            position: relative;
            display: inline-block;
            padding: 0 .5em;
            line-height: 1.5em;
            color: #999;
            background-color: #fff;
        }

        @media (max-width: 1080px) {
            h3.w3l-title.warranty-title:after {
                left: 53%;
            }
        }

        @media (max-width: 991px) {
            h3.w3l-title.warranty-title:after {
                left: 53%;
            }
        }

        @media (max-width: 736px) {
            h3.w3l-title.warranty-title:after {
                left: 47%;
            }
        }

        @media (max-width: 568px) {
            h3.w3l-title.warranty-title:after {
                left: 56%;
            }
        }

        @media (max-width: 480px) {
            h3.w3l-title.warranty-title:after {
                left: 58%;
            }
        }

        @media (max-width: 414px) {
            h3.w3l-title.warranty-title:after {
                left: 63%;
            }
        }

        @media (max-width: 384px) {
            h3.w3l-title.warranty-title:after {
                left: 68%;
            }
        }

        @media (max-width: 320px) {
            h3.w3l-title.warranty-title:after {
                left: 74%;
            }
        }
    </style>
@endpush
@section('content')
    <div class="about">
        <div class="container">
            <div class="w3-agileits-about-grids vertical-center">
                <div class="col-md-9 agile-about-left">
                    <h3 data-aos="fade-right" class="w3l-title warranty-title">Warranty Request</h3>
                    <h5 data-aos="fade-right" style="text-align: justify">Feel free to get a warranty for the Avery
                        Dennison&reg; Supreme Protection&trade; Film installed on your automobile!</h5>
                    <p data-aos="fade-down" align="justify">Avery Dennison Supreme Protection Film ("Avery Dennison
                        SPF-XI") has a limited warranty from date of purchase of your automobile. The film is warranted
                        to be free from defects in manufacturing and workmanship and against peeling, yellowing,
                        bubbling, or cracking of the film from UV exposure for 3 years as the original purchaser owns
                        and operates the automobile on which the Product is installed.</p>
                </div>
                <div data-aos="fade-left" class="col-md-3 agile-about-right">
                    <div data-aos="zoom-out" class="content-area" style="margin-top: 1em">
                        <img class="img-responsive" src="{{asset('images/warranty.png')}}" alt="Warranty">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <div data-aos="fade-down" class="bubble-button" style="text-align: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
                                        <defs>
                                            <filter id="goo">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"/>
                                                <feColorMatrix in="blur" mode="matrix"
                                                               values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                                               result="goo"/>
                                                <feComposite in="SourceGraphic" in2="goo"/>
                                            </filter>
                                        </defs>
                                    </svg>
                                    <span class="button--bubble__container ld ld-breath">
                    <a href="{{asset('storage/pds-supreme-protection-film-spf-xi.pdf')}}" class="button button--bubble">
                        <strong><i class="fa fa-file-pdf"></i>&ensp;DATASHEET</strong></a>
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
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="w3-agileits-about-grids" style="margin-top: 2em">
                <div class="col-md-12 agile-about-left">
                    <form id="form-warranty" action="{{route('submit.warranty')}}" method="post">
                        @csrf
                        <hr data-aos="fade-down" class="hr-text" data-content="CUSTOMER">
                        <div data-aos="fade-down" class="row form-group">
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
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="email">Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="email" type="email" class="form-control" name="email"
                                           placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Phone <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input id="phone" placeholder="Phone number" type="text" maxlength="13"
                                           class="form-control" name="phone" required
                                           onkeypress="return numberOnly(event, false)">
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-12">
                                <label for="address">Address <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marked-alt"></i></span>
                                    <textarea id="address" class="form-control" name="address" rows="3" required
                                              placeholder="Address" style="resize:vertical; background:#fff"></textarea>
                                </div>
                            </div>
                        </div>

                        <hr data-aos="fade-down" class="hr-text" data-content="AUTHORIZED INSTALLER">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="installer_name">Installer Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-tools"></i></span>
                                    <input id="installer_name" type="text" class="form-control" name="installer_name"
                                           placeholder="Installer name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="installed_by">Installed By <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                    <input id="installed_by" type="text" class="form-control" placeholder="Installed by"
                                           name="installed_by" required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="installer_email">Installer Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="installer_email" type="email" class="form-control" name="installer_email"
                                           placeholder="Installer email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="installer_phone">Installer Phone <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input id="installer_phone" placeholder="Installer phone number" type="text"
                                           maxlength="13" class="form-control" name="installer_phone" required
                                           onkeypress="return numberOnly(event, false)">
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="installation_date">Date of Installation <span
                                        class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar-day"></i></span>
                                    <input id="installation_date" type="text" class="form-control datepicker" required
                                           name="installation_date" placeholder="yyyy-mm-dd" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="installation_location">Location of Installation <span
                                        class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker-alt"></i></span>
                                    <input id="installation_location" type="text" class="form-control"
                                           name="installation_location" placeholder="Installation location"
                                           autocomplete="off" required>
                                </div>
                            </div>
                        </div>

                        <hr data-aos="fade-down" class="hr-text" data-content="AUTOMOBILE">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="automobile_make">Automobile Make <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-registered"></i></span>
                                    <input id="automobile_make" type="text" class="form-control" name="automobile_make"
                                           placeholder="Automobile make" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="automobile_model">Automobile Model <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-trademark"></i></span>
                                    <input id="automobile_model" type="text" class="form-control"
                                           name="automobile_model" placeholder="Automobile model" required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="automobile_year">Automobile Year <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar-alt"></i></span>
                                    <input id="automobile_year" type="text" class="form-control yearpicker"
                                           name="automobile_year" placeholder="yyyy" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="automobile_color">Automobile Color <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-palette"></i></span>
                                    <input id="automobile_color" type="text" class="form-control"
                                           name="automobile_color" placeholder="Automobile color" required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-3">
                                <label for="automobile_vin">V.I.N. / Immatriculation <span
                                        class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                    <input id="automobile_vin" type="text" class="form-control"
                                           name="automobile_vin" placeholder="e.g.: 1HGCG1658WA067709" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="roll_lot_number">Roll Lot Number <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                    <input id="roll_lot_number" type="text" class="form-control"
                                           name="roll_lot_number" placeholder="Roll lot number" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="roll_fwo_number">Roll FWO Number <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                    <input id="roll_fwo_number" type="text" class="form-control"
                                           name="roll_fwo_number" placeholder="Roll FWO number" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="template_pattern_number">Template Pattern Number <span
                                        class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                    <input id="template_pattern_number" type="text" class="form-control"
                                           name="template_pattern_number" placeholder="Template pattern number"
                                           required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-12">
                                <label for="areas_protected">Area(s) Protected <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                    <select id="areas_protected" class="form-control selectpicker" multiple required
                                            name="areas_protected[]" data-live-search="true" data-actions-box="true"
                                            title="-- Select Areas --" data-selected-text-format="count > 5">
                                        <option value="A-Pillar">A-Pillar</option>
                                        <option value="Bumper">Bumper</option>
                                        <option value="Fender">Fender</option>
                                        <option value="Grille">Grille</option>
                                        <option value="Hood-Full">Hood-Full</option>
                                        <option value="Hood-Partial">Hood-Partial</option>
                                        <option value="Mirrors">Mirrors</option>
                                        <option value="Roof">Roof</option>
                                    </select>
                                    <span class="input-group-addon"><i class="fa fa-shield-alt"></i></span>
                                </div>
                            </div>
                        </div>

                        <hr data-aos="fade-down" class="hr-text" data-content="ADDITIONAL">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-12">
                                <label for="comments">Comments</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                                    <textarea id="comments" class="form-control" name="comments" rows="5"
                                              placeholder="Write something here&hellip;"
                                              style="resize:vertical; background:#fff"></textarea>
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
@endsection
@push('scripts')
    <script src="{{asset('admins/modules/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68&libraries=places"></script>
    <script>
        $(function () {
            window.mobilecheck() ? $(".w3-agileits-about-grids").removeClass('vertical-center') : '';

            $('.datepicker').datepicker({format: "yyyy-mm-dd", autoclose: true, todayHighlight: true, todayBtn: true});
            $('.yearpicker').datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true,
                todayHighlight: true,
                todayBtn: true
            });
        });

        function initialize() {
            var input = document.getElementById('installation_location');
            new google.maps.places.Autocomplete(input);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        @if(session('warranty'))
        swal('Successfully submitted!', '{{ session('warranty') }}', 'success');
        @endif
    </script>
@endpush
