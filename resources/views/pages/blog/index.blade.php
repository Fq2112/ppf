@extends('layouts.mst')
@section('title', 'Blog | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog-grid-list.css')}}">
    <style>
        .banner-2 {
            background: url({{asset('images/banner/blog.jpg')}});
        }

        ul.ui-autocomplete {
            color: #E31B23;
            border-radius: 1rem;
        }

        ul.ui-autocomplete .ui-menu-item .ui-state-active,
        ul.ui-autocomplete .ui-menu-item .ui-state-active:hover,
        ul.ui-autocomplete .ui-menu-item .ui-state-active:focus {
            background: #E31B23;
            color: #fff;
            border: 1px solid #E31B23;
        }

        #myTab li.active .badge {
            background: #E31B23;
            color: #fff;
        }

        .pagination > li > a,
        .pagination > li > span {
            color: #777;
            background-color: #fff;
            border: 1px solid #ddd;
            font-weight: 600;
        }

        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #b91a21;
        }

        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            background-color: #E31B23;
            border-color: #E31B23;
        }

        #myTabContent table a {
            color: #777;
            text-decoration: none;
            transition: all .3s ease-in-out;
        }

        #myTabContent table a:hover, #myTabContent table a:focus, #myTabContent table a:active {
            color: #E31B23;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
@endpush
@section('content')
    <!-- our-blog -->
    <div class="about">
        <div class="container">
            <div class="w3-agileits-about-grids">
                <div class="col-md-5 agile-about-left">
                    <h3 data-aos="fade-right" class="w3l-title title">Our Blog</h3>
                    <form data-aos="zoom-out" id="form-loadBlog">
                        <input type="hidden" name="category" id="category">
                        <div class="form-group has-feedback">
                            <input id="keyword" type="text" name="q" class="form-control" autocomplete="off"
                                   value="{{$keyword}}" placeholder="Search&hellip;" style="border-radius: 1rem;margin: 1em auto">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="w3-agileits-about-grids" style="margin-top: 1.5em">
                <div class="col-md-12 agile-about-left">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul data-aos="zoom-in-up" id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                            <li role="presentation" class="active">
                                <a class="nav-item nav-link" href="#all" id="all-tab" role="tab" data-toggle="tab"
                                   aria-controls="all" aria-expanded="true" onclick="filterBlog('all')">
                                    <i class="fa fa-sort-alpha-up"></i>&ensp;SHOW ALL&ensp;<span
                                        class="badge badge-secondary">{{\App\Models\Blog::count()}}</span>
                                </a>
                            </li>
                            @foreach($categories as $row)
                                <li role="presentation" class="next">
                                    <a class="nav-item nav-link" href="#{{$row->id}}" id="{{$row->id}}-tab" role="tab"
                                       data-toggle="tab" aria-controls="{{$row->id}}" aria-expanded="true"
                                       onclick="filterBlog('{{$row->id}}')">{{strtoupper($row->name)}}&ensp;
                                        <span class="badge badge-secondary">{{count($row->getBlog)}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in" id="all" aria-labelledby="all-tab">
                                <div class="text-center">
                                    <img src="{{asset('images/loading.gif')}}" id="image"
                                         class="img-responsive ld ld-breath">
                                </div>
                                <div class="row" id="blog"></div>
                                <div class="row text-right">
                                    <div class="col-12 myPagination">
                                        <ul class="pagination justify-content-end" data-aos="fade-left"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('vendor/jquery-ui/jquery-ui.min.js')}}"></script>
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

        var last_page, $keyword = $("#keyword");

        $(function () {
            $('#image').hide();
            $('#blog, .myPagination').show();
            $("#" + window.location.hash + "-tab").addClass('show active');
            $("#all-tab").parent().next().find('a').click();

            @if($category != '')
            $("#{{$category}}-tab").click();
            @else
            $("#all-tab").click();
            @endif
        });

        $keyword.autocomplete({
            source: function (request, response) {
                $.getJSON('{{route('get.title.blog', ['title' => ''])}}/' + $keyword.val(), {
                    name: request.term,
                }, function (data) {
                    response(data);
                });
            },
            focus: function (event, ui) {
                event.preventDefault();
            },
            select: function (event, ui) {
                event.preventDefault();
                $keyword.val(ui.item.title);
                $("#" + ui.item.category_id + "-tab").click();
            }
        });

        $keyword.on('keyup', function () {
            if (!$keyword.val()) {
                $("#all-tab").click();
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
            $("#myTabContent .tab-pane").addClass('show active');

            $("#" + id + "-tab").addClass('show active');

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
                        $('#image').show();
                        $('#blog, .myPagination').hide();
                    },
                    complete: function () {
                        $('#image').hide();
                        $('#blog, .myPagination').show();
                    },
                    success: function (data) {
                        successLoad(data);
                    },
                    error: function () {
                        swal('Oops..', 'Something went wrong! Please refresh this page.', 'error');
                    }
                });
            }.bind(this), 800);

            return false;
        }

        $('.myPagination ul').on('click', 'li', function () {
            $('html,body').animate({scrollTop: $("#myTab").offset().top}, 500);

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
                        $('#image').show();
                        $('#blog, .myPagination').hide();
                    },
                    complete: function () {
                        $('#image').hide();
                        $('#blog, .myPagination').show();
                    },
                    success: function (data) {
                        successLoad(data, page);
                    },
                    error: function () {
                        swal('Oops..', 'Something went wrong! Please refresh this page.', 'error');
                    }
                });
            }.bind(this), 800);

            return false;
        });

        function successLoad(data, page) {
            var $result = '', pagination = '', $page = '';

            $.each(data.data, function (i, val) {
                $result +=
                    '<div data-aos="zoom-out" class="blog-item">' +
                    '<a href="'+val._url+'"><div class="icon"><img src="'+val._thumbnail+'" alt="Thumbnail"></div>' +
                    '<div class="content"><p class="blog-category">'+val.category+'<span class="blog-date">' +
                    '<i class="fa fa-calendar-alt"></i>'+val.date+'</span><br><sub class="blog-author">by <span>'+val.author+'</span></sub></p>' +
                    '<div class="title">'+val.title+'</div><div class="rounded"></div>' + val._content +'</div>' +
                    '<div class="item-arrow"><i class="fa fa-long-arrow-alt-right" aria-hidden="true"></i></div></a></div>';
            });
            $("#blog").empty().append($result);

            if (data.last_page >= 1) {
                if (data.current_page > 4) {
                    pagination += '<li class="page-item first">' +
                        '<a class="page-link" href="' + data.first_page_url + '">' +
                        '<i class="fa fa-angle-double-left"></i></a></li>';
                }

                if ($.trim(data.prev_page_url)) {
                    pagination += '<li class="page-item prev">' +
                        '<a class="page-link" href="' + data.prev_page_url + '" rel="prev">' +
                        '<i class="fa fa-angle-left"></i></a></li>';
                } else {
                    pagination += '<li class="page-item disabled">' +
                        '<span class="page-link"><i class="fa fa-angle-left"></i></span></li>';
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
                        '<i class="fa fa-angle-right"></i></a></li>';
                } else {
                    pagination += '<li class="page-item disabled">' +
                        '<span class="page-link"><i class="fa fa-angle-right"></i></span></li>';
                }

                if (data.current_page < data.last_page - 3) {
                    pagination += '<li class="page-item last">' +
                        '<a class="page-link" href="' + data.last_page_url + '">' +
                        '<i class="fa fa-angle-double-right"></i></a></li>';
                }
            }
            $('.myPagination ul').html(pagination);

            if (page != "" && page != undefined) {
                $page = '&page=' + page;
            }
            window.history.replaceState("", "", '{{url('/blog')}}?q=' + $keyword.val() + '&category=' + $("#category").val() + $page);
            return false;
        }

        $(document).on('mouseover','.use-nicescroll', function () {
            $(this).getNiceScroll().resize();
        });
    </script>
@endpush
