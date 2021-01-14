<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponsibility extends Model
{
    // una responsabilidad va tener varios jobtitles_subprocesse
    public function jobtitlessubprocesse()
    {
        return $this->hasMany('App\Jobtitlesubprocesse');
    }
}
