<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Cinema\Profesional;
use Cinema\Proyecto;
use Cinema\Assignment;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use DB;
class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$asignaciones=Assignment::Asignaciones();
        $asignaciones=Assignment::AsignacionesTribu();

      // return $asignaciones;
      return view('asignacion.index', compact('asignaciones'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesionales=Profesional::lists('name','id');
        $proyectos=Proyecto::lists('titulo','id');
      


        return view('asignacion.create',compact('profesionales','proyectos'));

    }
    public function selectAjax(Request $request)
    {
        if($request->ajax()){
            // $tribunales = DB::table('profesionals')->whereNotIn('id', [$request->id_pro])->pluck("name","id")->all();
           // $tribunales = DB::table('profesionals')->where('id', $request->id_pro)->pluck('name','id') ->select(...)->get();;
        //    $tribunales = DB::table('profesionals')->where('id',$request->id_pro)->pluck("name","id")->all();
          //  ModelName::whereNotIn()
             $tribunales =   Profesional::select('name','id')->whereNotIn('id', [$request->id_pro])->get();
          //  dd($tribunales);
          //  $states = DB::table('profesionals')->where('id', '',$request->id_pro)->pluck("name","id")->all();
           $data = view('ajax-select',compact('tribunales'))->render();
           // return response()->json(['options'=> $request->id_pro]);
            return response()->json(['options'=> $data]);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();

    //    dd($request->all()['titulo_id']);
        /**
         *   #parameters: array:5 [▼
        "_token" => "fejGhaa9df2FJvupAVmL3IBLB1d838CflRJa2cGn"
        "titulo_id" => "1"
        "name_id" => "1"
        "tri_1" => "1"
        "tri_2" => "1"
         */
      //  Assignment::create($request->parameters);

        $tribunal = new Assignment();
        $tribunal->titulo_id =$datos['titulo_id'];
        $tribunal->name_id = $datos['name_id'];
        $tribunal->save();

        $tribunal1 = new Assignment();
        $tribunal1->titulo_id =$datos['titulo_id'];
        $tribunal1->name_id = $datos['tri_1'];
        $tribunal1->save();

        $tribunal2 = new Assignment();
        $tribunal2->titulo_id =$datos['titulo_id'];
        $tribunal2->name_id = $datos['tri_2'];
        $tribunal2->save();

        return redirect('/asignacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $asignaciones = Assignment::where('titulo_id', $id)->get();
       $proyecto = Proyecto::findOrFail($id);
        return view('asignacion.show', compact('asignaciones','proyecto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignaciones=Assignment::Asignaciones();
      // return $asignaciones;
      return view('asignacion.edit', compact('asignaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
