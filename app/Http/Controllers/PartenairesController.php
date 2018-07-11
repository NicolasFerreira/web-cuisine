<?php

namespace App\Http\Controllers;

use App\Partenaire;
use Illuminate\Http\Request;
use App\Media;

class PartenairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partenaire::all();
        $medias = Media::all();

        return view('admin.pages.partenaires.index', ['partenaires' => $partenaires,'medias' => $medias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::all();

        return view('admin.pages.partenaires.create', ['medias' => $medias]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partenaire = new Partenaire;

        $partenaire-> link = request('link');
        $partenaire-> image = request('image');

        $partenaire->save();

        return redirect()->route('admin-pages-partenaires-index')->with('add','Partenaire ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenaire $partenaire,$id)
    {
        $medias = Media::all();
        $partenaire = Partenaire::where('id', $id)->first();

        return view('admin.pages.partenaires.edit', ['medias' => $medias, 'partenaire' => $partenaire]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partenaire $partenaire,$id)
    {
        $partenaire = Partenaire::where('id', $id)->first();


        $partenaire-> link = request('link');
        $partenaire-> image = request('image');

        $partenaire->save();

        return redirect()->route('admin-pages-partenaires-index')->with('add','Partenaire modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenaire $partenaire,$id)
    {
        Partenaire::where('id', $id)->delete();

        return redirect()->route('admin-pages-partenaires-index')->with('delete','Partenaire supprimé');
    }
}
