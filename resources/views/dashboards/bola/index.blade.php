@extends('dashboards.layouts.master')
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
    table,
    td {
        text-transform: uppercase;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->

                <div class="m-6">
                    <!--begin::Table Widget 4-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="text-gray-800 card-label fw-bold">Football Predictions</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->
                            <button type="button" class="mt-1 mb-3 btn btn-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                + Add Predictions
                            </button>
                            <!--end::Actions-->
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="editModalLabel" style="text-transform: capitalize">
                                            Create New Prediction</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form id="storeData">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">League :</label>
                                                <select name="liga" id="pasaran_select" class="form-control">
                                                    <option selected disabled>Select League</option>
                                                    <option style="text-transform: uppercase" value="UEFA CHAMPIONS LEAGUE">
                                                        UEFA CHAMPIONS LEAGUE</option>
                                                    <option style="text-transform: uppercase" value="UEFA EUROPA LEAGUE">
                                                        UEFA EUROPA LEAGUE</option>
                                                    <option style="text-transform: uppercase"
                                                        value="UEFA EUROPA CONFERENCE">UEFA EUROPA CONFERENCE</option>
                                                    <option style="text-transform: uppercase"
                                                        value="ENGLISH PREMIER LEAGUE">ENGLISH PREMIER LEAGUE</option>
                                                    <option style="text-transform: uppercase" value="SPANISH LA LIGA">
                                                        SPANISH LA LIGA</option>
                                                    <option style="text-transform: uppercase" value="BUNDESLIGA">BUNDESLIGA
                                                    </option>
                                                    <option style="text-transform: uppercase" value="ITALIAN SERIE A">
                                                        ITALIAN SERIE A</option>
                                                    <option style="text-transform: uppercase" value="FRENCH LIGUE 1">FRENCH
                                                        LIGUE 1</option>
                                                    <option style="text-transform: uppercase" value="UNITED STATES MAJOR">
                                                        UNITED STATES MAJOR</option>
                                                    <option style="text-transform: uppercase" value="FA CUP">FA CUP</option>
                                                    <option style="text-transform: uppercase" value="COPA DEL REY">COPA DEL
                                                        REY</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="datetimeInput" class="form-label">Date and Time</label>
                                                <input type="datetime-local" name="tanggal_waktu" class="form-control"
                                                    id="datetimeInput">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Match</label>
                                                <input type="text" name="pertandingan" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Score</label>
                                                <input type="text" name="skor" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="pt-2 card-body">
                            <!--begin::Table-->
                            <div class="table-responsive" style="padding: 10px;border-radius: 7px;color: white; !important">
                                <table style="width: 100%; font-size:14px"
                                    class="table align-middle table-row-dashed fs-6 gy-3" id="table-pasaran">
                                    <thead>
                                        <tr class="text-gray-500 text-start fw-bold fs-6 gs-0">
                                            <th style="width:5%;text-align: center; text-transform:capitalize">No.</th>
                                            <th style="width:15%;text-align: center;text-transform:capitalize">League</th>
                                            <th style="text-align: center;text-transform:capitalize">Date and time</th>
                                            <th style="text-align: center;text-transform:capitalize">Match</th>
                                            <th style="text-align: center;text-transform:capitalize">Score</th>
                                            <th style="width:10%;text-align:center;text-transform:capitalize">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="mt-5 app-footer">
            <!--begin::Footer container-->
            <div class="py-3 app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack">
                <!--begin::Copyright-->
                <div class="order-2 text-gray-900 order-md-1">
                    <span class="text-muted fw-semibold me-1">2024&copy;</span>
                    <a href="/" target="_blank" class="text-gray-800 text-hover-primary">LAGACUAN</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="order-1 menu menu-gray-600 menu-hover-primary fw-semibold">
                    <li class="menu-item">
                        <div target="_blank" class="px-2 menu-link">About</div>
                    </li>
                    <li class="menu-item">
                        <div target="_blank" class="px-2 menu-link">Support</div>
                    </li>
                    <li class="menu-item">
                        <div target="_blank" class="px-2 menu-link">Purchase</div>
                    </li>
                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>






    <script type="text/javascript">
        // Get data
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        let table = $('#table-pasaran').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/index-bola',
            columns: [{
                    className: "text-center",
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: false,
                    searchable: false
                },
                {
                    className: "text-center",
                    data: 'liga',
                    name: 'liga'
                },
                {
                    className: "text-center",
                    data: 'tanggal_waktu',
                    name: 'tanggal_waktu'
                },
                {
                    className: "text-center",
                    data: 'pertandingan',
                    name: 'pertandingan'
                },
                {
                    className: "text-center",
                    data: 'skor',
                    name: 'skor'
                },
                {
                    className: "text-center",
                    data: 'action',
                    name: 'action',
                    orderable: false
                },
            ],
            order: [
                [0, 'asc']
            ],

        });

        // store data
        $(document).ready(function() {
            $('#storeData').submit(function(e) {
                e.preventDefault();

                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: '/store-bola',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Jika success
                        $('#exampleModal').modal('hide');
                        $('#storeData')[0].reset();
                        $('.modal-backdrop.show').css('display', 'none');
                        Swal.fire({
                            title: '<span class="your-custom-css-class" style="color:#b5b7c8">Success!</span>',
                            text: "Your file has been saved",
                            icon: "success",
                            timer: 700,
                            showConfirmButton: false,
                        });
                        table.draw();
                    },
                    error: function(error) {
                        console.log(error);
                        $('#exampleModal').modal('hide');
                        $('#storeData')[0].reset();
                        $('.modal-backdrop.show').css('display', 'none');
                        Swal.fire({
                            title: '<span class="your-custom-css-class" style="color:#b5b7c8">Failed!</span>',
                            text: "Error: " + "Please fill all the input fields",
                            icon: "error",
                        });

                    }
                });
            });
        });


        // Destroy data
        function deleteData(id) {
            Swal.fire({
                title: '<span class="your-custom-css-class" style="color:#b5b7c8">Are you sure?</span>',
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#006ae6",
                cancelButtonColor: "#f8285a",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "/destroy-bola",
                        data: {
                            id: id,
                        },
                        dataType: "json",
                        success: function(response) {
                            // Jika success
                            Swal.fire({
                                title: '<span class="your-custom-css-class" style="color:#b5b7c8">Success!</span>',
                                text: "Your file has been deleted.",
                                icon: "success",
                                timer: 700,
                                showConfirmButton: false,
                            });
                            table.draw();
                        },
                    });
                }
            });
        }
    </script>
@endsection
