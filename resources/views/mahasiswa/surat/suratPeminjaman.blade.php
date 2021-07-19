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
    Buat<small> Surat Peminjaman</small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.suratPeminjaman.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'Surat Peminjaman' }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Peminjaman</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tujuan_surat">Tujuan Surat</label>
              <div class="input-group mb-3">
              <textarea id="tujuan_surat" type="text" class="form-control @error('tujuan_surat') is-invalid @enderror ckeditor" rows="30" name="tujuan_surat" autocomplete="tujuan_surat">Contoh : <br>Yth. Kasubbag Umum dan Kepegawaian<br>Kampus ITK Karang Joang<br>Balikpapan, Kalimantan Timur</textarea>
              </div>
              <small id="tujuan_surat" class="form-text text-muted">Tujuan surat</small>
              @error('tujuan_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tujuan">Tujuan Peminjaman</label>
              <div class="input-group mb-3">
              <input id="tujuan" type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" autocomplete="tujuan" value="{{ old('tujuan') }}" required>
              </div>
              <small id="tujuan" class="form-text text-muted">Contoh : Melakukan Rancang Bangun Pembangkit Energi Mikro dari Kebisingan Mesin Berdaya Tinggi</small>
              @error('tujuan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="objek">Barang / Ruangan yang dipinjam</label>
              <div class="input-group mb-3">
              <input id="objek" type="text" class="form-control @error('objek') is-invalid @enderror" name="objek" autocomplete="objek" value="{{ old('objek') }}" required>
              </div>
              <small id="objek" class="form-text text-muted">Contoh : Ruang Genset ITK</small>
              @error('objek')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-6">
              <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
              <div class="input-group mb-3">
              <input id="tanggal_peminjaman" type="text" class="form-control @error('tanggal_peminjaman') is-invalid @enderror" name="tanggal_peminjaman" autocomplete="tanggal_peminjaman" value="{{ old('tanggal_peminjaman') }}" required>
              </div>
              <small id="tanggal_peminjaman" class="form-text text-muted">Contoh : 12 Juni - 15 Juli 2021</small>
              @error('tanggal_peminjaman')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="waktu_peminjaman">Waktu Peminjaman</label>
              <div class="input-group mb-3">
              <input id="waktu_peminjaman" type="text" class="form-control @error('waktu_peminjaman') is-invalid @enderror" name="waktu_peminjaman" autocomplete="waktu_peminjaman" value="{{ old('waktu_peminjaman') }}" required>
              </div>
              <small id="waktu_peminjaman" class="form-text text-muted">Contoh : 09.00 - 16.00 WITA</small>
              @error('waktu_peminjaman')
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
        .create( document.querySelector( '#tujuan_surat' ), {
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