@extends('akademik.default')

@section('page-header')
    Lihat<small> Surat Rekomendasi Beasiswa </small>
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
      @endif

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Rekomendasi Beasiswa</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="nama_beasiswa">Nama Beasiswa</label>
              <div class="input-group mb-3">
              <input id="nama_beasiswa" type="text" class="form-control @error('nama_beasiswa') is-invalid @enderror" name="nama_beasiswa" autocomplete="nama_beasiswa" value="{{ $surat->surat_rekomendasi_beasiswa->nama_beasiswa }}" readonly>
              </div>
              <small id="nama_beasiswa" class="form-text text-muted">Contoh : Kaltim Tuntas</small>
              @error('nama_beasiswa')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-4">
              <label for="semester">Semester</label>
              <div class="input-group mb-3">
                <input id="semester" type="text" class="form-control @error('semester') is-invalid @enderror" name="semester" autocomplete="semester" value="{{ $surat->surat_rekomendasi_beasiswa->semester }}" readonly>
              </div>
              @error('semester')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-4">
              <label for="ipk">IPK</label>
              <div class="input-group mb-3">
                <input id="ipk" type="text" class="form-control @error('ipk') is-invalid @enderror" name="ipk" autocomplete="ipk" value="{{ $surat->surat_rekomendasi_beasiswa->ipk }}" readonly>
              </div>
              <small id="ipk" class="form-text text-muted">Contoh : 3.51 (gunakan titik)</small>
              @error('ipk')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-4">
              <label for="sks_lulus">SKS Lulus</label>
              <div class="input-group mb-3">
                <input id="sks_lulus" type="number" class="form-control @error('sks_lulus') is-invalid @enderror" name="sks_lulus" value="{{ $surat->surat_rekomendasi_beasiswa->sks_lulus }}" autocomplete="sks_lulus" readonly>
              </div>
              <small id="sks_lulus" class="form-text text-muted">Contoh : 100</small>
              @error('sks_lulus')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-12">
              {!! Form::mySelect('ukt', 'UKT', config('variables.ukt'), $surat->surat_rekomendasi_beasiswa->ukt, ['class' => 'form-control select2', 'readonly']) !!}
              @error('ukt')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

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
              <a href="{{ route(AKADEMIK . '.surat.teruskan', $surat->id) }}" class="btn btn-lg btn-success form-control">Teruskan</a>
          </div>
        </div>
        @elseif($surat->status_surat == 1)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.ditolak') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
        </div>
        @elseif($surat->status_surat == 4)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.diteruskan') }}" class="btn btn-lg btn-primary">Kembali</a>
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