<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LhkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ss = session()->forget('status');
        return view('lhk.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $dt = date("ymdhisa");
        $lhk = "LHK".$dt;
        $db = DB::table('lhkabel_tabel')->insert([
            'id_lhk' => $lhk,
            'mesin_id' => $request->mesin_id,
            'mesin_nama' => $request->mesin_nama,
            'shift_pgw' => $request->shiftRadios,
            'meter_sb' => $request->hour_sb,
            'meter_sd' => $request->hour_sd,
            'total_jam' => $request->hour_mesin,
            'tgl_mulai' => $request->start_dates,
            'tgl_selesai' => $request->end_dates,
            'kegiatan' => $request->kegiatan_p,
            'proses_type' => $request->proses_k,
            'so_no' => $request->so_no,
            'customer' => $request->customer,
            'op_no' => $request->op_no,
            'speed_line' => $request->speed,
            'rpm' => $request->rpm,
            'target_panjang' => $request->target_p,
            'bobin_id' => $request->no_bobin,
            'panjang_fg' => $request->p_bahan,
            'warna_fg' => $request->warna_b,
            'operator1' => $request->operator1,
            'operator2' => $request->operator2
        ]);

        $mesin = $request->mesin_id;

        $jam = date('h:i');
        

        return redirect()->back()->with('status', 'Input anda pada mesin '.$mesin.' sudah disimpan pada jam '.$jam.' WIB');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
