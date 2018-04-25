@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
		{!!Form::model($area,['route'=>['area.update',$area],'method'=>'PUT'])!!}
			@include('area.forms.ar')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['area.destroy', $area], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection
