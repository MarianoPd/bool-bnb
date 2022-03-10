<?php

namespace App\Http\Controllers\Host;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sponsorship;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Flat;

class PlansController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug)
    {
        $loggedUser = Auth::user();
        $plans = Sponsorship::all();
        
        return view('host.plans', compact('plans','slug'));
    }

    public function goToPayment($slug, $plan){
        $sponsorship = Sponsorship::find($plan);
        //dd($sponsorship);
        $flat = Flat::where('slug',$slug)->first();
        $request = Request::create('api/orders/generate', 'GET');
        $response = json_decode(Route::dispatch($request)->getContent());
        
        return view('host.payment', compact('flat','response','sponsorship'));
    }

    public function pay($token, $cardN){

    }
    

    
}
