@extends('layouts.master')

@section('content')
    <main class="container" style="flex: 1;">
        <div id="results-container" class="mb-5 row row-cols-1 row-cols-md-4 pasaran-lagacuan">
        </div>
    </main>


    <script>
        $(document).ready(function() {
            // AJAX request to fetch data

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
                // var limitedData = data.slice(0, 48);

                $.each(data, function(index, result) {
                    // var pathImage = 'storage/' + result.image;
                    var resultCard = `
                        <div class="col mt-1" style="margin-bottom:10px !important">
                            <div class="card h-100 card-red">
                                <img src="${result.pasaran.image}" class="card-img-top image-home" alt="...">
                                <div class="card-body">
                                    <div style="text-align: center; text-transform:uppercase">
                                        <h6 class="card-title"><span style="text-transform:uppercase;font-weight: bolder;color: #fff900;font-size: 18px;font-family: ubuntu, sans-serif">${result.pasaran.name_pasaran}</span></h6>

                                    </div>

                                    <div class="position-relative container-brunei">
                                        ${result.result_1}
                                        <span class="top-0 position-absolute start-100 translate-middle badge rounded-pill bg-danger" style="font-size:14px;border: solid #edd000 1px;letter-spacing:0.7px; margin-left:-20px;background-image: linear-gradient(45deg, #a37700 0%, #fae768 52%, #a37700 90%); color: black !important;">
                                            Prize 1
                                        </span>
                                    </div>
                                    <div class="position-relative container-brunei">
                                        ${result.result_2 !== null ? result.result_2 : "-"}  <span class="top-0 position-absolute start-100 translate-middle badge rounded-pill bg-danger" style="font-size:14px;border: solid #edd000 1px;letter-spacing:0.7px; margin-left:-20px;background-image: linear-gradient(45deg, #a37700 0%, #fae768 52%, #a37700 90%); color: black !important;">
                                            Prize 2
                                        </span>
                                    </div>
                                    <div class="position-relative container-brunei">
                                        ${result.result_3 !== null ? result.result_3 : "-"}  <span class="top-0 position-absolute start-100 translate-middle badge rounded-pill bg-danger" style="font-size:14px;border: solid #edd000 1px;letter-spacing:0.7px; margin-left:-20px;background-image: linear-gradient(45deg, #a37700 0%, #fae768 52%, #a37700 90%); color: black !important;">
                                            Prize 3
                                        </span>
                                    </div>
                                    <p class="mt-2" style="text-align: center; font-weight:bolder; font-size:17.5px; color: #fff900;font-family: ubuntu, sans-serif; text-transform:capitalize; margin-bottom:5px">SHIO ${result.shio}</p>
                                    <p class="" style="text-align: center; font-weight:bolder; font-size:17px; color: white;font-family: ubuntu, sans-serif">
                                        ${result.created_at}
                                    </p>
                                    <div style="text-decoration: none; font-weight:bold; cursor:context-menu">
                                        <a style="color:white;" href="/live-draw">
                                            <div class="button-1"><i class="fa-solid fa-circle-exclamation"></i> LIVE DRAW <span style="text-transform:uppercase">${result.pasaran.name_pasaran}</span></div>
                                        </a>
                                    </div>
                                    <div style="text-decoration: none; font-weight:bold; cursor:context-menu">
                                        <a style="color:white;" href="/prediksi-togel">
                                            <div class="button-1"><i class="fa-solid fa-circle-exclamation"></i> PREDIKSI <span style="text-transform:uppercase">${result.pasaran.name_pasaran}</span></div>
                                        </a>
                                    </div>
                                    <div style="text-decoration: none; font-weight:bold; cursor:context-menu">
                                        <a style="color:white;" href="/data-result">
                                            <div class="button-1"><i class="fa-solid fa-circle-exclamation"></i> RESULT <span style="text-transform:uppercase">${result.pasaran.name_pasaran}</span></div>
                                        </a>
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
