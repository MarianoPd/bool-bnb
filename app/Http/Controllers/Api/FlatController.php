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
}
