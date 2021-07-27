@extends('cetak.layout.app')

@section('content')
    <!-- No Surat -->
    <div class="text-center">
        <br><b><u>SURAT KETERANGAN SEDANG MENGERJAKAN TUGAS AKHIR</u></b><br>
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
    <div class="row" style="margin-left:40px">
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
            dengan ini menerangkan bahwa :
        </div>
    </div>
    <br>

    <!-- DATA MAHASISWA INDIVIDU-->
    <div class="row" style="margin-left:40px">
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
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>{{ $surat->user->mahasiswa->jurusan }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <!-- END DATA MAHASISWA INDIVIDU-->

    <div class="row">
        <div class="col text-justify">
            sedang mengerjakan Tugas Akhir Tahun Ajaran {{ $surat->sk_ta->tahun_ajaran }} dengan judul:
            <br>
            <b>"{{ $surat->sk_ta->judul }}"</b>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col text-justify">
            Demikian surat keterangan ini dibuat untuk dipergunakan sebagai salah satu persyaratan untuk mengajukan {{ $surat->sk_ta->keperluan }}
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