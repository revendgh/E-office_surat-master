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
    Buat<small> Surat Perjanjian Mulai Mengerjakan Tugas Akhir</small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.spMMTA.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'SP-MMTA' }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Perjanjian Mulai Mengerjakan Tugas Akhir</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="periode_proposal">Periode Proposal</label>
              <div class="input-group mb-3">
              <input id="periode_proposal" type="text" class="form-control @error('periode_proposal') is-invalid @enderror" name="periode_proposal" autocomplete="periode_proposal" value="{{ old('periode_proposal') }}" required>
              </div>
              <small id="periode_proposal" class="form-text text-muted">Contoh : Januari 2020 awal semester genap 2019/2020</small>
              @error('periode_proposal')
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
              <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" autocomplete="judul" value="{{ old('judul') }}" required>
              </div>
              <small id="judul" class="form-text text-muted">Judul tugas akhir yang sedang dikerjakan</small>
              @error('judul')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-6">
              <label for="pembimbing_1">Nama Pembimbing 1</label>
              <div class="input-group mb-3">
              <input id="pembimbing_1" type="text" class="form-control @error('pembimbing_1') is-invalid @enderror" name="pembimbing_1" autocomplete="pembimbing_1" value="{{ old('pembimbing_1') }}" required>
              </div>
              <small id="pembimbing_1" class="form-text text-muted">Contoh : Andika Ade Indra Saputra, S.T., M.T.</small>
              @error('pembimbing_1')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="nip_1">NIP / NIPH Pembimbing 1</label>
              <div class="input-group mb-3">
              <input id="nip_1" type="text" class="form-control @error('nip_1') is-invalid @enderror" name="nip_1" autocomplete="nip_1" value="{{ old('nip_1') }}" required>
              </div>
              <small id="nip_1" class="form-text text-muted">Contoh : NIP. 199101122015041001</small>
              @error('nip_1')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-6">
              <label for="pembimbing_2">Nama Pembimbing 2</label>
              <div class="input-group mb-3">
              <input id="pembimbing_2" type="text" class="form-control @error('pembimbing_2') is-invalid @enderror" name="pembimbing_2" autocomplete="pembimbing_2" value="{{ old('pembimbing_2') }}" required>
              </div>
              <small id="pembimbing_2" class="form-text text-muted">Contoh : Andika Ade Indra Saputra, S.T., M.T.</small>
              @error('pembimbing_2')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="nip_2">NIP / NIPH Pembimbing 2</label>
              <div class="input-group mb-3">
              <input id="nip_2" type="text" class="form-control @error('nip_2') is-invalid @enderror" name="nip_2" autocomplete="nip_2" value="{{ old('nip_2') }}" required>
              </div>
              <small id="nip_2" class="form-text text-muted">Contoh : NIP. 199101122015041001</small>
              @error('nip_2')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tanggal_ujian">Tanggal Ujian Proposal</label>
              <div class="input-group mb-3">
              <input id="tanggal_ujian" type="text" class="form-control @error('tanggal_ujian') is-invalid @enderror" name="tanggal_ujian" autocomplete="tanggal_ujian" value="{{ old('tanggal_ujian') }}" required>
              </div>
              <small id="tanggal_ujian" class="form-text text-muted">Contoh : 13 Januari 2020</small>
              @error('tanggal_ujian')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="nilai_proposal">Nilai Proposal</label>
              <div class="input-group mb-3">
              <input id="nilai_proposal" type="text" class="form-control @error('nilai_proposal') is-invalid @enderror" name="nilai_proposal" autocomplete="nilai_proposal" value="{{ old('nilai_proposal') }}" required>
              </div>
              <small id="nilai_proposal" class="form-text text-muted">Contoh : 82.7 *memakai titik</small>
              @error('nilai_proposal')
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
        .create( document.querySelector( '#isi_perjanjian' ), {
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