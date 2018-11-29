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
                  <span class="badge badge-pill badge-default">Dibaca</span>
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
                          <span>Falah Nurli Filano</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3>Email</h3>
                        <div class="h4 font-weight-400">
                          <span>falahnurli10@gmail.com</span>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                        <h3>Telepon</h3>
                        <div class="h4 font-weight-400">
                          <span>081232499960</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3>Alamat</h3>
                        <div class="h4 font-weight-400">
                          <span>Keputih, Surabaya</span>
                        </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h3 class="heading text-muted mb-4">Inventaris Dpinjam</h3>
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
                  <div class="row">
                    <div class="col-lg-6">
                        <h3>Pemotong Rumput</h3>
                    </div>
                    <div class="col-lg-6">
                        <h3>2</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                        <h3>Printer</h3>
                    </div>
                    <div class="col-lg-6">
                        <h3>1</h3>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h3 class="heading text-muted mb-4">Status Peminjaman</h6>
                <div class="pl-lg-4">
                  <button class="btn btn-icon btn-outline-warning pl-6 pr-6" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-spaceship"></i></span>
                    <span class="btn-inner--text">Proses</span>  
                  </button>
                  <button class="btn btn-icon btn-outline-danger " type="button">
                    <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                    <span class="btn-inner--text">Tolak</span>  
                  </button>
                  <button class="btn btn-icon btn-outline-success" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                    <span class="btn-inner--text">Terima</span>  
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection
