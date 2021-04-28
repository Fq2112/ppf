@extends('layouts.mst_company')
@section('title', 'Event: '.$title.' | '.env('APP_COMPANY'))
@push('styles')
    <link rel="stylesheet" href="{{asset('css/share-button.css')}}">
    <link rel="stylesheet" href="{{asset('css/ig-feed.css')}}">
    <style>
        .product-title h3 {
            text-transform: uppercase;
        }

        .share {
            bottom: -7.5%;
            visibility: hidden;
            transition: all .3s ease-in-out;
        }

        .share-to-top {
            bottom: 3%;
            visibility: visible;
        }

        #ig-feed .custom-text h4 {
            color: #E31B23;
            text-transform: uppercase;
            transition: all .5s ease-in-out;
        }

        #ig-feed .content-area:hover .custom-text h4 {
            color: #fff;
        }
    </style>
@endpush
@section('content')
    <section id="page-title" class="page-title-parallax page-title-dark page-title-center"
             data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;"
             style="background-image:url('{{asset('company/demos/car/images/banner/users.jpg')}}');background-size:cover;padding:120px 0;">
        <div class="parallax-overlay"></div>
        <div class="container clearfix">
            <h1>Event</h1>
            <span>{{$title}}</span>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('home-company')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url()->current()}}">Event</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
            </ol>
        </div>
    </section>

    <section id="content" class="clearfix">
        <div class="content-wrap">
            <div class="container">
                <div data-toggle="tooltip" data-placement="left" title="Share on" class="share">
                    <a class="fab no email"
                       href="mailto:?subject={{$title}}&body=Hi, I thought you'd like this: {{url()->current()}}"></a>
                    <a class="fab no whatsapp" href="whatsapp://send?text=Hi, I thought you'd like this: {{url()->current()}}"></a>
                    <a class="fab no facebook" href="https://facebook.com/sharer/sharer.php?u={{url()->current()}}"
                       target="popup" onclick="shareBlog($(this).attr('href'))"></a>
                    <a class="fab no linkedin" href="https://linkedin.com/shareArticle?mini=true&url={{url()->current()}}"
                       target="popup" onclick="shareBlog($(this).attr('href'))"></a>
                    <a class="fab no twitter"
                       href="https://twitter.com/intent/tweet?text=Hi, I thought you'd like this: {{url()->current()}}"
                       target="popup" onclick="shareBlog($(this).attr('href'))"></a>
                </div>
                <video class="img-thumbnail" src="{{asset('storage/event/'.$video)}}" autoplay controls></video>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(".share").on('click', function (e) {
            $(".share .fab").removeClass("no");
            if (e.target != this) return;
            $('.share, .share .fab').toggleClass("active");
        });

        function shareBlog(url) {
            window.open(url, 'popup', 'width=600,height=400');
            $(".share").click();
            return false;
        }

        window.onscroll = function () {
            if ($(this).scrollTop() > 100) {
                $('.share').addClass('share-to-top');
            } else {
                $('.share').removeClass('share-to-top');
            }
        };
    </script>
@endpush
