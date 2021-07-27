@extends('cetak.layout.app')

@section('content')



    <!-- No Surat -->
    <div class="text-center">
        <br><b>SURAT REKOMENDASI</b><br>
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
    <br><br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Dengan ini merekomendasikan mahasiswa :
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
                    <td>Semester</td>
                    <td>:</td>
                    <td>{{ $surat->surat_rekomendasi_beasiswa->semester }}</td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td>:</td>
                    <td>{{ $surat->surat_rekomendasi_beasiswa->ipk }}</td>
                </tr>
                <tr>
                    <td>SKS Lulus</td>
                    <td>:</td>
                    <td>{{ $surat->surat_rekomendasi_beasiswa->sks_lulus }}</td>
                </tr>
                <tr>
                    <td>Golongan UKT/Nominal</td>
                    <td>:</td>
                    <td><?php 
                             $x = config('variables.ukt');
                             echo($x[$surat->surat_rekomendasi_beasiswa->ukt]); ?></td>
                </tr>
                <tr>
                    <td>No Rekening ITK</td>
                    <td>:</td>
                    <td>6102014335 an. RPL 047 PS ITK UNTUK TUKIN, 
                        KEMAHASISWAAN DAN PENELITIAN</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <!-- END DATA MAHASISWA INDIVIDU-->

    <div class="row">
        <div class="col text-justify">
            Menurut pertimbangan kami memenuhi syarat untuk mengikuti beasiswa {{ $surat->surat_rekomendasi_beasiswa->nama_beasiswa }}.
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col text-justify">
            Demikian surat rekomendasi ini dibuat untuk digunakan sebagaimana mestinya.

        </div>
    </div>
    <br><br><br>

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