<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventaris;
use App\Peminjaman;
use App\Http\Requests\StorePeminjaman;
use Barryvdh\DomPDF\Facade;

class PeminjamanController extends Controller
{
    public function __construct() {
        $this->middleware('isUser');
    }

    public function detail($id) {
        $peminjaman = Peminjaman::findOrFail($id);

        return view('dashboard.user.peminjaman.detail', compact('peminjaman'));
    }

    public function create() {
        // $inventaris = Inventaris::pluck('nama', 'id');
        $inventaris = Inventaris::all();

        return view('dashboard.user.peminjaman.create', compact('inventaris'));
    }

    public function store(StorePeminjaman $request) {
        foreach ($request->inventaris as $inventaris) {
            if ($inventaris['jumlah'] > Inventaris::find($inventaris['id'])->getAvailable())
                return redirect()->back()->with('error', 'Jumlah Item melebihi batas yang tersedia.');
        }

        $peminjaman = Peminjaman::create([
            'user_id' => auth()->user()->id,
            'keterangan' => $request->keterangan,
            'status' => '1'
        ]);
        
        foreach($request->inventaris as $inventaris) {
            if ($inventaris['id'] && $inventaris['jumlah']) {
                $peminjaman->inventaris()->attach($inventaris['id'], [
                    'jumlah' => $inventaris['jumlah'],
                ]);
            }
        }

        return redirect(route('peminjaman.detail', $peminjaman->id));
    }

    public function cetak() {
        return PDF::loadView('dashboard.pdf.izin_prasarana')->setPaper('a4', 'portrait')->stream();
    }
}
