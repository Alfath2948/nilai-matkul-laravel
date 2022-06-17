<?php

namespace App\Http\Controllers;

use App\Models\Model_nilai;
use App\Models\Model_matkul;
use App\Models\Model_mhs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DetaildataController extends Controller
{
    //
    function __construct() {
    }

    public function index($data_slug)
    {
        $var_judul_halaman = Model_matkul::select('matkul_name')
                            ->where('id', $data_slug)
                            ->value('matkul_name');  

        $var_tbgabungan = DB::table('tb_nilai')
                ->join('tb_mhs', 'tb_nilai.nilai_mhs_id', '=', 'tb_mhs.id')
                ->select('tb_nilai.id', 'tb_mhs.mhs_nrp', 'tb_mhs.mhs_full_name', 'tb_nilai.nilai_nilai')
                ->where('tb_nilai.nilai_matkul_id', $data_slug)
                ->get();
        try {
            return view('view_detaildata', [
                "judul_tab" => "Detail Data",
                "judul_halaman" => "Nilai $var_judul_halaman",
                "data_jamak_tbgabungan" => $var_tbgabungan
            ]);
            // value di datatickets di lempar ke index.blade

        } catch (\Exception $e) {
            abort(404);
        }
    }
}
