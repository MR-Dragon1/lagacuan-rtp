<header class="py-3 lh-1" style="padding: 20px 25px;background-color: #101010eb;border-bottom: solid #ff0000 2px">
    <div id="results-contact">

    </div>
</header>

{{-- Desktop --}}
<div class="py-1 mb-1 nav-scroller nav-desktop" style="border-bottom: solid #ff0000 2px; background-color:#313131c2">
    <nav class="nav nav-underline justify-content-between">
        <a @if (request()->is('/home')) class="actives" @endif class="nav-item nav-link no-actived" href="/"
            style="margin-left:15px;font-family:system-ui; letter-spacing: 2px; font-size: 13px;">
            <span class="head-2">
                <i class="fa-solid fa-house"></i>
                HOME
            </span>
        </a>
        <a @if (request()->is('live-draw')) class="actives" @endif class="nav-item nav-link no-actived"
            href="/live-draw" style="font-family:system-ui; letter-spacing: 2px; font-size: 13px;">
            <span class="head-2">
                LIVE DRAW 🔥
            </span>
        </a>
        <a @if (request()->is('prediksi-togel')) class="actives" @endif class="nav-item nav-link no-actived"
            href="prediksi-togel" style="font-family:system-ui; letter-spacing: 2px; font-size: 13px;">
            <span class="head-2">
                PREDIKSI TOGEL
            </span>
        </a>

        <a @if (request()->is('data-result')) class="actives" @endif class="nav-item nav-link no-actived"
            href="/data-result" style="font-family:system-ui; letter-spacing: 2px; font-size: 13px;">
            <span class="head-2">
                DATA RESULT
            </span>
        </a>
        <a @if (request()->is('bukti-jackpot')) class="actives" @endif class="nav-item nav-link no-actived"
            href="/bukti-jackpot" style="font-family:system-ui; letter-spacing: 2px; font-size: 13px;">
            <span class="head-2">
                BUKTI JACKPOT 🔥
            </span>
        </a>
        <a @if (request()->is('live-score')) class="actives" @endif class="nav-item nav-link no-actived"
            href="/lagascore.com" style="font-family:system-ui; letter-spacing: 2px; font-size: 13px;">
            <span class="head-2">
                LIVE SCORE
            </span>
        </a>
        <a @if (request()->is('prediksi-bola')) class="actives" @endif class="nav-item nav-link no-actived"
            href="/prediksi-bola" style="font-family:system-ui; letter-spacing: 2px; font-size: 13px;">
            <span class="head-2">
                PREDIKSI BOLA
            </span>
        </a>
        <a @if (request()->is('buku-mimpi')) class="actives" @endif class="nav-item nav-link no-actived"
            href="/buku-mimpi" style="font-family:system-ui; letter-spacing: 2px; font-size: 13px;">
            <span class="head-2">
                BUKU MIMPI
            </span>
        </a>

        <a @if (request()->is('keluhan')) class="actives" @endif class="nav-item nav-link no-actived" href="/keluhan"
            style="font-family:system-ui; letter-spacing: 2px; font-size: 13px;">
            <span class="head-2">KELUHAN</span>
        </a>
        <a href="https://{{ env('DOMAIN_UTAMA_ACTIVE') }}/#/gameRules"
            @if (request()->is('cara-bermain')) class="actives" @endif target="_blank"
            class="nav-item nav-link no-actived" style="margin-right:15px">
            <span class="head-2">
                CARA BERMAIN
            </span>
        </a>
    </nav>
</div>
</div>
<main class="container">
    <div class="mb-1 d-flex lagacuan-8">
        <i class="fa-solid fa-bullhorn" style="color:#ffe03b;padding:5px 10px; background: #181818"></i>
        <div class="marquee ft-marquee">
            <span>SELAMAT DATANG DI LAGACUAN BANDAR TOGEL, BOLA, LIVE CASINO & SLOT TERBAIK DAN TERPERCAYA DI INDONESIA
                RAIH
                KEMENANGAN TANPA BATAS BERSAMA KAMI.</span>
        </div>
    </div>
</main>

<main class="container">
    <div id="results-banner" domain="https://{{ env('DOMAIN_UTAMA_ACTIVE') }}">

    </div>

    {{-- Mobile --}}
    <div class="container mb-2 text-center nav-mobile">
        <div class="mb-1 row align-items-center">
            <div class="col" style="padding: 0px; margin-right:2px">
                <a href="/home"><button @if (request()->is('/home')) class="actives-mobile" @endif
                        class="button-15" role="button">
                        HOME</button></a>
            </div>
            <div class="col" style="padding: 0px;margin-left:2px">
                <a href="/live-draw"><button @if (request()->is('live-draw')) class="actives-mobile" @endif
                        class="button-15" role="button">
                        LIVE DRAW</button></a>
            </div>
        </div>
        <div class="mb-1 row align-items-center">
            <div class="col" style="padding: 0px; margin-right:2px">
                <a href="/prediksi-togel"><button @if (request()->is('prediksi-togel')) class="actives-mobile" @endif
                        class="button-15" role="button">
                        PREDIKSI TOGEL</button></a>
            </div>
            <div class="col" style="padding: 0px;margin-left:2px">
                <a href="/buku-mimpi"><button @if (request()->is('buku-mimpi')) class="actives-mobile" @endif
                        class="button-15" role="button">
                        BUKU MIMPI</button></a>
            </div>
        </div>
        <div class="mb-1 row align-items-center">
            <div class="col" style="padding: 0px; margin-right:2px">
                <a href="/data-result"><button @if (request()->is('data-result')) class="actives-mobile" @endif
                        class="button-15" role="button">
                        DATA RESULT</button></a>
            </div>
            <div class="col" style="padding: 0px;margin-left:2px">
                <a href="/bukti-jackpot"><button @if (request()->is('bukti-jackpot')) class="actives-mobile" @endif
                        class="button-15" role="button">
                        BUKTI JACKPOT</button></a>
            </div>
        </div>
        <div class="mb-1 row align-items-center">
            <div class="col" style="padding: 0px; margin-right:2px">
                <a href="https://lagascore.com" target="_blank"><button
                        @if (request()->is('')) class="actives-mobile" @endif class="button-15"
                        role="button">
                        LIVE SCORE</button></a>
            </div>
            <div class="col" style="padding: 0px;margin-left:2px">
                <a href="/prediksi-bola"><button @if (request()->is('prediksi-bola')) class="actives-mobile" @endif
                        class="button-15" role="button">
                        PREDIKSI BOLA</button></a>
            </div>
        </div>
        <div class="mb-1 row align-items-center">
            <div class="col" style="padding: 0px; margin-right:2px">
                <a href="/keluhan"><button @if (request()->is('keluhan')) class="actives-mobile" @endif
                        class="button-15" role="button">
                        KELUHAN</button></a>
            </div>
            <div class="col" style="padding: 0px;margin-left:2px">
                <a href="https://rebrand.ly/cara-bermain-lagacuan"><button
                        @if (request()->is('cara-bermain')) target="_blank" class="actives-mobile" @endif
                        class="button-15" role="button">
                        CARA BERMAIN</button></a>
            </div>
        </div>
    </div>

    <div class="mb-1 text-center lagacuan-1">
        <div class="row align-items-center lagacuan-2">
            <div class="col" style="padding: 0px;">
                <a href="https://rebrand.ly/lagacuan-k1"><button class="button-15" style="letter-spacing: 0.5px"
                        role="button"> <i class="fa-solid fa-right-to-bracket"></i>
                        LOGIN</button></a>
            </div>
            <div class="col" style="padding: 0px 5px">
                <a href="https://rebrand.ly/promosi-lagacuan"><button class="button-16" style="letter-spacing: 0.5px"
                        role="button"> <i class="fa-solid fa-hand-holding-dollar"></i>
                        PROMO</button></a>
            </div>
            <div class="col" style="padding: 0px">
                <a href="/rtpslot"><button @if (request()->is('rtpslot')) class="actives-mobile-2" @endif
                        class="button-15" style="letter-spacing: 0.5px" role="button"> <i
                            class="fa-solid fa-gamepad"></i> RTP SLOT
                    </button></a>
            </div>
        </div>
    </div>
    <div class="mb-1">
        <div class="input-group lagacuan-3">
            <span style="" class="input-group-text winner winner-player" style="" id="basic-addon3"><i
                    style="margin-right:5px" class="fa-solid fa-trophy"></i> Winner
                Player</span>
            <input type="text" class="form-control input-player" id="basic-url"
                aria-describedby="basic-addon3 basic-addon4" disabled>
        </div>
    </div>
    <main class="container-new">
        <div class="mb-1 mt-1 d-flex">
            <span style="" class="input-group-text winner winner-player-mobile" style=""
                id="basic-addon3"><i style="margin-right:5px" class="fa-solid fa-trophy"></i> Winner
                Player</span>
            <div class="marquee-new ft-marquee-new">
                <span id="new-text"></span>
            </div>
        </div>
    </main>

    <div class="mb-1 text-center lagacuan-4">
        <div class="row align-items-center">
            <div class="col" style="padding: 0px; margin-right:2px">
                <a href="/home"><button @if (request()->is('/home')) class="actives-mobile-2" @endif
                        class="button-15" style="letter-spacing: 0.5px" role="button">
                        <i class="fa-solid fa-chart-column"></i> Result Togel</button></a>
            </div>

            <div class="col" style="padding: 0px;margin-left:2px">
                <a href="/jadwal-togel"><button @if (request()->is('jadwal-togel')) class="actives-mobile-2" @endif
                        class="button-15" style="letter-spacing: 0.5px" role="button"> <i
                            class="fa-regular fa-calendar-days"></i>
                        Jadwal Togel
                    </button></a>
            </div>
        </div>
    </div>
</main>

<script>
    if (window.innerWidth <= 768) {
        var names = [
            'Raj*** Jackpot MAHJONG WINS 3 Sebesar Rp.30.573.371',
            'Pal*** Jackpot GATES OF OLYMPUS Sebesar Rp.25.400.571',
            'Boy*** Jackpot SWEET BONANZA Sebesar Rp.15.258.424',
            'Raja*** Jackpot MAHJONG WINS 3 Sebesar Rp.55.150.105',
            'Far*** Jackpot TOTOMACAU Sebesar Rp.25.457.205',
            'Ratu*** Jackpot STARLIGHT PRINCESS Sebesar Rp.18.105.058',
            'Lin** Jackpot SPACEMAN Sebesar Rp.55.405.825',
            'Cah*** Jackpot MAHJONG WINS 3 Sebesar Rp.60.573.371',
            'Sal*** Jackpot HUAHIN LOTTERY Sebesar Rp.20.400.571',
            'Gun*** Jackpot TOTOMACAU Sebesar Rp.25.457.205',
            'Der*** Jackpot POIPET LOTTERY Sebesar Rp.104.405.102',
            'Yuri*** Jackpot GATOT OF KACA Sebesar Rp.10.473.102',
            'Vio*** Jackpot POWER OF THE THOR Sebesar Rp.40.105.054',
            'Erd*** Jackpot SPACEMAN Sebesar Rp.35.452.205',
            'Wen*** Jackpot SUGAR RUSH Sebesar Rp.15.104.477'
        ];

        var index = 0;

        function updateMarquee() {
            var marqueeText = document.getElementById("new-text");

            // Set teks baru
            marqueeText.innerHTML = names[index];

            // Restart animasi
            marqueeText.style.animation = "none";
            void marqueeText.offsetWidth; // Trigger reflow
            marqueeText.style.animation = "marquee 5s linear infinite";

            index = (index + 1) % names.length; // Loop kembali ke awal setelah semua teks ditampilkan
        }

        // Ubah teks setiap 10 detik (sesuai durasi animasi)
        setInterval(updateMarquee, 5000);

        // Set teks pertama kali
        updateMarquee();
    } else {
        var names = ['Raj*** Jackpot MAHJONG WINS 3 Sebesar Rp.30.573.371',
            'Pal*** Jackpot GATES OF OLYMPUS Sebesar Rp.25.400.571',
            'Boy*** Jackpot SWEET BONANZA Sebesar Rp.15.258.424',
            'Raja*** Jackpot MAHJONG WINS 3 Sebesar Rp.55.150.105',
            'Far*** Jackpot TOTOMACAU Sebesar Rp.25.457.205',
            'Ratu*** Jackpot STARLIGHT PRINCESS Sebesar Rp.18.105.058',
            'Lin** Jackpot SPACEMAN Sebesar Rp.55.405.825',
            'Cah*** Jackpot MAHJONG WINS 3 Sebesar Rp.60.573.371',
            'Sal*** Jackpot HUAHIN LOTTERY Sebesar Rp.20.400.571',
            'Gun*** Jackpot TOTOMACAU Sebesar Rp.25.457.205',
            'Der*** Jackpot POIPET LOTTERY Sebesar Rp.104.405.102',
            'Yuri*** Jackpot GATOT OF KACA Sebesar Rp.10.473.102',
            'Vio*** Jackpot POWER OF THE THOR Sebesar Rp.40.105.054',
            'Erd*** Jackpot SPACEMAN Sebesar Rp.35.452.205',
            'Wen*** Jackpot SUGAR RUSH Sebesar Rp.15.104.477',
        ];

        var index = 0;

        // Fungsi untuk mengubah nilai input
        function updateInputValue() {
            document.getElementById('basic-url').value = names[index];
            index = (index + 1) % names.length; // Memastikan agar index tidak melebihi panjang array
        }

        // Memanggil fungsi updateInputValue setiap 2 detik
        setInterval(updateInputValue, 3000);
    }
</script>

<script>
    $(document).ready(function() {
        $.ajax({
            url: '/api/contact',
            method: 'GET',
            success: function(data) {
                displayResults(data);
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });

        function displayResults(data) {
            var resultsContainer = $('#results-contact');
            var domainUtama = $('#results-banner').attr('domain');

            $.each(data, function(index, result) {

                var resultCard = `
                <div class="bottom-0 mb-4 position-fixed end-0 me-4 bd-mode-toggle">
                <a target="_blank" href="https://wa.me/+6282329427655"><img width="50" src="{{ asset('logo-wa.png') }}" alt="whatsapp"></a>
            </div>
            <div class="head-1"><a   href="https://play.storeapps.club/9640581703/9640581703_index.html"><img width="18px" src="{{ asset('icon-apk.webp') }}" alt="apk">
                    DOWNLOAD
                    APK LAGACUAN </a> <span style="color: white"> || </span> <i style="color: white"
                    class="fa-brands fa-telegram"></i> <a target="_blank" href="tg://resolve?domain=+6281953608205"> TELEGRAM </a> <span style="color: white"> ||
                </span> <i style="color: white" class="fa-solid fa-comments"></i>
                <a target="_blank" href="https://secure.livechatinc.com/customer/action/open_chat?license_id=19052770"> LIVE CHAT </a>
            </div>
            <div class="row flex-nowrap justify-content-between align-items-center lagacuan-7">
                <div class="pt-1 mt-1 mb-1 col-4">
                    <img class="logo-lagacuan" src="https://gemswin.sgp1.digitaloceanspaces.com/logo-lagacuan.png" alt="logo">
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a href="https://rebrand.ly/register-k1" class="Btn" target="_blank"></a>
                </div>
            </div>
            `;

                resultsContainer.append(resultCard);
            });
        }
    });



    $(document).ready(function() {
        $.ajax({
            url: '/api/banner',
            method: 'GET',
            success: function(data) {
                displayResults(data);
                // Memulai otomatis sliding setiap 2 detik setelah data dimuat
                $('#carouselExampleAutoplaying').carousel({
                    interval: 3000
                });
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });

        function displayResults(data) {
            var resultsContainer = $('#results-banner');
            var carouselInner = '';


            $.each(data, function(index, result) {
                carouselInner += `
                <div class="carousel-item ${index === 0 ? 'active' : ''}">
                    <img src="${result.image}" class="d-block w-100 img-fluid image-mobile" alt="gambar">
                </div>
            `;
            });

            var resultCard = `
            <div id="carouselExampleAutoplaying" class="mb-2 carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
                <div class="carousel-inner">
                    ${carouselInner}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        `;

            resultsContainer.append(resultCard);
        }
    });
</script>
