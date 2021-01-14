<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtitle extends Model
{
    /* 1-* inversa
    * varios puestos va ser parte de un area 
    */
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
}
