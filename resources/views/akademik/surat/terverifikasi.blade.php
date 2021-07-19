@extends('akademik.default')

@section('page-header')
    Daftar Surat <small>terverifikasi</small>
@endsection

@section('content')

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Jenis Surat</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status Surat</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Jenis Surat</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status Surat</th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php $no = 0;?>
                    @foreach ($items as $item)
                    <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->user->mahasiswa->nim }}</td>
                            <td>{{ $item->nama_surat }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route(AKADEMIK . '.surat.show', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm">
                                    <span class="ti-pencil"></span></a></li>
                            </ul>
                        </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
