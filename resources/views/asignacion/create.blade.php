@extends('layouts.admin')

@section('content')
{!!Form::open(['route'=>'asignacion.store', 'method'=>'POST'])!!}
<div class="form-group">

<div class="form-group">
	{!!Form::label('nombreProyectos','Proyectos:')!!}
	{!!Form::select('titulo_id',$proyectos)!!}
</div>

<div class="form-group">
	{!!Form::label('nombreProfesionales','Tribunal 1:')!!}
	{!!Form::select('name_id',$profesionales)!!}
</div>

<div class="form-group">
	{!!Form::label('nombreProfesionales','Tribunal 2:')!!}
	{!!Form::select('name_id',$profesionales)!!}
</div>

<div class="form-group">
	{!!Form::label('nombreProfesionales','Tribunal 3:')!!}
	{!!Form::select('name_id',$profesionales)!!}
</div>

</div>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@endsection
