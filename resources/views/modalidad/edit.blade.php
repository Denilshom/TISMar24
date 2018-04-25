@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
		{!!Form::model($modalidad,['route'=>['modalidad.update',$modalidad],'method'=>'PUT'])!!}
			@include('modalidad.forms.modalida')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['modalidad.destroy', $modalidad], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection