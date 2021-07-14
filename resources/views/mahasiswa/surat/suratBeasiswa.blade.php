@extends('mahasiswa.default')

@section('page-header')
    Buat<small> Surat Rekomendasi Beasiswa </small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.suratBeasiswa.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'Surat Rekomendasi Beasiswa' }}">

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
              <input id="nama_beasiswa" type="text" class="form-control @error('nama_beasiswa') is-invalid @enderror" name="nama_beasiswa" autocomplete="nama_beasiswa" value="{{ old('nama_beasiswa') }}" required>
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
                <select name="semester" id="semester" class="form-control" required>
                    @for($no = 1; $no <= 14; $no++)
                    <option value="{{ $no }}"> {{ $no }}</option>
                    @endfor
                </select>
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
                <input id="ipk" type="text" class="form-control @error('ipk') is-invalid @enderror" name="ipk" autocomplete="ipk" value="{{ old('ipk') }}" required>
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
                <input id="sks_lulus" type="number" class="form-control @error('sks_lulus') is-invalid @enderror" name="sks_lulus" value="{{ old('sks_lulus') }}" autocomplete="sks_lulus" required>
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
              {!! Form::mySelect('ukt', 'UKT', config('variables.ukt'), ['class' => 'form-control select2']) !!}
              @error('ukt')
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