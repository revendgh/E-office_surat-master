<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('number', 'no_induk_pegawai_unit', 'No Induk Pegawai') !!}
			{!! Form::myInput('text', 'jabatan_unit', 'Jabatan Unit Kerja') !!}
			{!! Form::mySelect('unit', 'Unit Kerja', config('variables.unit'), null, ['class' => 'form-control select2']) !!}
		</div>  
	</div>
</div>