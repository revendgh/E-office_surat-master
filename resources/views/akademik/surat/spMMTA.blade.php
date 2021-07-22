@extends('akademik.default')

@section('css')
<style>
    /*Textbox*/
    .ck-editor__editable {
        min-height: 300px;
        min-width: 860px;
    }
    /*Toolbar*/
    .ck-editor__top {
        min-width: 860px;
    }
</style>
@endsection

@section('page-header')
    Lihat<small> Surat Perjanjian Mulai Mengerjakan Tugas Akhir</small>
@endsection

@section('content')

  <div class="col-md-9">
    <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#axe2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Pemohon</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe2">
        <div class="card-body">

          <div class="form-group row pl-3">
            <div class="form-group col-md-4">
              <label for="nama">Nama</label>
              <div class="input-group mb-3">
              <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" autocomplete="nama" value="{{ $surat->user->name}}" readonly>
              </div>
              @error('nama')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-4">
              <label for="nim">NIM</label>
              <div class="input-group mb-3">
              <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" autocomplete="nim" value="{{ $surat->user->mahasiswa->nim}}" readonly>
              </div>
              @error('nim')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-4">
              <label for="prodi">NIM</label>
              <div class="input-group mb-3">
              <input id="prodi" type="text" class="form-control @error('prodi') is-invalid @enderror" name="prodi" autocomplete="prodi" value="{{ $surat->user->mahasiswa->prodi}}" readonly>
              </div>
              @error('prodi')
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
      @if($surat->status_surat == 0)
      {!! Form::model($surat, [
          'route'  => [ AKADEMIK . '.surat.tolak', $surat->id ],
          'method' => 'put',
          'files'  => true
        ])
      !!}
      @endif

      <!-- Card Header - Accordion -->
      <a href="#axe3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="axe3">
        <h6 class="m-0 font-weight-bold text-info">Data Surat Perjanjian Mulai Mengerjakan Tugas Akhir</h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse show" id="axe3">
        <div class="card-body">

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="periode_proposal">Periode Proposal</label>
              <div class="input-group mb-3">
              <input id="periode_proposal" type="text" class="form-control @error('periode_proposal') is-invalid @enderror" name="periode_proposal" autocomplete="periode_proposal" value="{{ $surat->sp_mmta->periode_proposal }}" readonly>
              </div>
              <small id="periode_proposal" class="form-text text-muted">Contoh : Januari 2020 awal semester genap 2019/2020</small>
              @error('periode_proposal')
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
              <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" autocomplete="judul" value="{{ $surat->sp_mmta->judul }}" readonly>
              </div>
              <small id="judul" class="form-text text-muted">Judul tugas akhir yang sedang dikerjakan</small>
              @error('judul')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-6">
              <label for="pembimbing_1">Nama Pembimbing 1</label>
              <div class="input-group mb-3">
              <input id="pembimbing_1" type="text" class="form-control @error('pembimbing_1') is-invalid @enderror" name="pembimbing_1" autocomplete="pembimbing_1" value="{{ $surat->sp_mmta->pembimbing_1 }}" readonly>
              </div>
              <small id="pembimbing_1" class="form-text text-muted">Contoh : Andika Ade Indra Saputra, S.T., M.T.</small>
              @error('pembimbing_1')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="nip_1">NIP / NIPH Pembimbing 1</label>
              <div class="input-group mb-3">
              <input id="nip_1" type="text" class="form-control @error('nip_1') is-invalid @enderror" name="nip_1" autocomplete="nip_1" value="{{ $surat->sp_mmta->nip_1 }}" readonly>
              </div>
              <small id="nip_1" class="form-text text-muted">Contoh : NIP. 199101122015041001</small>
              @error('nip_1')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group row pl-3">
            <div class="form-group col-md-6">
              <label for="pembimbing_2">Nama Pembimbing 2</label>
              <div class="input-group mb-3">
              <input id="pembimbing_2" type="text" class="form-control @error('pembimbing_2') is-invalid @enderror" name="pembimbing_2" autocomplete="pembimbing_2" value="{{ $surat->sp_mmta->pembimbing_2 }}" readonly>
              </div>
              <small id="pembimbing_2" class="form-text text-muted">Contoh : Andika Ade Indra Saputra, S.T., M.T.</small>
              @error('pembimbing_2')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="nip_2">NIP / NIPH Pembimbing 2</label>
              <div class="input-group mb-3">
              <input id="nip_2" type="text" class="form-control @error('nip_2') is-invalid @enderror" name="nip_2" autocomplete="nip_2" value="{{ $surat->sp_mmta->nip_2 }}" readonly>
              </div>
              <small id="nip_2" class="form-text text-muted">Contoh : NIP. 199101122015041001</small>
              @error('nip_2')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="tanggal_ujian">Tanggal Ujian Proposal</label>
              <div class="input-group mb-3">
              <input id="tanggal_ujian" type="text" class="form-control @error('tanggal_ujian') is-invalid @enderror" name="tanggal_ujian" autocomplete="tanggal_ujian" value="{{ $surat->sp_mmta->tanggal_ujian }}" readonly>
              </div>
              <small id="tanggal_ujian" class="form-text text-muted">Contoh : 13 Januari 2020</small>
              @error('tanggal_ujian')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="nilai_proposal">Nilai Proposal</label>
              <div class="input-group mb-3">
              <input id="nilai_proposal" type="text" class="form-control @error('nilai_proposal') is-invalid @enderror" name="nilai_proposal" autocomplete="nilai_proposal" value="{{ $surat->sp_mmta->nilai_proposal }}" readonly>
              </div>
              <small id="nilai_proposal" class="form-text text-muted">Contoh : 82.7 *memakai titik</small>
              @error('nilai_proposal')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

        @if($surat->status_surat == 0)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.pengajuan') }}" class="btn btn-lg btn-primary">Kembali</a>
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
              <a href="{{ route(AKADEMIK . '.surat.teruskan', $surat->id) }}" class="btn btn-lg btn-success form-control">Teruskan</a>
          </div>
        </div>
        @elseif($surat->status_surat == 1)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.ditolak') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
        </div>
        @elseif($surat->status_surat == 4)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(AKADEMIK . '.surat.diteruskan') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
        </div>
        @endif
        
        {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>

@endsection
@section('script')
<script>
  ClassicEditor
        .create( document.querySelector( '#isi_perjanjian' ), {
        toolbar: {
        items: [
          'heading',
          '|',
          'bold',
          'italic',
          '|',
          'bulletedList',
          'numberedList',
          '|',
          'insertTable',
          '|',
          '|',
          'undo',
          'redo'
        ]
      },
        } ).then(editor => { 
          console.log( editor ); 
          editor.isReadOnly = true; // make the editor read-only right after initialization
     } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection