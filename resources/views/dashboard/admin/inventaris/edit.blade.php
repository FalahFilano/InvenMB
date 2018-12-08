@extends('dashboard.template')

@section('title', 'Ubah Data Inventaris')

@section('content')
<div class="row">
    <div class="col">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Ubah Inventaris</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @include('dashboard.admin.inventaris.part.form_edit')
            </div>
        </div>
    </div>
</div>
@endsection
