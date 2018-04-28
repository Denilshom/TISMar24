<br>
<!-- desde aqui empieza la prueba de new usuario -->
<!-- <select onchange="window.location.href='{!!URL::to('/new/create')!!}'">
<option value="001">Administrador</option>
<option value="002">Auxiliar</option>
<option value="002">Tribunal</option>
</select> -->

{{-- <div class="form-group">
<label for="">Rol</label>
<select name="nameRol_id"  class="form-control" onchange="window.location.href='{!!URL::to('/new/create')!!}'">
	@foreach($roles as $var)
	<option value="{{ $var['id'] }}">{{$var['nameRol']}}</option>

	@endforeach
</select>
</div> --}}

<!-- fin prueba -->
<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>

<div class="form-group">
 {!!Form:: label ('Apellido')!!}
 {!!Form::text('surname',null, ['class'=>'form-control', 'placeholder'=>'Ingresar apellido'])!!}
</div>

<div class="form-group">
{!!Form:: label ('Telefono')!!}
{!!Form::text('phone',null, ['class'=>'form-control', 'placeholder'=>'Ingresa el numero de telefono'])!!}
</div>

<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>

<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la contraseña del usuario'])!!}
</div>

<div class="form-group">
    {!!Form:: label ('Confirmar contrasena')!!}
    {!!Form::password('confirmar_contrasena',['class'=>'form-control', 'placeholder'=>'Ingresa la misma contrasena del usuario'])!!}
</div>
