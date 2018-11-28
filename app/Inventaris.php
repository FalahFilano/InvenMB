<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected static $category = ['1' => 'Sarana', '2' => 'Prasarana'];

    protected $fillable = [
        'nama', 'jumlah', 'kategori', 'syarat'
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
}
