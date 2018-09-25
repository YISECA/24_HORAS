<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Form extends Model

{
   protected $table = '24_horas_2018';
   protected $primaryKey = 'id';
   protected $fillable = ['localidad'];

    public function equipo()
    {
        return $this->hasOne('App\Equipo','id','id_equipo');
    }

    public function localidades()
   {
       return $this->belongsTo('App\Localidad','localidad');
   }
}



