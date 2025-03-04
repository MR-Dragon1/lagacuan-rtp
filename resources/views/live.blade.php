@extends('layouts.master')

@section('content')
    <main class="container mb-2">
        <h6 style="text-align: center; background-color:#101010eb; padding:5px 0px; color:white" class="judul-page">⚜️
            LAGACUAN - LIVE DRAW
            PASARAN
            TOGEL ONLINE
            LENGKAP ⚜️</h6>
    </main>
    <main class="container" style="margin-top: -8px;flex: 1;">
        <div id="results-container">

    </main>
    <script>
        $(document).ready(function() {
            // AJAX request to fetch data

            var baseUrl = "{{ url('/') }}";

            $.ajax({
                url: '/api/result',
                method: 'GET',
                success: function(data) {
                    // Handle the successful response and update the results container
                    displayResults(data);
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });

            function displayResults(data) {
                // Iterate through the data and append it to the results container
                var resultsContainer = $('#results-container');

                $.each(data, function(index, result) {
                    var resultCard = `
                        <!-- Button trigger modal -->
                        <button style="text-align: left; font-weight:bold; color:white" type="button" class="btn button-15 mb-2"
                        data-bs-toggle="modal" data-bs-target="#exampleModal${result.id}"><i
                        class="fa-solid fa-arrow-up-right-from-square"></i>
                        LIVE DRAW <span style="text-transform:uppercase">${result.pasaran.name_pasaran}</span> POOLS
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal${result.id}" tabindex="-1"
                    aria-labelledby="exampleModalLabel${result.id}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#2c2c2c; color:white">
                                <h1 class="modal-title fs-6" id="exampleModalLabel">LIVE DRAW <span style="text-transform:uppercase">${result.pasaran.name_pasaran}</span> POOLS
                                </h1>
                            </div>
                            <div class="modal-body" style="background-image: linear-gradient(45deg, #7a0000 0%, #ff1313 52%, #a60000 90%);">
                                <div class="text-center mb-3">
                                    <img src="${result.pasaran.image}" class="img-fluid" alt="...">
                                </div>
                                <p class="mt-2" style="text-align: center; font-weight:bolder; font-size:18px; color: #fff900;font-family: ubuntu, sans-serif; text-transform:capitalize; margin-bottom:5px">
                                SHIO ${result.shio}
                            </p>
                                <div class="text-center mb-3">
                                    <div class="row align-items-center">
                                        <div class="col" style="font-weight:bold; color:white">
                                            ${result.created_at}
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <div class="row align-items-center">
                                        <div class="col" style="font-weight:bold;font-size:22px; color:white">
                                            Prize #1
                                        </div>
                                        <div class="col" style="font-weight:bold;font-size:22px; color:#fff900">
                                            ${result.result_1}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="background-color:#2c2c2c; color:white">
                                <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;

                    resultsContainer.append(resultCard);
                });
            }
        });
    </script>
@endsection
