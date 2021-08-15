@extends('akademik.default')

@section('page-header')
    Lihat<small> Surat Keterangan Pengganti KTM</small>
@endsection

@section('content')

  <div class="col-md-9">
    <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#axe2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Pemohon</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe2">
        <div class="card-body">

          <div class="form-group row pl-3">
            <div class="form-group col-md-4">
              <label for="nama">Nama</label>
              <div class="input-group mb-3">
              <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" autocomplete="nama" value="{{ $surat->user->name}}" readonly>
              </div>
              @error('nama')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-4">
              <label for="nim">NIM</label>
              <div class="input-group mb-3">
              <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" autocomplete="nim" value="{{ $surat->user->mahasiswa->nim}}" readonly>
              </div>
              @error('nim')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-4">
              <label for="prodi">Program Studi</label>
              <div class="input-group mb-3">
              <input id="prodi" type="text" class="form-control @error('prodi') is-invalid @enderror" name="prodi" autocomplete="prodi" value="{{ $surat->user->mahasiswa->prodi}}" readonly>
              </div>
              @error('prodi')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

    <div class="col-md-9">
    <div class="card shadow mb-4">
      @if($surat->status_surat == 0)
      {!! Form::model($surat, [
          'route'  => [ AKADEMIK . '.surat.tolak', $surat->id ],
          'method' => 'put',
          'files'  => true
        ])
      !!}
      @elseif($surat->status_surat == 2)
      {!! Form::model($surat, [
          'route'  => [ AKADEMIK . '.surat.export', $surat->id ],
          'method' => 'put',
          'files'  => true
        ])
      !!}
      @elseif($surat->status_surat == 3)
      {!! Form::model($surat, [
          'route'  => [ AKADEMIK . '.surat.persetujuan', $surat->id ],
          'method' => 'put',
          'files'  => true
        ])
      !!}
      @elseif($surat->status_surat == 10)
      {!! Form::model($surat, [
          'route'  => [ AKADEMIK . '.surat.penyelesaian', $surat->id ],
          'method' => 'put',
          'files'  => true
        ])
      !!}
      @endif

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Keterangan Pengganti KTM</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          @if($surat->status_surat == 2 || $surat->status_surat == 3 || $surat->status_surat == 9 || $surat->status_surat == 10)
          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="no_surat">Nomor Surat</label>
              <div class="input-group mb-3">
              @if($surat->status_surat == 2)
                <input id="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" autocomplete="no_surat" required>
              @elseif($surat->status_surat == 3 || $surat->status_surat == 9 || $surat->status_surat == 10)
                <input id="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" autocomplete="no_surat" value="{{ $surat->no_surat}}" readonly>
              @endif
              </div>
              @error('no_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          @endif

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="keperluan">Keperluan</label>
              <div class="input-group mb-3">
              <input id="keperluan" type="text" class="form-control @error('keperluan') is-invalid @enderror" name="keperluan" autocomplete="keperluan" value="{{ $surat->sk_pengganti_ktm->keperluan}}" readonly>
              </div>
              <small id="keperluan" class="form-text text-muted">Keperluan surat keterangan pengganti KTM, contoh : Beasiswa</small>
              @error('keperluan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          @if($surat->status_surat == 3 || $surat->status_surat == 9 || $surat->status_surat == 10)
          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="file_surat">Úpload Surat</label>
              <div class="input-group mb-3">
              <input id="file_surat" type="file" class="form-control @error('file_surat') is-invalid @enderror" name="file_surat" autocomplete="file_surat" required>
              @isset($surat->file_surat)
              <div class="input-group-append">
                <a href="{{url('storage/surat/'.$surat->file_surat )}}"class="btn btn-success" download>Download</a>
              </div>
              @endisset
              </div>
              <small id="file_surat" class="form-text text-muted">File scan surat</small>
              <small id="file_surat" class="form-text text-muted">hanya file pdf, max 2 Mb </small>
              @error('file_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          @endif

        @if($surat->status_surat == 0)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.pengajuan') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
          <div class="col-sm-2">
              <button type="button" class="btn btn-lg btn-danger form-control" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tolak</button>

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Masukan Keterangan Surat Ditolak</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Keterangan:</label>
                        <textarea class="form-control" name="keterangan_surat" id="message-text"></textarea>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Kirim keterangan</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>      
          </div>
          <div class="col-sm-2" style="text-align: right">
              <a href="{{ route(AKADEMIK . '.surat.verifikasi', $surat->id) }}" class="btn btn-lg btn-success form-control">Verifikasi</a>
          </div>
        </div>
        @elseif($surat->status_surat == 1)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.ditolak') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
        </div>
        @elseif($surat->status_surat == 2)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.terverifikasi') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
          <div class="col-sm-4" style="text-align: right">
              <button type="submit"class="btn btn-lg btn-success pull-right">
                  {{ __('Cetak') }}
              </button>
          </div>
        </div>
        @elseif($surat->status_surat == 3)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.cetak') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
          <div class="col-sm-4" style="text-align: right">
              <button type="submit"class="btn btn-lg btn-success pull-right">
                  {{ __('Teruskan') }}
              </button>
          </div>
        </div>
        @elseif($surat->status_surat == 9)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.menunggu_persetujuan') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
        </div>
        @elseif($surat->status_surat == 10)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.disetujui') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
          <div class="col-sm-4" style="text-align: right">
              <button type="submit"class="btn btn-lg btn-success pull-right">
                  {{ __('Selesai') }}
              </button>
          </div>
        </div>
        @elseif($surat->status_surat == 11)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.selesai') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
        </div>
        @endif

        {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>

@endsection
@section('script')
<script type="text/javascript">

</script>
@endsection