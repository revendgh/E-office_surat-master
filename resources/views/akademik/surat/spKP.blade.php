@extends('akademik.default')

@section('css')
<style>
    /*Textbox*/
    .ck-editor__editable {
        min-height: 300px;
        min-width: 860px;
        max-width: 860px;
    }
    /*Toolbar*/
    .ck-editor__top {
        min-width: 860px;
    }
</style>
@endsection

@section('page-header')
    Lihat<small> Surat Pengantar KP </small>
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
        <h6 class="m-0 font-weight-bold text-info">Data Surat Pengantar KP</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tujuan">Tujuan Surat</label>
              <div class="input-group mb-3">
              <textarea id="tujuan" type="text" class="form-control @error('tujuan') is-invalid @enderror ckeditor" rows="30" name="tujuan" autocomplete="tujuan">{{ $surat->sp_kp->tujuan }}</textarea>
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
              <label for="tempat_kp">Tempat KP</label>
              <div class="input-group mb-3">
              <input id="tempat_kp" type="text" class="form-control @error('tempat_kp') is-invalid @enderror" name="tempat_kp" autocomplete="tempat_kp" value="{{ $surat->sp_kp->tempat_kp }}" readonly>
              </div>
              <small id="tempat_kp" class="form-text text-muted">Contoh : Dinas Kesehatan Kota Balikpapan</small>
              @error('tempat_kp')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="surat_balasan">Úpload Surat Balasan</label>
              <div class="input-group mb-3">
              <input id="surat_balasan" type="file" class="form-control @error('surat_balasan') is-invalid @enderror" name="surat_balasan" autocomplete="surat_balasan" readonly>
              <div class="input-group-append">
                <a href="{{url('storage/KP/'.$surat->sp_kp->surat_balasan )}}"class="btn btn-success" download>Download</a>
              </div>
              </div>
              <small id="surat_balasan" class="form-text text-muted">File scan surat balasan</small>
              <small id="surat_balasan" class="form-text text-muted">hanya file pdf, max 2 Mb </small>
              @error('gambar')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-6">
              <label for="nomor_surat">No Surat</label>
              <div class="input-group mb-3">
              <input id="nomor_surat" type="text" class="form-control @error('nomor_surat') is-invalid @enderror" name="nomor_surat" autocomplete="nomor_surat" value="{{ $surat->sp_kp->nomor_surat }}" readonly>
              </div>
              <small id="nomor_surat" class="form-text text-muted">Contoh : KL.02.02/ 005/KBPN/IV/2020</small>
              @error('nomor_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="tanggal_surat">Tanggal Surat</label>
              <div class="input-group mb-3">
              <input id="tanggal_surat" type="text" class="form-control @error('tanggal_surat') is-invalid @enderror" name="tanggal_surat" autocomplete="tanggal_surat" value="{{ $surat->sp_kp->tanggal_surat }}" readonly>
              </div>
              <small id="tanggal_surat" class="form-text text-muted">Contoh : 21 Mei 2020</small>
              @error('tanggal_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="mahasiswa">Mahasiswa KP</label>
              <div class="input-group mb-3">
              <textarea id="mahasiswa" type="text" class="form-control @error('mahasiswa') is-invalid @enderror ckeditor" rows="30" name="mahasiswa" autocomplete="mahasiswa">{{ $surat->sp_kp->mahasiswa }}</textarea>
              </div>
              <small id="mahasiswa" class="form-text text-muted">Nama dan nim mahasiswa </small>
              @error('mahasiswa')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="waktu_kp">Jangka Waktu KP</label>
              <div class="input-group mb-3">
              <input id="waktu_kp" type="text" class="form-control @error('waktu_kp') is-invalid @enderror" name="waktu_kp" autocomplete="waktu_kp" value="{{ $surat->sp_kp->waktu_kp }}" readonly>
              </div>
              <small id="waktu_kp" class="form-text text-muted">Contoh : 1 Juni 2020 s.d 31 Juli 2020 *sesuaikan format ini</small>
              @error('waktu_kp')
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
  ClassicEditor
        .create( document.querySelector( '#mahasiswa' ), {
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