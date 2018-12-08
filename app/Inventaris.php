<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected static $category = ['1' => 'Sarana', '2' => 'Prasarana'];

    protected $fillable = [
        'nama', 'jumlah', 'lokasi', 'kategori', 'syarat'
    ];

    public static function getCategory($id = null) {
        if ($id) {
            return self::$category[$id];
        }

        return [];
    }

    public function peminjaman() {
        return $this->belongsToMany('App\Peminjaman');
    }

    public function getAvailable() {
        $count = $this->jumlah;
        $peminjamans = $this->peminjaman;

        foreach ($peminjamans as $peminjaman) {
            if ($peminjaman->status == 5) {
                foreach ($peminjaman->inventaris as $inventaris) {
                    if ($inventaris->id == $this->id) $count -= $inventaris->pivot->jumlah;
                }
            }
        }

        return $count;
    }
}
