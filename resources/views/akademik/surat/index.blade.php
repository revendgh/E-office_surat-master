@extends('mahasiswa.default')

@section('page-header')
    Buat<small> Surat</small>
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    SK Aktif Studi
                </a>
            </h5>
            <div id="collapse-example" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat aktif studi</h6>
                    <a href="{{ route(MAHASISWA . '.skAktifStudi.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example1" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    SK Aktif Organisasi
                </a>
            </h5>
            <div id="collapse-example1" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat aktif organisasi</h6>
                    <a href="{{ route(MAHASISWA . '.skAktifOrganisasi.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example2" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    SK Pernah Studi
                </a>
            </h5>
            <div id="collapse-example2" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat keterangan pernah studi</h6>
                    <a href="{{ route(MAHASISWA . '.skPernahStudi.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.row -->
<br>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example3" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    SK Pengganti KTM
                </a>
            </h5>
            <div id="collapse-example3" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat keterangan pengganti KTM</h6>
                    <a href="{{ route(MAHASISWA . '.skPenggantiKTM.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example4" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    SK Lulus
                </a>
            </h5>
            <div id="collapse-example4" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat keterangan telah lulus</h6>
                    <a href="{{ route(MAHASISWA . '.skLulus.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example5" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Surat Permohonan Data
                </a>
            </h5>
            <div id="collapse-example5" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat permohonan data</h6>
                    <a href="{{ route(MAHASISWA . '.skData.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.row -->
<br>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example6" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Surat Rekomendasi Beasiswa
                </a>
            </h5>
            <div id="collapse-example6" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat rekomendasi beasiswa</h6>
                    <a href="{{ route(MAHASISWA . '.suratBeasiswa.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example7" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Surat Pengantar Magang
                </a>
            </h5>
            <div id="collapse-example7" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat pengantar magang</h6>
                    <a href="{{ route(MAHASISWA . '.spMagang.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example8" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Surat Keterangan Perjalanan
                </a>
            </h5>
            <div id="collapse-example8" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat keterangan perjalanan</h6>
                    <a href="{{ route(MAHASISWA . '.suratPerjalanan.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.row -->
<br>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example9" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Surat Keterangan Melaksanakan TA
                </a>
            </h5>
            <div id="collapse-example9" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat keterangan sedang melaksanakan tugas akhir</h6>
                    <a href="{{ route(MAHASISWA . '.skTA.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example10" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Surat Permohonan Peminjaman
                </a>
            </h5>
            <div id="collapse-example10" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat permohonan peminjaman</h6>
                    <a href="{{ route(MAHASISWA . '.suratPeminjaman.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example11" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    SP-MMTA
                </a>
            </h5>
            <div id="collapse-example11" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat perjanjian mulai mengerjakan tugas akhir</h6>
                    <a href="{{ route(MAHASISWA . '.spMMTA.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.row -->
<br>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example12" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Surat Pengantar Proposal KP
                </a>
            </h5>
            <div id="collapse-example12" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat pengantar proposal kerja praktik</h6>
                    <a href="{{ route(MAHASISWA . '.spProposalKP.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example13" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Surat Pengantar KP
                </a>
            </h5>
            <div id="collapse-example13" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat pengantar kerja praktik</h6>
                    <a href="{{ route(MAHASISWA . '.spKP.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">
                <a data-toggle="collapse" href="#collapse-example14" aria-expanded="true" aria-controls="collapse-example" id="heading-example" class="d-block">
                    <i class="fa fa-chevron-down pull-right"></i>
                    Surat Melanjutkan Penelitian
                </a>
            </h5>
            <div id="collapse-example14" class="collapse show" aria-labelledby="heading-example">
                <div class="card-body">
                    <h6>Membuat surat melanjutkan penelitian</h6>
                    <a href="{{ route(MAHASISWA . '.suratPenelitian.create') }}" class="btn btn-primary">Buat</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.row -->
@endsection
