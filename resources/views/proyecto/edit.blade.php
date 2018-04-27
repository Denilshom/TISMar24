@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
		{!!Form::model($proyecto,['route'=>['proyecto.update',$proyecto],'method'=>'PUT'])!!}
			@include('proyecto.forms.proyect')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
		{!!Form::open(['route'=>['proyecto.destroy', $proyecto], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
		
	@endsection