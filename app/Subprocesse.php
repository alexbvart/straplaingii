<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subprocesse extends Model
{
    protected $fillable = [
        'name'
    ];

    /* 1-* inversa
    * varios sub procesos va ser parte de un proceso 
    */
    public function processe()
    {
        return $this->belongsTo('App\Processe');
    }

    /* *-* 
    * varios sub procesos vs varios jobstitles 
    */
    public function jobstitles()
    {
        return $this->belongsToMany('App\Jobtitle');
    }
    
}
