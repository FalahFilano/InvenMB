@extends('dashboard.template')

@section('title', 'User Dashboard')

@section('content')

<div class="row">
    <div class="col col-12">
        <div class="col order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="display-4 mb-0">Detail Peminjaman</h3>
                        </div>
                        <div class="col-4 text-right">
                            <span class="badge badge-pill badge-default">{{ \App\Peminjaman::getStatus($peminjaman->status) }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h3 class="heading text-muted mb-4">Peminjam</h3>
                        <div class="pl-lg-4">
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <h3>Nama</h3>
                                    <div class="h4 font-weight-400">
                                        <span>{{ $peminjaman->user->nama }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Email</h3>
                                    <div class="h4 font-weight-400">
                                        <span>{{ $peminjaman->user->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>Telepon</h3>
                                    <div class="h4 font-weight-400">
                                        <span>{{ $peminjaman->user->telp }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Alamat</h3>
                                    <div class="h4 font-weight-400">
                                        <span>{{ $peminjaman->user->alamat }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h3 class="heading text-muted mb-4">Inventaris Dipinjam</h3>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="h4 font-weight-400">
                                        <span>Item</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h4 font-weight-400">
                                        <span>Jumlah</span>
                                    </div>
                                </div>
                            </div>
                            @foreach ($peminjaman->inventaris as $inventaris)
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>{{ $inventaris->nama }}</h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3>{{ $inventaris->pivot->jumlah }}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
