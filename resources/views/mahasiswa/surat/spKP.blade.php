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
    Buat<small> Surat Pengantar KP </small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.spKP.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'Surat Pengantar KP' }}">

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
              <textarea id="tujuan" type="text" class="form-control @error('tujuan') is-invalid @enderror ckeditor" rows="30" name="tujuan" autocomplete="tujuan">Contoh : <br>Kepala Dinas Perpustakaan dan Arsip Kota Balikpapan<br>Jl. Kapten Piere Tendean No.1 Gunung Ilir. Kec. Balikpapan Tengah, <br>Kota Balikpapan, Kalimantan Timur 76113</textarea>
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
              <input id="tempat_kp" type="text" class="form-control @error('tempat_kp') is-invalid @enderror" name="tempat_kp" autocomplete="tempat_kp" value="{{ old('tempat_kp') }}" required>
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
              <input id="surat_balasan" type="file" class="form-control @error('surat_balasan') is-invalid @enderror" name="surat_balasan" autocomplete="surat_balasan" required>
              </div>
              <small id="surat_balasan" class="form-text text-muted">File scan surat balasan</small>
              <small id="surat_balasan" class="form-text text-muted">hanya file pdf, max 2 Mb </small>
              @error('surat_balasan')
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
              <input id="nomor_surat" type="text" class="form-control @error('nomor_surat') is-invalid @enderror" name="nomor_surat" autocomplete="nomor_surat" value="{{ old('nomor_surat') }}" required>
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
              <input id="tanggal_surat" type="text" class="form-control @error('tanggal_surat') is-invalid @enderror" name="tanggal_surat" autocomplete="tanggal_surat" value="{{ old('tanggal_surat') }}" required>
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
              <textarea id="mahasiswa" type="text" class="form-control @error('mahasiswa') is-invalid @enderror ckeditor" rows="30" name="mahasiswa" autocomplete="mahasiswa">
              <table border="1" cellspacing="0" cellpadding="0" width="522">
              <tbody>
                  <tr>
                      <td width="43" valign="top">
                          <p>
                              <strong>No</strong>
                          </p>
                      </td>
                      <td width="266" valign="top">
                          <p>
                              Nama/ NIM
                          </p>
                      </td>
                      <td width="213" valign="top">
                          <p>
                              <strong>Program Studi</strong>
                          </p>
                      </td>
                  </tr>
                  <tr>
                      <td width="43">
                          <p>
                              1.
                          </p>
                      </td>
                      <td width="266">
                          <p>
                            
                          </p>
                      </td>
                      <td width="213">
                          <p>
                              
                          </p>
                      </td>
                  </tr>
                  <tr>
                      <td width="43">
                          <p>
                              2.
                          </p>
                      </td>
                      <td width="266">
                          <p>
                              
                          </p>
                      </td>
                      <td width="213">
                          <p>
                              
                          </p>
                      </td>
                  </tr>
              </tbody>
          </table>
          </textarea>
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
              <input id="waktu_kp" type="text" class="form-control @error('waktu_kp') is-invalid @enderror" name="waktu_kp" autocomplete="waktu_kp" value="{{ old('waktu_kp') }}" required>
              </div>
              <small id="waktu_kp" class="form-text text-muted">Contoh : 1 Juni 2020 s.d 31 Juli 2020 *sesuaikan format ini</small>
              @error('waktu_kp')
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