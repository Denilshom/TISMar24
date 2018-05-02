<head>
    {{-- prueba 2 --}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

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


{{-- prueba 2 select dinamico --}}
{{-- {!!Form:: label ('Area')!!}
<div class="panel panel-default">
  <div class="panel-body">
  
  <div id="education_fields">
          
  </div>

<div class="col-sm-3 nopadding">
  <div class="form-group">
    <div class="input-group">
      <select name="nameare_id[]"  class="form-control" id="educationDate" >
	      @foreach($areas as $area)
	        <option value="{{ $area['id'] }}">{{$area['nameare']}}</option>
        @endforeach
      </select>
      <div class="input-group-btn">
        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div>
  
  </div>
  <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>
</div>

<script>
var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"> <select name="nameare_id"  class="form-control" id="educationDate">@foreach($areas as $area) <option value="{{ $area['id'] }}">{{$area['nameare']}}</option> @endforeach </select><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }
</script> --}}

{{-- fin prueba 2 select dinamico--}}
{{-- ahora --}}
<div class="input-group">
<label for="">Invitado:</label>
<select name="invitado"  class="form-control">
<option value="Si">SI</option>
<option value="No">NO</option>
</select>
</div>

<div class="input-group">
<label for="">Area:</label>
<select name="nameare_id[]"  size="3" class="form-control" id="educationDate" multiple>
	      @foreach($areas as $area)
	        <option value="{{ $area['id'] }}">{{$area['nameare']}}</option>
        @endforeach
</select>
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
