@extends('layouts.mst')
@section('title', 'Event: '.$title.' | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('css/share-button.css')}}">
    <link rel="stylesheet" href="{{asset('css/ig-feed.css')}}">
    <style>
        .banner-2 {
            background: url({{asset('images/banner/blog_2.jpg')}});
        }

        .what-grid1 {
            padding: 0 1.5em .5em 0;
        }

        h3.w3l-title.servi-title:after {
            left: 14%;
        }

        .what-grid1 {
            padding-left: 0;
        }

        .blog-category span {
            text-transform: uppercase;
        }

        .blog-category span:before {
            content: '\f073';
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-left: 10px;
            margin-right: 10px;
        }

        .blog-category a, .blog-author a {
            color: #E31B23;
            text-decoration: none;
            transition: all .3s ease-in-out;
        }

        .blog-category a:hover, .blog-category a:focus, .blog-category a:active,
        .blog-author a:hover, .blog-author a:focus, .blog-author a:active {
            color: #9b1219;
            text-decoration: none;
        }

        .blog-content p {
            color: #666;
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
    <!-- detail-blog -->
    <div class="what-w3ls">
        <div class="container">
            <h3 data-aos="fade-right" class="w3l-title servi-title">Event</h3>
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
            <div class="what-grids">
                <div class="col-md-12 what-grid1">
                    <div data-aos="zoom-out" class="content-area">
                        <video class="img-thumbnail" src="{{asset('storage/event/'.$video)}}" autoplay controls></video>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
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
