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
                                <span class="card-label fw-bold text-gray-800">Results Lottery</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->
                            <button type="button" class="btn btn-success btn-sm mb-3 mt-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                + Add Result
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
                                            Create New Result</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form id="formResult">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Choose Lottery :</label>
                                                <select name="pasaran_id" id="pasaran_select" class="form-control">
                                                    <option selected disabled>Select your lottery</option>
                                                    @foreach ($pasarans as $pasaranId => $pasaranName)
                                                        <option style="text-transform: uppercase"
                                                            value="{{ $pasaranId }}">{{ $pasaranName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <fieldset id="generateForm">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Prize 3</label>
                                                    <input type="number" name="result_3" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Prize 2</label>
                                                    <input type="number" name="result_2" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="angka" class="form-label">Prize 1</label>
                                                    <input type="number" class="form-control" id="angka"
                                                        name="result_1">
                                                </div>
                                                <label for="shio" class="form-label">SHIO</label>
                                                <div class="form-group d-flex">
                                                    <input style="margin-right:7px" type="text"
                                                        placeholder="Please generate" class="form-control" id="shio"
                                                        name="shio" readonly>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        onclick="generateShio()">Generate</button>
                                                </div>
                                            </fieldset>
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
                        <div class="card-body pt-2">
                            <!--begin::Table-->
                            <div class="table-responsive"
                                style="background-color: #000000ba;padding: 10px;border-radius: 7px;color: white; !important">
                                <table style="width: 100%; font-size:14px"
                                    class="table align-middle table-row-dashed fs-6 gy-3" id="table-pasaran">
                                    <thead>
                                        <tr class="text-start text-gray-500 fw-bold fs-6 gs-0">
                                            <th style="width:5%;text-align: center; text-transform:capitalize">No.</th>
                                            <th style="width:25%;text-align: center;text-transform:capitalize">Name Lottery
                                            </th>
                                            <th style="text-align: center;text-transform:capitalize">Prize 1</th>
                                            <th style="text-align: center;text-transform:capitalize">Prize 2</th>
                                            <th style="text-align: center;text-transform:capitalize">Prize 3</th>
                                            <th style="text-align: center;text-transform:capitalize">SHIO</th>
                                            <th style="width:25%;text-align: center;text-transform:capitalize">Created at
                                            </th>
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
        <div id="kt_app_footer" class="app-footer mt-5">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-gray-900 order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2024&copy;</span>
                    <a href="/" target="_blank" class="text-gray-800 text-hover-primary">JederWD</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                        <div target="_blank" class="menu-link px-2">About</div>
                    </li>
                    <li class="menu-item">
                        <div target="_blank" class="menu-link px-2">Support</div>
                    </li>
                    <li class="menu-item">
                        <div target="_blank" class="menu-link px-2">Purchase</div>
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
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('#table-pasaran').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/index-result',
                columns: [{
                        className: "text-center",
                        data: "DT_RowIndex",
                        name: "DT_RowIndex",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'pasaran_name',
                        name: 'table_pasaran.name_pasaran' // Sesuaikan dengan nama kolom yang benar
                    },
                    {
                        className: "text-center",
                        data: 'result_1',
                        name: 'table_result.result_1' // Sesuaikan dengan nama kolom yang benar
                    },
                    {
                        className: "text-center",
                        data: 'result_2',
                        name: 'table_result.result_2',
                        render: function(data, type, row, meta) {
                            if (type === 'display') {
                                return data !== null ? '<div class="text-center">' + data +
                                    '</div>' : '<div class="text-center">-</div>';
                            }
                            return data;
                        }
                    },
                    {
                        className: "text-center",
                        data: 'result_3',
                        name: 'table_result.result_3',
                        render: function(data, type, row, meta) {
                            if (type === 'display') {
                                return data !== null ? '<div class="text-center">' + data +
                                    '</div>' : '<div class="text-center">-</div>';
                            }
                            return data;
                        }
                    },
                    {
                        data: 'shio',
                        name: 'table_result.shio'
                    },
                    {
                        data: 'created_at',
                        name: 'table_result.created_at' // Sesuaikan dengan nama kolom yang benar
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

        });

        // Store data
        $(document).ready(function() {
            $('#formResult').submit(function(e) {
                e.preventDefault();

                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: '/store-result',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Jika success
                        $('#exampleModal').modal('hide');
                        $('#formResult')[0].reset();
                        $('.modal-backdrop.show').css('display', 'none');
                        Swal.fire({
                            title: '<span class="your-custom-css-class" style="color:#b5b7c8">Success!</span>',
                            text: "Your file has been successfully edited",
                            icon: "success",
                            timer: 700,
                            showConfirmButton: false,
                        });
                        $('#table-pasaran').DataTable().ajax.reload();
                    },
                    error: function(error) {
                        console.log(error);
                        $('#exampleModal').modal('hide');
                        $('#formResult')[0].reset();
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

        // Get data berdasarkan id

        function loadData(id) {
            $.ajax({
                url: '/get-data-result/' + id,
                type: 'GET',
                success: function(response) {
                    // Mengisi formulir dengan data yang diterima
                    $('#editId').val(response.id);
                    $('#editResult3').val(response.result_3);
                    $('#editResult2').val(response.result_2);
                    $('#editResult1').val(response.result_1);
                    $('#editShio').val(response.shio);
                    $('#editDate').val(response.created_at);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        // Update data
        function updateData() {
            $.ajax({
                url: '/update-result',
                type: 'POST',
                data: $('#editForm').serialize(),
                success: function(response) {
                    // Jika success
                    $('#editModal').modal('hide');
                    $('.modal-backdrop.show').css('display', 'none');
                    Swal.fire({
                        title: '<span class="your-custom-css-class" style="color:#b5b7c8">Success!</span>',
                        text: "Your file has been successfully edited",
                        icon: "success",
                        timer: 700,
                        showConfirmButton: false,
                    });
                    $('#table-pasaran').DataTable().ajax.reload();

                },
                error: function(error) {
                    console.log(error);
                    $('#exampleModal').modal('hide');
                    $('#storeData')[0].reset();
                    $('.modal-backdrop.show').css('display', 'none');
                    Swal.fire({
                        title: '<span class="your-custom-css-class" style="color:#b5b7c8">Failed!</span>',
                        text: "Error: " + error.message,
                        icon: "error",
                    });
                }
            });
        }

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
                        url: "/destroy-result",
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
                            $('#table-pasaran').DataTable().ajax.reload();
                        },
                    });
                }
            });
        }


        function generateShio() {
            var angka = $('#angka').val();

            // Kirim permintaan AJAX ke backend
            $.ajax({
                type: 'POST',
                url: '/generate-shio',
                data: {
                    angka: angka
                },
                success: function(response) {
                    $('#shio').val(response.name);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>
@endsection
