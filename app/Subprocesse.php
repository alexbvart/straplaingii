<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subprocesse extends Model
{
    /* 1-* inversa
    * varios sub procesos va ser parte de un proceso 
    */
    public function processe()
    {
        return $this->belongsTo('App\Processe');
    }
    
}
