@extends('warektor.default')

@section('page-header')
    Surat Keluar <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Jenis Tata Naskah</th>
                        <th>Pejabat Penandatangan</th>
                        <th>Tanggal Ditandatangani</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Jenis Tata Naskah</th>
                        <th>Pejabat Penandatangan</th>
                        <th>Tanggal Ditandatangani</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php $no = 0;?>
                    <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td><a href="{{ route(WAREKTOR . '.keluar.create') }}">Surat Undangan INSPACE</a></td>
                            <td>Undangan</td>
                            <td>Wakil Rektor Akademik</td>
                            <td>19/08/2021</td>
                            <td><mark style="background-color: blue; color: white;">
                                            Sedang Ditinjau</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(WAREKTOR . '.keluar.create') }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
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
                                            'url'  => route(WAREKTOR. '.keluar.destroy', 1),
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