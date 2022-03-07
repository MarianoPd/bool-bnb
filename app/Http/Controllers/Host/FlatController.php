<?php

namespace App\Http\Controllers\Host;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Flat;
use App\Service;
use App\User;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loggedUser = Auth::user();
        $userId = $loggedUser->getAuthIdentifier();
        
        $flats = User::where('id', $userId)->first()->flats;
        return view('host.flats.index', compact('flats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('host.flats.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationData(), $this->validationErrors());

        $data = $request->all();
        
        $data['slug'] = Flat::getSlug($data['title']);

        // bisogna modificare migration flats per salvare lat e long(non sono stringhe)
        //dd($data);


        // controllo input image
        if (array_key_exists('cover', $data )) {
            
            // prendere il nome originale dell'immagine
            $data['cover_original_name'] = $request->file('cover')->getClientOriginalName();
            // salvare image e il percorso dell'image
            $cover_route = Storage::put('uploads', $data['cover']);
            $data['cover'] = $cover_route;
        };

        

        $new_flat = new Flat;
        $new_flat->fill($data);
        $new_flat['user_id'] = Auth::user()->getAuthIdentifier();
        
        $new_flat->save();

        if(array_key_exists('services', $data)){
            $new_flat->services()->attach($data['services']);
        };
            
        return redirect()->route('host.flats.show', $new_flat->slug);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //dd($id);
        $flat = Flat::where('slug',$slug)->first();
        
        
        if($flat){
            return view('host.flats.show', compact('flat') );
        }
        abort(404, 'Flat not found in the database');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flat = Flat::find($id); 
        $services = Service::all();

        if($flat){
            return view('host.flats.edit', compact('flat', 'services') );
        }
        abort(404, 'Flat not found in the database');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Flat $flat)
    {
        $request->validate($this->validationData(), $this->validationErrors());

        $data = $request->all();

        // bisogna modificare migration flats per salvare lat e long(non sono stringhe)
        dd($data);
        
        
        if($data['title'] != $flat->title){
            $data['slug'] = Flat::getSlug($data['title']);
        }
        
        

        // controllo input image
        if (array_key_exists('cover', $data )) {

            if($flat->cover){
                Storage::delete($flat->cover);
            }
            
            // prendere il nome originale dell'immagine
            $data['cover_original_name'] = $request->file('cover')->getClientOriginalName();
            // salvare image e il percorso dell'image
            $cover_route = Storage::put('uploads', $data['cover']);
            $data['cover'] = $cover_route;
        };

        $flat->update($data);

        if(array_key_exists('services', $data)){
            $flat->services()->sync($data['services']);
        }else{
            $flat->services()->detach();
        }

        return redirect()->route('host.flats.show', $flat->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat $flat)
    {
        
        $flat->delete();
        if($flat->cover){
            Storage::delete($flat->cover);
        }
        return redirect()->route('host.flats.index');
    }

    private function validationData(){
        return [
            'title' => "required|min:3|max:100",
            'city' => "required|min:2|max:45",
            'province' => "required|min:2|max:3",
            'address' => "required|min:2|max:100",
            'room_number' => "required|numeric|min:1|max:120",
            'bed_number' => "required|numeric|min:1|max:120",
            'bathroom_number' => "required|numeric|min:1|max:120",
            'square_meters' => "required|numeric|min:1|max:32000",

        ];
    }

    private function validationErrors(){
        return [
            'title.required' => "Inserire un titolo dell'annuncio",
            'title.min' => "Titolo troppo breve",
            'title.max' => "Titolo più lungo di :max caratteri",
            
            'city.required' => "Indicare la città",
            'city.min' => "Nome città minore di :min caratteri",
            'city.max' => "Nome città maggiore di :max caratteri",

            'province.required' => "Indicare la sigla della provincia",
            'province.min' => "Sigla provincia minore di :min caratteri",
            'province.max' => "Sigla provincia maggiore di :max caratteri",
            
            'address.required' => "Indicare l'indirizzo",
            'address.min' => "Indirizzo minore di :min caratteri",
            'address.max' => "Indirizzo maggiore di :max caratteri",

            'room_number.required' => "Indicare il numero delle stanze",
            'room_number.min' => "Numero stanze minore di :min",
            'room_number.max' => "Numero stanze maggiore di :max ",
            
            'bed_number.required' => "Indicare il numero dei letti",
            'bed_number.min' => "Numero letti minore di :min",
            'bed_number.max' => "Numero letti maggiore di :max ",
            
            'bathroom_number.required' => "Indicare il numero dei bagni",
            'bathroom_number.min' => "Numero bagni minore di :min",
            'bathroom_number.max' => "Numero bagni maggiore di :max ",
            
            'square_meters.required' => "Indicare il numero di metri quadri",
            'square_meters.min' => "Numero metri quadri minore di :min",
            'square_meters.max' => "Numero metri quadri maggiore di :max ",
        ];
    }

}
