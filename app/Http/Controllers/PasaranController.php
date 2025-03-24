<?php

namespace App\Http\Controllers;

use App\Models\Bukti;
use App\Models\Pasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PasaranController extends Controller
{

    public function show_prediksi(Request $request)
    {

        $pasaran = $request->input('pasaran');

        $data = Pasaran::join('table_prediksi', 'table_prediksi.pasaran_id', '=', 'table_pasaran.id')
        ->where('name_pasaran', $pasaran)
        ->orderBy('table_prediksi.id', 'desc')
        ->get();

        return view('show_prediksi', ['pasaran' => $pasaran,'data' => $data,]);

    }

    public function show_bukti(Request $request)
    {
        $id = $request->input('id');

        // Menambahkan 2 ID setelahnya ke dalam array
        $ids = [$id, $id + 1, $id + 2];

        $data = Bukti::whereIn('id', $ids)->get();
        return view('details', ['data' => $data]);
    }


    public function index_pasaran_home()
    {
        return view('home');
    }
    public function index_live_home()
    {
        return view('live');
    }
    public function index_prediksi_home()
    {
        return view('prediksi');
    }
    public function index_jadwal_home()
    {
        return view('jadwal');
    }
    public function index_bola_home()
    {
        return view('bola');
    }
    public function index_result_home()
    {
        return view('result');
    }
    public function index_bukti_home()
    {
        return view('bukti');
    }
    public function index_buku_home()
    {
        return view('buku');
    }
    public function index_promosi_home()
    {
        return view('promosi');
    }
    public function index_keluhan_home()
    {
        return view('keluhan');
    }
    public function index_paito_home()
    {
        return view('paito');
    }

}
