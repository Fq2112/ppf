@extends('layouts.mst')
@section('title', 'Gallery | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-tabs-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}">
    <style>
        .banner-2 {
            background: url({{asset('images/banner/gallery.jpg')}});
        }

        ul.ui-autocomplete {
            color: #E31B23;
            border-radius: 0 0 1rem 1rem;
        }

        ul.ui-autocomplete .ui-menu-item .ui-state-active,
        ul.ui-autocomplete .ui-menu-item .ui-state-active:hover,
        ul.ui-autocomplete .ui-menu-item .ui-state-active:focus {
            background: #E31B23;
            color: #fff;
            border: 1px solid #E31B23;
        }

        ul.ui-autocomplete .ui-menu-item:last-child .ui-state-active,
        ul.ui-autocomplete .ui-menu-item:last-child .ui-state-active:hover,
        ul.ui-autocomplete .ui-menu-item:last-child .ui-state-active:focus {
            border-radius: 0 0 1rem 1rem;
        }

        #myTab li.active .badge {
            background: #E31B23;
            color: #fff;
        }

        .content-area {
            position: relative;
            cursor: pointer;
            overflow: hidden;
            margin: 1em auto;
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
            color: #fff;
        }

        .content-area img {
            transition: transform .5s ease;
        }

        .content-area:hover img {
            transform: scale(1.2);
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

        .pagination > .disabled > a,
        .pagination > .disabled > a:focus,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > span,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > span:hover {
            pointer-events: none;
        }

        h3.w3l-title.gallery-title:after {
            left: calc(65% - 5%);
        }

        @media (max-width: 1080px) {
            h3.w3l-title.gallery-title:after {
                left: calc(70% - 5%);
            }
        }

        @media (max-width: 991px) {
            h3.w3l-title.gallery-title:after {
                left: calc(37% - 5%);
            }
        }

        @media (max-width: 736px) {
            h3.w3l-title.gallery-title:after {
                left: calc(33% - 5%);
            }
        }

        @media (max-width: 568px) {
            h3.w3l-title.gallery-title:after {
                left: calc(40% - 5%);
            }
        }

        @media (max-width: 480px) {
            h3.w3l-title.gallery-title:after {
                left: calc(42% - 5%);
            }
        }

        @media (max-width: 414px) {
            h3.w3l-title.gallery-title:after {
                left: calc(45% - 5%);
            }
        }

        @media (max-width: 384px) {
            h3.w3l-title.gallery-title:after {
                left: calc(49% - 5%);
            }
        }

        @media (max-width: 320px) {
            h3.w3l-title.gallery-title:after {
                left: calc(53% - 5%);
            }
        }

        #myTabContent table a {
            color: #777;
            text-decoration: none;
            transition: all .3s ease-in-out;
        }

        #myTabContent table a:hover, #myTabContent table a:focus, #myTabContent table a:active{
            color: #E31B23;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
@endpush
@section('content')
    <!-- our-gallery -->
    <div class="about">
        <div class="container">
            <div class="w3-agileits-about-grids">
                <div class="col-md-5 agile-about-left">
                    <h3 data-aos="fade-right" class="w3l-title gallery-title">Our Gallery</h3>
                    <form data-aos="zoom-out" id="form-loadGallery">
                        <input type="hidden" name="type" id="type">
                        <div class="form-group has-feedback dropdown">
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
                                   aria-controls="all" aria-expanded="true" onclick="filterGallery('all')">
                                    <i class="fa fa-sort-alpha-up"></i>&ensp;SHOW ALL&ensp;<span
                                        class="badge badge-secondary">{{count($gallery)}}</span>
                                </a>
                            </li>
                            <li role="presentation" class="next">
                                <a class="nav-item nav-link" href="#photos" id="photos-tab" role="tab" data-toggle="tab"
                                   aria-controls="photos" aria-expanded="true" onclick="filterGallery('photos')">
                                    <i class="fa fa-images"></i>&ensp;PHOTOS&ensp;<span
                                        class="badge badge-secondary">{{count($photos)}}</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="nav-item nav-link" href="#videos" id="videos-tab" role="tab" data-toggle="tab"
                                   aria-controls="videos" aria-expanded="true" onclick="filterGallery('videos')">
                                    <i class="fa fa-film"></i>&ensp;videos&ensp;<span
                                        class="badge badge-secondary">{{count($videos)}}</span>
                                </a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in" id="all" aria-labelledby="all-tab">
                                <div class="text-center">
                                    <img src="{{asset('images/loading.gif')}}" id="image"
                                         class="img-responsive ld ld-breath">
                                </div>
                                <div class="row" id="lightgallery"></div>
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
    <script src="{{asset('vendor/masonry/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
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
            $('#lightgallery, .myPagination').show();
            $("#" + window.location.hash + "-tab").addClass('show active');

            @if($type != '')
            $("#{{$type}}-tab").click();
            @else
            $("#photos-tab").click();
            $("#all-tab").click();
            @endif
        });

        $keyword.autocomplete({
            source: function (request, response) {
                $.getJSON('{{route('get.title.gallery')}}?title=' + $keyword.val(), {
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
                $("#" + ui.item.type + "-tab").click();
            }
        });

        $keyword.on('keyup', function () {
            if (!$keyword.val()) {
                $("#all-tab").click();
                loadGallery();
            }
        });

        $("#form-loadGallery").on('submit', function (e) {
            e.preventDefault();
            loadGallery();
        });

        function decodeHtml(html) {
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        }

        function filterGallery(id) {
            $("#nav-tab a").removeClass('show active');
            $("#myTabContent .tab-pane").addClass('show active');

            $("#" + id + "-tab").addClass('show active');

            $("#type").val(id);
            loadGallery();
        }

        function loadGallery() {
            clearTimeout(this.delay);
            this.delay = setTimeout(function () {
                $.ajax({
                    url: "{{route('get.data.gallery')}}",
                    type: "GET",
                    data: $("#form-loadGallery").serialize(),
                    beforeSend: function () {
                        $('#image').show();
                        $('#lightgallery, .myPagination').hide();
                    },
                    complete: function () {
                        $('#image').hide();
                        $('#lightgallery, .myPagination').show();
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
                $url = "{{url('/gallery/data')}}" + '?page=' + page;
            }
            if ($(this).hasClass('prev')) {
                $url = "{{url('/gallery/data')}}" + '?page=' + parseInt(active - 1);
            }
            if ($(this).hasClass('next')) {
                $url = "{{url('/gallery/data')}}" + '?page=' + parseInt(+active + +1);
            }
            if ($(this).hasClass('hellip_prev')) {
                $url = "{{url('/gallery/data')}}" + '?page=' + parseInt(hellip_prev - 1);
                page = parseInt(hellip_prev - 1);
            }
            if ($(this).hasClass('hellip_next')) {
                $url = "{{url('/gallery/data')}}" + '?page=' + parseInt(+hellip_next + +1);
                page = parseInt(+hellip_next + +1);
            }
            if ($(this).hasClass('first')) {
                $url = "{{url('/gallery/data')}}" + '?page=1';
            }
            if ($(this).hasClass('last')) {
                $url = "{{url('/gallery/data')}}" + '?page=' + last_page;
            }

            clearTimeout(this.delay);
            this.delay = setTimeout(function () {
                $.ajax({
                    url: $url,
                    type: "GET",
                    data: $("#form-loadGallery").serialize(),
                    beforeSend: function () {
                        $('#image').show();
                        $('#lightgallery, .myPagination').hide();
                    },
                    complete: function () {
                        $('#image').hide();
                        $('#lightgallery, .myPagination').show();
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
                var thumbnail = val.type == 'photos' ? '{{asset('storage/gallery')}}/' + val.file :
                    '{{asset('storage/gallery/thumbnail')}}/' + val.thumbnail,
                    file = val.type == 'photos' ? '{{asset('storage/gallery')}}/' + val.file : val.file;

                $result +=
                    '<div data-aos="zoom-out" class="col-md-3 item" ' +
                    'data-src="' + file + '" data-sub-html="<h4>' + val.title + '</h4><p>' + val.caption + '</p>">' +
                    '<div class="content-area">' +
                    '<img src="' + thumbnail + '" alt="Thumbnail" class="img-responsive">' +
                    '<div class="custom-overlay">' +
                    '<div class="custom-text">' +
                    '<b>' + val.title + '</b>' +
                    '</div></div></div></div>';
            });
            $("#lightgallery").empty().append($result);

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
            window.history.replaceState("", "", '{{url('/gallery')}}?q=' + $keyword.val() + '&type=' + $("#type").val() + $page);

            return false;
        }

        $(document).on('mouseover','.use-nicescroll', function () {
            $(this).getNiceScroll().resize();
        });

        $(document).on('mouseover', '#lightgallery', function () {
            // init
            $(this).masonry({
                itemSelector: '.item'
            });
            $(this).lightGallery({
                selector: '.item',
                loadYoutubeThumbnail: true,
                youtubeThumbSize: 'default',
            });

            // destroy
            $(this).masonry('destroy');
            $(this).removeData('masonry');
            $(this).data("lightGallery").destroy(true);

            // re-init
            $(this).masonry({
                itemSelector: '.item'
            });
            $(this).lightGallery({
                selector: '.item',
                loadYoutubeThumbnail: true,
                youtubeThumbSize: 'default',
            });
        });
    </script>
@endpush
