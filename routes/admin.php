<?php
use App\Http\Controllers\RtpController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShioController;
use App\Http\Controllers\BolaController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PredictionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomainController;

Route::get('/dashboard', function () {
    return redirect()->route('index-data');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Dashboard
    // Pasaran Togel
    Route::get('/', [DataController::class, 'index_data'])->name('index-data');
    Route::post('/store-data', [DataController::class, 'store_data']);
    Route::post('/destroy', [DataController::class, 'destroy_data']);
    Route::get('/get-data/{id}', [DataController::class, 'getData']);
    Route::post('/update-data', [DataController::class, 'updateData']);

    // Result Togel
    Route::get('/index-result', [ResultController::class, 'index_result'])->name('index-result');
    Route::post('/store-result', [ResultController::class, 'store_result']);
    Route::post('/destroy-result', [ResultController::class, 'destroy_result']);
    Route::get('/get-data-result/{id}', [ResultController::class, 'getData']);
    Route::post('/update-result', [ResultController::class, 'updateData']);

    // Prediksi Togel
    Route::get('/index-prediksi', [PredictionController::class, 'index_prediksi'])->name('index-prediksi');
    Route::post('/store-prediksi', [PredictionController::class, 'store_prediksi']);
    Route::post('/destroy-prediksi', [PredictionController::class, 'destroy_prediksi']);
    Route::get('/get-data-prediksi/{id}', [PredictionController::class, 'getData']);
    Route::post('/update-prediksi', [PredictionController::class, 'updateData']);
    Route::get('/randomPrediksi', [PredictionController::class, 'randomPrediksi']);

    // Bukti Togel
    Route::get('/index-bukti', [BuktiController::class, 'index_bukti'])->name('index-bukti');
    Route::post('/store-bukti', [BuktiController::class, 'store_bukti']);
    Route::post('/destroy-bukti', [BuktiController::class, 'destroy_bukti']);
    Route::get('/get-data-bukti/{id}', [BuktiController::class, 'getData']);
    Route::post('/update-bukti', [BuktiController::class, 'updateData']);

    // Schedule Togel
    Route::get('/index-jadwal', [JadwalController::class, 'index_jadwal'])->name('index-jadwal');
    Route::post('/store-jadwal', [JadwalController::class, 'store_jadwal']);
    Route::post('/destroy-jadwal', [JadwalController::class, 'destroy_jadwal']);
    Route::get('/get-data-jadwal/{id}', [JadwalController::class, 'getData']);
    Route::post('/update-jadwal', [JadwalController::class, 'updateData']);

    // Football Prediction
    Route::get('/index-bola', [BolaController::class, 'index_bola'])->name('index-bola');
    Route::post('/store-bola', [BolaController::class, 'store_bola']);
    Route::post('/destroy-bola', [BolaController::class, 'destroy_bola']);
    Route::get('/get-data-bola/{id}', [BolaController::class, 'getData']);
    Route::post('/update-bola', [BolaController::class, 'updateData']);

    // Dream Book
    Route::get('/index-buku', [BukuController::class, 'index_buku'])->name('index-buku');
    Route::post('/store-buku', [BukuController::class, 'store_buku']);
    Route::post('/destroy-buku', [BukuController::class, 'destroy_buku']);
    Route::get('/get-data-buku/{id}', [BukuController::class, 'getData']);
    Route::post('/update-buku', [BukuController::class, 'updateData']);

    // Keluhan Togel
    Route::get('/index-keluhan', [KeluhanController::class, 'index_keluhan'])->name('index-keluhan');
    Route::post('/destroy-keluhan', [KeluhanController::class, 'destroy_keluhan']);


    // Banner
    Route::get('/index-banner', [BannerController::class, 'index_banner'])->name('index-banner');
    Route::post('/store-banner', [BannerController::class, 'store_banner']);
    Route::post('/destroy-banner', [BannerController::class, 'destroy_banner']);

    // RTP Slot

    Route::get('/index-pola', fn() => view('dashboards.banner.index_pola'))->name('index-pola-rtp');
    Route::get('rtp/randomSingle', fn() => response()->json(["rtp" => randomRtp(), "persen" => rand(0, 85)], 200));
    Route::get('/rtp/datatable', [RtpController::class, 'datatable']);
    Route::post('/rtp', [RtpController::class, 'insert']);
    Route::put('/rtp/{id}', [RtpController::class, 'update']);
    Route::delete('/rtp/{id}', [RtpController::class, 'delete']);

    Route::get('rtp/randomAll', [RtpController::class, 'randomAll']);

    // Profile
    Route::get('/my-profile', [ProfileController::class, 'index_profile'])->name('index-profile');
    Route::post('/update-profile', [ProfileController::class, 'updateData'])->name('update-profile');

    // My Contact
    Route::get('/index-contact', [ContactController::class, 'index_contact'])->name('index-contact');
    Route::post('/store-contact', [ContactController::class, 'store_contact']);
    Route::post('/destroy-contact', [ContactController::class, 'destroy_contact']);
    Route::get('/get-data-contact/{id}', [ContactController::class, 'getData']);
    Route::post('/update-contact', [ContactController::class, 'updateData']);

    // Shio Lottery
    Route::get('/index-shio', [ShioController::class, 'index_shio'])->name('index-shio');
    Route::post('/store-shio', [ShioController::class, 'store_shio']);
    Route::post('/destroy-shio', [ShioController::class, 'destroy_shio']);
    Route::get('/get-data-shio/{id}', [ShioController::class, 'getData']);
    Route::post('/update-shio', [ShioController::class, 'updateData']);
    Route::post('/generate-shio', [ShioController::class, 'generateShio']);

    // domain
    Route::controller(DomainController::class)->prefix('domain')->group(function() {
        Route::get('/', "index");
        Route::get('/json', "json");
        Route::post('/', "store");
        Route::put('/{id}', "update");
        Route::delete('/{id}', "destroy");
    });
});


require __DIR__.'/auth.php';