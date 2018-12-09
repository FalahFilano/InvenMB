{!! Form::open(['route' => 'peminjaman.store']) !!}
    <h6 class="heading-small text-muted mb-4">Data Peminjaman</h6>
    @include('dashboard.part.error_message')
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('nama', 'Nama', ['class' => 'form-control-label']) !!}
                    {!! Form::text('nama', auth()->user()->nama, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Nama', 'required', 'disabled']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::label('email', 'Email', ['class' => 'form-control-label']) !!}
                    {!! Form::text('email', auth()->user()->email, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Email', 'required', 'disabled']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('telp', 'Telp', ['class' => 'form-control-label']) !!}
                    {!! Form::text('telp', auth()->user()->telp, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Telp', 'required', 'disabled']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('alamat', 'Alamat', ['class' => 'form-control-label']) !!}
                    {!! Form::text('alamat', auth()->user()->alamat, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Alamat', 'required', 'disabled']) !!}
                </div>
            </div>
        </div>

        <div class="item">
            <div class="row">
                <div class="col">
                    <div class="form-group focused">
                        {!! Form::label('inventaris[0][id]', 'Item', ['class' => 'form-control-label']) !!}
                        <select class="form-control form-control-alternative" required id="inventaris[0][id]" name="inventaris[0][id]">
                            <option selected="selected" value="">Pilih Item</option>
                            @foreach ($inventaris as $i)
                                <option value="{{ $i->id }}">{{ $i->nama }} (Tersedia: {{ $i->getAvailable() }})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group focused">
                        {!! Form::label('inventaris[0][jumlah]', 'Jumlah', ['class' => 'form-control-label']) !!}
                        {!! Form::text('inventaris[0][jumlah]', null, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Jumlah', 'required']) !!}
                    </div>
                </div>
                <div class="col-3 col-md-2">
                    <div class="form-group focues text-right">
                        <label for="" class="form-control-label">&nbsp;</label>
                        <button type="button" class="btn btn-primary d-block" onclick="tambah_item()"><i class="ni ni-fat-add"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h6 class="heading-small text-muted mb-4">Tujuan Peminjaman</h6>

    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('nama_kegiatan', 'Nama Kegiatan', ['class' => 'form-control-label']) !!}
                    {!! Form::text('nama_kegiatan', null, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Nama Kegiatan', 'required']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('departemen', 'Departemen', ['class' => 'form-control-label']) !!}
                    {!! Form::text('departemen', null, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Departemen', 'required']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('tgl_kegiatan', 'Tanggal Kegiatan', ['class' => 'form-control-label']) !!}
                    {!! Form::text('tgl_kegiatan', null, ['class' => 'form-control form-control-alternative date', 'placeholder' => 'Tanggal Kegiatan', 'required']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('waktu_kegiatan', 'Waktu Kegiatan', ['class' => 'form-control-label']) !!}
                    {!! Form::text('waktu_kegiatan', null, ['class' => 'form-control form-control-alternative time', 'placeholder' => 'Waktu Kegiatan', 'required']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group focused">
                    {!! Form::label('tempat_kegiatan', 'Tempat Kegiatan', ['class' => 'form-control-label']) !!}
                    {!! Form::text('tempat_kegiatan', null, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Tempat Kegiatan', 'required']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('nrp_ketua', 'NRP Ketua Panitia', ['class' => 'form-control-label']) !!}
                    {!! Form::text('nrp_ketua', null, ['class' => 'form-control form-control-alternative', 'placeholder' => 'NRP Ketua Panitia', 'required']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('nama_ketua', 'Nama Ketua Panitia', ['class' => 'form-control-label']) !!}
                    {!! Form::text('nama_ketua', null, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Nama Ketua Panitia', 'required']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group focused">
                    {!! Form::label('keterangan', 'Tujuan Peminjaman', ['class' => 'form-control-label']) !!}
                    {!! Form::textarea('keterangan', null,['class' => 'form-control form-control-alternative', 'placeholder' => 'Tujuan Peminjaman', 'required', 'rows' => '4']) !!}
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-default">Pinjam</button>
    </div>
{!! Form::close() !!}