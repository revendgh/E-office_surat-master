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
                    <td>Permohonan Pengambilan Data</td>
                </tr>
            </table>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col">
            <table width="100%">
                <tr>
                    <td style="width:10%">Yth</td>
                    <td style="width:2%">:</td>
                    <td style="width:88%">{{ $surat->sk_data->tujuan }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Dengan hormat, disampaikan kepada Bapak/ Ibu bahwa mahasiswa Program Studi Sistem Informasi Jurusan
            Sistem Informasi dan Teknologi Informasi di bawah ini :
        </div>
    </div>
    <br>

    <!-- DATA MAHASISWA INDIVIDU-->
    <div class="row" style="margin-left:50px">
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
                    <td>Judul Tugas Akhir</td>
                    <td>:</td>
                    <td>{{ $surat->sk_data->judul }}</td>
                </tr>
                <tr>
                    <td>CP Mahasiswa</td>
                    <td>:</td>
                    <td>{{ $surat->sk_data->contact_person }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <!-- END DATA MAHASISWA INDIVIDU-->

    <div class="row">
        <div class="col text-justify">
            bermaksud melakukan pengambilan data untuk melakukan penelitian tugas akhir. Adapun data yang dibutuhkan yaitu : <?php print_r($surat->sk_data->data) ?> Untuk maksud di atas, dimohon kesediaan Bapak/ Ibu agar dapat mengizinkan mahasiswa kami untuk memperoleh data yang diperlukan dalam rangka penyelesaian tugas akhir. 
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col text-justify">
            Demikian surat permohonan ini, atas bantuan dan kerjasamanya disampaikan terima kasih.
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