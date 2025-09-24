<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = ['nama','kelas','jenis_kelamin','jurusan','tempat_lahir'];
}
