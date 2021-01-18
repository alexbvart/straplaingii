<?php

namespace App;
use App\Reponsibility;

use Illuminate\Database\Eloquent\Model;

class Jobtitlesubprocesse extends Model
{
    //
    protected $fillable = [
        'subprocesse_id',
        'jobtitle_id',
        'reponsibility_id'
    ];
    
    public function reponsibility()
    {
        return $this->belongsTo('App\Reponsibility');
    }

}
