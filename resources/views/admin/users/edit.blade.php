@extends('admin.default')

@section('page-header')
	User <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'route'  => [ ADMIN . '.users.update', $item->id ],
			'method' => 'put',
			'files'  => true
		])
	!!}

		@include('admin.users.form')
		<div id="mahasiswa" style="display: none">
			@include('admin.users.mahasiswa')
		</div>
		<div id="tendik_jurusan" style="display: none">
			@include('admin.users.jurusan')
		</div>
		<div id="pegawai" style="display: none">
			@include('admin.users.pegawai')
		</div>
		<div id="warektor" style="display: none">
			@include('admin.users.warektor')
		</div>
		<div id="unit" style="display: none">
			@include('admin.users.unit')
		</div>

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
@section('script')
<script>
function displayForm(elem){
   	if(elem.value == "1") {
     	document.getElementById('mahasiswa').style.display = "block";
     	document.getElementById('tendik_jurusan').style.display = "none";
     	document.getElementById('pegawai').style.display = "none";
     	document.getElementById('warektor').style.display = "none";
     	document.getElementById('unit').style.display = "none";
    }
    if(elem.value == "11"){
    	document.getElementById('mahasiswa').style.display = "none";
     	document.getElementById('tendik_jurusan').style.display = "block";
     	document.getElementById('pegawai').style.display = "none";
     	document.getElementById('warektor').style.display = "none";
     	document.getElementById('unit').style.display = "none";

    }
    if(elem.value == "10" || elem.value == "5" || elem.value == "6" || elem.value == "8" || elem.value == "100" ){
    	document.getElementById('mahasiswa').style.display = "none";
     	document.getElementById('tendik_jurusan').style.display = "none";
     	document.getElementById('pegawai').style.display = "block";
     	document.getElementById('warektor').style.display = "none";
     	document.getElementById('unit').style.display = "none";

    }
    if(elem.value == "4"){
    	document.getElementById('mahasiswa').style.display = "none";
     	document.getElementById('tendik_jurusan').style.display = "none";
     	document.getElementById('pegawai').style.display = "none";
     	document.getElementById('warektor').style.display = "none";
     	document.getElementById('unit').style.display = "block";

    }
    if(elem.value == "7"){
    	document.getElementById('mahasiswa').style.display = "none";
     	document.getElementById('tendik_jurusan').style.display = "none";
     	document.getElementById('pegawai').style.display = "none";
     	document.getElementById('warektor').style.display = "block";
     	document.getElementById('unit').style.display = "none";

    }
}
</script>
@endsection
