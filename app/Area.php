<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //// un área va tener varios cargos
    public function jobtitles()
    {
        return $this->hasMany('App\Jobtitle');
    }
}
