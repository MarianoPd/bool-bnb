<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flat;



class Service extends Model
{

    public function flats(){
        return $this->belongsToMany('App\Flat');
    }
}
