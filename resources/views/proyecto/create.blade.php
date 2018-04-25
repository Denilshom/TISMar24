@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
	{!!Form::open(['route'=>'proyecto.store', 'method'=>'POST', 'files'=>true])!!}
		@include('proyecto.forms.proyect')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection