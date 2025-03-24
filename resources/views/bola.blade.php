@extends('layouts.master')

@section('content')
    <main class="container">
        <h6 style="text-align: center; background-color:#101010eb; padding:5px 0px; color:white" class="judul-page">⚜️
            LAGACUAN - PREDIKSI BOLA
            ⚜️
        </h6>
    </main>
    <main class="container"
        style="padding: 12px; border-bottom-left-radius:8px;border-bottom-right-radius:8px; background-color:#181818l;flex: 1;">
        <div class="mb-3">
            <label for="ligaFilter" style="color: white; margin-bottom: 5px;">Filter by League :</label>
            <select id="ligaFilter" class="form-control">
                <option value="">All Leagues</option>
            </select>
        </div>
        <div class="table-responsive" style="color: white;background-color: #0000004f;border-radius: 7px;padding:8px">
            <table class="table table-striped" id="jsonTable" style="padding: 12px 0px; width:100%">
                <thead class="">
                    <tr>
                        <th style="text-align: center; vertical-align: middle;">Date and time</th>
                        <th style="text-align: center; vertical-align: middle;">Match</th>
                        <th style="text-align: center; vertical-align: middle;">Score</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </main>

    <script type="text/javascript">
        $(document).ready(function() {
            let table;
            let defaultLiga = "UEFA EUROPA LEAGUE"; // Default liga pertama

            function fetchData(selectedLiga = defaultLiga) {
                $.ajax({
                    url: '/api/bola',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        let uniqueLeagues = [...new Set(data.map(item => item.liga))];

                        $('#ligaFilter').empty();
                        uniqueLeagues.forEach(liga => {
                            let selected = liga === selectedLiga ? 'selected' : '';
                            $('#ligaFilter').append(
                                `<option value="${liga}" ${selected}>${liga}</option>`);
                        });

                        // Set nilai dropdown ke liga yang sedang dipilih
                        $('#ligaFilter').val(selectedLiga);

                        initializeDataTable(data, selectedLiga);
                    },
                    error: function(error) {
                        console.log('Error: ', error);
                    }
                });
            }

            function initializeDataTable(data, liga) {
                if (table) {
                    table.destroy();
                }

                // Filter data berdasarkan liga yang dipilih
                let filteredData = liga ? data.filter(item => item.liga === liga) : data;

                table = $('#jsonTable').DataTable({
                    data: filteredData,
                    columns: [{
                            data: 'tanggal_waktu',
                            render: function(data, type, row, meta) {
                                if (type === 'display') {
                                    let formattedDate = data.split('.')[0].slice(0, 16);
                                    return '<div>' + formattedDate + '</div>';
                                }
                                return data;
                            }
                        },
                        {
                            className: 'text-center',
                            data: 'pertandingan',
                            render: function(data, type, row, meta) {
                                return '<div>' + data + '</div>';
                            }
                        },
                        {
                            className: 'text-center',
                            data: 'skor',
                            render: function(data, type, row, meta) {
                                return '<div>' + data + '</div>';
                            }
                        },
                    ]
                });
            }

            fetchData(); // Memanggil data pertama kali dengan default liga UEFA EUROPA LEAGUE

            $('#ligaFilter').on('change', function() {
                let selectedLiga = $(this).val();
                fetchData(selectedLiga); // Ambil data ulang berdasarkan liga yang dipilih
            });
        });
    </script>
@endsection
