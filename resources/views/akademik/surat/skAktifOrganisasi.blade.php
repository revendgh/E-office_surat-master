@extends('mahasiswa.default')

@section('page-header')
    Buat<small> Surat Keterangan Aktif Organisasi</small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.skAktifOrganisasi.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'SK Aktif Organisasi' }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Keterangan Aktif Organisasi</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="organisasi">Organisasi</label>
              <div class="input-group mb-3">
              <input id="organisasi" type="text" class="form-control @error('organisasi') is-invalid @enderror" name="organisasi" autocomplete="organisasi" value="{{ old('organisasi') }}" required>
              </div>
              <small id="organisasi" class="form-text text-muted">contoh : Himpunan Mahasiswa Informatika</small>
              @error('organisasi')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="jabatan">Jabatan</label>
              <div class="input-group mb-3">
              <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" autocomplete="jabatan" value="{{ old('jabatan') }}" required>
              </div>
              <small id="jabatan" class="form-text text-muted">contoh : Ketua Himpunan</small>
              @error('jabatan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

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