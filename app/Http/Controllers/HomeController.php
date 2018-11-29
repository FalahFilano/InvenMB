<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            $peminjamans = Peminjaman::all();

            return view('dashboard.admin.home.index', compact('peminjamans'));
        }

        return view('dashboard.user.home.index');
    }
}
