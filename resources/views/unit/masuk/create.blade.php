@extends('unit.default')

@section('page-header')
    Lihat<small> Surat Masuk </small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Masuk</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="nomor_surat">No Surat</label>
              <div class="input-group mb-3">
              <input id="nomor_surat" type="text" class="form-control @error('nomor_surat') is-invalid @enderror" name="nomor_surat" autocomplete="nomor_surat" value="{{ old('nomor_surat') }}" readonly>
              </div>
              <small id="nomor_surat" class="form-text text-muted">Contoh : UNIBA/SK/0112/08/2021</small>
              @error('nomor_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="perihal_surat">Perihal Surat</label>
              <div class="input-group mb-3">
              <input id="perihal_surat" type="text" class="form-control @error('perihal_surat') is-invalid @enderror" name="perihal_surat" autocomplete="perihal_surat" value="{{ old('perihal_surat') }}" readonly>
              </div>
              <small id="perihal_surat" class="form-text text-muted">Contoh : Undangan Seminar Nasional</small>
              @error('perihal_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="tanggal_surat">Tanggal Surat</label>
              <div class="input-group mb-3">
              <input id="tanggal_surat" type="text" class="form-control @error('tanggal_surat') is-invalid @enderror datetimepicker1" name="tanggal_surat" autocomplete="tanggal_surat" value="{{ old('tanggal_surat') }}" readonly>
              </div>
              <small id="tanggal_surat" class="form-text text-muted">Contoh : Undangan</small>
              @error('tanggal_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="tujuan_surat">Tujuan Surat</label>
              <div class="input-group mb-3">
              <select id="tujuan_surat" type="text" class="form-control @error('tujuan_surat') is-invalid @enderror" name="tujuan_surat" value="{{ old('tujuan_surat') }}" autocomplete="tujuan_surat" readonly>
                <option value="" disabled>Silahkan memilih tujuan surat</option>
                @foreach($user as $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>
                 @endforeach
              </select>
              </div>
              @error('tujuan_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="pengirim_surat">Pengirim</label>
              <div class="input-group mb-3">
              <input id="pengirim_surat" type="text" class="form-control @error('pengirim_surat') is-invalid @enderror" name="pengirim_surat" autocomplete="pengirim_surat" value="{{ old('pengirim_surat') }}" readonly>
              </div>
              <small id="pengirim_surat" class="form-text text-muted">Contoh : Universitas Balikpapan</small>
              @error('pengirim_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="file_surat">Úpload Surat</label>
              <div class="input-group mb-3">
              <input id="file_surat" type="file" class="form-control @error('file_surat') is-invalid @enderror" name="file_surat" autocomplete="file_surat" readonly>
              </div>
              <small id="file_surat" class="form-text text-muted">File scan surat masuk</small>
              <small id="file_surat" class="form-text text-muted">hanya file pdf, max 2 Mb </small>
              @error('file_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="keterangan_surat">Keterangan</label>
              <div class="input-group mb-3">
              <input id="keterangan_surat" type="text" class="form-control @error('keterangan_surat') is-invalid @enderror" name="keterangan_surat" autocomplete="keterangan_surat" value="{{ old('keterangan_surat') }}" readonly>
              </div>
              <small id="keterangan_surat" class="form-text text-muted">Contoh : Surat penting, segera diproses</small>
              @error('keterangan_surat')
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