@extends('cetak.layout.app')

@section('content')
    <!-- No Surat -->
    <div class="text-center">
        <br><b><u>SURAT KETERANGAN</u></b><br>
        Nomor : {{$surat->no_surat}}
    </div>
    <br>
    <!-- END No Surat -->
    
    <!-- BODY SURAT -->
    <div class="row">
        <div class="col text-justify">
            Yang bertanda tangan dibawah ini: 
        </div>
    </div>
    <br>

    <!-- DATA KASUBBAG AKADEMIK-->
    <div class="row">
        <div class="col">
            <table width="100%">
                <tr>
                    <td style="width:25%">Nama</td>
                    <td style="width:2%">:</td>
                    <td style="width:73%">{{ $pejabat->user->name }}</td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>{{ $pejabat->user->unit_kerja->no_induk_pegawai }}</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>{{ $pejabat->user->unit_kerja->jabatan }} {{ $pejabat->user->unit_kerja->unit }}</td>
                </tr>
                <tr>
                    <td>Unit Kerja</td>
                    <td>:</td>
                    <td>{{ $pejabat->user->unit_kerja->unit }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Dengan ini telah mengizinkan kepada mahasiswa yang bersangkutan untuk melakukan riset/pengambilan data guna kepentingan Tugas Akhir sebagai berikut:
        </div>
    </div>
    <br>

    <!-- DATA MAHASISWA INDIVIDU-->
    <div class="row">
        <div class="col">
            <table width="100%">

                <tr>
                    <td style="width:25%">Nama</td>
                    <td style="width:2%">:</td>
                    <td style="width:73%">{{ $surat->user->name }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{ $surat->user->mahasiswa->nim }}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>{{ $surat->user->mahasiswa->prodi }}</td>
                </tr>
                <tr>
                    <td>Dosen Pembimbing</td>
                    <td>:</td>
                    <td>{{ $surat->surat_perjalanan->dosbim }}</td>
                </tr>
                <tr>
                    <td>Keberangkatan</td>
                    <td>:</td>
                    <td>{{ $surat->surat_perjalanan->keberangkatan }}</td>
                </tr>
                <tr>
                    <td>Tujuan</td>
                    <td>:</td>
                    <td>{{ $surat->surat_perjalanan->tujuan }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <!-- END DATA MAHASISWA INDIVIDU-->

    <div class="row">
        <div class="col text-justify">
            Demikian surat keterangan pendamping perjalanan ini dibuat untuk dipergunakan sebagai salah satu persyaratan kelengkapan administrasi dengan tetap mematuhi setiap protokol kesehatan dalam rangka pencegahan COVID-19 yang telah ditetapkan selama perjalanan dan setelah sampai di tempat tujuan.
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