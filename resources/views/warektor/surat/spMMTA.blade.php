@extends('jurusan.default')

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
              <label for="prodi">Program Studi</label>
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
      @if($surat->status_surat == 4)
      {!! Form::model($surat, [
          'route'  => [ JURUSAN . '.surat.tolak', $surat->id ],
          'method' => 'put',
          'files'  => true
        ])
      !!}
      @elseif($surat->status_surat == 6 || $surat->status_surat == 7)
      {!! Form::model($surat, [
          'route'  => [ JURUSAN . '.surat.export', $surat->id ],
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

          @if($surat->status_surat == 6 || $surat->status_surat == 7)
          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="no_surat">Nomor Surat</label>
              <div class="input-group mb-3">
              @if($surat->status_surat == 6)
                <input id="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" autocomplete="no_surat" required>
              @elseif($surat->status_surat == 7)
                <input id="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" autocomplete="no_surat" value="{{ $surat->no_surat}}" required>
              @endif
              </div>
              @error('no_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          @endif

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

          @if($surat->status_surat == 6 || $surat->status_surat == 7)
          <div class="form-group">
            <div class="form-group col-md-12">
              <label for="isi_perjanjian">Isi Perjanjian</label>
              <div class="input-group mb-3">
              @if($surat->status_surat == 6)
                <textarea id="isi_perjanjian" type="text" class="form-control @error('isi_perjanjian') is-invalid @enderror ckeditor" rows="30" name="isi_perjanjian" autocomplete="isi_perjanjian">
                  <p>Dinyatakan dapat memulai mengerjakan Tugas Akhirnya di bawah bimbingan Dosen yang telah ditetapkan.</p><p>Proses pembimbingan berlaku maksimal selama dua semester, terhitung mulai tanggal&nbsp;18 Februari 2020 sampai dengan&nbsp;batas akhir Yudisium 2019/2020.</p><p>Apabila Tugas Akhir tersebut tidak dapat diselesaikan dalam waktu yang telah ditentukan, maka:</p><ol><li>Bila kemajuan penyusunan Tugas Akhir telah mencapai ≥ 75% akan diberikan perpanjangan waktu satu semester;</li><li>Bila kemajuan penyusunan Tugas Akhir&lt; 75%, diharuskan membuat Proposal Tugas Akhir dengan judul yang baru dan dipresentasikan di depan Team Dosen Penguji.</li></ol>

                </textarea>
              @elseif($surat->status_surat == 7)
                <textarea id="isi_perjanjian" type="text" class="form-control @error('isi_perjanjian') is-invalid @enderror ckeditor" rows="30" name="isi_perjanjian" autocomplete="isi_perjanjian">{{ $surat->sp_mmta->isi_perjanjian }}</textarea>
              @endif
              </div>
              <small id="isi_perjanjian" class="form-text text-muted">Tujuan surat</small>
              @error('no_surat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          @endif


        @if($surat->status_surat == 4)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(JURUSAN . '.surat.pengajuan') }}" class="btn btn-lg btn-primary">Kembali</a>
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
              <a href="{{ route(JURUSAN . '.surat.verifikasi', $surat->id) }}" class="btn btn-lg btn-success form-control">Verifikasi</a>
          </div>
        </div>
        @elseif($surat->status_surat == 5)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(JURUSAN . '.surat.ditolak') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
        </div>
        @elseif($surat->status_surat == 6)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(JURUSAN . '.surat.terverifikasi') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
          <div class="col-sm-4" style="text-align: right">
              <button type="submit"class="btn btn-lg btn-success pull-right">
                  {{ __('Cetak') }}
              </button>
          </div>
        </div>
        @elseif($surat->status_surat == 7)
        <div class="row pl-3 pr-3">
          <div class="col-sm-8">
              <a href="{{ route(JURUSAN . '.surat.cetak') }}" class="btn btn-lg btn-primary">Kembali</a>
          </div>
          <div class="col-sm-4" style="text-align: right">
              <button type="submit"class="btn btn-lg btn-success pull-right">
                  {{ __('Cetak') }}
              </button>
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
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection