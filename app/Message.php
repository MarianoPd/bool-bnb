<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flat;

class Message extends Model
{
    protected $fillable = [
        'flat_id',
        'text',
        'email'
    ];

    public function flat(){
        return $this->belongsTo('App\Flat');
    }
}
