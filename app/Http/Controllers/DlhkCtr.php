<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LHK;
use App\Test;

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
            'h_b'   => $request->hb,
            'h_a'   => $request->ha,
            'sono'  => $request->noso,
            'opno'  => $request->noop,
            'type'  => $request->ts,
            'war'   => $request->war,
            'cus'   => $request->cus,
            'tar'   => $request->tar,
            'spe'   => $request->spe,
            'rpm'   => $request->rpm,
            'ket'   => $request->ket,
            'tgl'   => date('Y-m-d'),
        ]);

        DB::table('t_apr')->insert([
            'id_lhk' => $request->id_lhk,
            'frm' => 'proses',
            'spv' => 'proses',
            'mgr' => 'proses',
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
            'ts1'   => $request->ts1,
            'te1'   => $request->te1,
            'id_lhk' => $request->id_lhk,
        ]);
        DB::table('t_k')->insert([
            'k1'    => $request->k1,
            'ts1'   => $request->ts1,
            'te1'   => $request->te1,
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
                    ->join('t_apr', 't_lhk.id_lhk', '=', 't_apr.id_lhk')
                    ->select('t_lhk.*', 't_mac.*', 't_sh.*', 't_o.*', 't_k.*', 't_b.*', 't_apr.*')
                    ->get();
        return view('pages.list', ['data' => $data]);
    } 

    public function printLHK($id) {
        $data = DB::table('t_lhk')
                    ->select('t_lhk.*', 't_mac.*', 't_sh.*', 't_o.*', 't_k.*', 't_b.*', 't_apr.*')
                    ->leftJoin('t_mac', 't_lhk.mac', '=', 't_mac.m_id')
                    ->leftJoin('t_o', 't_lhk.id_lhk', '=', 't_o.id_lhk')
                    ->leftJoin('t_k', 't_lhk.id_lhk', '=', 't_k.id_lhk')
                    ->leftJoin('t_b', 't_lhk.id_lhk', '=', 't_b.id_lhk')
                    ->leftjoin('t_sh', 't_o.sh_id', '=', 't_sh.idsh')
                    ->leftJoin('t_apr', 't_lhk.id_lhk', '=', 't_apr.id_lhk')
                    ->where('t_lhk.id_lhk', '=', $id)
                    ->get();
        return view('pages.print', ['data' => $data]);
    }

    public function graphM() {
        $data = DB::table('t_mac')->get();
        return view('graph.mac', ['data' => $data]);
    }

    public function sTest(Request $request) {
        $inputs = $request->except('_token');
        // for ($i=$inputs; $i > 0 ; $i++) { 
            // DB::table('t_test')->insertGetId(
            //     ['nama' => $inputs['nama'], 'mesin' => $inputs['mesin']]
            // );
            // return $inputs['nama'];
        // }
        foreach ($inputs as $key => $v) {
            // $db = new Test;
            // $db->nama = $request->nama[$key];
            // $db->mesin = $request->mesin[$key];
            // $db->save();
            
            Test::saveMany([
                new Test([
                    'nama' => $v['nama'],
                    'mesin' => $v['mesin'],
                ])
            ]);
            // return $v->nama;
        }
        return var_dump($inputs);
    }
}

