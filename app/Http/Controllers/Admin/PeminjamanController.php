<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Peminjaman;
use Carbon\Carbon;

class PeminjamanController extends Controller
{
    public function __construct() {
        $this->middleware('isAdmin');
    }
    
    public function detail($id) {
        $peminjaman = Peminjaman::findOrFail($id);

        if ($peminjaman->status == 1)
            $peminjaman->update([
                'status' => 2
            ]);
        
        return view('dashboard.admin.peminjaman.detail', compact('peminjaman'));
    }

    public function history() {
        $peminjamans = Peminjaman::history()->get();

        return view('dashboard.admin.peminjaman.history', compact('peminjamans'));
    }

    public function process($id) {
        $peminjaman = Peminjaman::findOrFail($id);

        if ($peminjaman->status == 2)
            $peminjaman->update([
                'status' => 3
            ]);

        return redirect()->back();
    }

    public function reject($id) {
        $peminjaman = Peminjaman::findOrFail($id);

        if ($peminjaman->status == 3)
            $peminjaman->update([
                'status' => 4
            ]);

        return redirect()->back();
    }

    public function accept($id) {
        $peminjaman = Peminjaman::findOrFail($id);

        if ($peminjaman->status == 3)
            $peminjaman->update([
                'status' => 5,
                'tgl_acc' => Carbon::now(),
                'no_surat' => Peminjaman::generateNomorSurat(),
            ]);

        return redirect()->back();
    }

    public function return($id) {
        $peminjaman = Peminjaman::findOrFail($id);

        if ($peminjaman->status == 5)
            $peminjaman->update([
                'status' => 6
            ]);

        return redirect()->back();
    }
}
