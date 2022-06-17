<?php

namespace App\Models;

use App\Traits\Helpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_matkul extends Model
{
    // use HasFactory;
    protected $table = 'tb_matkul';
    protected $keyType = 'string';
}