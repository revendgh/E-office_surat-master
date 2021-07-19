<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'nim', 'Nomor Induk Mahasiswa') !!}
			{!! Form::mySelect('prodi', 'Program Studi', config('variables.prodi'), null, ['class' => 'form-control select2']) !!}
			{!! Form::mySelect('jurusan_mahasiswa', 'Jurusan', config('variables.jurusan'), null, ['class' => 'form-control select2']) !!}
		</div>  
	</div>
</div>