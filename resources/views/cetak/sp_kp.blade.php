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
                    <td>Kerja Praktik</td>
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
                    <td style="width:88%"><?php print_r($surat->sp_kp->tujuan) ?></td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Sehubungan dengan surat saudara No : {{ $surat->sp_kp->nomor_surat }} tertanggal {{ $surat->sp_kp->tanggal_surat}} perihal dalam pokok surat, dengan ini kami sampaikan terima kasih atas kesempatan kerja praktik yang diberikan kepada mahasiswa kami, yaitu :
        </div>
    </div>
    <br><br>

    <div class="row" style="margin-left:50px">
        <div class="col text-justify">
            <?php print_r($surat->sp_kp->mahasiswa) ?>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col text-justify">
            Mohon sekiranya Bapak/Ibu berkenan untuk memberi kesempatan kepada mahasiswa yang bersangkutan untuk melakukan kerja praktik pada tanggal {{ $surat->sp_kp->waktu_kp }}.
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col text-justify">
            Dengan ini kami pula mohon saudara untuk memberikan bimbingan seperlunya, sehingga tujuan dari kerja praktik ini dapat tercapai dengan sebaik – baiknya. Atas perhatian dan bantuan yang diberikan kami sampaikan terima kasih. 
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