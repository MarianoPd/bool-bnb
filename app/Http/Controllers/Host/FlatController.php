<?php

namespace App\Http\Controllers\Host;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Flat;
use App\User;

use Illuminate\Support\Facades\Storage;

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
        //da passare anche la lista dei servizi
        return view('host.flats.create');
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
        
        return redirect()->route('host.flats.show', $new_flat);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        $flat = Flat::find($id); 
        
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
        
        if($flat){
            return view('host.flats.edit', compact('flat') );
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
        
        
        if($data['title'] != $flat->title){
            $data['slug'] = Flat::getSlug($data['title']);
        }
        

        if(array_key_exists('cover', $data)){
            if($data['cover'] != $flat->cover){
                $data['cover_original_name'] = $request->file('cover')->getClientOriginalName();
                $image_path = Storage::put('uploads', $data['cover']);
                Storage::delete($data['cover']);
                $data['cover'] = $image_path;
            }
            
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

        return redirect()->route('host.flats.show', $flat);
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
            'province' => "nullable|min:2|max:3",
            'address' => "nullable|min:2|max:100",
            'address' => "nullable|min:2|max:100",
            'room_number' => "nullable|numeric|min:1|max:120",
            'bed_number' => "nullable|numeric|min:1|max:120",
            'bathroom_number' => "nullable|numeric|min:1|max:120",
            'square_meters' => "nullable|numeric|min:1|max:32000",

        ];
    }

    private function validationErrors(){
        return [
            'title.required' => "Inserire un titolo dell'annuncio",
            'title.min' => "Titolo troppo breve",
            'title.max' => "Titolo più lungo di :max caratteri",
        ];
    }

}
