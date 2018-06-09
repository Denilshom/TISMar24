<table class="table">
    <thead>
    <th>Codigo Tribunal</th>
    <th>Nombres</th>
    <th>Operaciones</th>
    </thead>

    @foreach($tribunales as $tribunal)
        <tbody>
        <td>
            <span class="text-primary">{{$tribunal->code_number}}</span>
        </td>
        <td>
            {{$tribunal->name}} - {{$tribunal->surname}}
        </td>
        <td>
            <a href="/tribunales/delete/{{$tribunal->id}}" class="btn btn-primary" $title = 'EDITAR', title="Desea Cambiar?">Cambiar
                
            </a>
        </td>
        </tbody>
    @endforeach
</table>