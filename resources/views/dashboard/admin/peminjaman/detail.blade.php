@extends('dashboard.template')

@section('title', 'Admin Dashboard')

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

                        <hr class="my-4">

                        <h3 class="heading text-muted mb-4">Tujuan Peminjaman</h3>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>Nama Kegiatan</h3>
                                    <div class="h4 font-weight-400">
                                        <span>{{ $peminjaman->nama_kegiatan }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Departemen</h3>
                                    <div class="h4 font-weight-400">
                                        <span>{{ $peminjaman->departemen }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>Waktu Kegiatan</h3>
                                    <div class="h4 font-weight-400">
                                        <span id="waktu_kegiatan"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Tempat Kegiatan</h3>
                                    <div class="h4 font-weight-400">
                                        <span>{{ $peminjaman->tempat_kegiatan }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>NRP Ketua Panitia</h3>
                                    <div class="h4 font-weight-400">
                                        <span>{{ $peminjaman->nrp_ketua }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Nama Ketua Panitia</h3>
                                    <div class="h4 font-weight-400">
                                        <span>{{ $peminjaman->nama_ketua }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if ($peminjaman->status == 2 or $peminjaman->status == 3 or $peminjaman->status == 5)
                            <hr class="my-4" />
                            <h3 class="heading text-muted mb-4">Status Peminjaman</h3>
                            <div class="pl-lg-4">
                                @if ($peminjaman->status == 2)
                                    <a href="{{ route('admin.peminjaman.process', $peminjaman->id) }}">
                                        <button class="btn btn-icon btn-outline-warning pl-6 pr-6" type="button">
                                            <span class="btn-inner--icon"><i class="ni ni-spaceship"></i></span>
                                            <span class="btn-inner--text">Proses</span>
                                        </button>
                                    </a>
                                @elseif ($peminjaman->status == 3)
                                    <a href="{{ route('admin.peminjaman.reject', $peminjaman->id) }}">
                                        <button class="btn btn-icon btn-outline-danger " type="button">
                                            <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                                            <span class="btn-inner--text">Tolak</span>
                                        </button>
                                    </a>
                                    <a href="{{ route('admin.peminjaman.accept', $peminjaman->id) }}">
                                        <button class="btn btn-icon btn-outline-success" type="button">
                                            <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                                            <span class="btn-inner--text">Terima</span>
                                        </button>
                                    </a>
                                @elseif ($peminjaman->status == 5)
                                    <a href="{{ route('admin.peminjaman.return', $peminjaman->id) }}">
                                        <button class="btn btn-icon btn-outline-warning pl-6 pr-6" type="button">
                                            <span class="btn-inner--icon"><i class="ni ni-curved-next"></i></span>
                                            <span class="btn-inner--text">Kembalikan</span>
                                        </button>
                                    </a>
                                @endif
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script>
        $(function() {
            moment.locale('id');

            $('#waktu_kegiatan').html(
                moment({{ $peminjaman->tgl_kegiatan->format('Ymd') }}, "YYYYMMDD").format('dddd, D MMMM YYYY') + '<br>Jam {{ $peminjaman->waktu_kegiatan }} WIB'
            );
        });
    </script>
@endsection