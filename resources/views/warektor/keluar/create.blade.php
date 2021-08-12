@extends('warektor.default')

@section('page-header')
    Lihat<small> Surat Keluar </small>
@endsection


@section('content')
  
  <div class="col-md-9">
    <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#axe2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data unit yang mengajukan</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe2">
        <div class="card-body">

          <div class="form-group row pl-3">
            <div class="form-group col-md-4">
              <label for="nama">Nama</label>
              <div class="input-group mb-3">
              <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" autocomplete="nama" value="" readonly>
              </div>
              @error('nama')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-4">
              <label for="nim">Tanggal pengajuan</label>
              <div class="input-group mb-3">
              <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" autocomplete="nim" value="" readonly>
              </div>
              @error('nim')
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
      {!! Form::open([
          'route' => [ WAREKTOR. '.keluar.store' ],
          'files' => true
        ])
      !!}

      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Keluar</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="nomor_surat">No Surat</label>
              <div class="input-group mb-3">
              <input id="nomor_surat" type="text" class="form-control @error('nomor_surat') is-invalid @enderror" name="nomor_surat" autocomplete="nomor_surat" value="{{ old('nomor_surat') }}" readonly>
              </div>
              <small id="nomor_surat" class="form-text text-muted">Contoh : JMTI/SK/0112/08/2021</small>
              @error('nomor_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              {!! Form::mySelect('jenis_surat', 'Jenis Surat', config('variables.jenis_tata_naskah'), ['class' => 'form-control select2', 'readonly']) !!}
              @error('ck_surat_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="keperluan_surat">Keperluan Surat</label>
              <div class="input-group mb-3">
              <input id="keperluan_surat" type="text" class="form-control @error('keperluan_surat') is-invalid @enderror" name="keperluan_surat" autocomplete="keperluan_surat" value="{{ old('keperluan_surat') }}" readonly>
              </div>
              <small id="keperluan_surat" class="form-text text-muted">Contoh : Undangan Seminar Nasional</small>
              @error('keperluan_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="pejabat_penandatangan">Pejabat Penandatangan</label>
              <div class="input-group mb-3">
              <select id="pejabat_penandatangan" type="text" class="form-control @error('pejabat_penandatangan') is-invalid @enderror" name="pejabat_penandatangan" value="{{ old('pejabat_penandatangan') }}" autocomplete="pejabat_penandatangan" readonly>
                <option value="" disabled>Silahkan memilih pejabat penandatangan</option>
                @foreach($user as $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>
                 @endforeach
              </select>
              </div>
              @error('pejabat_penandatangan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="file_surat">Upload Surat</label>
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

          <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(WAREKTOR . '.keluar.index') }}" class="btn btn-lg btn-primary">Kembali</a>
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
              <a href="" class="btn btn-lg btn-success form-control">Setujui</a>
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