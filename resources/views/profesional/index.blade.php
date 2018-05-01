@extends('layouts.admin')

@section('content')
		@include('alerts.success')
	<table class="table">
		<thead>
			<th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
			<th>Invitado</th>
            <th>Correo</th>
            <th>Area</th>
			<th>Operacion</th>
		</thead>

		@foreach($profesionals as $profesional)
			<tbody>
				<td>{{$profesional->name}}</td>
                <td>{{$profesional->surname}}</td>
                <td>{{$profesional->phone}}</td>
                <td>{{$profesional->invitado}}</td>
				<td>{{$profesional->email}}</td>
				<td>{{$profesional->nameare}}</td>
				
					{!!link_to_route('profesional.edit', $title = 'Editar', $parameters = $profesional->id, $attributes = ['class'=>'btn btn-primary'])!!}
					{!!Form::open(['route'=>['profesional.destroy', $profesional->id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tbody>
		@endforeach
	</table>
    {!!$profesionals->render()!!}
	@endsection
