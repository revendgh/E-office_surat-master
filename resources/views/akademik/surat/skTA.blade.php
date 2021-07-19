@extends('mahasiswa.default')

@section('page-header')
    Buat<small> Surat Keterangan Melaksanakan TA</small>
@endsection

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
        {!! Form::open([
          'route' => [ MAHASISWA. '.skTA.store' ],
          'files' => true
        ])
      !!}
      
      <input type="hidden" name="id_users" value="{{ Auth::user()->id}}">
      <input type="hidden" name="status_surat" value="{{ 0 }}">
      <input type="hidden" name="nama_surat" value="{{ 'Surat Keterangan Melaksanakan TA' }}">

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Keterangan Melaksanakan TA</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tahun_ajaran">Tahun Ajaran</label>
              <div class="input-group mb-3">
                <select name="tahun_ajaran" id="tahun_ajaran" class="form-control" required>
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
              @error('tahun_ajaran')
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

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="keperluan">Keperluan Surat </label>
              <div class="input-group mb-3">
              <input id="keperluan" type="text" class="form-control @error('keperluan') is-invalid @enderror" name="keperluan" autocomplete="keperluan" value="{{ old('keperluan') }}" required>
              </div>
              <small id="keperluan" class="form-text text-muted">contoh : Beasiswa Kaltim Tuntas</small>
              @error('keperluan')
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