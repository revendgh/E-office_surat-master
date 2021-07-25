@extends('cetak.layout.app')

@section('content')



    <!-- No Surat -->
    <div class="text-center">
        <br><b>SURAT KETERANGAN Rekomendasi Beasiswa</b><br>
        Nomor : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/IT10.C.1/AK.05/{{date('Y')}}
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
            <table width="100%">
                <tr>
                    <td style="width:25%">Nama</td>
                    <td style="width:2%">:</td>
                    <td style="width:73%">Aries Rohiyanto</td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>197004211998021001</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>Ketua Jurusan {{$surat->users->mahasiswa->prodi->jurusan['nama_jurusan']}}</td>
                </tr>
                <tr>
                    <td>Unit Kerja</td>
                    <td>:</td>
                    <td>{{$surat->users->mahasiswa->prodi->jurusan['nama_jurusan']}}</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Menerangkan dengan sebenarnya bahwa yang tersebut di bawah ini:
        </div>
    </div>
    <br><br>

    <!-- DATA MAHASISWA INDIVIDU-->
    <div class="row">
        <div class="col">
            <table width="100%">

                <tr>
                    <td style="width:25%">Nama</td>
                    <td style="width:2%">:</td>
                    <td style="width:73%">{{$surat->users['name']}}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{$surat->users->mahasiswa['nim']}}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>{{$surat->users->mahasiswa->prodi['nama_prodi']}}</td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td>{{$surat->surat_rekomendasi_beasiswa->semester}}</td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td>:</td>
                    <td>{{$surat->surat_rekomendasi_beasiswa->ipk}}</td>
                </tr>
                <tr>
                    <td>SKS Lulus</td>
                    <td>:</td>
                    <td>{{$surat->surat_rekomendasi_beasiswa->sks_lulus}}</td>
                </tr>
                <tr>
                    <td>Golongan UKT/Nominal</td>
                    <td>:</td>
                    <td>{{$surat->surat_rekomendasi_beasiswa->golongan_ukt}} / Rp{{$surat->surat_rekomendasi_beasiswa->besar_ukt}}</td>
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
            Menurut pertimbangan kami memenuhi syarat untuk mengikuti beasiswa {{$surat->surat_rekomendasi_beasiswa->nama_beasiswa}}.
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col text-justify">
            Demikian surat rekomendasi ini dibuat untuk digunakan sebagaimana mestinya.

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