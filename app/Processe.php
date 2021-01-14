<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processe extends Model
{
    // un proceso va tener varios subprocesos
    public function subprocesses()
    {
        return $this->hasMany('App\Subprocesse');
    }
}
