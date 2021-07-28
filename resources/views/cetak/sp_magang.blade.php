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
                    <td>Perihal</td>
                    <td>:</td>
                    <td>Permohonan Magang</td>
                </tr>
            </table>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col text-justify">
            <?php print_r($surat->sp_magang->tujuan) ?>
        </div>
    </div>
    <br><br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Salah satu program pendidikan pada Program Studi {{ $surat->user->mahasiswa->prodi }} {{ $pejabat->user->unit_kerja->unit }}, Institut Teknologi Kalimantan (ITK) adalah Magang. Program Magang tersebut dilakukan disuatu perusahaan atau proyek sebagai latihan pengembangan ilmu dan keterampilan mahasiswa.
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col text-justify">
            Kami mohon kiranya dapat diberikan kesempatan bagi mahasiswa kami yang berada dalam tahap Pendidikan Sarjana, yaitu :
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col">
            <table width="100%">
                <tr>
                    <td style="width:25%">Nama/NIM</td>
                    <td style="width:2%">:</td>
                    <td style="width:73%">{{ $surat->user->name }}/{{ $surat->user->mahasiswa->nim }}</td>
                </tr>
                <tr>
                    <td>Dosen Pembimbing</td>
                    <td>:</td>
                    <td>{{ $surat->sp_magang->dosen_pembimbing }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col text-justify">
            Bersama ini kami sampaikan bahwa yang tersebut di atas akan memulai melaksanakan program Magang di {{ $surat->sp_magang->tempat }} pada {{ $surat->sp_magang->tanggal_mulai }} s/d {{ $surat->sp_magang->tanggal_selesai }}, atau dalam waktu lain sesuai dengan kebijaksanaan instansi.
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