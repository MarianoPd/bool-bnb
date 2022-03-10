<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SponsorshipResource;
use Illuminate\Http\Request;
use App\Sponsorship;


class SponsorshipController extends Controller
{
    public function index(Request $request){
        $sponsorships = Sponsorship::all();

        return SponsorshipResource::collection($sponsorships);
    }
}
