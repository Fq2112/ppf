@extends('layouts.mst')
@section('title', 'Contact | '.env('APP_TITLE'))
@push('styles')
    <style>
        .banner-2{
            background: url({{asset('images/banner/contact.jpg')}});
        }

        .contact_form input[type=submit] {
            margin-top: 0;
            padding: 1.6em 3em;
        }

        .contact_form input:disabled {
            opacity: .8 !important;
            cursor: no-drop;
        }

        #recaptcha-contact {
            float: right;
        }
    </style>
    <script src='https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit' async defer></script>
@endpush
@section('content')
    <!-- Contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h3 data-aos="fade-right" class="w3l-title gall-title">Contact</h3>
            <h3 data-aos="fade-right">Feel free to get in touch with us!</h3>
            <div class="w3-agileitsline"></div>
            <form action="{{route('submit.contact')}}" method="post" class="contact_form">
                @csrf
                <div class="row message">
                    <div data-aos="fade-right" class="col-md-6 col-sm-6 grid_6 c1">
                        <input type="text" name="name" class="text" placeholder="Full name" required>
                        <input type="email" name="email" class="email" placeholder="Email" required>
                        <input type="text" name="subject" class="text" placeholder="Subject" required>
                    </div>
                    <div data-aos="fade-left" class="col-md-6 col-sm-6 grid_6 c1">
                        <textarea name="message" placeholder="Write something here..." required></textarea>
                    </div>
                </div>
                <div class="row message" data-aos="fade-down">
                    <div class="col-md-6 col-sm-6">
                        <div id="recaptcha-contact"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 text-left">
                        <input data-aos="fade-down" type="submit" name="send" class="more_btn" value="SEND MESSAGE" disabled>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Map-iFrame -->
    <div class="map">
        <iframe src="https://maps.google.com/maps?q=Premier%20printing%20kenjeran&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
    </div>
@endsection
@push('scripts')
    <script>
        var recaptcha_contact, recaptchaCallback = function () {
            recaptcha_contact = grecaptcha.render(document.getElementById('recaptcha-contact'), {
                'sitekey': '{{env('reCAPTCHA_v2_SITEKEY')}}',
                'callback': 'enable_btnContact',
                'expired-callback': 'disabled_btnContact'
            });
        };

        function enable_btnContact() {
            $(".more_btn").removeAttr('disabled');
        }

        function disabled_btnContact() {
            $(".more_btn").attr('disabled', 'disabled');
        }

        $(".contact_form").on("submit", function (e) {
            if (grecaptcha.getResponse(recaptcha_contact).length === 0) {
                e.preventDefault();
                swal('ATTENTION!', 'Please confirm us that you\'re not a robot by clicking in ' +
                    'the reCAPTCHA dialog-box.', 'warning');
            }
        });

        @if(session('contact'))
        swal('Successfully sent a message!', '{{ session('contact') }}', 'success');
        @endif
    </script>
@endpush
