@extends('mahasiswa.default')

@section('page-header')
    Status <small>surat</small>
@endsection

@section('content')

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Jenis Surat</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status Surat</th>
                        <th>File Surat</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>Jenis Surat</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status Surat</th>
                        <th>File Surat</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->nama_surat }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                @if($item->status_surat == 0)
                                <mark style="background-color: black; color: white;">
                                            Tahap verifikasi
                                @elseif($item->status_surat == 1 || $item->status_surat == 5)
                                <mark style="background-color: red; color: white;">
                                            Ditolak
                                @elseif($item->status_surat == 2 || $item->status_surat == 6)
                                <mark style="background-color: #008B8B; color: white;">
                                            Terverifikasi
                                @elseif($item->status_surat == 3 || $item->status_surat == 7)
                                <mark style="background-color: purple; color: white;">
                                            Diproses
                                @elseif($item->status_surat == 9 || $item->status_surat == 19)
                                <mark style="background-color: brown; color: white;">
                                            Menunggu Persetujuan
                                @elseif($item->status_surat == 10 || $item->status_surat == 20)
                                <mark style="background-color: blue; color: white;">
                                            Disetujui
                                @elseif($item->status_surat == 11 || $item->status_surat == 21)
                                <mark style="background-color: green; color: white;">
                                            Selesai
                                @elseif($item->status_surat == 4)
                                <mark style="background-color: #0398dc; color: white;">
                                            Diteruskan ke Jurusan
                                @endif
                            </td>
                            <td>
                                @if($item->status_surat == 11 || $item->status_surat == 21)
                                <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ url('storage/surat/'.$item->file_surat) }}" title="Lihat File Surat" class="btn btn-info btn-sm" target="_blank">
                                    <span class="ti-eye"></span></a></li>
                                <li class="list-inline-item">
                                    <a href="{{ url('storage/surat/'.$item->file_surat) }}" title="Download File Surat" class="btn btn-primary btn-sm" download>
                                    <span class="ti-import"></span></a></li>
                                </ul>
                                @endif
                            </td>                   
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
