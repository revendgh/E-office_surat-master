@extends('jurusan.default')

@section('page-header')
    Lihat<small> Surat Keterangan Melaksanakan TA</small>
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
      @if($surat->status_surat == 4)
      {!! Form::model($surat, [
          'route'  => [ JURUSAN . '.surat.tolak', $surat->id ],
          'method' => 'put',
          'files'  => true
        ])
      !!}
      @elseif($surat->status_surat == 6 || $surat->status_surat == 7)
      {!! Form::model($surat, [
          'route'  => [ JURUSAN . '.surat.export', $surat->id ],
          'method' => 'put',
          'files'  => true
        ])
      !!}
      @endif

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Keterangan Melaksanakan TA</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          @if($surat->status_surat == 6 || $surat->status_surat == 7)
          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="no_surat">Nomor Surat</label>
              <div class="input-group mb-3">
              @if($surat->status_surat == 6)
                <input id="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" autocomplete="no_surat" required>
              @elseif($surat->status_surat == 7)
                <input id="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" autocomplete="no_surat" value="{{ $surat->no_surat}}" required>
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
              <label for="tahun_ajaran">Tahun Ajaran</label>
              <div class="input-group mb-3">
                <input id="tahun_ajaran" type="text" class="form-control @error('tahun_ajaran') is-invalid @enderror" name="tahun_ajaran" autocomplete="tahun_ajaran" value="{{ $surat->sk_ta->tahun_ajaran}}" readonly>
              </div>
              @error('tahun_ajaran')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="judul">Judul Tugas Akhir</label>
              <div class="input-group mb-3">
              <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" autocomplete="judul" value="{{ $surat->sk_ta->judul}}" readonly>
              </div>
              <small id="judul" class="form-text text-muted">Judul tugas akhir yang sedang dikerjakan</small>
              @error('judul')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="keperluan">Keperluan Surat </label>
              <div class="input-group mb-3">
              <input id="keperluan" type="text" class="form-control @error('keperluan') is-invalid @enderror" name="keperluan" autocomplete="keperluan" value="{{ $surat->sk_ta->keperluan}}" readonly>
              </div>
              <small id="keperluan" class="form-text text-muted">contoh : Beasiswa Kaltim Tuntas</small>
              @error('keperluan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

        @if($surat->status_surat == 4)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(JURUSAN . '.surat.pengajuan') }}" class="btn btn-lg btn-primary">Kembali</a>
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
              <a href="{{ route(JURUSAN . '.surat.verifikasi', $surat->id) }}" class="btn btn-lg btn-success form-control">Verifikasi</a>
          </div>
        </div>
        @elseif($surat->status_surat == 5)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(JURUSAN . '.surat.ditolak') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
        </div>
        @elseif($surat->status_surat == 6)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(JURUSAN . '.surat.terverifikasi') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
          <div class="col-sm-4" style="text-align: right">
              <button type="submit"class="btn btn-lg btn-success pull-right">
                  {{ __('Cetak') }}
              </button>
          </div>
        </div>
        @elseif($surat->status_surat == 7)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(JURUSAN . '.surat.cetak') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
          <div class="col-sm-4" style="text-align: right">
              <button type="submit"class="btn btn-lg btn-success pull-right">
                  {{ __('Cetak') }}
              </button>
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