<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use DB;

class Profesional extends Model
{
    //
    protected $table="profesionals";

    protected $fillable = [
        'name','surname','phone','invitado','nameare_id','email','password'
    ];

    public static function Profesionals(){
        return DB::table('profesionals')
            ->join('areas','areas.id','=','profesionals.nameare_id')
            -> select('profesionals.*','areas.nameare')
            ->paginate(2);
  
      }
}
