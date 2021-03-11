@extends('layouts.mst_admin')
@section('title', 'PPF Admins: Warranty Requests Table | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('admins/modules/datatables/datatables.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('admins/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/modules/datatables/Buttons-1.5.6/css/buttons.dataTables.min.css')}}">
    <style>
        .bootstrap-select .dropdown-menu {
            min-width: 100% !important;
        }

        .form-control-feedback {
            position: absolute;
            top: 3em;
            right: 2em;
        }

        .modal-header {
            padding: 1rem !important;
            border-bottom: 1px solid #e9ecef !important;
        }

        .modal-footer {
            padding: 1rem !important;
            border-top: 1px solid #e9ecef !important;
        }

        .hr-text {
            line-height: 1em;
            position: relative;
            outline: 0;
            border: 0;
            color: black;
            height: 1.5em;
            opacity: .5;
        }

        .hr-text:before {
            content: '';
            background: -webkit-gradient(linear, left top, right top, from(transparent), color-stop(#ccc), to(transparent));
            background: linear-gradient(to right, transparent, #ccc, transparent);
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
        }

        .hr-text:after {
            content: attr(data-content);
            position: relative;
            display: inline-block;
            padding: 0 .5em;
            line-height: 1.5em;
            color: #999;
            background-color: #fff;
        }
    </style>
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Warranty Requests Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{url()->current()}}">Warranty</a></div>
                <div class="breadcrumb-item">Requests</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dt-buttons">
                                    <thead>
                                    <tr>
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" class="custom-control-input" id="cb-all">
                                                <label for="cb-all" class="custom-control-label">#</label>
                                            </div>
                                        </th>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Lot Number</th>
                                        <th class="text-center">Product</th>
                                        <th class="text-center">Installer</th>
                                        <th class="text-center">Purchaser</th>
                                        <th class="text-center">Requested at</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($warranty as $row)
                                        @php
                                            $product = explode(' ', $row->product, 3);
                                            $text = 'Supreme™ PPF '.$product[2];
                                            if($product[2] == 'X5') {
                                                $class = 'success';
                                            } elseif($product[2] == 'X3') {
                                                $class = 'info';
                                            } elseif($product[2] == 'Matte') {
                                                $class = 'secondary';
                                            } else {
                                                $class = 'dark';
                                            }
                                        @endphp
                                        <tr>
                                            <td style="vertical-align: middle" align="center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" id="cb-{{$row->id}}"
                                                           class="custom-control-input dt-checkboxes">
                                                    <label for="cb-{{$row->id}}"
                                                           class="custom-control-label">{{$no++}}</label>
                                                </div>
                                            </td>
                                            <td style="vertical-align: middle" align="center">{{$row->id}}</td>
                                            <td style="vertical-align: middle;" align="center">
                                                <b>{{$row->lot_number}}</b>
                                            </td>
                                            <td style="vertical-align: middle;" align="center">
                                                <span class="badge badge-{{$class}}"><b>{{$text}}</b></span>
                                            </td>
                                            <td style="vertical-align: middle;" align="center">
                                                {{$row->installer_company}}<br>
                                                <a href="mailto:{{$row->installer_email}}">{{$row->installer_email}}</a>
                                                @if(!is_null($row->installer_phone))
                                                    <br><a href="tel:{{$row->installer_phone}}">{{$row->installer_phone}}</a>
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle;" align="center">
                                                {{$row->purchaser_name}}<br>
                                                <a href="mailto:{{$row->purchaser_email}}">{{$row->purchaser_email}}</a>
                                                @if(!is_null($row->purchaser_phone))
                                                    <br><a href="tel:{{$row->purchaser_phone}}">{{$row->purchaser_phone}}</a>
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle" align="center">
                                                {{\Carbon\Carbon::parse($row->created_at)->format('j F Y')}}</td>
                                            <td style="vertical-align: middle" align="center">
                                                <button data-placement="left" data-toggle="tooltip" title="Detail"
                                                        type="button" class="btn btn-info"
                                                        onclick="detailWarranty('{{route('detail.warranty',['id' => encrypt($row->id)])}}')">
                                                    <i class="fa fa-info-circle"></i></button>
                                                <hr class="mt-1 mb-1">
                                                <a href="{{route('delete.warranty',['id'=>encrypt($row->id)])}}"
                                                   class="btn btn-danger delete-data" data-toggle="tooltip"
                                                   title="Delete" data-placement="left"><i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <form method="post" id="form-mass">
                                    {{csrf_field()}}
                                    <input type="hidden" name="warranty_ids">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Warranty Request&ensp;# <b></b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <hr data-aos="fade-down" class="hr-text" data-content="INSTALLER INFORMATION">
                    <table border="0" cellpadding="10" cellspacing="0"
                           style="text-align: justify">
                        <tr>
                            <th>Company Name</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="installer_company"></td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="installer_phone"></td>
                        </tr>
                        <tr>
                            <th>Contact Person</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="contact_person"></td>
                        </tr>
                        <tr>
                            <th>Installer Email</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="installer_email"></td>
                        </tr>
                        <tr>
                            <th>City / Suburb</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="installer_city"></td>
                        </tr>
                        <tr>
                            <th>State / Territory</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="installer_state"></td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="installer_country"></td>
                        </tr>
                    </table>

                    <hr data-aos="fade-down" class="hr-text" data-content="PRODUCT DETAILS">
                    <table border="0" cellpadding="10" cellspacing="0"
                           style="text-align: justify">
                        <tr>
                            <th>Supreme&trade; PPF Series Product</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="product"></td>
                        </tr>
                        <tr>
                            <th>Lot Number</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="lot_number"></td>
                        </tr>
                        <tr>
                            <th>Production Date</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="production_date"></td>
                        </tr>
                    </table>

                    <hr data-aos="fade-down" class="hr-text" data-content="VEHICLE DETAILS">
                    <table border="0" cellpadding="10" cellspacing="0"
                           style="text-align: justify">
                        <tr>
                            <th>Vehicle Year</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="vehicle_year"></td>
                        </tr>
                        <tr>
                            <th>Vehicle Model</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="vehicle_model"></td>
                        </tr>
                        <tr>
                            <th>Vehicle Make</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="vehicle_make"></td>
                        </tr>
                        <tr>
                            <th>V.I.N. / Immatriculation</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="vehicle_vin"></td>
                        </tr>
                        <tr>
                            <th>Installation Date</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="installation_date"></td>
                        </tr>
                        <tr>
                            <th>Protection Area(s)</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td><ul id="protection_area" style="margin-left: -2.5em"></ul></td>
                        </tr>
                    </table>

                    <hr data-aos="fade-down" class="hr-text" data-content="CUSTOMER INFORMATION">
                    <table border="0" cellpadding="10" cellspacing="0"
                           style="text-align: justify">
                        <tr>
                            <th>Purchaser Full Name</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="purchaser_name"></td>
                        </tr>
                        <tr>
                            <th>Company (if applicable)</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="purchaser_company"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="purchaser_email"></td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="purchaser_phone"> </td>
                        </tr>
                        <tr>
                            <th>City / Suburb</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="purchaser_city"></td>
                        </tr>
                        <tr>
                            <th>State / Territory</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="purchaser_state"></td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>&nbsp;:&nbsp;</td>
                            <td id="purchaser_country"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push("scripts")
    <script src="{{asset('admins/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admins/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admins/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('admins/modules/datatables/Buttons-1.5.6/js/buttons.dataTables.min.js')}}"></script>
    <script src="{{asset('admins/modules/jquery-ui/jquery-ui.min.js')}}"></script>
    <script>
        $(function () {
            var export_filename = 'Warranty Requests Table ({{now()->format('j F Y')}})',
                table = $("#dt-buttons").DataTable({
                    dom: "<'row'<'col-sm-12 col-md-3'l><'col-sm-12 col-md-5'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    columnDefs: [
                        {sortable: false, targets: 7},
                        {targets: 1, visible: false, searchable: false}
                    ],
                    buttons: [
                        {
                            text: '<strong class="text-uppercase"><i class="far fa-clipboard mr-2"></i>Copy</strong>',
                            extend: 'copy',
                            exportOptions: {
                                columns: [0, 2, 3, 4, 5, 6]
                            },
                            className: 'btn btn-warning assets-export-btn export-copy ttip'
                        }, {
                            text: '<strong class="text-uppercase"><i class="far fa-file-excel mr-2"></i>Excel</strong>',
                            extend: 'excel',
                            exportOptions: {
                                columns: [0, 2, 3, 4, 5, 6]
                            },
                            className: 'btn btn-success assets-export-btn export-xls ttip',
                            title: export_filename,
                            extension: '.xls'
                        }, {
                            text: '<strong class="text-uppercase"><i class="fa fa-print mr-2"></i>Print</strong>',
                            extend: 'print',
                            exportOptions: {
                                columns: [0, 2, 3, 4, 5, 6]
                            },
                            className: 'btn btn-info assets-select-btn export-print'
                        }, {
                            text: '<strong class="text-uppercase"><i class="fa fa-trash-alt mr-2"></i>Deletes</strong>',
                            className: 'btn btn-danger btn_massDelete'
                        }
                    ],
                    fnDrawCallback: function (oSettings) {
                        $('.use-nicescroll').getNiceScroll().resize();
                        $('[data-toggle="tooltip"]').tooltip();

                        $("#cb-all").on('click', function () {
                            if ($(this).is(":checked")) {
                                $("#dt-buttons tbody tr").addClass("terpilih")
                                    .find('.dt-checkboxes').prop("checked", true).trigger('change');
                            } else {
                                $("#dt-buttons tbody tr").removeClass("terpilih")
                                    .find('.dt-checkboxes').prop("checked", false).trigger('change');
                            }
                        });

                        $("#dt-buttons tbody tr").on("click", function () {
                            $(this).toggleClass("terpilih");
                            if ($(this).hasClass('terpilih')) {
                                $(this).find('.dt-checkboxes').prop("checked", true).trigger('change');
                            } else {
                                $(this).find('.dt-checkboxes').prop("checked", false).trigger('change');
                            }
                        });

                        $('.dt-checkboxes').on('click', function () {
                            if ($(this).is(':checked')) {
                                $(this).parent().parent().parent().addClass("terpilih");
                            } else {
                                $(this).parent().parent().parent().removeClass("terpilih");
                            }
                        });

                        $('.btn_massDelete').on("click", function () {
                            var ids = $.map(table.rows('.terpilih').data(), function (item) {
                                return item[1]
                            });
                            $("#form-mass input[name=warranty_ids]").val(ids);
                            $("#form-mass").attr("action", "{{route('massDelete.warranty')}}");

                            if (ids.length > 0) {
                                swal({
                                    title: 'Delete Warranty Requests',
                                    text: 'Are you sure to delete this ' + ids.length + ' selected record(s)? ' +
                                        'You won\'t be able to revert this!',
                                    icon: 'warning',
                                    dangerMode: true,
                                    buttons: ["No", "Yes"],
                                    closeOnEsc: false,
                                    closeOnClickOutside: false,
                                }).then((confirm) => {
                                    if (confirm) {
                                        swal({icon: "success", buttons: false});
                                        $("#form-mass")[0].submit();
                                    }
                                });
                            } else {
                                $("#cb-all").prop("checked", false).trigger('change');
                                swal("Error!", "There's no any selected record!", "error");
                            }
                        });
                    },
                });

            @if($find != "")
            $(".dataTables_filter input[type=search]").val('{{$find}}').trigger('keyup');
            @endif
        });

        function detailWarranty(url) {
            $.get(url, function (data) {
               $("#detailModal .modal-title b").text(data.lot_number);
                $("#installer_company").text(data.installer_company);
                $("#installer_phone").html(data.installer_phone != "" ?
                    '<a href="tel:'+data.installer_email+'">'+data.installer_email+'</a>' : '(empty)');
                $("#contact_person").text(data.contact_person);
                $("#installer_email").html('<a href="mailto:'+data.installer_email+'">'+data.installer_email+'</a>');
                $("#installer_city").text(data.installer_city);
                $("#installer_state").text(data.installer_state);
                $("#installer_country").text(data.installer_country);

                $('#product').text(data.product);
                $('#lot_number').text(data.lot_number);
                $('#production_date').text(data.production_date);

                $('#vehicle_year').text(data.vehicle_year);
                $('#vehicle_model').text(data.vehicle_model);
                $('#vehicle_make').text(data.vehicle_make);
                $('#vehicle_vin').text(data.vehicle_vin);
                $('#installation_date').text(data.installation_date);

                var areas = '';
                $.each(data.protection_area, function (i, val) {
                    areas += '<li>'+val+'</li>'
                });
                $("#protection_area").html(areas);

                $('#purchaser_name').text(data.purchaser_name);
                $('#purchaser_company').text(data.purchaser_company != "" ? data.purchaser_company : '(empty)');
                $('#purchaser_email').html('<a href="mailto:'+data.purchaser_email+'">'+data.purchaser_email+'</a>');
                $('#purchaser_phone').html(data.purchaser_phone != "" ?
                    '<a href="tel:'+data.purchaser_phone+'">'+data.purchaser_phone+'</a>' : '(empty)');
                $('#purchaser_city').text(data.purchaser_city);
                $('#purchaser_state').text(data.purchaser_state);
                $('#purchaser_country').text(data.purchaser_country);
            });

            $("#detailModal").modal('show');
        }
    </script>
@endpush
