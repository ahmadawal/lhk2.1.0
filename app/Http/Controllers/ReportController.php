<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\TestExport;
use Maatwebsite\Excel\Facades\Excel;


class ReportController extends Controller
{
    public function index() {
        return view('lhk.table.report');
    }

    public function list() {
        $data = DB::table('lhkabel_tabel')->get();
        return view('lhk.list', ['data' => $data]);
    }

    public function detail($id) {
        $data = DB::table('lhkabel_tabel')->where('id_lhk', $id)->get();
        return view('lhk.table.report', ['data' => $data]);
    }

    public function fr(Request $request, $id) {
        $db = DB::table('lhkabel_tabel')
                    ->where('id_lhk', $id)
                    ->update(['foreman' => 'Approved']);

        $data = DB::table('lhkabel_tabel')->where('id_lhk', $id)->get();
        // return redirect()->route('detaillhk', ['id' => $id])->with('statusfr', 'Approved');
        return redirect()->route('detail.lhk', ['data' => $data]);
    }

    public function sv(Request $request, $id) {
        $db = DB::table('lhkabel_tabel')
                    ->where('id_lhk', $id)
                    ->update(['supervisor' => 'Approved']);

        $data = DB::table('lhkabel_tabel')->where('id_lhk', $id)->get();
        return redirect()->route('detaillhk', ['id' => $id])->with('statussv', 'Approved');
    }

    public function mn(Request $request, $id) {
        $db = DB::table('lhkabel_tabel')
                    ->where('id_lhk', $id)
                    ->update(['manager' => 'Approved']);

        $data = DB::table('lhkabel_tabel')->where('id_lhk', $id)->get();
        return redirect()->route('detaillhk', ['id' => $id])->with('statusmn', 'Approved');
    }

    public function excel($id) {
        $data = DB::table('lhkabel_tabel')->where('id_lhk', $id)->get();
        return response()
                    ->view('lhk.print', ['data' => $data])
                    ->header('Content-Type', 'Application/vnd.ms-excel')
                    ->header('Content-Disposition', 'attachment; filename=lhk.xls');
    }

    public function testexcel() {
        return Excel::download(new TestExport, 'test.xlsx');
    }
}
