<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponsibility extends Model
{
    protected $fillable = [
        'name'
    ];

    // una responsabilidad va tener varios jobtitles_subprocesse
    public function jobtitlessubprocesse()
    {
        return $this->hasMany('App\Jobtitlesubprocesse');
    }
}
