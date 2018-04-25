<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Carbon\carbon;
use DB;

class Proyecto extends Model
{
   // use Notifiable;
   protected $table="proyectos";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo','autor','tutor','namecarre_id','path'
    ];

    public function setPathAttribute($path){
        $this->attributes['path']=Carbon::now()->second.$path->getClientOriginalName();
        $name=Carbon::now()->second.$path->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($path));
    }
    
    
    public static function Proyectos(){
		return DB::table('proyectos')
			->join('carreras','carreras.id','=','proyectos.namecarre_id')
			->select('proyectos.*', 'carreras.namecarre')
            ->get();
     }

     

    protected $hidden = [
        // 'password', 'remember_token',
    ];
}
