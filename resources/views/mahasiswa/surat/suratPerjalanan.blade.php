@extends('mahasiswa.default')

@section('page-header')
    Buat<small> Surat Keterangan Perjalanan</small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.suratPerjalanan.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'SK Perjalanan' }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Keterangan Perjalanan</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="keperluan">Keperluan Surat </label>
              <div class="input-group mb-3">
              <input id="keperluan" type="text" class="form-control @error('keperluan') is-invalid @enderror" name="keperluan" autocomplete="keperluan" value="{{ old('keperluan') }}" required>
              </div>
              <small id="keperluan" class="form-text text-muted">contoh : riset/pengambilan data guna kepentingan Tugas Akhir </small>
              @error('keperluan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="dosbim">Dosen Pembimbing</label>
              <div class="input-group mb-3">
              <input id="dosbim" type="text" class="form-control @error('dosbim') is-invalid @enderror" name="dosbim" autocomplete="dosbim" value="{{ old('dosbim') }}" required>
              </div>
              <small id="dosbim" class="form-text text-muted">Nama lengkap dosen pembimbing beserta gelar</small>
              @error('dosbim')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="keberangkatan">Kota Keberangkatan</label>
              <div class="input-group mb-3">
              <input id="keberangkatan" type="text" class="form-control @error('keberangkatan') is-invalid @enderror" name="keberangkatan" autocomplete="keberangkatan" value="{{ old('keberangkatan') }}" required>
              </div>
              <small id="keberangkatan" class="form-text text-muted">Contoh : Balikpapan - Kalimantan Timur</small>
              @error('keberangkatan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tujuan">Kota Tujuan</label>
              <div class="input-group mb-3">
              <input id="tujuan" type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" autocomplete="tujuan" value="{{ old('tujuan') }}" required>
              </div>
              <small id="tujuan" class="form-text text-muted">Contoh : Gresik - Jawa Timur</small>
              @error('tujuan')
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
<script type="text/javascript">

</script>
@endsection