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
            $peminjaman_unread = Peminjaman::unread()->get();
            $peminjaman_read = Peminjaman::read()->get();
            $peminjaman_processed = Peminjaman::processed()->get();
            $peminjaman_rejected = Peminjaman::rejected()->get();
            $peminjaman_accepted = Peminjaman::accepted()->get();

            return view('dashboard.admin.home.index', compact('peminjaman_unread', 'peminjaman_read', 'peminjaman_processed', 'peminjaman_rejected', 'peminjaman_accepted'));
        }

        $peminjamans = auth()->user()->peminjaman;

        return view('dashboard.user.home.index', compact('peminjamans'));
    }
    public function detail(){
        return view('dashboard.admin.home.detail');
    }
}
