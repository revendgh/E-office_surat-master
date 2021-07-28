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
                    <td>1 (satu) bendel proposal</td>
                </tr>
                <tr>
                    <td>Perihal</td>
                    <td>:</td>
                    <td>Permohonan Kerja Praktik</td>
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
                    <td style="width:88%"><?php print_r($surat->sp_proposalKP->tujuan_surat) ?></td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Salah satu program pendidikan pada Program Studi {{ $surat->user->mahasiswa->prodi }} {{ $pejabat->user->unit_kerja->unit }} Institut Teknologi Kalimantan (ITK) adalah Kerja Praktik. Kerja Praktik tersebut dilakukan di suatu instansi atau badan sebagai latihan pengembangan ilmu dan keterampilan mahasiswa.
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col text-justify">
            Kami mohon kiranya dapat diberikan kesempatan bagi mahasiswa kami yang berada dalam tahap pendidikan sarjana, yaitu :
        </div>
    </div>
    <br>
    <div class="row" style="margin-left:50px">
        <div class="col text-justify">
            <?php print_r($surat->sp_proposalKP->mahasiswa) ?>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col text-justify">
            untuk melaksanakan Kerja Praktik di {{ $surat->sp_proposalKP->tempat_kp }} selama {{ $surat->sp_proposalKP->lama_waktu }}. Terhitung mulai bulan {{ $surat->sp_proposalKP->jangka_waktu }}.
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col text-justify">
            Atas perhatian dan kerjasama yang dilakukan kami sampaikan terima kasih.
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