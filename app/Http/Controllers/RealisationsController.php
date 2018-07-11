<?php

namespace App\Http\Controllers;

use App\Realisation;
use Illuminate\Http\Request;
use App\Media;

class RealisationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $realisations = Realisation::all();
        $medias = Media::all();

        return view('admin.pages.realisations.index', ['realisations' => $realisations,'medias' => $medias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $medias = Media::all();

        return view('admin.pages.realisations.create', ['medias' => $medias]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $realisation = new Realisation;

        $realisation-> path = request('image');

        $realisation->save();

        return redirect()->route('admin-pages-realisations-index')->with('add','Réalisation ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function show(Realisation $realisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Realisation $realisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Realisation $realisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realisation $realisation,$id)
    {
         Realisation::where('id', $id)->delete();

        return redirect()->route('admin-pages-realisations-index')->with('delete','Realisation supprimée');
    }
}
