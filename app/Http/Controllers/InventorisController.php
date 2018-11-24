<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaris;

class InventorisController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return;
    }

    public function create() {
        return;
    }

    public function store(Request $request) {
        $inventaris = Inventaris::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'kategori' => $request->kategori,
            'syarat' => $request->syarat,
        ]);

        return;
    }

    public function edit() {
        return;
    }

    public function update(Request $request, $id) {
        $inventaris = Inventaris::findOrFail($id);

        $inventaris->fill([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'kategori' => $request->kategori,
            'syarat' => $request->syarat,
        ])->save();

        return;
    }

    public function delete($id) {
        $inventaris = Inventaris::findOrFail($id);
        $inventaris->delete();

        return;
    }
}
