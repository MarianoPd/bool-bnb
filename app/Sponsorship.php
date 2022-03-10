<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    public function flats(){
        return $this->belongsToMany('App\Flat')->withPivot('created_at')->orderBy('created_at','DESC');
    }
}
