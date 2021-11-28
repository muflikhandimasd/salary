<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $guarded = [];

    // biar kenalan sama tabel jabatan

    // karyawan bakal get id jabatan. 
    public function jabatan()
    {
        // return:kirim ulang. id_jabatan udah mewakili semua jabatan
        // karyawan pengen manggil jabatan
        return $this->belongsTo('App\Jabatan', 'id_jabatan');
    }
}