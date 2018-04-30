<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Requests\AreaCreateRequest;
use Cinema\Http\Requests\AreaUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\Profesional;
use Cinema\Area;
use Session;
use Redirect;

class ProfesionalController extends Controller
{
    
     public function index()
     {
        $profesionals=Profesional::Profesionals();

        return view('profesional.index',compact('profesionals'));
     }
    
    public function create()
    {
        $areas=Area::all();
        return view('profesional.create', compact('areas'));

    }

    
    public function store(Request $request)
    {
        Profesional::create($request->all());

        return redirect('/profesional')->with('message','Creado exitosamente');
    }

    
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
      //
    }

    
     public function update(AreaUpdateRequest $request, $id)
     {
         //
     }

    
     public function destroy($id)
     {
        //
     }
}
