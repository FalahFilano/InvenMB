<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventaris;
use App\Peminjaman;

class PeminjamanController extends Controller
{
    public function __construct() {
        $this->middleware('isUser');
    }

    public function index() {

    }

    public function detail($id) {
        $peminjaman = Peminjaman::findOrFail($id);

        return view('dashboard.user.peminjaman.detail', compact('peminjaman'));
    }

    public function create() {
        $inventaris = Inventaris::pluck('nama', 'id');

        return view('dashboard.user.peminjaman.create', compact('inventaris'));
    }

    public function store(Request $request) {
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

        return redirect(route('peminjaman.create'));
    }

    public function edit($id) {
        $peminjamans = Peminjaman::all();

        return;
    }

    public function update(Request $request, $id) {
        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->fill([
            'user_id' => auth()->user()->id,
            'keterangan' => $request->keterangan,
            'status' => '1'
        ])->save();
    }

    public function delete($id) {
        $peminjaman = Peminjman::findOrFail($id);
        $peminjaman->delete();

        return;
    }
}
