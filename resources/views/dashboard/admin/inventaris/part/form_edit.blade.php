{!! Form::model($inventaris, ['route' => ['inventaris.update', $inventaris->id], 'method' => 'PUT']) !!}
    <h6 class="heading-small text-muted mb-4">Data Inventaris</h6>
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('nama', 'Nama', ['class' => 'form-control-label']) !!}
                    {!! Form::text('nama', null, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Nama', 'required']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    {!! Form::label('jumlah', 'Jumlah', ['class' => 'form-control-label']) !!}
                    {!! Form::text('jumlah', null, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Jumlah', 'required']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('kategori', 'Kategori', ['class' => 'form-control-label']) !!}
                    {!! Form::select('kategori', ['1' => 'Sarana', '2' => 'Prasarana'], null, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Pilih Kategori', 'required']) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group focused">
                    {!! Form::label('syarat', 'Syarat', ['class' => 'form-control-label']) !!}
                    {!! Form::select('syarat', ['1' => 'Izin Kasubbag', '2' => 'Izin Dosen dan Kasubbag'], null, ['class' => 'form-control form-control-alternative', 'placeholder' => 'Pilih Syarat', 'required']) !!}
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Simpan</button>
    </div>
{!! Form::close() !!}