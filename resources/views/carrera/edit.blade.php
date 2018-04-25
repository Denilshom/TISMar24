@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
		{!!Form::model($carrera,['route'=>['carrera.update',$carrera],'method'=>'PUT'])!!}
			@include('carrera.forms.carrer')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['carrera.destroy', $carrera], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection