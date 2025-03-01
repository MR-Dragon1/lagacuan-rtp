@extends('layouts.master')
<style>
    .provider {
        background-image: linear-gradient(45deg, #763f07 0%, #f7e33f 52%, #763f07 90%);
        border-radius: 5px;
        padding: 25px;
        border: solid #f5d000 2px;
        transition: transform .2s;
        max-width: 94px;
        max-height: 94px;
        display: flex;
        justify-content: center;
        text-align: center;
    }

    .provider img {
        max-width: 90px;
        padding-bottom: 20px;
        height: 64px;
    }

    .provider:hover {
        transform: scale(1.5);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    .provider.active {
        transform: scale(1.2);
    }

    .provider-game {
        background-image: linear-gradient(45deg, #763f07 0%, #f7e33f 52%, #763f07 90%);
        padding: 5px;
        border-radius: 3px;
        border: solid #f5d000 2px;
        transition: transform .2s;
    }

    .provider-game:hover {
        transform: scale(1.1);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    .provider-img {
        display: grid;
        gap: 30px;
    }

    @media screen and (min-width: 900px) {
        .img-rtp {
            height: 110px;
        }

        .provider-img {
            grid-template-columns: auto auto auto auto auto auto auto auto auto;
        }

        .card-rtp-new {
            background-image: linear-gradient(45deg, #0d3cd1 14%, #396dff 70%);
            border: solid #198cf5 3px;
        }

        .pola-set {
            font-family: math;
            background-color: #00000096;
            margin: 5px 10px;
            padding: 5px 0px;
            border-radius: 5px;
            font-size: 13px;
        }

        .provider-game {
            background-image: linear-gradient(45deg, #763f07 0%, #f7e33f 52%, #763f07 90%);
            padding: 8px;
            border: solid #f5d000 2px;
            border-radius: 3px;
            transition: transform .2s;
        }

        .bar-persen {
            margin: 0px 12px -8px 12px;
            height: 18px;
            border-radius: 20px
        }

        .box-pola {
            text-align: center;
            font-weight: bold;
            background-image: linear-gradient(0deg, #16379f 14%, #50a7e5 70%);
            border: solid #198cf5 2px;
            border-radius: 25px;
            margin: -5px 15px 5px 15px;
        }

        .box-pola-span {
            font-size: 12px;
            letter-spacing: 1px;
            padding-bottom: 3px;
        }

        .height-card {
            height: 150px;
        }

    }

    @media screen and (max-width: 900px) {

        .height-card {
            height: 101px;
        }

        .provider-game {
            background-image: linear-gradient(45deg, #763f07 0%, #f7e33f 52%, #763f07 90%);
            padding: 1px;
            border: solid #f5d000 1px;
            border-radius: 3px;
        }

        .provider-img {
            display: grid;
            grid-template-columns: auto auto auto;
        }

        .card-rtp-new {
            background-image: linear-gradient(45deg, #0d3cd1 14%, #396dff 70%);
            border: solid #198cf5 2px;
        }

        .pola-set {
            font-family: math;
            background-color: #00000096;
            margin: 5px 3px;
            padding: 5px 0px;
            border-radius: 5px;
            font-size: 11px;
        }

        .box-pola {
            text-align: center;
            font-weight: bold;
            background-image: linear-gradient(0deg, #16379f 14%, #50a7e5 70%);
            border: solid #198cf5 2px;
            border-radius: 25px;
            margin: -8px 3px 3px 3px;
        }

        .box-pola-span {
            font-size: 11px;
        }

        .provider-game {
            background-image: linear-gradient(45deg, #763f07 0%, #f7e33f 52%, #763f07 90%);
            padding: 1px;
            border: solid #f5d000 1px;
            border-radius: 3px;
        }

        .bar-persen {
            margin: 0px 3px -8px 3px;
        }

    }

    .bg-animasi {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    }

    @keyframes pulse {
        50% {
            opacity: .5;
        }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(.4, 0, .6, 1) infinite;
    }
</style>
@section('content')
    <main class="container mb-2">
        <h6 style="text-align: center; background-color:#101010eb; padding:5px 0px; color:white">⚜️ LAGACUAN - RTPSLOT ⚜️
        </h6>
    </main>
    <div class="container" style="margin-top: -8px; flex: 1;">
        <div class="container pt-3 pb-3 mb-2" style="background: #4f4f4fb8;border-radius: 10px;">

            <h5 class="text-center" style="color: white; margin-bottom:20px">
                {{ now()->format('l, F j, Y') }}
            </h5>
            <div class="align-item-center justify-content-around provider-img" style="flex-wrap: wrap">
                @foreach ($provider as $item)
                    <a class="provider" href="javascript:void(0);" data-name="{{ $item->provider_name }}">
                        <img src="{{ asset($item->img_url) }}" alt={{ $item->provider_name }}>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <input type="text" class="form-control" placeholder="Cari game disini..." id="cariGame">
    </div>
    <main class="container mb-5">
        <div class="mb-5 row row-cols-1 row-cols-md-6 g-6" id="loading">
            @for ($i = 0; $i < 12; $i++)
                <div class="col-4 data_rtp" style="padding: 7px;">
                    <div class="shadow card h-100 lazy-image card-rtp-new" style="color: white;border: solid #198cf5 3px">
                        <div style="width: 100%; height: 100px; background: #e2e8f0; border-radius: 3px"
                            class="animate-pulse"></div>
                        <div class="mt-2 progress bar-persen animate-pulse" style="background: #e2e8f0"></div>
                        <hr style="border-top: 5px double white;">
                        <div class="box-pola animate-pulse" style="height: 25px;"></div>
                        <div class="text-center pola-set animate-pulse" style="height: 70px"></div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="mb-5 row row-cols-1 row-cols-md-6 g-6" id="rtpArea" style="display: none">
        </div>
    </main>
    <script>
        let provider = "all";
        let search = "";
        let loading = $("#loading");
        let rtpArea = $("#rtpArea");

        $(".provider").click(function(e) {
            let dtProvider = $(this).attr("data-name");
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                provider = "all";
            } else {
                $(this).closest(".provider-img").find(".provider").removeClass("active");
                $(this).addClass("active");
                provider = dtProvider;
            }

            getData();
        });

        $("#cariGame").keyup(function(e) {
            search = e.target.value;
            if (search.length == 0 || search.length >= 3) {
                getData();
            }
        });

        getData();

        function getData() {
            let domainUtama = $('meta[name="domain"]').attr("content");
            loading.show();
            rtpArea.hide();
            let url = `/rtpslot/${provider}?q=` + search;
            $.ajax({
                type: "get",
                url: url,
                dataType: "json",
                success: function(res) {
                    res = res.map(e => {
                        return `
                    <div class="col-4 data_rtp" style="padding: 7px;">
                        <div class="shadow card h-100 lazy-image card-rtp-new" style="color: white;border: solid #198cf5 3px">
                            <a href="https://isportsfab.com" class="provider-game">
                                <img src="${e.image}" class="card-img-top img-new height-card" alt="Gambar">
                            </a>
                            <div class="mt-2 progress bar-persen" style="border: solid #0ba1ff 2px;">
                                <div class="progress-bar ${
                                    e.persentase >= 0 && e.persentase <= 40 ? 'bg-danger bg-animasi' :
                                    e.persentase >= 41 && e.persentase <= 60 ? 'bg-warning bg-animasi' :
                                    e.persentase >= 61 && e.persentase <= 85 ? 'bg-success bg-animasi' : ''
                                }" role="progressbar" style="width: ${e.persentase < 10 ? '10' : e.persentase}%;" aria-valuenow="${e.persentase}" aria-valuemin="0" aria-valuemax="100">${e.persentase}%</div>
                            </div>
                            <hr style="border-top: 5px double white;">
                            <a href="https://isportsfab.com" style="color: white; text-decoration:none">
                                <div class="box-pola" style=""><span class="box-pola-span">${e.name != '' ? e.name : 'Pola'}</span></div>
                            </a>
                            <div style="" class="text-center pola-set">${e.pola}</div>
                        </div>
                    </div>
                `;
                    });

                    rtpArea.html(res.join(""));
                    setTimeout(() => {
                        loading.hide();
                        rtpArea.show();
                    }, 1000);
                }
            });
        }


        function lazyLoad() {
            const lazyImages = document.querySelectorAll('.lazy-image');

            lazyImages.forEach((lazyImage) => {
                if (lazyImage.getBoundingClientRect().top < window.innerHeight) {
                    lazyImage.classList.remove('lazy-image');
                }
            });
        }

        // Event listener untuk memicu lazy loading ketika scroll
        document.addEventListener('scroll', lazyLoad);

        // Memuat gambar secara lazy saat halaman dimuat
        window.addEventListener('DOMContentLoaded', lazyLoad);
    </script>
@endsection
