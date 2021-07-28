@extends('cetak.layout.app')

@section('content')
    <!-- No Surat -->
    <div class="text-center" style="font-size: 90%;">
        <b><u>SURAT PERJANJIAN MULAI MENGERJAKAN TUGAS AKHIR (SP-MMTA)</u></b><br>
        Nomor : {{$surat->no_surat}}
    </div>
    <!-- END No Surat -->
    
    <!-- BODY SURAT -->
    <div class="row">
        <div class="col text-justify" style="font-size: 90%;">
            Berdasarkan hasil ujian seminar Proposal Tugas Akhir periode {{ $surat->sp_mmta->periode_proposal }}, dan setelah menyerahkan perbaikan Proposal Tugas Akhirnya, Maka mahasiswa yang tercantum di bawah ini:
        </div>
    </div>
    <br>

    <!-- DATA KASUBBAG AKADEMIK-->
    <div class="row" style="margin-left:10px">
        <div class="col">
            <table width="100%" style="font-size: 90%;">
                <tr>
                    <td style="width:35%">Nama</td>
                    <td style="width:2%">:</td>
                    <td style="width:65%">{{ $surat->user->name }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{ $surat->user->mahasiswa->nim }}</td>
                </tr>
                <tr>
                    <td>Judul Tugas Akhir</td>
                    <td>:</td>
                    <td>{{ $surat->sp_mmta->judul }}</td>
                </tr>
                <tr>
                    <td>Pembimbing Tugas Akhir</td>
                    <td>:</td>
                    <td>{{ $surat->sp_mmta->pembimbing_1 }}<br>{{ $surat->sp_mmta->pembimbing_2 }}
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Ujian Proposal<br>(yang telah direvisi)</td>
                    <td>:</td>
                    <td>{{ $surat->sp_mmta->tanggal_ujian }}</td>
                </tr>
                <tr>
                    <td>Nilai Proposal</td>
                    <td>:</td>
                    <td>{{ $surat->sp_mmta->nilai_proposal }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify" style="font-size: 90%;">
            Dinyatakan dapat memulai mengerjakan Tugas Akhirnya di bawah bimbingan Dosen yang telah ditetapkan.
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col text-justify" style="font-size: 90%;">
            <?php print_r($surat->sp_mmta->isi_perjanjian) ?>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col text-justify" style="font-size: 90%;">
            Demikian Surat Perjanjian ini dibuat untuk dipergunakan sebagai syarat proses pengerjaan Tugas Akhir.
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <table width="100%" class="text-center" style="font-size: 90%;">
                <tr>
                    <td style="width:37%">Menyetujui,</td>
                    <td style="width:37%">Menyetujui,</td>
                    <td style="width:26%">Mahasiswa,</td>
                </tr>
                <tr>
                    <td>Dosen Pembimbing 1</td>
                    <td>Dosen Pembimbing 2</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>{{ $surat->sp_mmta->pembimbing_1 }}</td>
                    <td>{{ $surat->sp_mmta->pembimbing_2 }}</td>
                    <td>{{ $surat->user->name }}</td>
                </tr>
                <tr>
                    <td>{{ $surat->sp_mmta->nip_1 }}</td>
                    <td>{{ $surat->sp_mmta->nip_2 }}</td>
                    <td>NIM. {{ $surat->user->mahasiswa->nim }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col justify-content-end">
            <table width="280px" align="right" style="font-size: 90%;">
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