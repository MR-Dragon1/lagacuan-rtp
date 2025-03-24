<?php

namespace App\Http\Controllers;

use App\Models\Bola;
use App\Models\Jadwal;
use App\Models\Pasaran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BolaController extends Controller
{
    public function index_bola()
    {

        if (request()->ajax()) {
            return datatables()->of(Bola::select('*'))
            ->addColumn('action', 'dashboards.bola.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }


        // $pasarans = Pasaran::pluck('name_pasaran', 'id');

        return view('dashboards.bola.index');

    }




    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function store_bola(Request $request)
{
    $request->validate([
        'liga' => 'required',
        'tanggal_waktu' => 'required',
        'pertandingan' => 'required',
        'skor' => 'required',
    ]);


    $result = Bola::create([
        'liga' => $request->liga,
        'tanggal_waktu' => Carbon::parse($request->tanggal_waktu)->format('Y-m-d H:i'),
        'pertandingan' => $request->pertandingan,
        'skor' => $request->skor,
    ]);

    return response()->json(['success' => true, 'message' => 'Data stored successfully', 'result' => $result]);
}


    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */


    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */


    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */


    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */


    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy_bola(Request $request)
    {
        $product = Bola::where('id', $request->id)->delete();

        return Response()->json($product);
    }
}
