<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventaris;

class InventarisController extends Controller
{
    public function __construct() {
        $this->middleware('isAdmin');
    }

    public function index() {
        $inventarises = Inventaris::paginate(5);

        return view('dashboard.admin.inventaris.index', compact('inventarises'));
    }

    public function create() {
        return view('dashboard.admin.inventaris.create');
    }

    public function store(Request $request) {
        $inventaris = Inventaris::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'lokasi' => $request->lokasi,
            'kategori' => $request->kategori,
            'syarat' => $request->syarat,
        ]);

        return redirect(route('inventaris.index'));
    }

    public function edit($id) {
        $inventaris = Inventaris::findOrFail($id);

        return view('dashboard.admin.inventaris.edit', compact('inventaris'));
    }

    public function update(Request $request, $id) {
        $inventaris = Inventaris::findOrFail($id);

        $inventaris->fill([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'lokasi' => $request->lokasi,
            'kategori' => $request->kategori,
            'syarat' => $request->syarat,
        ])->save();

        return redirect(route('inventaris.index'));
    }

    public function delete($id) {
        $inventaris = Inventaris::findOrFail($id);
        $inventaris->delete();

        return redirect(route('inventaris.index'));
    }
}
