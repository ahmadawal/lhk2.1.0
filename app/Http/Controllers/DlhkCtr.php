<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DlhkCtr extends Controller
{
    public function index() {
        return view('components.form');
    }

    public function createNew(Request $request) {
        $id = $request->noMesin;
        $cd = DB::table('t_mac')
                ->select('m_id')
                ->where('m_code', $id)->get();
        foreach ($cd as $i) {
            $no = $i->m_id;
        }
        $dt = date('ym');
        $ra = rand(2, 100);
        $noLhk = $dt.$ra.$no;
        $data = DB::table('t_mac')
                ->where('m_code', $id)->get();
        $prob = DB::table('t_pr')->get();
        return view('pages.lhk', ['noLhk' => $noLhk, 'data' => $data, 'prob' => $prob]);
    }

    public function storeNew(Request $request) {
        DB::table('t_lhk')->insert([
            'id_lhk'=> $request->id_lhk,
            'mac'   => $request->mId,
            'sono'  => $request->noso,
            'opno'  => $request->noop,
            'war'   => $request->war,
            'cus'   => $request->cus,
            'tar'   => $request->tar,
            'spe'   => $request->spe,
            'rpm'   => $request->rpm,
            'ket'   => $request->ket,
            'tgl'   => date('Y-m-d'),
        ]);

        DB::table('t_o')->insert([
            'sh_id' => $request->rs,
            'op1'   => $request->op1,
            'op2'   => $request->op2,
            'op3'   => $request->op3,
            'id_lhk' => $request->id_lhk,
        ]);

        DB::table('t_k')->insert([
            'k1'    => $request->k1,
            'k2'    => $request->k2,
            'k3'    => $request->k3,
            'k4'    => $request->k4,
            'k5'    => $request->k5,
            'k6'    => $request->k6,
            'ts1'   => $request->ts1,
            'ts2'   => $request->ts2,
            'ts3'   => $request->ts3,
            'ts4'   => $request->ts4,
            'ts5'   => $request->ts5,
            'ts6'   => $request->ts6,
            'te1'   => $request->te1,
            'te2'   => $request->te2,
            'te3'   => $request->te3,
            'te4'   => $request->te4,
            'te5'   => $request->te5,
            'te6'   => $request->te6,
            'id_lhk' => $request->id_lhk,
        ]);

        DB::table('t_b')->insert([
            'bid' => $request->bid,
            'bid2' => $request->bid2,
            'bid3' => $request->bid3,
            'bid4' => $request->bid4,
            'bid5' => $request->bid5,
            'bid6' => $request->bid6,
            'pan' => $request->pan,
            'pan2' => $request->pan2,
            'pan3' => $request->pan3,
            'pan4' => $request->pan4,
            'pan5' => $request->pan5,
            'pan6' => $request->pan6,
            'id_lhk'   => $request->id_lhk,
        ]);
        return redirect()->route('form')->with('alert', 'Data LHK nomor '.$request->id_lhk.' berhasil disimpan');
    }

    public function listLHK() {
        $data = DB::table('t_lhk')
                    ->join('t_mac', 't_lhk.mac', '=', 't_mac.m_id')
                    ->join('t_o', 't_lhk.id_lhk', '=', 't_o.id_lhk')
                    ->join('t_k', 't_lhk.id_lhk', '=', 't_k.id_lhk')
                    ->join('t_b', 't_lhk.id_lhk', '=', 't_b.id_lhk')
                    ->join('t_sh', 't_o.sh_id', '=', 't_sh.idsh')
                    ->select('t_lhk.*', 't_mac.*', 't_sh.*', 't_o.*', 't_k.*', 't_b.*')
                    ->get();
        return view('pages.list', ['data' => $data]);
    }

    public function printLHK() {
        //
    }
}

