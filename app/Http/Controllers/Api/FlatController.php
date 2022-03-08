<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Flat;
use App\Service;

class FlatController extends Controller
{
    public function index(){
        $flats = Flat::all();

        //dd($flats);
        $flats->each(function($flat){
            if ($flat->cover) {
                $flat->cover = url('storage/' . $flat->cover);
            }
            else {
                $flat->cover = url('img/no-image.jpg');
            }
        });
        return response()->json($flats);
    }

    // funzione show singolo flat
    public function show($slug){

        $flat = Flat::where('slug', $slug)->with('services')->first();

        // percorsi assoluti
        if ($flat->cover) {
            $flat->cover = url('storage/' . $flat->cover);
        }else{
            $flat->cover = url('placeholder-image/placeholder.jpeg');
        }

        if (!$flat) {
            $flat = [
                'title_post' => 'Post non trovato',
                'content' => `<router-link :to="{name: 'appartamenti'}">Torna alla lista dei post</router-link>`];
        }

        return response()->json($flat);

    }

    public function getFlatsBySearch($lat, $lon){
            
            
            $flats = Flat::all();
            $ret_flats = [];
            foreach($flats as $flat){
                $distance = $this->distance($lat, $lon, $flat->latitude, $flat->longitude);
                if($distance < 20){
                    if ($flat->cover) {
                        $flat->cover = url('storage/' . $flat->cover);
                    }
                    else {
                        $flat->cover = url('img/no-image.jpg');
                    }
                    array_push($ret_flats, $flat);                    
                }
            }
            return response()->json($ret_flats);
    }

    private function distance($lat1, $lon1, $lat2, $lon2) {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
          return 0;
        }
        else {
          $theta = $lon1 - $lon2;
          $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
          $dist = acos($dist);
          $dist = rad2deg($dist);
          $miles = $dist * 60 * 1.1515;
          return ($miles * 1.609344);
      
        }
    }
}
