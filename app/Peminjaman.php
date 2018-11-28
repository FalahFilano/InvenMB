<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected static $status = [
        '1' => 'Belum Dibaca',
        '2' => 'Dibaca',
        '3' => 'Diproses',
        '4' => 'Ditolak',
        '5' => 'Diterima',
    ];

    protected $fillable = [
        'user_id', 'keterangan', 'tgl_acc', 'status'
    ];

    public function inventaris() {
        return $this->belongsToMany('App\Inventaris');
    }
}
