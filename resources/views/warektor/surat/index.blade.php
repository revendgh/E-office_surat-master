@extends('warektor.default')

@section('page-header')
    @if(Route::is(WAREKTOR . '.surat.index') )
    Daftar Surat <small>menunggu persetujuan</small>
    @elseif(Route::is(WAREKTOR . '.surat.disetujui') )
    Daftar Surat <small>disetujui</small>
    @endif
@endsection

@section('content')
    @if(Route::is(WAREKTOR . '.surat.index') )
    <div class="mB-20 pull-right">
        <a href="{{ route(WAREKTOR . '.surat.approve.all') }}" class="btn btn-success">
            Setujui Semua
        </a>
    </div>
    @endif
    
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
                                @if(Route::is(WAREKTOR . '.surat.index') )
                                <li class="list-inline-item">
                                    <a href="{{ route(WAREKTOR . '.surat.approve', $item->id) }}" title="Setujui Surat" class="btn btn-success btn-sm">
                                    <span class="ti-check"></span></a></li>
                                @endif
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
