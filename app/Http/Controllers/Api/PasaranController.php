<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Bola;
use App\Models\Buku;
use App\Models\Jadwal;
use App\Models\Pasaran;
use App\Models\Bukti;
use App\Models\Contact;
use App\Models\Result;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PasaranController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function resultJson()
    {

        // $data = Pasaran::with(['results'])->get()->map(function($pasaran) {
        //     return $pasaran->results->map(function($results) use($pasaran) {
        //         $results->name_pasaran = $pasaran->name_pasaran;
        //         $results->image = $pasaran->image;
        //         return $results;
        //     });
        // })->collapse()->sortByDesc("id")->values();

        $data = Result::with(["pasaran"])->orderBy("created_at", "desc")->limit(48)->get();


        // ->select('table_result.id', 'name_pasaran','table_pasaran.image','table_result.created_at', 'table_result.result_3', 'table_result.result_2', 'table_result.result_1', 'table_result.shio')
        // ->orderBy('table_result.id', 'desc')
        // ->get();

        // $dataJson = $data->map(function ($item) {
        //     return [
        //         'id' => ($item->id),
        //         'name_pasaran' => ($item->name_pasaran),
        //         'result_3' => ($item->result_3),
        //         'result_2' => ($item->result_2),
        //         'result_1' => ($item->result_1),
        //         'shio' => ($item->shio),
        //         'image' => ($item->image),
        //         'created_at' => (($item->created_at)),
        //     ];
        // });

        return response()->json($data);
    }
    public function prediksiJson()
    {
        $data = Pasaran::join('table_prediksi', 'table_prediksi.pasaran_id', '=', 'table_pasaran.id')
        ->orderBy('table_prediksi.id', 'desc')
        ->get();
        // $data = Pasaran::with([
        //     "predictions" => fn($e) => $e->whereDate("created_at", Carbon::now())
        // ])->get()->map(function($e) {
        //     $res = $e->predictions->first();
        //     $res->name_pasaran = $e->name_pasaran;
        //     $res->image = $e->image;
        //     return $res;
        // });

        $dataJson = $data->map(function ($item) {
            return [
                'id' => ($item->id),
                'name_pasaran' => ($item->name_pasaran),
                'angka_main' => ($item->angka_main),
                'image' => ($item->image),
                'top_4d' => (($item->top_4d)),
                'top_3d' => (($item->top_3d)),
                'top_2d' => (($item->top_2d)),
                'colok_bebas' => (($item->colok_bebas)),
                'colok_2d' => (($item->colok_2d)),
                'shio_jitu' => (($item->shio_jitu)),
                'created_at' => (($item->created_at)),
            ];
        });

        return response()->json($dataJson);
    }

    public function buktiJson()
    {
        $data = Bukti::orderByDesc("created_at")->get();

        $dataJson = $data->map(function ($item) {
            return [
                'id' => ($item->id),
                'image' => ($item->image),
                'title' => ($item->title),
                'description' => ($item->description),
                'tanggal' => Carbon::parse($item->tanggal)->setTimezone('Asia/Jakarta')->translatedFormat('l, d F Y'),
            ];
        });

        return response()->json($dataJson);
    }
    public function bukuJson()
    {
        $data = Buku::all();

        $dataJson = $data->map(function ($item) {
            return [
                'id' => ($item->id),
                'image' => ($item->image),
                'description' => ($item->description),
            ];
        });

        return response()->json($dataJson);
    }

    public function jadwalJson()
    {


        $data = Jadwal::with("pasaran")->orderBy("jadwal_undi", "asc")->get();
        $dataSelesai = $data->where("jadwal_undi", "<", Carbon::now()->format("H:i:s"));
        $databelum = $data->where("jadwal_undi", ">", Carbon::now()->format("H:i:s"));

        $data = $databelum->merge($dataSelesai);

        return response()->json($data);
    }

    public function jadwalBola()
    {


        $data = Bola::get();

        return response()->json($data);
    }
    public function bannerJson()
    {
        $data = Banner::orderBy('id', 'desc')->get();

        $dataJson = $data->map(function ($item) {
            return [
                'id' => ($item->id),
                'image' => ($item->image),
            ];
        });

        return response()->json($dataJson);
    }

    public function contactJson()
    {
        $data = Contact::orderBy('id', 'desc')->get();

        $dataJson = $data->map(function ($item) {
            return [
                'id' => ($item->id),
                'number_wa' => ($item->number_wa),
                'number_tele' => ($item->number_tele),
                'live_chat' => ($item->live_chat),
                'link_apk' => ($item->link_apk),
            ];
        });

        return response()->json($dataJson);
    }

}
