<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\Role;
use Cinema\User;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class UsuarioController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }


    public function find(Route $route){
        $this->user = User::find($route->getParameter('usr'));
    }
    public function index()
    {

        $users=User::Users();

         //$usert= User::paginate(2);
        //  return $users;
        // $users = User::all();
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //$roles = Role::lists('nameRol', 'id');
      $roles = Role::all();     //prueba
      return view('usuario.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {

      // User::create($request->all());
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'surname' => $request['surname'],
            'phone' => $request['phone'],
            'nameRol_id' => $request['nameRol_id'],
        ]);
        Session::flash('message','Usuario creado Correctamente');
        return redirect('/usuario');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        // $user = User::find($id);
        // return view('usuario.edit',['user'=>$user]);
        $roles = Role::all(); 
        return view('usuario.edit',['user'=>$this->user,'roles'=>$roles]);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario actualizado Correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }
}
