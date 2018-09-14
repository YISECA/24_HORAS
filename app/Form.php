<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Form extends Model

{
   protected $table = '24_horas';

    public function equipo()
    {
        return $this->hasOne('App\Equipo','id','id_equipo');
    }
}



