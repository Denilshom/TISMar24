<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use DB;

class Assignment extends Model
{
    protected $table='assignments';
    protected $fillable=['name_id','titulo_id'];


    public static function Asignaciones(){
      return DB::table('assignments')
          ->join('profesionals','profesionals.id','=','assignments.name_id')
          ->join('proyectos','proyectos.id','=','assignments.titulo_id')
          -> select('profesionals.name','proyectos.titulo')
         
          ->get();
        

    }
    public static function Asignaciones1(){
      return DB::table('assignments')
          ->join('profesionals','profesionals.id','=','assignments.name_id')
          ->join('proyectos','proyectos.id','=','assignments.titulo_id')
          -> select('profesionals.name','profesionals.id')
          // -> where('profesionals.name', '=', 'proyectos.tutor')
          ->get();
          // ->paginate(2);

    }
    public static function Asignaciones2(){
      return DB::table('assignments')
          ->join('profesionals','profesionals.id','=','assignments.name_id')
          ->join('proyectos','proyectos.id','=','assignments.titulo_id')
          -> select('proyectos.titulo','proyectos.id')
          // -> where('profesionals.name', '=', 'proyectos.tutor')
          ->get();
          // ->paginate(2);

    }
}
