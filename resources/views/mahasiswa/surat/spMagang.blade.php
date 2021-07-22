@extends('mahasiswa.default')

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
    Buat<small> Surat Permohonan Magang </small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.spMagang.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'Surat Pengantar Magang' }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Permohonan Magang</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tujuan">Tujuan Surat</label>
              <div class="input-group mb-3">
              <textarea id="tujuan" type="text" class="form-control @error('tujuan') is-invalid @enderror ckeditor" rows="30" name="tujuan" autocomplete="tujuan">Contoh : <br>Yth. Pimpinan CV. PAPAPPU<br>Jl. Pupuk Utara 5/E17,<br>Balikpapan, Kalimantan Timur</textarea>
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
              <input id="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" autocomplete="tempat" value="{{ old('tempat') }}" required>
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
              <input id="dosen_pembimbing" type="text" class="form-control @error('dosen_pembimbing') is-invalid @enderror" name="dosen_pembimbing" autocomplete="dosen_pembimbing" value="{{ old('dosen_pembimbing') }}" required>
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
              <input id="tanggal_mulai" type="text" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" autocomplete="tanggal_mulai" value="{{ old('tanggal_mulai') }}" required>
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
              <input id="tanggal_selesai" type="text" class="form-control @error('tanggal_selesai') is-invalid @enderror" name="tanggal_selesai" autocomplete="tanggal_selesai" value="{{ old('tanggal_selesai') }}" required>
              </div>
              <small id="tanggal_selesai" class="form-text text-muted">Contoh : Juni 2020 atau 21 Juni 2020 *dengan tahun</small>
              @error('tanggal_selesai')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row mb-0">
          <div class="col-md-1 align-self-end ml-auto">
              <button type="submit"class="btn btn-lg btn-info pull-right" style="float: right;">
                  {{ __('SIMPAN') }}
              </button>
          </div>
          </div>
          </div>
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
        } )
        .catch( error => {
            console.error( error );
        } );
  ClassicEditor.config.width = '75%';
</script>
@endsection