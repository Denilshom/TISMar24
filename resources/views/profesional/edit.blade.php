@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
        {!!Form::model($profesional,['route'=>['profesional.update',$profesional],'method'=>'PUT'])!!}
			@include('profesional.forms.profesiona')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
