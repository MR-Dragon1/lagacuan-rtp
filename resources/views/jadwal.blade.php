@extends('layouts.master')

@section('content')
    <main class="container">
        <h6 style="text-align: center; background-color:#101010eb; padding:5px 0px; color:white" class="judul-page">⚜️
            LAGACUAN - JADWAL TOGEL
            ⚜️
        </h6>
    </main>
    <main class="container"
        style="padding: 12px; border-bottom-left-radius:8px;border-bottom-right-radius:8px; background-color:#181818l;flex: 1;">
        <div class="table-responsive" style="color: white;background-color: #0000004f;border-radius: 5px;">
            <table class="table table-striped" id="jsonTable" style="padding: 12px 0px; width:100%">
                <thead class="">
                    <tr>
                        <th style="text-align: center">Nama Pasaran</th>
                        <th style="text-align: center">Jadwal Tutup</th>
                        <th style="text-align: center">Jadwal Result</th>
                        <th style="text-align: center; width:20%">Link Result</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </main>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: '/api/jadwal',
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
                            data: 'jadwal_tutup',
                            render: function(data, type, row, meta) {
                                if (type === 'display') {
                                    return '<div>' + data + ' WIB' + '</div>';
                                }
                                return data;
                            }
                        },
                        {
                            data: 'jadwal_undi',
                            render: function(data, type, row, meta) {
                                if (type === 'display') {
                                    return '<div>' + data + ' WIB' + '</div>';
                                }
                                return data;
                            }
                        },
                        {
                            data: 'situs_resmi',
                            className: 'text-center',
                            render: function(data, type, row, meta) {
                                if (type === 'display') {
                                    return '<a style="font-weight:bolder; font-family:monospace" href="' +
                                        data +
                                        '" target="_blank">' +
                                        "KLIK DISINI" +
                                        '</a>';
                                }
                                return data;
                            }
                        }
                    ]
                });
            }
        });
    </script>
@endsection
