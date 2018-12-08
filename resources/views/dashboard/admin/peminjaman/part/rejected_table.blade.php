<div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Nama Inventaris</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Status Peminjaman</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($peminjaman_rejected as $peminjaman)
            <tr>
                <td valign="middle" width="2%"><span>{{ $loop->iteration }}</span></td>
                <th width="25%">
                    <span class="media align-items-center">{{ $peminjaman->user->nama }}</span>
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
                <td valign="middle">
                    <a href="{{ route('admin.peminjaman.detail', $peminjaman->id) }}" class="btn btn-warning">Baca</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
