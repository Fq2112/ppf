@extends('layouts.mst')
@section('title', 'Contact | '.env('APP_TITLE'))
@push('styles')
    <style>
        .banner-2{
            background: url({{asset('images/banner/contact.jpg')}});
        }
    </style>
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
                <div class="message">
                    <div data-aos="fade-right" class="col-md-6 col-sm-6 grid_6 c1">
                        <input type="text" name="name" class="text" placeholder="Full name" required>
                        <input type="email" name="email" class="email" placeholder="Email" required>
                        <input type="text" name="subject" class="text" placeholder="Subject" required>
                    </div>
                    <div data-aos="fade-left" class="col-md-6 col-sm-6 grid_6 c1">
                        <textarea name="message" placeholder="Write something here..." required></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <input data-aos="fade-down" type="submit" name="send" class="more_btn" value="Send Message">
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
        @if(session('contact'))
        swal('Successfully sent a message!', '{{ session('contact') }}', 'success');
        @endif
    </script>
@endpush
