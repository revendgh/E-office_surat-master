@extends('mahasiswa.default')

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
    Buat<small> Surat Melanjutkan Penelitian</small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.suratPenelitian.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'Surat Melanjutkan Penelitian' }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Melanjutkan Penelitian</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tujuan">Tujuan Surat</label>
              <div class="input-group mb-3">
              <textarea id="tujuan" type="text" class="form-control @error('tujuan') is-invalid @enderror ckeditor" rows="30" name="tujuan" autocomplete="tujuan">Contoh : <br>Yth. Kepala Dinas Perpustakaan dan Arsip Kota Balikpapan<br>Jl. Kapten Piere Tendean No.1 Gunung Ilir. Kec. Balikpapan Tengah, <br>Kota Balikpapan, Kalimantan Timur 76113</textarea>
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
              <label for="tempat_penelitian">Tempat Penelitian</label>
              <div class="input-group mb-3">
              <input id="tempat_penelitian" type="text" class="form-control @error('tempat_penelitian') is-invalid @enderror" name="tempat_penelitian" autocomplete="tempat_penelitian" value="{{ old('tempat_penelitian') }}" required>
              </div>
              <small id="tempat_penelitian" class="form-text text-muted">Tempat penelitian, contoh : Subbagian Umum Dinas Perpustakaan dan Arsip Kota Balikpapan</small>
              @error('tempat_penelitian')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tanggal_penelitian">Tanggal Penelitian</label>
              <div class="input-group mb-3">
              <input id="tanggal_penelitian" type="text" class="form-control @error('tanggal_penelitian') is-invalid @enderror" name="tanggal_penelitian" autocomplete="tanggal_penelitian" value="{{ old('tanggal_penelitian') }}" required>
              </div>
              <small id="tanggal_penelitian" class="form-text text-muted">contoh : 15 Juni 2020 sampai selesai</small>
              @error('tanggal_penelitian')
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
        } )
        .catch( error => {
            console.error( error );
        } );
  ClassicEditor.config.width = '75%';
</script>
@endsection