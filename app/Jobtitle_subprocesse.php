<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtitle_subprocesse extends Model
{
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
