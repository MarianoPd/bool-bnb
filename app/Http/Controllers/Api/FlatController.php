<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Flat;

class FlatController extends Controller
{
    public function index(){
        $flats = Flat::all();

        //dd($flats);
        return response()->json($flats);
    }
}
