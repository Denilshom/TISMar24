
<h1>Titulo del Proyecto:{{$proyectos->titulo}}</h1>
<h2>Autor:{{$proyectos->author}}</h2>
<h2>Tutor:{{$proyectos->tutor_data}}</h2>
     @foreach($proyectos->proyectoDetalle as $proyecto)
        <h2>Tribunales:
                @foreach($proyecto->proyectoTribunales as $profesional)
                    <span class="badge badge-success">
                        {{$profesional->name}}  {{$profesional->surname}}
                    </span> <br>
                @endforeach
    
    </h2>
    @endforeach

<h2>Nombre de Archivo:<a>{{$proyectos->path}}</h2>
<h2>Descripcion:{{$proyectos->descripcion}}</h2>