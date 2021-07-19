<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('number', 'no_induk_pegawai_jurusan', 'No Induk Pegawai') !!}
			{!! Form::mySelect('jurusan_jurusan', 'Jurusan', config('variables.jurusan'), null, ['class' => 'form-control select2']) !!}
		</div>  
	</div>
</div>