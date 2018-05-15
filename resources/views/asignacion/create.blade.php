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
    {!! Form::select('tri_1',$profesionales,null) !!}

</div>

<div class="form-group">
	{!!Form::label('nombreProfesionales','Tribunal 3:')!!}
	{!!Form::select('tri_2',$profesionales)!!}
</div>

</div>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@endsection
@push('scripts')
    <script>
        $("select[name='name_id']").change(function(){
            var id_name1 = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('select-ajax') ?>",
                method: 'POST',
                data: {id_pro:id_name1, _token:token},
                success: function(data) {
                    $("select[name='tri_1'").html('');
                    $("select[name='tri_1'").html(data.options);
                }
            });
        });
    </script>
@endpush
