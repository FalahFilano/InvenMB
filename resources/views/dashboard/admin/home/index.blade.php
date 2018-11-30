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
                            <span class=" ml-2 badge badge-secondary">{{ $peminjaman_unread->count() }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="read-tab" data-toggle="tab" href="#read" role="tab" aria-controls="read" aria-selected="false">
                            <i class="ni ni-folder-17 mr-2"></i>
                            <span>Dibaca</span>
                            <span class=" ml-2 badge badge-secondary">{{ $peminjaman_read->count() }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="process-tab" data-toggle="tab" href="#process" role="tab" aria-controls="process" aria-selected="false">
                            <i class="ni ni-delivery-fast mr-2"></i>
                            <span>Diproses</span>
                            <span class=" ml-2 badge badge-secondary"{{ $peminjaman_processed->count() }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="cancel-tab" data-toggle="tab" href="#cancel" role="tab" aria-controls="cancel" aria-selected="false">
                            <i class="ni ni-delivery-fast mr-2"></i>
                            <span>Ditolak</span>
                            <span class=" ml-2 badge badge-secondary">{{ $peminjaman_rejected->count() }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="accept-tab" data-toggle="tab" href="#accept" role="tab" aria-controls="accept" aria-selected="false">
                            <i class="ni ni-delivery-fast mr-2"></i>
                            <span>Diterima</span>
                            <span class=" ml-2 badge badge-secondary">{{ $peminjaman_accepted->count() }}</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="unread" role="tabpanel" aria-labelledby="unread-tab">
                            @include('dashboard.admin.peminjaman.part.unread_table')
                        </div>
                        <div class="tab-pane fade" id="read" role="tabpanel" aria-labelledby="read-tab">
                            @include('dashboard.admin.peminjaman.part.read_table')
                        </div>
                        <div class="tab-pane fade" id="process" role="tabpanel" aria-labelledby="process-tab">
                            @include('dashboard.admin.peminjaman.part.processed_table')
                        </div>
                        <div class="tab-pane fade" id="cancel" role="tabpanel" aria-labelledby="cancel-tab">
                            @include('dashboard.admin.peminjaman.part.rejected_table')
                        </div>
                        <div class="tab-pane fade" id="accept" role="tabpanel" aria-labelledby="accept-tab">
                            @include('dashboard.admin.peminjaman.part.accepted_table')
                        </div>
                    </div>
                </div>
            </div>        
        </div> 
      </div>
    </div>
  </div>

@endsection