@extends('akademik.default')

@section('css')
<style>
    /*Textbox*/
    .ck-editor__editable {
        min-height: 300px;
        min-width: 860px;
    }
    /*Toolbar*/
    .ck-editor__top {
        min-width: 860px;
    }
</style>
@endsection

@section('page-header')
    Lihat<small> Surat Pengantar Magang </small>
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
        <h6 class="m-0 font-weight-bold text-info">Data Surat Pengantar Magang</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tujuan">Tujuan Surat</label>
              <div class="input-group mb-3">
              <textarea id="tujuan" type="text" class="form-control @error('tujuan') is-invalid @enderror ckeditor" rows="30" name="tujuan" autocomplete="tujuan">{{ $surat->sp_magang->tujuan}}</textarea>
              </div>
              <small id="tujuan" class="form-text text-muted">Tujuan surat</small>
              @error('tujuan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tempat">Tempat Magang</label>
              <div class="input-group mb-3">
              <input id="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" autocomplete="tempat" value="{{ $surat->sp_magang->tempat }}" readonly>
              </div>
              <small id="tempat" class="form-text text-muted">Contoh : CV. PAPAPPU</small>
              @error('tempat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="dosen_pembimbing">Nama Dosen Pembimbing</label>
              <div class="input-group mb-3">
              <input id="dosen_pembimbing" type="text" class="form-control @error('dosen_pembimbing') is-invalid @enderror" name="dosen_pembimbing" autocomplete="dosen_pembimbing" value="{{ $surat->sp_magang->dosen_pembimbing }}" readonly>
              </div>
              <small id="dosen_pembimbing" class="form-text text-muted">Nama lengkap dosen pembimbing beserta gelar</small>
              @error('dosen_pembimbing')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-6">
              <label for="tanggal_mulai">Tanggal mulai magang</label>
              <div class="input-group mb-3">
              <input id="tanggal_mulai" type="text" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" autocomplete="tanggal_mulai" value="{{ $surat->sp_magang->tanggal_mulai }}" readonly>
              </div>
              <small id="tanggal_mulai" class="form-text text-muted">Contoh : April atau 21 April *tanpa tahun</small>
              @error('tanggal_mulai')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="tanggal_selesai">Tanggal selesai magang</label>
              <div class="input-group mb-3">
              <input id="tanggal_selesai" type="text" class="form-control @error('tanggal_selesai') is-invalid @enderror" name="tanggal_selesai" autocomplete="tanggal_selesai" value="{{ $surat->sp_magang->tanggal_selesai }}" readonly>
              </div>
              <small id="tanggal_selesai" class="form-text text-muted">Contoh : Juni 2020 atau 21 Juni 2020 *dengan tahun</small>
              @error('tanggal_selesai')
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
<script>
  ClassicEditor
        .create( document.querySelector( '#tujuan' ), {
        toolbar: {
        items: [
          'heading',
          '|',
          'bold',
          'italic',
          '|',
          'bulletedList',
          'numberedList',
          '|',
          'insertTable',
          '|',
          '|',
          'undo',
          'redo'
        ]
      },
        } ).then(editor => { 
          console.log( editor ); 
          editor.isReadOnly = true; // make the editor read-only right after initialization
     } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection