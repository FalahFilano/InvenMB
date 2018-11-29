@extends('dashboard.template')

@section('title', 'Admin Dashboard')

@section('content')

{{-- navs --}}
<div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
        	<div class="row align-items-center">
        		<div class="col"><h3 class="mb-0">Permintaan Peminjaman</h3></div>
        	</div>
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="unread-tab" data-toggle="tab" href="#unread" role="tab" aria-controls="unread" aria-selected="true">
                            <i class="ni ni-box-2 mr-2"></i>
                            <span>Belum Dibaca</span>
                            <span class=" ml-2 badge badge-secondary">10</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="read-tab" data-toggle="tab" href="#read" role="tab" aria-controls="read" aria-selected="false">
                            <i class="ni ni-folder-17 mr-2"></i>
                            <span>Dibaca</span>
                            <span class=" ml-2 badge badge-secondary">40</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="process-tab" data-toggle="tab" href="#process" role="tab" aria-controls="process" aria-selected="false">
                            <i class="ni ni-delivery-fast mr-2"></i>
                            <span>Diproses</span>
                            <span class=" ml-2 badge badge-secondary">4</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="cancel-tab" data-toggle="tab" href="#cancel" role="tab" aria-controls="cancel" aria-selected="false">
                            <i class="ni ni-delivery-fast mr-2"></i>
                            <span>Ditolak</span>
                            <span class=" ml-2 badge badge-secondary">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="accept-tab" data-toggle="tab" href="#accept" role="tab" aria-controls="accept" aria-selected="false">
                            <i class="ni ni-delivery-fast mr-2"></i>
                            <span>Diterima</span>
                            <span class=" ml-2 badge badge-secondary">0</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="unread" role="tabpanel" aria-labelledby="unread-tab">
                            {{-- Table --}}
                            <div class="table-responsive">
                              <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Peminjam</th>
                                    <th scope="col">Nama Inventaris</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Status Peminjaman</th>
                                  </tr>
                                </thead>
                                <tbody>  
                                @foreach($peminjamans as $peminjaman)
                                  <tr>
                                    <td valign="middle" width="2%"><span>{{ $loop->iteration }}</span></td>
                                    <th width="25%">
                                        <span class="media align-items-center" >{{ $peminjaman->user->nama }}</span>
                                    </th>
                                    <th scope="row" width="35%">
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
                                    <td valign="middle" width="25%">
                                        <ul style="list-style-type: none;" class="pl-0">
                                            @foreach ($peminjaman->inventaris as $inventaris)
                                                <li class="text-sm">{{ $inventaris->pivot->jumlah }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td valign="middle">
                                        <span class="badge badge-dot mr-4">
                                            <i class="bg-success"></i> {{ App\Peminjaman::getStatus($peminjaman->status) }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                              </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="read" role="tabpanel" aria-labelledby="read-tab">
                            <p class="description">read tab</p>
                        </div>
                        <div class="tab-pane fade" id="process" role="tabpanel" aria-labelledby="process-tab">
                            <p class="description">processed tab</p>
                        </div>
                        <div class="tab-pane fade" id="cancel" role="tabpanel" aria-labelledby="cancel-tab">
                            <p class="description">rejected tab</p>
                        </div>
                        <div class="tab-pane fade" id="accept" role="tabpanel" aria-labelledby="accept-tab">
                            <p class="description">accepted tab</p>
                        </div>
                    </div>
                </div>
            </div>        
        </div> 
      </div>
    </div>
  </div>

@endsection