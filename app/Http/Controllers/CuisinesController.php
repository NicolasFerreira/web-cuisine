<?php

namespace App\Http\Controllers;

use App\Cuisine;
use App\Media;
use Illuminate\Http\Request;



class CuisinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuisines = Cuisine::all();
        

        return view('admin.catalogues.cuisines.index', ['cuisines' => $cuisines]);
    }
    public function catalogue()
    {
        $cuisines = Cuisine::all();

        return view('cuisines', ['cuisines' => $cuisines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::all();
        $image = "null";

        return view('admin.catalogues.cuisines.create', ['medias' => $medias,'image' => $image]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuisine = new Cuisine;
        
        $cuisine-> titre = request('titre');
        $cuisine-> prix = request('prix');
        $cuisine-> image = request('image');

        $cuisine->save();

        return redirect()->route('admin-catalogues-cuisines-index')->with('add','Cuisine ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function show(Cuisine $cuisine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medias = Media::all();
        $cuisine = Cuisine::where('id', $id)->first();

        return view('admin.catalogues.cuisines.edit', ['medias' => $medias, 'cuisine' => $cuisine]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $cuisine = Cuisine::where('id', $id)->first();

        $cuisine-> titre = request('titre');
        $cuisine-> prix = request('prix');
        $cuisine-> image = request('image');

        $cuisine->save();

        return redirect()->route('admin-catalogues-cuisines-index')->with('edit','Cuisine modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cuisine  $cuisine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuisine $cuisine,$id)
    {
        
        Cuisine::where('id', $id)->delete();

        return redirect()->route('admin-catalogues-cuisines-index')->with('delete','Cuisine supprimée');
    }

    
}
