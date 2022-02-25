<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Flat extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'city',
        'province',
        'address',
        'latitude',
        'longitude',
        'room_number',
        'bed_number',
        'bathroom_number',
        'square_meters',
        'cover',
        'cover_original_name',
        'visible'
    ];

    public static function getSlug($title){
        $slug = Str::slug($title,'-');
        $old_slug = $slug;
        $count = 1;
        
        $is_present = Flat::where('slug',$slug)->first();
        while($is_present){
            $slug = $old_slug . '-' . $count++;
            $is_present = Flat::where('slug',$slug)->first();
        }
        return $slug;
    }

    public function services(){
        return $this->belongsToMany('App\Service');
    }

    public function messages(){
        return $this->hasMany('App\Message');
    }

    public function sponsorships(){
        return $this->belongsToMany('App\Sponsorship');
    }
}
