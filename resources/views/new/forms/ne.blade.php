
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
<label for="">Invitado:</label>
<select name="invitado"  class="form-control">
<option value="001">SI</option>
<option value="002">NO</option>
</select> 
</div>

<!-- select dinamico -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="panel panel-default">
  <div class="panel-body">
  
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <div class="input-group">
      <select class="form-control" id="educationDate" name="educationDate[]">
      
        <option value="">Date</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
      <div class="input-group-btn">
        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      </div>
    </div>
  </div>
</div>

<div class="clear"></div>
  
</div>
<div class="panel-footer"><small>Presione <span class="glyphicon glyphicon-plus gs"></span> para agregar otro campo</small>, <small>Presione <span class="glyphicon glyphicon-minus gs"></span> para eliminar un campo</small></div>
</div>