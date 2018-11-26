@extends('dashboard.template')

@section('title', 'user dashboard')

@section('content')

<div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
        	<div class="row align-items-center">
        		<div class="col"><h3 class="mb-0">Daftar Peminjaman</h3></div>
        		<div class="col text-right">
        			<button class="btn btn-icon btn-2 btn-danger" type="button">
                <span class="btn-inner--icon"><i class="ni ni-fat-add ni"></i></span>
                <span class="btn-inner--text">Tambah</span>
              </button>
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
              </tr>
            </thead>
            <tbody>  
            @for($i = 1; $i<=5; $i++)
              <tr>
              	<td valign="middle" width="5%"><span>{{$i}}</span></td>
                <th scope="row" width="30%">
                  <div class="media align-items-center">
                    <div class="media-body">
                    	<ul>
                    		<li class="text-sm">barang 1</li>
                    		<li class="text-sm">barang 2</li>
                    		<li class="text-sm">barang 2</li>
                    	</ul>
                    </div>
                  </div>
                </th>
                <td valign="middle">
                	<ul style="list-style-type: none;" class="pl-0">
                		<li class="text-sm">5</li>
                		<li class="text-sm">10</li>
                		<li class="text-sm">1</li>
                	</ul>
                </td>
                <td valign="middle">
                	<ul style="list-style-type: none;" class="pl-0">
                		<li class="text-sm">Sarana</li>
                		<li class="text-sm">Prasarana</li>
                		<li class="text-sm">Sarana</li>
                	</ul>
                </td>
                <td valign="middle">
                    <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i> Disetujui
                        {{-- 
                        light unread
						default read
						warning process
						danger cancel
						success acc
                         --}}
                    </span>
                </td>
            </tr>
            @endfor
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection