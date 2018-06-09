
@extends('layouts.admin')
@section('content')
    <div class="col-sm-8 col-sm-offset-2">
        @include('alerts.request')
        {!!Form::open(['route'=>'area.store', 'method'=>'POST', 'class' => 'form-horizontal'])!!}
        <legend>Crear Area</legend>
        <div class="form-group">
            {!!Form:: label ('Nombre Area')!!}
            {!!Form::text('nameare',null, ['class'=>'form-control', 'placeholder'=>'Ingresar area'])!!}
        </div>
        {!!Form::submit('Registrar',['class'=>'btn btn-primary pull-right'])!!}
        {!!Form::close()!!}
    </div>
@endsection