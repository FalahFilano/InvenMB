@extends('dashboard.template')

@section('title', 'Inventaris')

@section('content')

<div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Daftar Inventaris</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nama Inventaris</th>
                <th scope="col">Jumlah</th>
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
                <td>{{ $inventaris->kategori }}</td>
                <td width="15%">
                	<a href="" class="btn btn-primary">Ubah</a>
                	<button class="btn btn-icon btn-danger" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                  </button> 
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