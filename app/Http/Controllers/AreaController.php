<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Requests\AreaCreateRequest;
use Cinema\Http\Requests\AreaUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\Area;
use Session;
use Redirect;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $areas = Area::paginate($this->PAGE_SIZE);
          //$areas = Area::getAreas();
         return view('area.index',compact('areas'));
     }

     public function getSubAreas($area) {
         $subareas = Area::getSubAreas($area);
         return view('area.subareas', compact('subareas'));
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas=Area::getAreas();
       // $areas=Area::all();
       // dd($areas);
        return view('area.create', compact('areas'));

    }
    public function createAreas()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
       // $areas=Area::all();
        //$areas=Area::all();
       // dd($areas);
        return view('area.creararea');
    }
    
    
    public function store(AreaCreateRequest $request)
    {
      Area::create([
          'nameare' => $request['nameare'],
          'area_id' => $request['area_id'],

      ]);
      return redirect('/area')->with('message','creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $area = Area::getAreas();
      return view('area.edit',['area'=>$area]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(AreaUpdateRequest $request, $id)
     {
         $area = Area::find($id);
         $area->fill($request->all());
         $area->save();
         Session::flash('message','Area Actualizado Correctamente');
         return Redirect::to('/area');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         Area::destroy($id);
         Session::flash('message','Area Eliminado Correctamente');
         return Redirect::to('/area');
     }
}
