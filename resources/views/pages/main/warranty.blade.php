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

        .div-image {
            opacity: 0.8;
            width: 100%;
            line-height: 120px;
            background-position: center center;
            background-color: gray;
            background-size: cover;
            color: #fff;
            display: inline-block;
            margin-right: 1em;
            border-radius: 4px;
            text-align: center;
            font-weight: 800;
            font-size: larger;
            text-shadow: 4px 4px 5px rgba(0, 0, 0, 1);
        }

        .div-image:hover {
            opacity: 1;
        }

        .radio-img > input {
            display: none;
        }

        .radio-img > .div-image {
            cursor: pointer;
            border: 2px solid #ccc;
        }

        .radio-img > input:checked + .div-image {
            border: 2px solid #E31B23;
            color: #E31B23;
            opacity: 1;
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
                        Dennison&reg; Supreme&trade; PPF Series installed on your automobile!</h5>
                    <p data-aos="fade-down" align="justify">Avery Dennison&reg; Supreme&trade; PPF Series has a limited
                        warranty from date of purchase of your automobile. The film is warranted to be free from defects
                        in manufacturing and workmanship and against peeling, yellowing, bubbling, or cracking of the
                        film from UV exposure for 3 years as the original purchaser owns and operates the automobile on
                        which the Product is installed.</p>
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
                    <a href="{{route('download.data-sheet',['file' => 'supreme-ppf-warranty-terms-and-conditions-1.0-AP-rev_1-oct-2020.pdf'])}}" class="button button--bubble">
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
                        <hr data-aos="fade-down" class="hr-text" data-content="INSTALLER INFORMATION">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="installer_company">Company Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input id="installer_company" type="text" class="form-control"
                                           name="installer_company" placeholder="Company name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="installer_phone">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input id="installer_phone" placeholder="Phone number" type="text"
                                           class="form-control" name="installer_phone"
                                           onkeypress="return numberOnly(event, false)">
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="contact_person">Contact Person <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="contact_person" placeholder="Contact person" type="text"
                                           class="form-control" name="contact_person" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="installer_email">Installer Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="installer_email" type="email" class="form-control"
                                           name="installer_email" placeholder="Installer email" required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-4">
                                <label for="installer_city">City / Suburb <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
                                    <input id="installer_city" placeholder="City or suburb" type="text"
                                           class="form-control" name="installer_city" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="installer_state">State / Territory <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-city"></i></span>
                                    <input id="installer_state" placeholder="State or territory" type="text"
                                           class="form-control" name="installer_state" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="installer_country">Country <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                    <select id="installer_country" class="form-control selectpicker"
                                            name="installer_country" data-live-search="true"
                                            title="-- Select Country --" required>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr data-aos="fade-down" class="hr-text" data-content="PRODUCT DETAILS">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-12">
                                <label for="product">Supreme&trade; PPF Series Product <span class="required">*</span></label>
                                <div id="product">
                                    <label class="radio-img">
                                        <input type="radio" name="product" value="Supreme&trade; PPF X5">
                                        <div class="div-image" style="background-image: url('{{asset('images/home/supreme-ppf-x5.jpg')}}')">
                                            Supreme&trade; PPF X5
                                        </div>
                                    </label>
                                    <label class="radio-img">
                                        <input type="radio" name="product" value="Supreme&trade; PPF X3">
                                        <div class="div-image" style="background-image: url('{{asset('images/home/supreme-ppf-x3.jpg')}}')">
                                            Supreme&trade; PPF X3
                                        </div>
                                    </label>
                                    <label class="radio-img">
                                        <input type="radio" name="product" value="Supreme&trade; PPF Matte">
                                        <div class="div-image" style="background-image: url('{{asset('images/home/supreme-ppf-matte.jpg')}}')">
                                            Supreme&trade; PPF Matte
                                        </div>
                                    </label>
                                    <label class="radio-img">
                                        <input type="radio" name="product" value="Supreme&trade; neo Black">
                                        <div class="div-image" style="background-image: url('{{asset('images/home/supreme-ppf-neo-black.jpg')}}')">
                                            Supreme&trade; neo Black
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="lot_number">Lot Number <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                    <input id="lot_number" type="text" class="form-control" name="lot_number"
                                           placeholder="Lot number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="production_date">Production Date <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar-day"></i></span>
                                    <input id="production_date" type="text" class="form-control datepicker" required
                                           name="production_date" placeholder="yyyy-mm-dd" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <hr data-aos="fade-down" class="hr-text" data-content="VEHICLE DETAILS">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="vehicle_year">Vehicle Year <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar-alt"></i></span>
                                    <input id="vehicle_year" type="text" class="form-control yearpicker"
                                           name="vehicle_year" placeholder="yyyy" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="vehicle_model">Vehicle Model <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-trademark"></i></span>
                                    <input id="vehicle_model" type="text" class="form-control"
                                           name="vehicle_model" placeholder="Vehicle model" required>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-4">
                                <label for="vehicle_make">Vehicle Make <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-registered"></i></span>
                                    <input id="vehicle_make" type="text" class="form-control" name="vehicle_make"
                                           placeholder="Vehicle make" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="vehicle_vin">V.I.N. / Immatriculation <span
                                        class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                    <input id="vehicle_vin" type="text" class="form-control"
                                           name="vehicle_vin" placeholder="e.g.: 1HGCG1658WA067709" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="installation_date">Installation Date <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar-day"></i></span>
                                    <input id="installation_date" type="text" class="form-control datepicker" required
                                           name="installation_date" placeholder="yyyy-mm-dd" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-12">
                                <label for="protection_area">Protection Area(s) <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-car"></i></span>
                                    <select id="protection_area" class="form-control selectpicker" multiple required
                                            name="protection_area[]" data-live-search="true" data-actions-box="true"
                                            title="-- Select Areas --" data-selected-text-format="count > 5">
                                        <option value="Bonnet Partial Protection">Bonnet Partial Protection</option>
                                        <option value="Bonnet Full Protection">Bonnet Full Protection</option>
                                        <option value="Door Cup Protection">Door Cup Protection</option>
                                        <option value="Front Bumper Partial Protection">Front Bumper Partial Protection</option>
                                        <option value="Front Guards Protection">Front Guards Protection</option>
                                        <option value="Front Bumper Full Protection">Front Bumper Full Protection</option>
                                        <option value="Headlight Protection">Headlight Protection</option>
                                        <option value="Mirror Protection">Mirror Protection</option>
                                        <option value="Partial Wrap - Front Protection (Bumper, Bonnet, Guards)">Partial Wrap - Front Protection (Bumper, Bonnet, Guards)</option>
                                        <option value="Rear Bumper - Partial Protection">Rear Bumper - Partial Protection</option>
                                        <option value="Rear Bumper - Full Protection">Rear Bumper - Full Protection</option>
                                        <option value="Tailgate Protection (Top of rear bumper)">Tailgate Protection (Top of rear bumper)</option>
                                        <option value="Taillight Protection">Taillight Protection</option>
                                        <option value="Whole car - Full Protection">Whole car - Full Protection</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <span class="input-group-addon"><i class="fa fa-shield-alt"></i></span>
                                </div>
                            </div>
                        </div>

                        <hr data-aos="fade-down" class="hr-text" data-content="CUSTOMER INFORMATION">
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="purchaser_name">Purchaser Full Name <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="purchaser_name" type="text" class="form-control" name="purchaser_name"
                                           placeholder="Purchaser name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="purchaser_company">Company (if applicable)</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input id="purchaser_company" type="text" class="form-control"
                                           name="purchaser_company" placeholder="Company (if applicable)">
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-6">
                                <label for="purchaser_email">Email <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="purchaser_email" type="email" class="form-control"
                                           name="purchaser_email" placeholder="Purchaser email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="purchaser_phone">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input id="purchaser_phone" placeholder="Phone number" type="text"
                                           class="form-control" name="purchaser_phone"
                                           onkeypress="return numberOnly(event, false)">
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-down" class="row form-group">
                            <div class="col-md-4">
                                <label for="purchaser_city">City / Suburb <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
                                    <input id="purchaser_city" placeholder="City or suburb" type="text"
                                           class="form-control" name="purchaser_city" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="purchaser_state">State / Territory <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-city"></i></span>
                                    <input id="purchaser_state" placeholder="State or territory" type="text"
                                           class="form-control" name="purchaser_state" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="purchaser_country">Country <span class="required">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                    <select id="purchaser_country" class="form-control selectpicker"
                                            name="purchaser_country" data-live-search="true"
                                            title="-- Select Country --" required>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                        <option value="Other">Other</option>
                                    </select>
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

            $(".radio-img").css('width', Math.ceil($("#product").width() / 4 - 4));
        });

        function initialize() {
            var input = document.getElementById('installation_location');
            new google.maps.places.Autocomplete(input);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        $("#form-warranty").on('submit', function (e) {
            e.preventDefault();
            if(!$("input[name='product']:checked").val()) {
                swal('ATTENTION!', 'Please select one of the Supreme™ PPF Series Product.', 'warning');
            } else {
                $(this)[0].submit();
            }
        });

        @if(session('warranty'))
        swal('Successfully submitted!', '{{ session('warranty') }}', 'success');
        @endif
    </script>
@endpush
