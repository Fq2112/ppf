@extends('layouts.mst_company')
@section('title', 'Blog | '.env('APP_COMPANY'))
@push('styles')
    <link rel="stylesheet" href="{{asset('company/css/blog-grid-list.css')}}">
    <style>
        .css3-spinner > div {
            background-color: #E31B23 !important;
        }

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
            background-color: #c4302b;
        }

        #tabs .nav-tabs .nav-link span.badge-primary:focus, #tabs .nav-tabs .nav-link span.badge-primary.focus {
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgb(227, 27, 35);
        }

        .page-item.disabled {
            cursor: no-drop;
            pointer-events: none;
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
                <li class="breadcrumb-item"><a href="{{url()->current()}}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </div>
    </section>

    <section id="content" style="background-color: #F9F9F9">
        <div class="content-wrap">
            <div class="container clearfix">
                <form id="form-loadBlog">
                    <input type="hidden" name="category" id="category">
                    <div class="form-group has-feedback">
                        <input id="blog-keyword" type="text" name="q" class="form-control"
                               autocomplete="off" spellcheck="false" value="{{$keyword}}"
                               placeholder="Search..." style="border-radius: 1rem;">
                        <span class="glyphicon glyphicon-search form-control-feedback"
                              style="width: 35px;height: 35px;line-height: 35px;"></span>
                    </div>
                </form>

                <nav id="tabs">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link" style="color: #495057" id="tabList-all"
                           data-toggle="tab" href="#tabContent-all" role="tab" aria-controls="nav-home"
                           aria-selected="true" onclick="filterBlog(null)"><i class="icon-sort-alpha-up"></i>&ensp;
                            ALL&ensp;<span class="badge badge-secondary">
                                {{\App\Models\Blog::count() > 999 ? '999+' : \App\Models\Blog::count()}}</span>
                        </a>
                        @foreach($categories as $row)
                            <a class="nav-item nav-link" onclick="filterBlog('{{$row->id}}')"
                               style="color: #495057" id="tabList-{{$row->id}}" data-toggle="tab"
                               href="#tabContent-{{$row->id}}" role="tab" aria-controls="nav-home" aria-selected="true">
                                {{$row->name}}&ensp;<span class="badge badge-secondary">
                                    {{count($row->getBlog) > 999 ? '999+' : count($row->getBlog)}}</span>
                            </a>
                        @endforeach
                    </div>
                </nav>
                <div id="nav-tabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="tabContent-all" aria-labelledby="nav-home-tab"
                         style="border: none">
                        <div class="css3-spinner mt-4" style="position: relative">
                            <div class="css3-spinner-bounce1"></div>
                            <div class="css3-spinner-bounce2"></div>
                            <div class="css3-spinner-bounce3"></div>
                        </div>
                        <div class="row mt-2 mb-4" id="blog"></div>
                        <div class="row text-right">
                            <div class="col-12 myPagination">
                                <ul class="pagination justify-content-end"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        var last_page, $keyword = $("#blog-keyword");

        $(function () {
            $('.css3-spinner').hide();
            $('#blog, .myPagination').show();
            $("#tabList-" + window.location.hash).addClass('show active');
            $("#tabContent-" + window.location.hash).addClass('show active');

            @if($category != '')
            $("#tabList-{{$category}}").click();
            $("#tabList-{{$category}} span").addClass('badge-primary').removeClass('badge-secondary');
            @else
            $("#tabList-all").click();
            $("#tabList-all span").addClass('badge-primary').removeClass('badge-secondary');
            @endif
        });

        var blog_fetchQuery = null, blog_fetchResultsCallback = null,
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
                        return '<div><img alt="thumbnail" src="' + data.thumbnail + '">' + data.title + '</div>'
                    },
                },
                display: function (data) {
                    return data.title;
                }
            }).on('typeahead:selected', function (evt, data) {
            $keyword.val(data.title);
            $("#tabList-" + data.category_id).click();
            $("#tabList-" + data.category_id + " span").addClass('badge-primary').removeClass('badge-secondary');
            loadBlog();
        });

        $keyword.on('keyup', function () {
            if (!$keyword.val()) {
                $("#tabList-all").click();
                $("#tabList-all span").addClass('badge-primary').removeClass('badge-secondary');
                loadBlog();
            }
        });

        $("#form-loadBlog").on('submit', function (e) {
            e.preventDefault();
            loadBlog();
        });

        function decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        }

        function filterBlog(id) {
            $("#nav-tab a").removeClass('show active');
            $("#nav-tab a span").removeClass('badge-primary').addClass('badge-secondary');
            $("#nav-tabContent .tab-pane").addClass('show active');

            if(id==null){
                $("#tabList-all").addClass('show active');
                $("#tabList-all span").addClass('badge-primary').removeClass('badge-secondary');
            } else {
                $("#tabList-" + id).addClass('show active');
                $("#tabList-" + id + " span").addClass('badge-primary').removeClass('badge-secondary');
            }

            $("#category").val(id);
            loadBlog();
        }

        function loadBlog() {
            clearTimeout(this.delay);
            this.delay = setTimeout(function () {
                $.ajax({
                    url: "{{route('get.data.blog')}}",
                    type: "GET",
                    data: $("#form-loadBlog").serialize(),
                    beforeSend: function () {
                        $('.css3-spinner').show();
                        $('#blog, .myPagination').hide();
                    },
                    complete: function () {
                        $('.css3-spinner').hide();
                        $('#blog, .myPagination').show();
                    },
                    success: function (data) {
                        successLoad(data);
                    },
                    error: function () {
                        swal('ERROR!', 'Something went wrong! Please, refresh your browser.', 'error');
                    }
                });
            }.bind(this), 800);

            return false;
        }

        $('.myPagination ul').on('click', 'li', function () {
            $('html,body').animate({scrollTop: $("#tabs").offset().top}, 500);

            var $url, page = $(this).children().text(),
                active = $(this).parents("ul").find('.active').eq(0).text(),
                hellip_prev = $(this).closest('.hellip_prev').next().find('a').text(),
                hellip_next = $(this).closest('.hellip_next').prev().find('a').text();

            if (page > 0) {
                $url = "{{url('/blog/data')}}" + '?page=' + page;
            }
            if ($(this).hasClass('prev')) {
                $url = "{{url('/blog/data')}}" + '?page=' + parseInt(active - 1);
            }
            if ($(this).hasClass('next')) {
                $url = "{{url('/blog/data')}}" + '?page=' + parseInt(+active + +1);
            }
            if ($(this).hasClass('hellip_prev')) {
                $url = "{{url('/blog/data')}}" + '?page=' + parseInt(hellip_prev - 1);
                page = parseInt(hellip_prev - 1);
            }
            if ($(this).hasClass('hellip_next')) {
                $url = "{{url('/blog/data')}}" + '?page=' + parseInt(+hellip_next + +1);
                page = parseInt(+hellip_next + +1);
            }
            if ($(this).hasClass('first')) {
                $url = "{{url('/blog/data')}}" + '?page=1';
            }
            if ($(this).hasClass('last')) {
                $url = "{{url('/blog/data')}}" + '?page=' + last_page;
            }

            clearTimeout(this.delay);
            this.delay = setTimeout(function () {
                $.ajax({
                    url: $url,
                    type: "GET",
                    data: $("#form-loadBlog").serialize(),
                    beforeSend: function () {
                        $('.css3-spinner').show();
                        $('#blog, .myPagination').hide();
                    },
                    complete: function () {
                        $('.css3-spinner').hide();
                        $('#blog, .myPagination').show();
                    },
                    success: function (data) {
                        successLoad(data, page);
                    },
                    error: function () {
                        swal('ERROR!', 'Something went wrong! Please, refresh your browser.', 'error');
                    }
                });
            }.bind(this), 800);

            return false;
        });

        function successLoad(data, page) {
            var $result = '', pagination = '', $page = '';

            $.each(data.data, function (i, val) {
                $result +=
                    '<div class="col blog-item">' +
                    '<a href="' + val._url + '"><div class="icon"><img src="' + val._thumbnail + '" alt="Thumbnail"></div>' +
                    '<div class="blog-content"><p class="blog-category">' + val.category + '<span class="blog-date">' +
                    '<i class="icon-calendar3 ml-2 mr-2"></i>' + val.date + '</span><br>' +
                    '<sub class="blog-author">by <span>' + val.author + '</span></sub></p>' +
                    '<div class="title">' + val.title + '</div><div class="rounded"></div>' + val._content + '</div>' +
                    '<div class="item-arrow"><i class="icon-long-arrow-alt-right" aria-hidden="true"></i></div></a></div>';
            });
            $("#blog").empty().append($result);

            if (data.last_page >= 1) {
                if (data.current_page > 4) {
                    pagination += '<li class="page-item first">' +
                        '<a class="page-link" href="' + data.first_page_url + '">' +
                        '<i class="icon-angle-double-left"></i></a></li>';
                }

                if ($.trim(data.prev_page_url)) {
                    pagination += '<li class="page-item prev">' +
                        '<a class="page-link" href="' + data.prev_page_url + '" rel="prev">' +
                        '<i class="icon-angle-left"></i></a></li>';
                } else {
                    pagination += '<li class="page-item disabled">' +
                        '<span class="page-link"><i class="icon-angle-left"></i></span></li>';
                }

                if (data.current_page > 4) {
                    pagination += '<li class="page-item hellip_prev">' +
                        '<a class="page-link" style="cursor: pointer">&hellip;</a></li>'
                }

                for ($i = 1; $i <= data.last_page; $i++) {
                    if ($i >= data.current_page - 3 && $i <= data.current_page + 3) {
                        if (data.current_page == $i) {
                            pagination += '<li class="page-item active"><span class="page-link">' + $i + '</span></li>'
                        } else {
                            pagination += '<li class="page-item">' +
                                '<a class="page-link" style="cursor: pointer">' + $i + '</a></li>'
                        }
                    }
                }

                if (data.current_page < data.last_page - 3) {
                    pagination += '<li class="page-item hellip_next">' +
                        '<a class="page-link" style="cursor: pointer">&hellip;</a></li>'
                }

                if ($.trim(data.next_page_url)) {
                    pagination += '<li class="page-item next">' +
                        '<a class="page-link" href="' + data.next_page_url + '" rel="next">' +
                        '<i class="icon-angle-right"></i></a></li>';
                } else {
                    pagination += '<li class="page-item disabled">' +
                        '<span class="page-link"><i class="icon-angle-right"></i></span></li>';
                }

                if (data.current_page < data.last_page - 3) {
                    pagination += '<li class="page-item last">' +
                        '<a class="page-link" href="' + data.last_page_url + '">' +
                        '<i class="icon-angle-double-right"></i></a></li>';
                }
            }
            $('.myPagination ul').html(pagination);

            if (page != "" && page != undefined) {
                $page = '&page=' + page;
            }
            window.history.replaceState("", "", '{{url('/blog')}}?q=' +
                $keyword.val() + '&category=' + $("#category").val() + $page);

            setTimeout(function () {
                $('.use-nicescroll').getNiceScroll().resize()
            }, 600);
            return false;
        }
    </script>
@endpush
