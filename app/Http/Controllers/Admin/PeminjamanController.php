<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Peminjaman;

class PeminjamanController extends Controller
{
    public function detail($id) {
        $peminjaman = Peminjaman::findOrFail($id);

        if ($peminjaman->status == 1)
            $peminjaman->update([
                'status' => 2
            ]);
        
        return view('dashboard.admin.peminjaman.detail', compact('peminjaman'));
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
                'status' => 5
            ]);

        return redirect()->back();
    }
}