<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventaris;
use App\Peminjaman;
use App\Http\Requests\StorePeminjaman;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

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
            'nama_kegiatan' => $request->nama_kegiatan,
            'tgl_kegiatan' => Carbon::createFromFormat('m/d/Y', $request->tgl_kegiatan)->toDateString(),    
            'waktu_kegiatan' => $request->waktu_kegiatan,
            'tempat_kegiatan' => $request->tempat_kegiatan,
            'departemen' => $request->departemen,
            'nama_ketua' => $request->nama_ketua,
            'nrp_ketua' => $request->nrp_ketua,
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

    public function cetak($id) {
        $peminjaman = Peminjaman::findOrFail($id);
        $now = Carbon::now();
        $prasarana = [];
        $sarana = [];

        foreach ($peminjaman->inventaris as $inventaris) {
            if ($inventaris->kategori == 2)
                $prasarana[] = $inventaris->nama;
            else if ($inventaris->kategori == 1)
                $sarana[] = $inventaris->nama;
        }

        return PDF::loadView('dashboard.pdf.izin_prasarana', compact('peminjaman', 'now', 'sarana', 'prasarana'))->setPaper('a4', 'portrait')->stream();
    }
}
