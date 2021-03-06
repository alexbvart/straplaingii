<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtitle extends Model
{

    protected $fillable = [
        'name',
        'area_id'
    ];

    /* 1-* inversa
    * varios puestos va ser parte de un area 
    */
    public function area()
    {
        return $this->belongsTo('App\Area');
    }


    /* *-* 
    * varios sub procesos vs varios jobstitles 
    */
    public function subprocesses()
    {
        return $this->belongsToMany('App\Subprocesse');
    }
}
