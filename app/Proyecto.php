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
        'titulo','autor','tutor','namecarre_id','nameare_id','namemodal_id','descripcion','path'
    ];

    public function setPathAttribute($path){
        if(! empty($path)){
        //$this->attributes['path']=Carbon::now()->second.$path->getClientOriginalName();
        $name=Carbon::now()->second.$path->getClientOriginalName();
        $this->attributes['path'] = $name;
        \Storage::disk('local')->put($name,\File::get($path));
        }
    }
    
    public static function Proyectos(){
		return DB::table('proyectos')
            ->join('carreras','carreras.id','=','proyectos.namecarre_id')
            ->join('areas','areas.id','=','proyectos.nameare_id')
            ->join('modalidads','modalidads.id','=','proyectos.namemodal_id')
            ->select('proyectos.*', 'carreras.namecarre','areas.nameare','modalidads.namemodal')   
            ->paginate(10);
     }

     

    protected $hidden = [
        // 'password', 'remember_token',
    ];
}
