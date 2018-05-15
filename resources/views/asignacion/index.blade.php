@extends('layouts.admin')
@section('content')
  <table class="table">
  		<thead>
				<th>Proyecto asignado</th>

        
  			<th>Operacion</th>
  		</thead>

  		@foreach($asignaciones as $var)
  			<tbody>
  				<td>{{$var->titulo}}</td>
          {{-- <td>{{$var->tutor}}</td> --}}


  				<td>
  					{!!link_to_route('asignacion.show',$title = 'Ver',[$var->id], $attributes = ['class'=>'btn btn-primary'])!!}
  					{{-- {!!Form::open(['route'=>['asignacion.destroy', $var->id], 'method' => 'DELETE'])!!}
  						{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
  					{!!Form::close()!!} --}}
  				</td>
  			</tbody>
  		@endforeach
  	</table>
    {{-- {!!$var->render()!!} --}}
@endsection
