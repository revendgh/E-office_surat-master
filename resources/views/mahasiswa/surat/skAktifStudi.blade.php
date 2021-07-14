@extends('mahasiswa.default')

@section('page-header')
    Buat<small> Surat Keterangan Aktif Studi</small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.skAktifStudi.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'SK Aktif Studi' }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Keterangan Aktif Studi</h6>
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
              <small id="keperluan" class="form-text text-muted">Keperluan surat keterangan aktif studi, contoh : Beasiswa Kaltim Tuntas</small>
              @error('keperluan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="akreditasi_prodi">Akreditasi Prodi</label>
              <div class="input-group mb-3">
              <input id="akreditasi_prodi" type="text" class="form-control @error('akreditasi_prodi') is-invalid @enderror" name="akreditasi_prodi" autocomplete="akreditasi_prodi" value="{{ old('akreditasi_prodi') }}" required>
              </div>
              <small id="akreditasi_prodi" class="form-text text-muted">Akreditasi program studi pemohon, contoh : A</small>
              @error('akreditasi_prodi')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-5">
                {!! Form::mySelect('semester', 'Semester', config('variables.semester'), ['class' => 'form-control select2']) !!}
            </div>

            <div class="form-group col-md-5">
              <label for="tahun_akademik">Tahun Ajaran</label>
              <div class="input-group mb-3">
                <select name="tahun_akademik" id="tahun_akademik" class="form-control" required>
                    <option value="{{date('Y')-1}}/{{date('Y')}}">{{date('Y')-1}}/{{date('Y')}}</option>
                    <option value="{{date('Y')}}/{{date('Y')+1}}">{{date('Y')}}/{{date('Y')+1}}</option>
                </select>
              </div>
              @error('tahun_akademik')
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