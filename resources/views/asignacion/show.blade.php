@extends('layouts.admin')
@section('content')

	<h4> Nombre del Proyecto : {{ $proyecto->titulo }}</h4>
  <table class="table">
		
  		<thead>
			<th>Tribunales</th>

  			<th>Operacion</th>
  		</thead>

  		@foreach($asignaciones as $assigned)
  			<tbody>
				<td>{{$assigned->titulo_id}}</td>
  				<td>{{ \Cinema\Profesional::findOrFail($assigned->name_id)->name }}</td>

  				<td>

  					{{-- {!!Form::open(['route'=>['asignacion.destroy', $var->id], 'method' => 'DELETE'])!!}
  						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
  					{!!Form::close()!!} --}}
  				</td>
  			</tbody>
  		@endforeach
  	</table>
    {{-- {!!$var->render()!!} --}}
@endsection
