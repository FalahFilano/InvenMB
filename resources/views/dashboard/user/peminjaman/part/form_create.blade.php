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
                        {{-- {!! Form::select('inventaris[0][id]', $inventaris, null,['class' => 'form-control form-control-alternative', 'placeholder' => 'Pilih Item', 'required']) !!} --}}
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