@extends('layouts.admin')
@section('content')
    <legend>Lista de proyectos</legend>
    <div class="alert alert-info">
        La lista de proyectos donde se visualiza cuantos tribunales asignados tiene en la columna Tribunales.
    </div>
    <table class="table">
        <thead>
        <th>Proyecto</th>
        <th>Descripcion</th>
        <th>Tribunales</th>
        <th>Operaciones</th>
        </thead>

        @foreach($proyectos as $proyecto)
            <tbody>
            <td>{{$proyecto->titulo}}</td>
            <td>
                {{$proyecto->descripcion}}
            </td>
            <td>
                @foreach($proyecto->proyectoTribunales as $profesional)
                    <span class="badge badge-success">
                        {{$profesional->name}} - {{$profesional->surname}} - {{$profesional->code_number}}
                    </span> <br>
                @endforeach
            </td>
            <td>
            {!!link_to_route('asignacion.edit', $title = 'CAMBIAR', $parameters = $proyecto->id, $attributes = ['class'=>'btn btn-success'])!!}
            {{-- {!!link_to_route('asignacion.show', $title = 'PDF', $parameters = $proyecto->id, $attributes = ['class'=>'btn btn-danger'])!!} --}}
            </td>
            </tbody>
        @endforeach
    </table>
    {!!$proyectos->render()!!}
    {{-- {!!$var->render()!!} --}}
@endsection
