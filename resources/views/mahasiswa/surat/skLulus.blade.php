@extends('mahasiswa.default')

@section('page-header')
    Buat<small> Surat Keterangan Lulus</small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.skLulus.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'SK Lulus' }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Keterangan Lulus</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="keperluan">Keperluan</label>
              <div class="input-group mb-3">
              <input id="keperluan" type="text" class="form-control @error('keperluan') is-invalid @enderror" name="keperluan" autocomplete="keperluan" value="{{ old('keperluan') }}" required>
              </div>
              <small id="keperluan" class="form-text text-muted">Keperluan surat keterangan lulus, contoh : Pendaftaran CPNS</small>
              @error('keperluan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="akreditasi_institut">Akreditasi Institut</label>
              <div class="input-group mb-3">
              <input id="akreditasi_institut" type="text" class="form-control @error('akreditasi_institut') is-invalid @enderror" name="akreditasi_institut" value="{{ old('akreditasi_institut') }}" autocomplete="akreditasi_institut" required>
              </div>
              <small id="akreditasi_institut" class="form-text text-muted">Akreditasi Institut, contoh : B</small>
              @error('akreditasi_institut')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-6">
              <label for="tanggal_yudisium">Tanggal Yudisium</label>
              <div class="input-group mb-3">
              <input id="tanggal_yudisium" type="text" class="form-control @error('tanggal_yudisium') is-invalid @enderror date datetimepicker1" name="tanggal_yudisium" value="{{ old('tanggal_yudisium') }}" autocomplete="tanggal_yudisium" required>
              </div>
              <small id="tanggal_yudisium" class="form-text text-muted"></small>
              @error('tanggal_yudisium')
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
jQuery.datetimepicker.setLocale('id');

jQuery('.datetimepicker1').datetimepicker({
 i18n:{
  id:{
   months:[
    'Januari','Februari','Maret','April',
    'Mei','Juni','Juli','Agustus',
    'September','Oktober','November','Desember',
   ],
   dayOfWeek:[
    "Minggu", "Senin", "Selasa", "Rabu", 
    "Kamis", "Jum'at", "Sabtu",
   ]
  }
 },
 timepicker:false,
 format:'d/m/Y'
});
</script>
@endsection