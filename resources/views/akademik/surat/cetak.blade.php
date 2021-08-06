@extends('akademik.default')

@section('page-header')
    Daftar Surat <small>dicetak</small>
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
                                <li class="list-inline-item">
                                    {!! Form::model($item, [
                                      'route'  => [ AKADEMIK . '.surat.export', $item->id ],
                                      'method' => 'put',
                                      'files'  => true
                                      ])
                                    !!}  
                                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal{{ $item->id }}" data-whatever="@mdo"><i class="ti-printer"></i></button>

                                      <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Masukkan No Surat</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="form-group">
                                                <label for="message-text" class="col-form-label">No Surat:</label>
                                                <input id="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" autocomplete="no_surat" value="{{ $item->no_surat}}" required>
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary">Cetak Surat</button>
                                              </div>
                                            </div>
                                            
                                          </div>
                                        </div>
                                      </div> 
                                        
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection
