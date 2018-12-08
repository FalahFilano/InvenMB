@extends('dashboard.template')

@section('title', 'User Dashboard')

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Daftar Peminjaman</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('peminjaman.create') }}">
                            <button class="btn btn-icon btn-2 btn-danger" type="button">
                                <span class="btn-inner--icon"><i class="ni ni-fat-add ni"></i></span>
                                <span class="btn-inner--text">Tambah</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Inventaris</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Status Peminjaman</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peminjamans as $peminjaman)
                        <tr>
                            <td valign="middle" width="5%"><span>{{ $loop->iteration }}</span></td>
                            <th scope="row" width="30%">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <ul>
                                            @foreach ($peminjaman->inventaris as $inventaris)
                                            <li class="text-sm">{{ $inventaris->nama }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </th>
                            <td valign="middle">
                                <ul style="list-style-type: none;" class="pl-0">
                                    @foreach ($peminjaman->inventaris as $inventaris)
                                    <li class="text-sm">{{ $inventaris->pivot->jumlah }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td valign="middle">
                                <ul style="list-style-type: none;" class="pl-0">
                                    @foreach ($peminjaman->inventaris as $inventaris)
                                    <li class="text-sm">{{ \App\Inventaris::getCategory($inventaris->kategori) }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td valign="middle">
                                <span class="badge badge-dot mr-4">
                                    <i class="bg-success"></i> {{ App\Peminjaman::getStatus($peminjaman->status) }}
                                    {{--
                                    light unread
                                    default read
                                    warning process
                                    danger cancel
                                    success acc
                                    --}}
                                </span>
                            </td>
                            <td valign="middle">
                                <a href="{{ route('peminjaman.detail', $peminjaman->id) }}" class="btn btn-warning">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
