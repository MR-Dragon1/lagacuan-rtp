<?php

namespace App\Http\Controllers;

use App\Models\Pasaran;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_data()
    {

        if(request()->ajax()) {
            return datatables()->of(Pasaran::select('*'))
            ->addColumn('action', 'dashboards.pasaran.action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('dashboards.pasaran.index');

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_data(Request $request)
    {
        $request->all();

        $file = $request->file('image');
        $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));


        $bukti = Pasaran::create([
            'name_pasaran' => $request->name_pasaran,
            'image' => $path
        ]);

        return response()->json(['success' => true, 'message' => 'Data stored successfully', 'bukti' => $bukti]);

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
    public function getData($id) {
        $product = Pasaran::find($id);
        return response()->json($product);
    }

    public function updateData(Request $request)
    {

        $product = Pasaran::findOrFail($request->id);
        $product->update([
            'name_pasaran' => $request->name_pasaran,
        ]);
        return response()->json(['success' => true]);
    }
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
    public function destroy_data(Request $request)
    {
        $product = Pasaran::where('id', $request->id)->delete();

        return Response()->json($product);
    }
}