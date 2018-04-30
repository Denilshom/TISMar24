<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Requests\ProyCreateRequest;
use Cinema\Http\Requests\ProyUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\Proyecto;
use Cinema\Modalidad;
use Cinema\Carrera;
use Cinema\Area;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class ProyectoController extends Controller
{
    public function __construct(){
        //  $this->middleware('auth');
        //  $this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }


    public function find(Route $route){
        $this->proyecto = Proyecto::find($route->getParameter('proyect'));
    }
    public function index()
    {
        $proyectos = Proyecto::Proyectos();
        //return $proyectos;
        return view('proyecto.index',compact('proyectos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras=Carrera::lists('namecarre','id');
        $areas=Area::lists('nameare','id');
        $modalidads=Modalidad::lists('namemodal','id');
        return view('proyecto.create',compact('carreras','areas','modalidads'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyCreateRequest $request)
    {
        Proyecto::create($request->all());
        // Proyecto::create([
        //     'titulo' => $request['titulo'],
        //     'autor' => $request['autor'],
        //     'tutor' => $request['tutor'],
        //     // 'namemodal' => $request['namemodal'],
        //     // 'namecarre' => $request['namecarre'],
        //     // 'nameare' => $request['nameare'],
        //     'path' => $request['path'],
        // ]);
        return redirect('/proyecto')->with('message','Creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $proyecto = Proyecto::find($id);
        // return view('proyecto.edit',['proyecto'=>$proyecto]);
        $carreras = Carrera::lists('namecarre','id');
        $areas = Area::lists('nameare','id');
        $modalidads = Modalidad::lists('namemodal','id');
        return view('proyecto.edit',['proyecto'=>$this->proyecto,'carreras'=>$carreras,'modalidads'=>$modalidads,'areas'=>$areas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProyUpdateRequest $request, $id)
    {
        //$proyecto = Proyecto::find($id);
        $this->proyecto->fill($request->all());
        $this->proyecto->save();
        Session::flash('message','Proyecto Actualizado Correctamente');
        return Redirect::to('/proyecto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->proyecto->delete();
        \Storage::delete($this->proyecto->path);
        Session::flash('message','Proyecto Eliminado Correctamente');
        return Redirect::to('/proyecto');
    }
}
