@extends('layouts.master')

@section('content')
    <main class="container">
        <h6 style="text-align: center; background-color:#101010eb; padding:5px 0px; color:white" class="judul-page">⚜️
            LAGACUAN - KEMENANGAN
            PLAYER
            ⚜️
        </h6>
    </main>
    <main class="container table-data"
        style="padding: 12px; border-bottom-left-radius:8px;border-bottom-right-radius:8px; background-color:#181818l;flex: 1;">
        <div class="table-responsive" style="color: white;background-color: #0000004f;border-radius: 5px;">
            <table class="table table-striped" id="jsonTable" style="padding: 12px 0px; width:100%">
                <thead class="">
                    <tr>
                        <th style="text-align: center">Nama Pasaran</th>
                        <th style="text-align: center">Prize 1</th>
                        <th style="text-align: center">Prize 2</th>
                        <th style="text-align: center">Prize 3</th>
                        <th style="text-align: center">Tanggal & Waktu</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </main>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: '/api/result',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    initializeDataTable(data);
                },
                error: function(error) {
                    console.log('Error: ', error);
                }
            });

            function initializeDataTable(data) {
                $('#jsonTable').DataTable({
                    data: data,
                    columns: [{
                            data: 'pasaran.name_pasaran',
                            render: function(data, type, row, meta) {
                                if (type === 'display') {
                                    return '<div style="text-transform:uppercase;">' +
                                        data +
                                        '</div>';
                                }
                                return data;
                            }
                        },
                        {
                            className: 'text-center',
                            data: 'result_1'
                        },
                        {
                            className: 'text-center',
                            data: 'result_2',
                            render: function(data, type, row, meta) {
                                if (type === 'display') {
                                    return data !== null ? '<div class="text-center">' + data +
                                        '</div>' : '<div class="text-center">-</div>';
                                }
                                return data;
                            }
                        },
                        {
                            className: 'text-center',
                            data: 'result_3',
                            render: function(data, type, row, meta) {
                                if (type === 'display') {
                                    return data !== null ? '<div class="text-center">' + data +
                                        '</div>' : '<div class="text-center">-</div>';
                                }
                                return data;
                            }
                        },
                        {
                            data: 'created_at'
                        },
                    ]
                });
            }
        });
    </script>
@endsection
