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
        '6' => 'Dikembalikan',
    ];

    protected $fillable = [
        'user_id', 'keterangan', 'tgl_acc', 'status'
    ];

    public static function getStatus($i) {
        return self::$status[$i];
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function inventaris() {
        return $this->belongsToMany('App\Inventaris')->withPivot('jumlah');
    }

    public function scopeUnread($query) {
        return $query->where('status', 1);
    }

    public function scopeRead($query) {
        return $query->where('status', 2);
    }

    public function scopeProcessed($query) {
        return $query->where('status', 3);
    }

    public function scopeRejected($query) {
        return $query->where('status', 4);
    }

    public function scopeAccepted($query) {
        return $query->where('status', 5);
    }

    public function scopeReturned($query) {
        return $query->where('status', 6);
    }

    public function scopeHistory($query) {
        return $query->where('status', 5)->orWhere('status', 6);
    }
}
