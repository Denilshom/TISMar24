<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SATUMSS</title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>



<body>

    <div>
        <nav class="navbar " style="background-color: #000000;" >
            <br>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#" >
                    <img src="images/UMSS.png" width="70" hidth="70" class="d-inline-block align-top">

                </a>
                <h2 style="color:#5F6A6A;">Sistema De Asignación De Tribunales UMSS </h2>

            </nav>
            <br>
        </nav>
    </div>

    <!-- wp -->
    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" ; href="index.html">Inicio</a>
                {{-- <a class="navbar-brand" ; href="index.html">acerca de</a> --}}


            </div>


            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        {{-- {!!Auth::user()->name!!} --}}
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <br>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>

                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Crear Usuario<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                            <li>
                                                <a href="{!!URL::to('/usuario/create')!!}"><i class=''></i> Adminitrador</a>
                                            </li>
                                            <li>
                                                <a href="{!!URL::to('/auxiliar/create')!!}"><i class=''></i> Auxiliar</a>
                                            </li>
                                            <li>
                                                <a href="{!!URL::to('/profesional/create')!!}"><i class=''></i> Profesional</a>
                                            </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-list-ol fa-fw"></i>Lista Usuario<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                            <li>
                                                <a href="{!!URL::to('/usuario')!!}"><i class=''></i> Administradores</a>
                                            </li>
                                            <li>
                                                <a href="{!!URL::to('/auxiliar')!!}"><i class=''></i> Auxiliares</a>
                                            </li>
                                            <li>
                                                <a href="{!!URL::to('/profesional')!!}"><i class=''></i> Profesionales</a>
                                            </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class=""></i> Area<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/area/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/area')!!}"><i class='fa fa-list-ol fa-fw'></i> Areas</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class=""></i> Proyecto<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/proyecto/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Proyecto</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/proyecto')!!}"><i class='fa fa-list-ol fa-fw'></i> Proyectos</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/carrera/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Carrera</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/carrera')!!}"><i class='fa fa-list-ol fa-fw'></i> Carreras</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/modalidad/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Modalidad</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/modalidad')!!}"><i class='fa fa-list-ol fa-fw'></i> Modalidades</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class=""></i> Asignar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/asignacion/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Asignacion</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/modalidad')!!}"><i class='fa fa-list-ol fa-fw'></i> Asignaciones</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>


    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

    @stack('scripts')
</body>

<!-- Footer -->

<div id="copyright text-right"> Copyright CabacDev's 2018 </div>
<br>

</html>
