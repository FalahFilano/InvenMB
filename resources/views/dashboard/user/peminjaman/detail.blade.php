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
                            <div class="col-6">
                                <div class="h4 font-weight-400">
                                    <span>Item</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="h4 font-weight-400">
                                    <span>Jumlah</span>
                                </div>
                            </div>
                        </div>
                        @foreach ($peminjaman->inventaris as $inventaris)
                            <div class="row">
                                <div class="col-6">
                                    <h3>{{ $inventaris->nama }}</h3>
                                </div>
                                <div class="col-6">
                                    <h3>{{ $inventaris->pivot->jumlah }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <hr class="my-4">
                    <h3 class="heading text-muted mb-4">Tujuan Peminjaman</h3>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="h4 font-weight-400">
                                    <h3>{{ $peminjaman->keterangan }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($peminjaman->status == 5)
                        <hr class="my-4" />
                        <h3 class="heading text-muted mb-4">Cetak Surat Izin</h3>
                        <div class="pl-lg-4">
                            <a href="{{ route('admin.peminjaman.process', $peminjaman->id) }}">
                                <button class="btn btn-icon btn-outline-info pl-6 pr-6" type="button">
                                    <span class="btn-inner--icon"><i class="ni ni-single-copy-04"></i></span>
                                    <span class="btn-inner--text">Cetak</span>
                                </button>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
