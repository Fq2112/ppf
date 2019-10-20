@extends('layouts.mst')
@section('title', $blog->getBlogCategory->name.' Blog: '.$blog->title.' | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/play-button.css')}}">
    <link rel="stylesheet" href="{{asset('css/share-button.css')}}">
    <link rel="stylesheet" href="{{asset('css/ig-feed.css')}}">
    <style>
        .banner-2 {
            background: url({{asset('images/banner/blog_2.jpg')}});
        }

        .what-grid1 {
            padding: 0 1.5em .5em 0;
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

        .blog-author a {
            color: #E31B23;
            text-decoration: none;
            transition: all .3s ease-in-out;
        }

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
            <h3 data-aos="fade-right" class="w3l-title servi-title">Our Blog</h3>
            <div data-toggle="tooltip" data-placement="left" title="Share on" class="share">
                <a class="fab no email"
                   href="mailto:?subject={{$blog->title}}&body=Hi, I thought you'd like this: {{$uri}}"></a>
                <a class="fab no whatsapp" href="whatsapp://send?text=Hi, I thought you'd like this: {{$uri}}"></a>
                <a class="fab no facebook" href="https://facebook.com/sharer/sharer.php?u={{$uri}}"
                   target="popup" onclick="shareBlog($(this).attr('href'))"></a>
                <a class="fab no linkedin" href="https://linkedin.com/shareArticle?mini=true&url={{$uri}}"
                   target="popup" onclick="shareBlog($(this).attr('href'))"></a>
                <a class="fab no twitter"
                   href="https://twitter.com/intent/tweet?text=Hi, I thought you'd like this: {{$uri}}"
                   target="popup" onclick="shareBlog($(this).attr('href'))"></a>
            </div>
            <div class="what-grids">
                <div class="col-md-6 what-grid1">
                    @if($blog->getBlogGallery->count() > 0)
                        <div data-aos="zoom-out" class="content-area">
                            <img src="{{asset('storage/blog/thumbnail/'.$blog->thumbnail)}}" class="img-responsive"
                                 alt="Thumbnail">
                            <div class="custom-overlay">
                                <div class="custom-text">
                                    <svg id="play" class="play" data-toggle="tooltip" title="Click here to play!"
                                         data-placement="bottom" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px"
                                         width="100px"
                                         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                    <path class="stroke-solid" fill="none" stroke="#E31B23"
                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                        <path class="stroke-dotted" fill="none" stroke="#E31B23"
                                              d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                        <path class="icon" fill="#E31B23"
                                              d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg>
                                </div>
                            </div>
                        </div>
                    @else
                        <img data-aos="zoom-out" src="{{asset('storage/blog/thumbnail/'.$blog->thumbnail)}}"
                             class="img-responsive" alt="Thumbnail">
                    @endif
                    <div data-aos="fade-down" class="what-agile-info">
                        <p class="blog-category" align="justify">{{$blog->getBlogCategory->name}}<span>{{\Carbon\Carbon::parse
                        ($blog->created_at)->format('F d, Y')}}</span></p>
                        <h4>{{$blog->title}}</h4>
                        <p class="blog-author" align="justify">by <a href="{{route('detail.blog', [
                        'author' => $user->username])}}">{{$user->username}}</a></p>
                    </div>
                </div>
                <div data-aos="fade-left" class="blog-content">
                    {!! $blog->content !!}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- related-post -->
    <div data-toggle="tooltip" title="RELATED POSTS" class="middle-w3l" style="padding-top: 0;">
        <div id="ig-feed" class="owl-carousel">
            @foreach($relates as $post)
                @php
                    $date = \Carbon\Carbon::parse($post->created_at);
                    $url = route('detail.blog', ['author' => $post->getUser->username,
                    'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                    'title' => $post->title_uri]);
                @endphp
                <a href="{{$url}}" data-aos="zoom-out" class="item">
                    <div class="content-area">
                        <img src="{{asset('storage/blog/thumbnail/'.$post->thumbnail)}}" alt="Thumbnail">
                        <div class="custom-overlay">
                            <div class="custom-text">
                                <h4>{{$post->title}}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('vendor/owlcarousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
    <script>
        $(function () {
            $('.owl-carousel').owlCarousel({
                loop: false,
                rewind: true,
                nav: false,
                dots: false,
                autoHeight: true,
                autoplay: true,
                items: 5,
                stage: 1,
                rtl: false,
                navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
                responsive: {
                    0: {
                        items: 1,
                    },
                    320: {
                        items: 3,
                    },
                    768: {
                        items: 5,
                    }
                }
            });
        });

        $('#play').on('click', function () {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                        @foreach($blog->getBlogGallery as $row)
                    {
                        "src": '{{$row->type == 'photos' ? asset('storage/blog/'.$row->files) : $row->files}}',
                        'thumb': '{{$row->type == 'photos' ? asset('storage/blog/'.$row->files) : $row->files}}',
                    },
                    @endforeach
                ]
            });
        });

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
