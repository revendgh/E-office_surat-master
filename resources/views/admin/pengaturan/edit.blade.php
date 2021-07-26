@extends('admin.default')

@section('page-header')
	Pengaturan Jabatan <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')

    <div class="col-md-9">
    <div class="card shadow mb-4">
      {!! Form::model($item, [
          'route'  => [ ADMIN . '.pengaturan.update', $item->id ],
          'method' => 'put',
          'files'  => true
        ])
      !!}

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Pengaturan Jabatan</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-8">
              {!! Form::mySelect('jabatan', 'Jabatan', config('variables.jabatan'), $item->jabatan, ['class' => 'form-control select2', 'disabled']) !!}
              <input type="hidden" name="jabatan" value="{{ $item->jabatan}}">
              @error('jabatan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="id_users">Nama Akun</label>
              <div class="input-group mb-3">
              <select id="id_users" type="text" class="form-control @error('id_users') is-invalid @enderror" name="id_users" value="{{ old('id_users') }}" required autocomplete="id_users">
                <option value="" disabled>Silahkan memilih akun</option>
                @foreach($user as $user)
                  <option value="{{$user->id}}" {{ $item->id_users == $user->id ? 'selected' : '' }}>{{$user->name}}</option>
                 @endforeach
              </select>
              </div>
              @error('id_users')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>


          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="tanda_tangan">Úpload Tanda Tangan</label>
              <div class="input-group mb-3">
              <input id="tanda_tangan" type="file" class="form-control @error('tanda_tangan') is-invalid @enderror" name="tanda_tangan" autocomplete="tanda_tangan" required>
              <div class="input-group-append">
                <a href="{{url('storage/ttd_stempel/'.$item->tanda_tangan )}}"class="btn btn-success" download>Download</a>
              </div>
              </div>
              <small id="tanda_tangan" class="form-text text-muted">File scan tanda tangan, tanpa background putih</small>
              <small id="tanda_tangan" class="form-text text-muted">hanya file png, max 1 Mb </small>
              @error('tanda_tangan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-8">
              <label for="stempel">Úpload Stempel</label>
              <div class="input-group mb-3">
              <input id="stempel" type="file" class="form-control @error('stempel') is-invalid @enderror" name="stempel" autocomplete="stempel" required>
              <div class="input-group-append">
                <a href="{{url('storage/ttd_stempel/'.$item->stempel )}}"class="btn btn-success" download>Download</a>
              </div>
              </div>
              <small id="stempel" class="form-text text-muted">File scan stempel, tanpa background putih</small>
              <small id="stempel" class="form-text text-muted">hanya file png, max 1 Mb </small>
              @error('stempel')
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

</script>
@endsection
