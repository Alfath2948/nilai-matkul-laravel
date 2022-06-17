<?php

namespace App\Models;

use App\Traits\Helpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_mhs extends Model
{
    // use HasFactory;
    protected $table = 'tb_mhs';
    protected $keyType = 'string';  
}