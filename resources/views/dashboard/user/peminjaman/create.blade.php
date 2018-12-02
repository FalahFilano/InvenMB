@extends('dashboard.template')

@section('title', 'Peminjaman Baru')

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Peminjaman Baru</h3>
                    </div>
                    {{-- <div class="col-4 text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div> --}}
                </div>
            </div>
            <div class="card-body">
                @include('dashboard.user.peminjaman.part.form_create')
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        var count = 1;

        function tambah_item() {
            var form = '<div class="row"><div class="col"><div class="form-group focused"> {!! Form::label("inventaris['+ count +'][id]", "Item", ["class" => "form-control-label"]) !!} <select class="form-control form-control-alternative" required id="inventaris['+ count +'][id]" name="inventaris['+ count +'][id]"><option selected="selected" value="">Pilih Item</option> @foreach ($inventaris as $i) <option value="{{ $i->id }}">{{ $i->nama }} (Tersedia: {{ $i->getAvailable() }})</option> @endforeach </select> </div></div><div class="col-3"><div class="form-group focused"> {!! Form::label("inventaris['+ count +'][jumlah]", "Jumlah", ["class" => "form-control-label"]) !!} <input class="form-control form-control-alternative" placeholder="Jumlah" required name="inventaris['+ count +'][jumlah]" type="text" id="inventaris['+ count +'][jumlah]"> </div></div><div class="col-3 col-md-2"><div class="form-group focues text-right"><label for="" class="form-control-label">&nbsp;</label><button type="button" class="btn btn-danger d-block" onclick="hapus_item(this)"><i class="ni ni-fat-remove"></i></button></div></div></div>'

            $('.item').append(form);
            count += 1;
        }

        function hapus_item(form) {
            $(form).parents().parent().parent('.item .row').remove();
            count -= 1;
        }
    </script>
@endsection