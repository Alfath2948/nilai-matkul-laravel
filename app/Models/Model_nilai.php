<?php

namespace App\Models;

use App\Traits\Helpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_nilai extends Model
{
    // use HasFactory;
    protected $table = 'tb_nilai';
    protected $keyType = 'string';
    protected $fillable = [
        'nilai_mhs_id', 'nilai_matkul_id', 'nilai_nilai'
    ];

    public function idmhs(){
        return $this->belongsTo(Model_mhs::class, 'id');
    }

    public function idmatkul()
    {
        return $this->belongsTo(Model_matkul::class, 'id');
    }
}