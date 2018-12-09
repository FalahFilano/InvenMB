<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Izin - InvenMB</title>
    <style>
        html {
            margin: 0;
        }

        body {
            background-size: contain;
            background-repeat: no-repeat;
            background-image: url({{ asset('img/back.png') }});
        }

        .content {
            padding-top: 3cm;
            padding-right: 3cm;
            padding-bottom: 3cm;
            padding-left: 3cm;
        }

        p {
            text-indent: 10%;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    @if ($prasarana)
    <div class="content">
        <div style="text-align:right">
            {{ App\DateHelper::getDate($now->toDateString()) }}
        </div>

        <div style="margin-top: 1cm;">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td width="10%">No.</td>
                        <td>: {{ $peminjaman->no_surat }}/{{ $peminjaman->nama_kegiatan }}/{{ $peminjaman->departemen }}/BMSA/{{ App\DateHelper::getBulanRomawi($now->month) }}/{{ $now->year }}</td>
                    </tr>
                    <tr>
                        <td>Lamp</td>
                        <td>: -</td>
                    </tr>
                    <td>Perihal</td>
                        <tr>
                        <td>: Peminjaman Ruang Kelas</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin-top: 0.5cm;">
            <table style="width: 100%">
                <tbody>
                    <tr>
                        <td width="10%">
                            Yth.
                        </td>
                        <td>
                            Kasubbag Umum Manajemen Bisnis ITS
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>di tempat.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <p>Dengan hormat,</p>
            <p>Sehubungan dengan akan diadakannya kegiatan “Nama kegiatan” oleh “Departemen/Divisi XXX” HMMB ITS periode 2018/2019 yang dilaksanakan pada</p>
            <table style="width: 100%; padding-left: 10%">
                <tbody>
                    <tr>
                        <td width="20%">hari, tanggal</td>
                        <td>: {{ App\DateHelper::getHari($peminjaman->tgl_kegiatan->dayOfWeek) }}, {{ App\DateHelper::getDate($peminjaman->tgl_kegiatan->toDateString()) }}</td>
                    </tr>
                    <tr>
                        <td>waktu</td>
                        <td>: {{ $peminjaman->waktu_kegiatan }} WIB</td>
                    </tr>
                    <tr>
                        <td>tempat</td>
                        <td>: {{ $peminjaman->tempat_kegiatan }}</td>
                    </tr>
                </tbody>
            </table>
            <p>kami selaku panitia bermaksud meminjam ruang {{ implode(', ', $prasarana) }} (beserta alat tulis, LCD, wireless, dan mesin pendingin ruangan) untuk pelaksanaan kegiatan tersebut.</p>
            <p>Demikian surat permohonan izin ini kami buat. Atas perhatian dan izin yang diberikan, kami sampaikan terima kasih.</p>
        </div>

        <div style="margin-top: 1cm">
            <table style="width: 100%">
                <tbody>
                    <tr>
                        <td colspan="3" class="text-center">Hormat Kami,</td>
                    </tr>
                    <tr>
                        <td width="33%" class="text-center">
                            Ketua Himpunan Mahasiswa Manajemen Bisnis ITS 2018/2019
                            <br><br><br><br>
                            Agung Nabawi Santoso
                            <br>
                            NRP. 09 11 16 40000 092
                        </td>
                        <td width="33%"></td>
                        <td width="33%" class="text-center">
                            Ketua Panitia
                            <br><br><br><br><br>
                            {{ $peminjaman->nama_ketua }}
                            <br>
                            {{ $peminjaman->nrp_ketua }}
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="padding-top: 0.5cm" colspan="3">
                            Mengetahui dan Menyetujui,
                            <br>
                            Kasubbag Umum Manajemen Bisnis
                            <br><br><br><br>
                            Sugeng Djoko SKH, SE
                            <br>
                            NIP. 19710724 200710 1 001
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endif

    @if ($sarana)
    <div class="content">
        <div style="text-align:right">
            {{ App\DateHelper::getDate($now->toDateString()) }}
        </div>

        <div style="margin-top: 1cm;">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td width="10%">No.</td>
                        <td>: {{ $peminjaman->no_surat }}/{{ $peminjaman->nama_kegiatan }}/{{ $peminjaman->departemen }}/BMSA/{{ App\DateHelper::getBulanRomawi($now->month) }}/{{ $now->year }}</td>
                    </tr>
                    <tr>
                        <td>Lamp</td>
                        <td>: -</td>
                    </tr>
                    <td>Perihal</td>
                        <tr>
                        <td>: Peminjaman Alat</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin-top: 0.5cm;">
            <table style="width: 100%">
                <tbody>
                    <tr>
                        <td width="10%">
                            Yth.
                        </td>
                        <td>
                            Kasubbag Umum Manajemen Bisnis ITS
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>di tempat.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <p>Dengan hormat,</p>
            <p>Sehubungan dengan akan diadakannya kegiatan “Nama kegiatan” oleh “Departemen/Divisi XXX” HMMB ITS periode 2018/2019 yang dilaksanakan pada</p>
            <table style="width: 100%; padding-left: 10%">
                <tbody>
                    <tr>
                        <td width="20%">hari, tanggal</td>
                        <td>: {{ App\DateHelper::getHari($peminjaman->tgl_kegiatan->dayOfWeek) }}, {{ App\DateHelper::getDate($peminjaman->tgl_kegiatan->toDateString()) }}</td>
                    </tr>
                    <tr>
                        <td>waktu</td>
                        <td>: {{ $peminjaman->waktu_kegiatan }} WIB</td>
                    </tr>
                    <tr>
                        <td>tempat</td>
                        <td>: {{ $peminjaman->tempat_kegiatan }}</td>
                    </tr>
                </tbody>
            </table>
            <p>kami selaku panitia bermaksud meminjam {{ implode(', ', $sarana) }} untuk pelaksanaan kegiatan tersebut.</p>
            <p>Demikian surat permohonan izin ini kami buat. Atas perhatian dan izin yang diberikan, kami sampaikan terima kasih.</p>
        </div>

        <div style="margin-top: 1cm">
            <table style="width: 100%">
                <tbody>
                    <tr>
                        <td colspan="3" class="text-center">Hormat Kami,</td>
                    </tr>
                    <tr>
                        <td width="33%" class="text-center">
                            Ketua Himpunan Mahasiswa Manajemen Bisnis ITS 2018/2019
                            <br><br><br><br>
                            Agung Nabawi Santoso
                            <br>
                            NRP. 09 11 16 40000 092
                        </td>
                        <td width="33%"></td>
                        <td width="33%" class="text-center">
                            Ketua Panitia
                            <br><br><br><br><br>
                            {{ $peminjaman->nama_ketua }}
                            <br>
                            {{ $peminjaman->nrp_ketua }}
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="padding-top: 0.5cm" colspan="3">
                            Mengetahui dan Menyetujui,
                            <br>
                            Kasubbag Umum Manajemen Bisnis
                            <br><br><br><br>
                            Sugeng Djoko SKH, SE
                            <br>
                            NIP. 19710724 200710 1 001
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endif
</body>
</html>