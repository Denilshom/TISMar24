@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
		{!!Form::model($proyecto,['route'=>['proyecto.update',$proyecto],'method'=>'PUT','files' => true])!!}
			@include('proyecto.forms.proyect')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
	@endsection