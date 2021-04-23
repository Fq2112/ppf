@extends('layouts.mst_company')
@section('title',  'Blog: '.$blog->title.' | '.env('APP_COMPANY'))
@push('styles')
    <link rel="stylesheet" href="{{asset('company/js/plugins/lightgallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('company/css/play-button.css')}}">
    <style>
        .lg-backdrop {
            z-index: 9999999;
        }

        .lg-outer {
            z-index: 10000000;
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
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </div>
    </section>

    <section id="content" style="background-color: #F9F9F9">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="postcontent nobottommargin clearfix">
                    <div class="single-post nobottommargin">
                        <div class="entry clearfix">
                            <div class="entry-title">
                                <h2>{{$blog->title}}</h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> {{$tgl->formatLocalized('%d %B %Y')}}</li>
                                <li><a href="{{route('detail.blog', ['author' => $user->username])}}"><i class="icon-user"></i> {{$user->username}}</a></li>
                                <li><i class="icon-tag"></i> <a
                                        href="{{route('show.blog', ['category' => $blog->category_id])}}">
                                        {{$blog->getBlogCategory->name}}</a></li>
                            </ul>

                            <div class="entry-image">
                                @if(!is_null($blog->getBlogGallery))
                                    <div class="content-area">
                                        <img src="{{asset('storage/blog/thumbnail/'.$blog->thumbnail)}}"
                                             class="img-fluid" alt="Thumbnail">
                                        <div class="custom-overlay">
                                            <div class="custom-text">
                                                <svg id="play" class="play" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     height="100px" width="100px" viewBox="0 0 100 100"
                                                     enable-background="new 0 0 100 100" xml:space="preserve">
                                                    <path class="stroke-solid" fill="none" stroke="#f89406"
                                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                    <path class="stroke-dotted" fill="none" stroke="#f89406"
                                                          d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
                                                    <path class="icon" fill="#f89406"
                                                          d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <img src="{{asset('storage/blog/thumbnail/'.$blog->thumbnail)}}" class="img-fluid"
                                         alt="Thumbnail">
                                @endif
                            </div>
                            <div class="entry-content notopmargin">
                                {!! $blog->content !!}

                                <div class="clear"></div>

                                <div class="si-share noborder clearfix">
                                    <span>Share this Post:</span>
                                    <div>
                                        <a class="social-icon si-borderless si-call"
                                           href="mailto:?subject={{$blog->title}}&body=Hi, I thought you'd like this: {{$uri}}">
                                            <i class="icon-envelope-alt"></i>
                                            <i class="icon-envelope-alt"></i>
                                        </a>
                                        <a class="social-icon si-borderless si-whatsapp"
                                           href="https://wa.me?text=Hi, I thought you'd like this: {{$uri}}"
                                           target="popup" onclick="shareBlog($(this).attr('href'))">
                                            <i class="icon-whatsapp"></i>
                                            <i class="icon-whatsapp"></i>
                                        </a>
                                        <a class="social-icon si-borderless si-facebook"
                                           href="https://facebook.com/sharer/sharer.php?u={{$uri}}"
                                           target="popup" onclick="shareBlog($(this).attr('href'))">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a class="social-icon si-borderless si-linkedin"
                                           href="https://linkedin.com/shareArticle?mini=true&url={{$uri}}&title=&summary=Hi, I thought you'd like this:&source="
                                           target="popup" onclick="shareBlog($(this).attr('href'))">
                                            <i class="icon-linkedin-in"></i>
                                            <i class="icon-linkedin-in"></i>
                                        </a>
                                        <a class="social-icon si-borderless si-twitter"
                                           href="https://twitter.com/intent/tweet?text=Hi, I thought you'd like this: {{$uri}}"
                                           target="popup" onclick="shareBlog($(this).attr('href'))">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-navigation clearfix">
                            @if(!is_null($prev))
                                <div class="col_half nobottommargin">
                                    <a href="{{route('detail.blog', ['author' => $prev->getUser->username,
                                    'y' => \Carbon\Carbon::parse($prev->created_at)->format('Y'),
                                    'm' => \Carbon\Carbon::parse($prev->created_at)->format('m'),
                                    'd' => \Carbon\Carbon::parse($prev->created_at)->format('d'),
                                    'title' => $prev->title_uri])}}">&lArr; {{$prev->title}}</a>
                                </div>
                            @endif
                            @if(!is_null($next))
                                <div class="col_half col_last tright nobottommargin">
                                    <a href="{{route('detail.blog', ['author' => $next->getUser->username,
                                    'y' => \Carbon\Carbon::parse($next->created_at)->format('Y'),
                                    'm' => \Carbon\Carbon::parse($next->created_at)->format('m'),
                                    'd' => \Carbon\Carbon::parse($next->created_at)->format('d'),
                                    'title' => $next->title_uri])}}">{{$next->title}} &rArr;</a>
                                </div>
                            @endif
                        </div>

                        <div class="line"></div>

                        <div class="card">
                            <div class="card-header">
                                <strong>Posted by <a href="{{route('detail.blog', ['author' => $user->username])}}">{{$user->username}}</a>
                                </strong>
                            </div>
                            <div class="card-body">
                                <div class="author-image">
                                    <img alt="Avatar" class="rounded-circle" src="{{$user->ava != "" ?
                                    asset('storage/users/ava/'.$user->ava) : asset('admins/img/avatar/avatar-'.rand(1,5).'.png') }}">
                                </div>
                                @if($user->about != "")
                                    {{$user->about}}
                                @else
                                    <em>The author hasn't written anything yet...</em>
                                @endif
                            </div>
                        </div>

                        @if(count($relates) > 0)
                            <div class="line"></div>
                            <h4>Related Posts:</h4>
                            <div id="portfolio" class="portfolio grid-container portfolio-masonry clearfix">
                                @foreach($relates as $post)
                                    @php
                                        $date = \Carbon\Carbon::parse($post->created_at);
                                        $url = route('detail.blog', ['author' => $post->getUser->username,
                                        'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                                        'title' => $post->title_uri]);
                                    @endphp
                                    <article class="portfolio-item">
                                        <div class="portfolio-image">
                                            <img src="{{asset('storage/blog/thumbnail/'.$post->thumbnail)}}"
                                                 alt="Thumbnail">
                                            <div class="portfolio-overlay" data-lightbox="gallery">
                                                <a href="{{asset('storage/blog/thumbnail/'.$post->thumbnail)}}"
                                                   class="left-icon" data-lightbox="gallery-item">
                                                    <i class="icon-line-stack-2"></i></a>
                                                @if(!is_null($post->getBlogGallery))
                                                    @foreach($post->getBlogGallery as $row)
                                                        @if($row->type == 'photos')
                                                            <a href="{{asset('storage/blog/'.$row->files)}}"
                                                               class="hidden" data-lightbox="gallery-item"></a>
                                                        @endif
                                                    @endforeach
                                                @endif
                                                <a href="{{$url}}" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3>
                                                <a href="{{$url}}">{{\Illuminate\Support\Str::words($post->title,3,'...')}}</a>
                                            </h3>
                                            <span><i
                                                    class="icon-calendar3"></i> {{$date->formatLocalized('%d %b %Y')}}&ensp;/&ensp;
                                                <a href="{{$url2}}"><i class="icon-user"></i> {{$user->username}}</a></span>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">
                        <div id="subscriber" class="widget subscribe-widget clearfix">
                            <div class="fancy-title title-border">
                                <h4 style="background-color: #F9F9F9">Search Blog</h4>
                            </div>
                            <form action="{{route('show.blog')}}"
                                  class="notopmargin nobottommargin">
                                <div class="input-group divcenter">
                                    <input id="blog-keyword" name="q" type="text" class="form-control"
                                           placeholder="Search..." required>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="widget widget_categories notopborder pt-0 clearfix">
                            <div class="fancy-title title-border">
                                <h4 style="background-color: #F9F9F9">Blog Categories</h4>
                            </div>
                            <ul>
                                @foreach(\App\Models\BlogCategory::orderBy('name')->get() as $row)
                                    <li><a href="{{route('show.blog', ['category' => $row->id])}}">
                                            {{$row->name}}</a><span class="hover-span">({{count($row->getBlog)}})</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{asset('js/plugins/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('js/plugins/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('js/plugins/lightgallery/modules/lg-video.min.js')}}"></script>
    <script>
        $(function () {
            $(".related-posts .col_half:last-child").addClass('col_last');
        });

        var $keyword = $("#blog-keyword"), blog_fetchQuery = null, blog_fetchResultsCallback = null,
            blog_fetchResults = _.debounce(function () {
                $.get('{{route('get.title.blog')}}?title=' + blog_fetchQuery, function (data) {
                    if (blog_fetchResultsCallback) {
                        blog_fetchResultsCallback(data);
                    }
                });
            }, 300);

        $keyword.typeahead(
            {
                hint: true,
                highlight: true,
                minLength: 0,
            },
            {
                source: function (query, syncResults, asyncResults) {
                    blog_fetchQuery = query;
                    blog_fetchResultsCallback = asyncResults;
                    blog_fetchResults();
                },
                templates: {
                    empty: '<div class="tt-empty text-center">Search...</div>',
                    pending: '<div class="tt-pending"><div class="css3-spinner" style="position: absolute; z-index:auto;"><div class="css3-spinner-bounce1"></div><div class="css3-spinner-bounce2"></div><div class="css3-spinner-bounce3"></div></div></div>',
                    suggestion: function (data) {
                        return '<div>' + data.title + '</div>'
                    },
                },
                display: function (data) {
                    return data.title;
                }
            }).on('typeahead:selected', function (evt, data) {
            window.location.href = data.link;
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

        function shareBlog(url) {
            window.open(url, 'popup', 'width=600,height=400');
            return false;
        }
    </script>
@endpush
