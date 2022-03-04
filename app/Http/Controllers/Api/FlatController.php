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
        return response()->json($flats);
    }

    // funzione show singolo flat
    public function show($slug){

        $flat = Flat::where('slug', $slug)->with('service')->first();

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
}
