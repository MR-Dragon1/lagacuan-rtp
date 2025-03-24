<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PasaranController;
use App\Http\Controllers\RtpController;
use App\Http\Controllers\KeluhanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Front end
// Route::get('/', [PasaranController::class, 'index_pasaran_home'])->name('index-pasaran-home');
Route::get('/home', [PasaranController::class, 'index_pasaran_home'])->name('index-pasaran-home');
Route::get('/live-draw', [PasaranController::class, 'index_live_home'])->name('index-live-home');
Route::get('/prediksi-togel', [PasaranController::class, 'index_prediksi_home'])->name('index-prediksi-home');
Route::get('/jadwal-togel', [PasaranController::class, 'index_jadwal_home'])->name('index-jadwal-home');
Route::get('/prediksi-bola', [PasaranController::class, 'index_bola_home'])->name('index-bola-home');
Route::get('/data-result', [PasaranController::class, 'index_result_home'])->name('index-result-home');
Route::get('/bukti-jackpot', [PasaranController::class, 'index_bukti_home'])->name('index-bukti-home');
Route::get('/buku-mimpi', [PasaranController::class, 'index_buku_home'])->name('index-buku-home');
Route::get('/promosi', [PasaranController::class, 'index_promosi_home'])->name('index-promosi-home');
Route::get('/keluhan', [PasaranController::class, 'index_keluhan_home'])->name('index-keluhan-home');
Route::get('/paito', [PasaranController::class, 'index_paito_home'])->name('index-paito-home');
Route::get('/rtpslot', [RtpController::class, 'index'])->name('index-rtp');
Route::get('/rtpslot/{provider_name}', [RtpController::class, 'providerRtp']);
Route::post('/store-keluhan', [KeluhanController::class, 'store_keluhan']);
Route::get('/prediksi', [PasaranController::class, 'show_prediksi']);
Route::get('/details', [PasaranController::class, 'show_bukti']);



// Route::get('/testing', function () {
//     // https://jederwd.net/office/game-oc/game/getNodeInfoList?l=id&parentId=512170
//     $get = Http::get('https://jederwd.net/office/game-oc/game/getNodeInfoList?l=id&parentId=512170');
//     $data = $get->object();
//     return collect($data->result)->map(fn($e) => $e->nodeName);
//     // if ($data->code == 200) {
//     //     $data = collect($data->result)->where("nodeName", "POIPET12")->first();
//     //     if ($data) {
//     //         $number = Str::of($data->lotteryNodeFetchOutDto->volatility)->split('/,/');
//     //         return $number;
//     //     }
//     //     return response()->json($data, 200);
//     // }

//     return [];
// });