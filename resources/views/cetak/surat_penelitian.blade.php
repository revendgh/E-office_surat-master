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
                    <td>Izin Melanjutkan Penelitian</td>
                </tr>
            </table>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col">
            <?php print_r($surat->surat_penelitian->tujuan) ?>
        </div>
    </div>
    <br>
    <!-- END DATA KASUBBAG AKADEMI-->

    <div class="row">
        <div class="col text-justify">
            Sehubungan dengan terhentinya kegiatan penelitian tugas akhir salah satu mahasiswa kami akibat pandemik Covid-19. Maka dengan ini kami mohon kepada Bapak/Ibu bagi mahasiswa dibawah ini:
        </div>
    </div>
    <br><br>

    <!-- DATA MAHASISWA INDIVIDU-->
    <div class="row">
        <div class="col">
            <table width="100%">
                <tr>
                    <td style="width:15%">Nama</td>
                    <td style="width:2%">:</td>
                    <td style="width:83%">{{ $surat->user->name }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{ $surat->user->mahasiswa->nim }}</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>{{$surat->user->mahasiswa->prodi}}</td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <!-- END DATA MAHASISWA INDIVIDU-->

    <div class="row">
        <div class="col text-justify">
            untuk melanjutkan penelitian tugas akhir di {{ $surat->surat_penelitian->tempat_penelitian }} sesuai dengan aturan “New Normal” yang berlaku. Kegiatan tersebut akan dilaksanakan mulai {{ $surat->surat_penelitian->tanggal_penelitian }}.
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