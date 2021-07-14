@extends('mahasiswa.default')

@section('page-header')
    Buat<small> Surat Keterangan Pernah Studi</small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.skPernahStudi.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'SK Pernah Studi' }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Keterangan Pernah Studi</h6>
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
              <small id="keperluan" class="form-text text-muted">Keperluan surat keterangan pernah studi, contoh : Beasiswa Kaltim Tuntas</small>
              @error('keperluan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="angkatan">Tahun Angkatan</label>
              <div class="input-group mb-3">
              <input id="angkatan" type="text" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan" autocomplete="angkatan" value="{{ old('angkatan') }}" required>
              </div>
              <small id="angkatan" class="form-text text-muted">Contoh : 2017</small>
              @error('angkatan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-5">
                {!! Form::mySelect('semester_awal', 'Semester Awal', config('variables.semester'), ['class' => 'form-control select2']) !!}
            </div>

            <div class="form-group col-md-5">
                {!! Form::mySelect('semester_akhir', 'Semester Akhir', config('variables.semester'), ['class' => 'form-control select2']) !!}
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-5">
              <label for="tahun_akademik_awal">Tahun Akademik Awal</label>
              <div class="input-group mb-3">
                <select name="tahun_akademik_awal" id="tahun_akademik_awal" class="form-control" required>
                    <option value="{{date('Y')-7}}/{{date('Y')-6}}">{{date('Y')-7}}/{{date('Y')-6}}</option>
                    <option value="{{date('Y')-6}}/{{date('Y')-5}}">{{date('Y')-6}}/{{date('Y')-5}}</option>
                    <option value="{{date('Y')-5}}/{{date('Y')-4}}">{{date('Y')-5}}/{{date('Y')-4}}</option>
                    <option value="{{date('Y')-4}}/{{date('Y')-3}}">{{date('Y')-4}}/{{date('Y')-3}}</option>
                    <option value="{{date('Y')-3}}/{{date('Y')-2}}">{{date('Y')-3}}/{{date('Y')-2}}</option>
                    <option value="{{date('Y')-2}}/{{date('Y')-1}}">{{date('Y')-2}}/{{date('Y')-1}}</option>
                    <option value="{{date('Y')-1}}/{{date('Y')}}">{{date('Y')-1}}/{{date('Y')}}</option>
                    <option value="{{date('Y')}}/{{date('Y')+1}}">{{date('Y')}}/{{date('Y')+1}}</option>
                </select>
              </div>
              @error('tahun_akademik_awal')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-5">
              <label for="tahun_akademik_akhir">Tahun Akademik Akhir</label>
              <div class="input-group mb-3">
                <select name="tahun_akademik_akhir" id="tahun_akademik_akhir" class="form-control" required>
                    <option value="{{date('Y')-1}}/{{date('Y')}}">{{date('Y')-1}}/{{date('Y')}}</option>
                    <option value="{{date('Y')}}/{{date('Y')+1}}">{{date('Y')}}/{{date('Y')+1}}</option>
                </select>
              </div>
              @error('tahun_akademik_akhir')
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