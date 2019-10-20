@extends('layouts.mst_admin')
@section('title', 'PPF Admins: Dashboard | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('admins/modules/bootstrap-datepicker/bootstrap-datepicker.css')}}">
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a href="javascript:void(0)" onclick="openDataAdmins('{{route('table.admins')}}')">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Admins</h4>
                            </div>
                            <div class="card-body">
                                {{count($admins)}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a href="javascript:void(0)" onclick="openDataGalleries('{{route('table.galleries')}}')">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-photo-video"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Galleries</h4>
                            </div>
                            <div class="card-body">
                                {{count($galleries)}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a href="javascript:void(0)" onclick="openDataInstallers('{{route('table.installers')}}')">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Installers</h4>
                            </div>
                            <div class="card-body">
                                {{count($installers)}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a href="javascript:void(0)" onclick="openDataBlog('{{route('table.blog.posts')}}')">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-blog"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Blog</h4>
                            </div>
                            <div class="card-body">
                                {{count($blog)}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Visitors Traffic</h4>
                        <div class="card-header-form" style="margin-left: auto;">
                            <form id="form-filter" action="{{route('admin.dashboard')}}">
                                <div class="row">
                                    <div class="col">
                                        <input id="period" type="text" class="form-control yearpicker"
                                               placeholder="Period Filter (yyyy)" name="period"
                                               autocomplete="off" readonly>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="visitor_graph" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="{{Auth::user()->isRoot() && \App\Models\Contact::count() > 0 ? 'col-8' : 'col'}}">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Posts</h4>
                        <div class="card-header-action">
                            <a href="{{route('table.blog.posts')}}" class="btn btn-primary">View All</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th width="45%">Title</th>
                                    <th width="30%">Author</th>
                                    <th width="25%" align="center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($latest as $row)
                                    @php
                                        $date = \Carbon\Carbon::parse($row->created_at);
                                        $url = route('detail.blog', ['author' => $row->getUser->username,
                                        'y' => $date->format('Y'), 'm' => $date->format('m'), 'd' => $date->format('d'),
                                        'title' => $row->title_uri]);
                                    @endphp
                                    <tr>
                                        <td>
                                            {{$row->title}}
                                            <div class="table-links">
                                                {{$row->getBlogCategory->name}}
                                                <div class="bullet"></div>
                                                {{$date->formatLocalized('%b %d, %Y')}}
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('detail.blog', ['author' => $row->getUser->username])}}"
                                               class="font-weight-600">
                                                <img alt="avatar" width="30" class="rounded-circle mr-2" src="{{$row
                                                ->getUser->ava != "" ? asset('storage/admins/ava/'.$row->getUser->ava) :
                                                asset('admins/img/avatar/avatar-'.rand(1,5).'.png')}}">{{$row->getUser->name}}
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a class="btn btn-info btn-action mr-1" data-toggle="tooltip"
                                               title="Details" href="{{$url}}"><i class="fas fa-info-circle"></i></a>
                                            <a class="btn btn-warning btn-action mr-1" data-toggle="tooltip"
                                               title="Edit"
                                               href="{{route('table.blog.posts', ['q' => encrypt($row->id)])}}">
                                                <i class="fas fa-pencil-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @if(Auth::user()->isRoot() && \App\Models\Contact::count() > 0)
                <div class="col">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-question-circle"></i>
                            </div>
                            <h4>{{\App\Models\Contact::count()}}</h4>
                            <div class="card-description">Clients need help</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list">
                                @foreach(\App\Models\Contact::orderByDesc('id')->take(3)->get() as $row)
                                    <a href="{{route('admin.inbox',['id' => $row->id])}}" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>{{$row->subject}}</h4>
                                        </div>
                                        <div class="ticket-info">
                                            <div>{{$row->name}}</div>
                                            <div class="bullet"></div>
                                            <div class="text-primary">
                                                {{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}</div>
                                        </div>
                                    </a>
                                @endforeach
                                <a href="{{route('admin.inbox')}}" class="ticket-item ticket-more">
                                    View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{asset('admins/modules/chart.min.js')}}"></script>
    <script src="{{asset('admins/modules/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <script>
        $(function () {
            $("#period").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                todayBtn: false,
            });

            @if($period != "")
            $("#period").val('{{$period}}');
            @endif
        });

        var incomeGraph = document.getElementById("visitor_graph").getContext('2d');

        new Chart(incomeGraph, {
            type: 'line',
            data: {
                labels: [
                    'January', 'February', 'March', 'April', 'May', 'June', 'July',
                    'August', 'September', 'October', 'November', 'December'
                ],
                datasets: [{
                    label: 'Visits',
                    data: [
                        @php $total = 0; @endphp
                        @for($i=1;$i<=12;$i++)
                        @php
                            $total = 0;
                            $visitors = \App\Models\Visitor::when($period, function ($query) use ($period) {
                                $query->whereYear('date', $period);
                            })->whereMonth('date',$i)->get();
                            foreach ($visitors as $row){
                                $total += $row->hits;
                            }
                        @endphp
                        {{$total}},
                        @endfor
                    ],
                    borderWidth: 2,
                    backgroundColor: 'rgba(227,27,35,0.8)',
                    borderWidth: 0,
                    borderColor: 'transparent',
                    pointBorderWidth: 0,
                    pointRadius: 3.5,
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: 'rgba(227,27,35,0.8)',
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: true,
                            drawBorder: false,
                            color: '#f2f2f2',
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 100,
                            callback: function (value, index, values) {
                                return value;
                            }
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            tickMarkLength: 15,
                        }
                    }]
                },
            }
        });

        $("#period").on('change', function () {
            $("#form-filter")[0].submit();
        });

        function openDataAdmins(href) {
            window.location.href = href;
        }

        function openDataGalleries(href) {
            @if(Auth::user()->isRoot())
            window.location.href = href;
            @else
            swal('ATTENTION!', 'This feature only for ROOT (Developer / Owner)', 'warning');
            @endif
        }

        function openDataInstallers(href) {
            @if(Auth::user()->isRoot())
            window.location.href = href;
            @else
            swal('ATTENTION!', 'This feature only for ROOT (Developer / Owner)', 'warning');
            @endif
        }

        function openDataBlog(href) {
            window.location.href = href;
        }
    </script>
@endpush
