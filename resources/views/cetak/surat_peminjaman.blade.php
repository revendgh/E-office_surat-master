@extends('cetak.layout.app')

@section('content')
    <!-- DATA KASUBBAG AKADEMIK-->
    <div class="row">
        <div class="col">
            <table width="100%">
                <tr>
                    <td style="width:10%">Nomor</td>
                    <td style="width:2%">:</td>
                    <td style="width:88%">{{ $surat->no_surat }}</td>
                </tr>
                <tr>
                    <td>Lampiran</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Perihal</td>
                    <td>:</td>
                    <td>Peminjaman {{ strtolower($surat->surat_peminjaman->objek) }}</td>
                </tr>
            </table>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col text-justify">
            <?php print_r($surat->surat_peminjaman->tujuan_surat) ?>
        </div>
    </div>
    <br><br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Dengan hormat,<br>
            Sehubungan dengan kegiatan Tugas Akhir Mahasiswa Program Studi {{ $surat->user->mahasiswa->prodi }}, maka dengan ini Ketua {{ $pejabat->user->unit_kerja->unit }} menjelaskan :
        </div>
    </div>
    <br><br>

    <div class="row" style="margin-left:40px">
        <div class="col">
            <table width="100%">
                <tr>
                    <td style="width:25%">Nama/NIM</td>
                    <td style="width:2%">:</td>
                    <td style="width:73%">{{ $surat->user->name }}/{{ $surat->user->mahasiswa->nim }}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{ $surat->surat_peminjaman->tanggal_peminjaman }}</td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td>:</td>
                    <td>{{ $surat->surat_peminjaman->waktu_peminjaman }}</td>
                </tr>
                <tr>
                    <td>Tujuan</td>
                    <td>:</td>
                    <td>{{ $surat->surat_peminjaman->tujuan }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col text-justify">
            Bermaksud untuk meminjam <b>{{ $surat->surat_peminjaman->objek }}</b> sebagai penunjang pengambilan data Tugas Akhir.
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col text-justify">
            Demikian surat ini kami sampaikan. Atas perhatian dan kerjasamanya kami ucapkan terima kasih.
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col justify-content-end">
            <table width="280px" align="right">
                <tr>
                    <td>
                        Balikpapan, {{$tanggal}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>



@endsection