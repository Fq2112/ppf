@extends('layouts.mst_company')
@section('title', 'Blog Author: '.$user->username.' | '.env('APP_COMPANY'))
@push('styles')
    <link rel="stylesheet" href="{{asset('company/css/blog-grid-list.css')}}">
    <link rel="stylesheet" href="{{asset('company/css/blog-accordion.css')}}">
    <style>
        #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #e31b23 !important;
            background-color: #F9F9F9 !important;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 4px solid #e31b23 !important;
        }

        #tabs .nav-tabs .nav-link {
            text-transform: uppercase;
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
        }

        #tabs .nav-tabs .nav-link span.badge-primary {
            color: #fff;
            background-color: #e31b23;
        }

        #tabs .nav-tabs .nav-link span.badge-primary:hover, #tabs .nav-tabs .nav-link span.badge-primary:focus {
            color: #fff;
            background-color: #ba181e;
        }

        #tabs .nav-tabs .nav-link span.badge-primary:focus, #tabs .nav-tabs .nav-link span.badge-primary.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgb(227, 27, 35);
        }
    </style>
@endpush
@section('content')
    <section id="page-title" class="page-title-parallax page-title-dark"
             data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;"
             style="background-image:url('{{asset('company/demos/car/images/banner/blog.jpg')}}');background-size:cover;padding:120px 0;">
        <div class="parallax-overlay"></div>
        <div class="container clearfix">
            <h1>Our Blog</h1>
            <span>We're also provide you with a recent news related to print product things.</span>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item">
                    <a href="{{route('home-company')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('show.blog')}}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Author</li>
            </ol>
        </div>
    </section>

    <section id="content" style="background-color: #F9F9F9">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="col-md-9">
                        <img
                            src="{{$user->ava != "" ? asset('storage/users/ava/'.$user->ava) : asset('admins/img/avatar/avatar-'.rand(1,5).'.png')}}"
                            class="alignleft img-circle img-thumbnail notopmargin nobottommargin"
                            alt="Avatar" style="max-width: 84px;">
                        <div class="heading-block noborder">
                            <h3>{{$user->name}}</h3>
                            <ul class="entry-meta clearfix">
                                <li><a href="{{\Illuminate\Support\Facades\URL::current()}}">
                                        <i class="icon-user"></i> {{$user->username}}</a></li>
                                <li><i class="icon-blogger-b"></i>
                                    {{$user->getBlog->count() > 1 ? $user->getBlog->count().' posts'
                                    : $user->getBlog->count().' post'}}
                                </li>
                            </ul>
                        </div>

                        <div class="clear"></div>

                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <nav id="tabs">
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link show active" style="color: #495057" id="tabList-lp"
                                           data-toggle="tab" href="#tabContent-lp" role="tab"
                                           aria-controls="nav-lp" aria-selected="true">
                                            <i class="icon-history"></i>&ensp;Latest Post</a>
                                        <a class="nav-item nav-link" style="color: #495057" id="tabList-ap"
                                           data-toggle="tab" href="#tabContent-ap" role="tab"
                                           aria-controls="nav-ap" aria-selected="true">
                                            <i class="icon-archive"></i>&ensp;Archived Post</a>
                                    </div>
                                </nav>
                                <div id="nav-tabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="tabContent-lp"
                                         aria-labelledby="nav-lp-tab" style="border: none">
                                        <div class="row mt-2">
                                            @foreach($latest as $row)
                                                @php
                                                    $date = \Carbon\Carbon::parse($row->created_at);
                                                    $url = route('detail.blog', ['author' => $row->getUser->username,
                                                    'y' => $date->format('Y'), 'm' => $date->format('m'),
                                                    'd' => $date->format('d'), 'title' => $row->title_uri]);
                                                @endphp
                                                <div class="blog-item">
                                                    <a href="{{$url}}">
                                                        <div class="icon">
                                                            <img
                                                                src="{{asset('storage/blog/thumbnail/'.$row->thumbnail)}}"
                                                                alt="Thumbnail">
                                                        </div>
                                                        <div class="blog-content">
                                                            <p class="blog-category">{{$row->getBlogCategory->name}}
                                                                <span class="blog-date">
                                                                    <i class="icon-calendar3 ml-2 mr-2"></i>{{$date
                                                                    ->formatLocalized('%d %B %Y')}}</span><br>
                                                                <sub class="blog-author">by
                                                                    <span>{{$user->username}}</span></sub>
                                                            </p>
                                                            <div class="title">{{$row->title}}</div>
                                                            <div class="rounded"></div>
                                                            {!!\Illuminate\Support\Str::words($row->content, 20, '...').'</p>'!!}
                                                        </div>
                                                        <div class="item-arrow">
                                                            <i class="icon-long-arrow-alt-right" aria-hidden="true"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tabContent-ap"
                                         aria-labelledby="nav-ap-tab" style="border: none">
                                        <ul id="accordion" class="static-menu">
                                            @php $blog = $archive; @endphp
                                            @foreach($blog as $monthYear => $archive)
                                                <li>
                                                    <div class="link">
                                                        <i class="icon-chevron-right"></i>{{$monthYear}}&ensp;<span
                                                            class="badge badge-secondary">{{count($archive)}}</span>
                                                    </div>
                                                    <ul class="sub-menu">
                                                        @foreach($archive as $data)
                                                            @php
                                                                $date = \Carbon\Carbon::parse($data->created_at);
                                                                $url = route('detail.blog', ['author' => $data->getUser->username,
                                                                'y' => $date->format('Y'), 'm' => $date->format('m'),
                                                                'd' => $date->format('d'), 'title' => $data->title_uri]);
                                                            @endphp
                                                            <li>
                                                                <a class="pt-3" href="{{$url}}">
                                                                    <p align="justify" class="blog-category mb-0">
                                                                        {{$data->getBlogCategory->name}}
                                                                        <i class="icon-calendar3"></i>{{$date
                                                                        ->formatLocalized('%d %b %Y')}}</p>
                                                                    <h4 class="mb-0">{{$data->title}}</h4>
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

                    <div class="w-100 line d-block d-md-none"></div>

                    <div class="col-md-3 clearfix">
                        <div class="fancy-title topmargin title-border">
                            <h4 style="background-color: #F9F9F9">About Me</h4>
                        </div>
                        @if($user->about != "")
                            <p align="justify">{{$user->about}}</p>
                        @else
                            <p align="justify"><em>The author hasn't written anything yet...</em></p>
                        @endif

                        <div class="fancy-title topmargin title-border">
                            <h4 style="background-color: #F9F9F9">Follow Me</h4>
                        </div>
                        <a class="social-icon si-call si-small si-rounded si-light" title="Facebook"
                           href="mailto:{{$user->email}}">
                            <i class="icon-envelope-alt"></i>
                            <i class="icon-envelope-alt"></i>
                        </a>
                        <a class="social-icon si-facebook si-small si-rounded si-light" title="Facebook" target="_blank"
                           href="{{$user->facebook != "" ? 'https://fb.com/'.$user->facebook : '#'}}">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a class="social-icon si-twitter si-small si-rounded si-light" title="Twitter" target="_blank"
                           href="{{$user->twitter != "" ? 'https://twitter.com/'.$user->twitter : '#'}}">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a class="social-icon si-instagram si-small si-rounded si-light" title="Facebook"
                           target="_blank"
                           href="{{$user->instagram != "" ? 'https://instagram.com/'.$user->instagram : '#'}}">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                        <a class="social-icon si-whatsapp si-small si-rounded si-light" title="Twitter" target="_blank"
                           href="{{$user->whatsapp != "" ? 'https://web.whatsapp.com/send?text=Halo, '.
                           $user->name.'!&phone='.$user->whatsapp.'&abid='.$user->whatsapp : '#'}}">
                            <i class="icon-whatsapp"></i>
                            <i class="icon-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(function () {
            var Accordion = function (el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                var links = this.el.find('.link');
                links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown);
            };

            Accordion.prototype.dropdown = function (e) {
                var $el = e.data.el;
                $this = $(this);
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
