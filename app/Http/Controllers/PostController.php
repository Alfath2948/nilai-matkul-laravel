<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_Post;
use App\Models\Model_matkul;
use App\Models\Model_nilai;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $var_matkul_idname = Model_matkul::select('tb_matkul.*')
                            ->get();

        $var_jamak_piechart = Model_nilai::select('nilai_nilai')
                        ->where('nilai_matkul_id', 1)
                        ->get();
        $data ="";
        foreach($var_jamak_piechart as $var_tunggal_piechart){
            //      Nilai     Jumlah yang dapat
            $data ="['Work',     11],";
        }
        

        return view('view_home', [
            "judul_tab" => "Home",
            "data_judul_dan_id" => $var_matkul_idname
        ]);

        
    }
}
