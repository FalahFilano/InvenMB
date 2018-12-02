@extends('dashboard.template')

@section('title', 'Inventaris')

@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Daftar Inventaris</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('inventaris.create') }}">
                            <button class="btn btn-icon btn-sm btn-primary" type="button">
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
                            <th scope="col">Nama Inventaris</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Tersedia</th>
                            <th scope="col">Kategori</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inventarises as $inventaris)
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">{{ $inventaris->nama }}</span>
                                    </div>
                                </div>
                            </th>
                            <td>{{ $inventaris->jumlah }}</td>
                            <td>{{ $inventaris->getAvailable() }}</td>
                            <td>{{ \App\Inventaris::getCategory($inventaris->kategori) }}</td>
                            <td width="15%">
                                <a href="{{ route('inventaris.edit', $inventaris->id) }}" class="btn btn-warning">Ubah</a>
                                <button class="btn btn-danger" onclick="if (confirm('Apakah anda yakin?')) document.getElementById('formDelete{{ $inventaris->id }}').submit()">Hapus</button>

                                {!! Form::open(['route' => ['inventaris.delete', $inventaris->id], 'method' =>
                                'DELETE', 'id' => 'formDelete'.$inventaris->id]) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer py-4">
                <nav aria-label="...">
                    {{ $inventarises->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection
