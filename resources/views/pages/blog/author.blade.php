@extends('layouts.mst')
@section('title', 'Blog Author: '.$user->username.' | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog-grid-list.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog-accordion.css')}}">
    <style>
        .banner-2 {
            background: url({{asset('images/banner/blog_2.jpg')}});
        }

        .what-grid1 {
            padding: 0 1.5em .5em 0;
        }

        .what-grid1 i {
            height: unset;
            width: unset;
            margin: unset;
            font-size: unset;
            border-radius: unset;
            line-height: unset;
            text-align: unset;
            background: unset;
            color: unset;
        }

        #myTab li.active .badge {
            background: #E31B23;
            color: #fff;
        }

        #myTabContent ul li:before {
            font-family: unset;
            content: unset;
            font-weight: unset;
            color: unset;
            margin-left: unset;
            padding-right: unset;
        }

        .author {
            margin: .5em auto;
        }

        .author a {
            text-decoration: none;
            color: #E31B23;
            transition: all .3s ease-in-out;
        }

        .author a:hover, .author a:focus, .author a:active {
            text-decoration: none;
            color: #981319;
        }

        .social-media-2 {
            list-style: none;
            display: inline-block;
        }

        .social-media-2 li {
            display: inline-block;
            margin: 5px 5px 0 0;
        }

        .social-media-2 li a {
            width: 30px;
            height: 30px;
            background-color: transparent;
            border: 1px solid #e31b23;
            color: #e31b23;
            -webkit-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
            display: block;
            text-align: center;
            line-height: 30px;
        }

        .social-media-2 li a:hover {
            background-color: #e31b23;
            color: #fff;
        }
    </style>
@endpush
@section('content')
    <!-- author-blog -->
    <div class="what-w3ls">
        <div class="container">
            <h3 data-aos="fade-right" class="w3l-title work-title">Blog Author</h3>
            <div class="what-grids">
                <div class="col-md-12 what-grid1">
                    <div class="what-top1">
                        <div data-aos="zoom-out" class="what-left">
                            <img
                                src="{{$user->ava == "" ? asset('admins/img/avatar/avatar-'.rand(1,5).'.png') : asset('storage/admins/ava/'.$user->ava)}}"
                                class="img-thumbnail" alt="Avatar" style="border-radius: 100%">
                        </div>
                        <div class="what-right">
                            <h4 data-aos="fade-right">{{$user->name}}</h4>
                            <h5 data-aos="fade-down" class="author">
                                <a href="{{route('detail.blog', ['author' => $user->username])}}">{{$user
                                ->username}}</a>&ensp;<span data-toggle="tooltip" data-placement="bottom"
                                                            title="TOTAL POST">
                                    <i class="fa fa-blog"></i>&ensp;{{$user->getBlog->count() > 1 ?
                                    $user->getBlog->count().' posts' : $user->getBlog->count().' post'}}</span>
                            </h5>
                            @if($user->about != "")
                                <p data-aos="fade-down" align="justify">{{$user->about}}</p>
                            @else
                                <p data-aos="fade-down" align="justify"><em>The author hasn't written anything yet&hellip;</em>
                                </p>
                            @endif
                            <ul data-aos="fade-up" class="social-media-2">
                                <li><a href="mailto:{{$user->email}}">
                                        <i class="fa fa-envelope"></i></a></li>
                                <li><a href="{{$user->facebook != "" ? 'https://fb.com/'.$user->facebook : '#'}}"
                                       target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$user->twitter != "" ? 'https://twitter.com/'.$user->twitter : '#'}}"
                                       target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{$user->instagram != "" ? 'https://instagram.com/'.$user->instagram : '#'}}"
                                       target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{$user->whatsapp != "" ? 'https://web.whatsapp.com/send?text=Halo, '.
                        $user->name.'!&phone='.$user->whatsapp.'&abid='.$user->whatsapp : '#'}}" target="_blank">
                                        <i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div data-aos="fade-down" class="what-agile-info">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul data-aos="zoom-in-up" id="myTab" class="nav nav-tabs nav-tabs-responsive"
                                role="tablist">
                                <li role="presentation" class="active">
                                    <a class="nav-item nav-link" href="#latest" id="latest-tab" role="tab"
                                       data-toggle="tab" aria-controls="latest" aria-expanded="true">
                                        <i class="fa fa-history"></i>&ensp;LATEST POST</a>
                                </li>
                                <li role="presentation" class="next">
                                    <a class="nav-item nav-link" href="#archive" id="archive-tab" role="tab"
                                       data-toggle="tab" aria-controls="archive" aria-expanded="true">
                                        <i class="fa fa-archive"></i>&ensp;ARCHIVED POST</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="latest"
                                     aria-labelledby="latest-tab">
                                    <div class="row" id="blog">
                                        @foreach($latest as $row)
                                            @php
                                                $date = \Carbon\Carbon::parse($row->created_at);
                                                $url = route('detail.blog', ['author' => $row->getUser->username,
                                                'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                                                'title' => $row->title_uri]);
                                            @endphp
                                            <div data-aos="zoom-out" class="blog-item">
                                                <a href="{{$url}}">
                                                    <div class="icon">
                                                        <img src="{{asset('storage/blog/thumbnail/'.$row->thumbnail)}}"
                                                             alt="Thumbnail">
                                                    </div>
                                                    <div class="content">
                                                        <p class="blog-category">{{$row->getBlogCategory
                                                        ->name}}<span class="blog-date"><i
                                                                    class="fa fa-calendar-alt"></i>{{$date
                                                        ->formatLocalized('%b %d, %Y')}}</span><br>
                                                            <sub class="blog-author">by <span>{{$user->username}}</span></sub>
                                                        </p>
                                                        <div class="title">{{$row->title}}</div>
                                                        <div class="rounded"></div>
                                                        {!!\Illuminate\Support\Str::words($row->content, 20, '...').'</p>'!!}
                                                    </div>
                                                    <div class="item-arrow">
                                                        <i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="archive" aria-labelledby="archive-tab">
                                    <ul id="accordion" class="static-menu">
                                        @php $blog = $archive; @endphp
                                        @foreach($blog as $monthYear => $archive)
                                            <li>
                                                <div class="link">
                                                    <i class="fa fa-chevron-right"></i>{{$monthYear}}&ensp;<span
                                                        class="badge badge-secondary">{{count($archive)}}</span>
                                                </div>
                                                <ul class="sub-menu">
                                                    @foreach($archive as $data)
                                                        @php
                                                            $date = \Carbon\Carbon::parse($data->created_at);
                                                            $url = route('detail.blog', ['author' => $data->getUser->username,
                                                            'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                                                            'title' => $data->title_uri]);
                                                        @endphp
                                                        <li>
                                                            <a href="{{$url}}">
                                                                <p align="justify" class="blog-category">{{$data->getBlogCategory
                                                                ->name}}<i class="fa fa-calendar-alt"></i>{{$date
                                                                ->formatLocalized('%b %d, %Y')}}</p>
                                                                <h4>{{$data->title}}</h4>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function (e) {
            var $target = $(e.target);
            var $tabs = $target.closest('.nav-tabs-responsive');
            var $current = $target.closest('li');
            var $parent = $current.closest('li.dropdown');
            $current = $parent.length > 0 ? $parent : $current;
            var $next = $current.next();
            var $prev = $current.prev();
            var updateDropdownMenu = function ($el, position) {
                $el
                    .find('.dropdown-menu')
                    .removeClass('pull-xs-left pull-xs-center pull-xs-right')
                    .addClass('pull-xs-' + position);
            };

            $tabs.find('>li').removeClass('next prev');
            $prev.addClass('prev');
            $next.addClass('next');

            updateDropdownMenu($prev, 'left');
            updateDropdownMenu($current, 'center');
            updateDropdownMenu($next, 'right');
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            setTimeout(function () {
                $('.use-nicescroll').getNiceScroll().resize()
            }, 600);
        });

        $(function () {
            var Accordion = function (el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                var links = this.el.find('.link');
                links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown);
            };

            Accordion.prototype.dropdown = function (e) {
                var $el = e.data.el;
                $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');

                if (!e.data.multiple) {
                    $el.find('.sub-menu').not($next).slideUp().parent().removeClass('open');
                }
            };

            var accordion = new Accordion($('#accordion'), false);
        });
    </script>
@endpush
