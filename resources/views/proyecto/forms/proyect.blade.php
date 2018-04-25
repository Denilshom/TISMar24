<div class="form-group">
 {!!Form:: label ('Titulo')!!}
 {!!Form::text('titulo',null, ['class'=>'form-control', 'placeholder'=>'Ingresar Titulo'])!!}
</div>
<div class="form-group">
		{!!Form::label('Autor')!!}
		{!!Form::text('autor',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del Autor'])!!}
</div>
<div class="form-group">
		{!!Form::label('Tutor')!!}
		{!!Form::text('tutor',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del Tutor'])!!}
</div>

<div class="form-group">
	{!!Form::label('Carrera','Carrera:')!!}
	{!!Form::select('namecarre_id',$carreras)!!}
</div>


<div class="form-group">
    	{!!Form::label('Proyecto','Proyecto:')!!}
    	{!!Form::file('path')!!}
</div>
<div class="form-group">
         {!!Form:: label ('Descripción')!!}

            <textarea class="form-control" rows="5" placeholder="Descripcion del proyecto"></textarea>

</div>
