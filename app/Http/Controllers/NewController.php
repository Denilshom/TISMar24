<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Requests\AreaCreateRequest;
use Cinema\Http\Requests\AreaUpdateRequest;
use Cinema\Http\Controllers\Controller;
//use Cinema\New;
use Session;
use Redirect;

class NewController extends Controller
{
    
     public function index()
     {
        //
     }
    
    public function create()
    {
        return view('new.create');
    }

    
    public function store(AreaCreateRequest $request)
    {
      //
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
