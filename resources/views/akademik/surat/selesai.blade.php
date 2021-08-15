@extends('akademik.default')

@section('page-header')
    Daftar Surat <small>selesai diproses</small>
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
                                    <a href="{{ url('storage/surat/'.$item->file_surat) }}" title="Lihat File Surat" class="btn btn-info btn-sm" target="_blank">
                                    <span class="ti-eye"></span></a></li>
                                <li class="list-inline-item">
                                    <a href="{{ url('storage/surat/'.$item->file_surat) }}" title="Download File Surat" class="btn btn-primary btn-sm" download>
                                    <span class="ti-import"></span></a></li>
                            </ul>
                        </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
