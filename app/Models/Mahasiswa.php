<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telepon',
        'email',
        'program_studi',
        'status',
    ];
}
