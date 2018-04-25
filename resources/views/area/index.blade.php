@extends('layouts.admin')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

	@section('content')
	<table class="table">
		<thead>
			<th>Nombre del Area</th>


			<th>Operacion</th>
		</thead>
		@foreach($areas as $area)
			<tbody>
				<td>{{$area->name_area}}</td>

				<td>
					{!!link_to_route('area.edit', $title = 'Editar', $parameters = $area, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
		@endforeach
	</table>
  {!!$areas->render()!!}
	@endsection
