<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DateHelper extends Model
{
    public static function getHari($hari) {
        return [
            'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'
        ][$hari];
    }

    public static function getBulanRomawi($bulan) {
        return [
            'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'
        ][$bulan-1];
    }

    public static function getBulan($bulan) {
        return [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ][$bulan-1];
    }

    public static function getDate($tanggal) {
        $tanggal = explode('-', $tanggal);

        return $tanggal[2] . ' ' . self::getBulan($tanggal[1]) . ' ' . $tanggal[0];
    }
}
