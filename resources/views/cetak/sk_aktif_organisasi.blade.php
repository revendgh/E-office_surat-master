@extends('cetak.layout.app')

@section('content')



    <!-- No Surat -->
    <div class="text-center">
        <br><b>SURAT KETERANGAN AKTIF ORGANISASI</b><br>
        Nomor : {{$surat->no_surat}}
    </div>
    <br><br>
    <!-- END No Surat -->
    
    <!-- BODY SURAT -->
    <div class="row">
        <div class="col text-justify">
            Yang bertanda tangan dibawah ini: 
        </div> 
    </div>
    <br><br>

    <!-- DATA KASUBBAG AKADEMIK-->
    <div class="row">
        <div class="col">
            <table width="200%">
                <tr>
                    <td style="width:10%">Nama</td>
                    <td style="width:2%">:</td>
                    <td style="width:88%">Aries Rohiyanto</td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>197004211998021001</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>Kasubbag Akademik dan Kemahasiswaan ITK</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Menerangkan dengan sebenarnya bahwa sampai dengan semester {{$surat->sk_aktif_organisasi->semester}} 
            tahun akademik {{$surat->sk_aktif_organisasi->tahun_akademik}}, yang tersebut dibawah ini adalah mahasiswa aktif 
            yang mengikuti kegiatan organisasi di Institut Teknologi Kalimantan (ITK)
        </div>
    </div>
    <br><br>

    <!-- DATA MAHASISWA INDIVIDU-->
    <div class="row">
        <div class="col">
            <table width="200%">

                <tr>
                    <td style="width:10%">Nama</td>
                    <td style="width:2%">:</td>
                    <td style="width:88%">{{ $surat->user->name}}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{ $surat->user->mahasiswa->nim}}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>{{ $surat->user->mahasiswa->prodi}}</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>{{ $surat->user->mahasiswa->jurusan}}</td>
                </tr>
                <tr>
                    <td>Organisasi</td>
                    <td>:</td>
                    <td>{{$surat->sk_aktif_organisasi->organisasi}}</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>{{$surat->sk_aktif_organisasi->jabatan}}</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <!-- END DATA MAHASISWA INDIVIDU-->

    <div class="row">
        <div class="col text-justify">
            Demikian surat keterangan ini dibuat untuk dipergunakan sebagai kelengkapan persyaratan {{$surat->sk_aktif_organisasi->keperluan}}.
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