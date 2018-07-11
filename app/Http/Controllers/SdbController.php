<?php

namespace App\Http\Controllers;

use App\Sdb;
use App\Media;
use Illuminate\Http\Request;

class SdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sdbs = Sdb::all();

        return view('admin.catalogues.sdb.index', ['sdbs' => $sdbs]);
    }
    public function catalogue()
    {
        $sdbs = Sdb::all();

        return view('salles-de-bain', ['sdbs' => $sdbs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medias = Media::all();

        return view('admin.catalogues.sdb.create', ['medias' => $medias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sdb = new Sdb;
        
        $sdb-> titre = request('titre');
        $sdb-> prix = request('prix');
        $sdb-> image = request('image');

        $sdb->save();

        return redirect()->route('admin-catalogues-sdb-index')->with('add','Salle de bain ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sdb  $sdb
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sdb  $sdb
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medias = Media::all();
        $sdb = Sdb::where('id', $id)->first();

        return view('admin.catalogues.sdb.edit', ['medias' => $medias, 'sdb' => $sdb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sdb  $sdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $sdb = Sdb::where('id', $id)->first();

        $sdb-> titre = request('titre');
        $sdb-> prix = request('prix');
        $sdb-> image = request('image');

        $sdb->save();

        return redirect()->route('admin-catalogues-sdb-index')->with('edit','Salle de bain modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sdb  $sdb
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Sdb::where('id', $id)->delete();

        return redirect()->route('admin-catalogues-sdb-index')->with('delete','Salle de bain supprimée');
    }
}
