<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use DB;

class Profesional extends Model
{
    //
    protected $table="profesionals";

    protected $fillable = [
        'name','surname','phone','invitado','nameare_id','namecarre_id','email','password'
    ];

    public static function Profesionals(){
        return DB::table('profesionals')
            ->join('areas','areas.id','=','profesionals.nameare_id')
            ->join('carreras','carreras.id','=','profesionals.namecarre_id')
            -> select('profesionals.*','areas.nameare','carreras.namecarre')
            ->paginate(2);
  
      }
}
