
<legend>Crear Sub-Areas</legend>

<div class="form-group">
    {!!Form:: label ('Nombre SubArea')!!}
    {!!Form::text('nameare',null, ['class'=>'form-control', 'placeholder'=>'Ingresar area'])!!}
</div>

<div class="form-group">
		{!!Form::label('area_id','Elige Area:', ['class' => 'col-sm-2 control-label'])!!}
		
			<select name="area_id" class="form-control js-example-basic-single" id="area_id">
				@foreach($areas as $area)
					<option value="{{ $area->id }}">{{$area->nameare}}</option>
				@endforeach
			</select>
		
</div>

