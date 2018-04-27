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
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $proyecto = Proyecto::find($id);
        return view('proyecto.edit',['proyecto'=>$proyecto]);
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
        $proyecto = Proyecto::find($id);
        $proyecto->fill($request->all());
        $proyecto->save();
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
        Proyecto::destroy($id);
        Session::flash('message','Proyecto Eliminado Correctamente');
        return Redirect::to('/proyecto');
    }
}
