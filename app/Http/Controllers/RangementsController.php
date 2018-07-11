<?php

namespace App\Http\Controllers;

use App\Rangement;
use App\Media;
use Illuminate\Http\Request;

class RangementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rangements = Rangement::all();
        

        return view('admin.catalogues.rangements.index', ['rangements' => $rangements]);
    }
    public function catalogue()
    {
        $rangements = Rangement::all();

        return view('rangements', ['rangements' => $rangements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::all();

        return view('admin.catalogues.rangements.create', ['medias' => $medias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rangement = new Rangement;
        
        $rangement-> titre = request('titre');
        $rangement-> prix = request('prix');
        $rangement-> image = request('image');

        $rangement->save();

        return redirect()->route('admin-catalogues-rangements-index')->with('add','Rangement ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rangement  $rangement
     * @return \Illuminate\Http\Response
     */
    public function show(Rangement $rangement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rangement  $rangement
     * @return \Illuminate\Http\Response
     */
    public function edit(Rangement $rangement,$id)
    {
        $medias = Media::all();
        $rangement = Rangement::where('id', $id)->first();

        return view('admin.catalogues.rangements.edit', ['medias' => $medias, 'rangement' => $rangement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rangement  $rangement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rangement $rangement,$id)
    {   
        $rangement = Rangement::where('id', $id)->first();

        $rangement-> titre = request('titre');
        $rangement-> prix = request('prix');
        $rangement-> image = request('image');

        $rangement->save();

        return redirect()->route('admin-catalogues-rangements-index')->with('add','Rangement modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rangement  $rangement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rangement $rangement,$id)
    {
        Rangement::where('id', $id)->delete();

       return redirect()->route('admin-catalogues-rangements-index')->with('delete','Rangement supprimé');
   }
}
