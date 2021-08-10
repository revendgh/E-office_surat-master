@extends('arsiparis.default')

@section('page-header')
    Buku Agenda <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No Agenda</th>
                        <th rowspan="2">Pengirim</th>
                        <th>Tanggal Surat</th>
                        <th>No Surat</th>
                        <th>Ringkasan Isi</th>
                        <th rowspan="2">Tujuan</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>No Agenda</th>
                        <th rowspan="2">Pengirim</th>
                        <th>Tanggal Surat</th>
                        <th>No Surat</th>
                        <th>Ringkasan Isi</th>
                        <th rowspan="2">Tujuan</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php $no = 0;?>
                    <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>Universitas Balikpapan</td>
                            <td>19/07/2021</td>
                            <td><a href="{{ route(ARSIPARIS . '.masuk.create') }}">UNIBA/SK/0112/08/2021</a></td>
                            <td>Undangan Seminar Nasional</td>
                            <td>Jurusan Matematika dan Teknologi Informasi</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ARSIPARIS . '.masuk.create') }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        <a href=""class="btn btn-info btn-sm">
                                        <span class="ti-eye"></span></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href=""class="btn btn-success btn-sm">
                                        <span class="ti-arrow-down"></span></a>
                                    </li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ARSIPARIS. '.masuk.destroy', 1),
                                            'method' => 'DELETE',
                                            ])
                                        !!}

                                            <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>

                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </td>
                        </tr>
                </tbody>

            </table>
        </div>
    </div>

@endsection
