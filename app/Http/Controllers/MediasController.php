<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Media;

class MediasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::all();

        return view('admin.images.index', ['medias' => $medias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $media = new Media;
        
        //store dans le dossier public, le fichier 'miniature'
        $originalName = $request->file('path')->getClientOriginalName();
        $pathstart = $request->file('path')->storeAs('public/', $originalName);
        $media-> path = $originalName;

        $verify = Media::all()->where('path',$originalName);

        if(count($verify)>0){
            return redirect()->route('admin-images')->with('delete',"Nom d'image déja existant, l'image n'a pas pu être ajoutée"); 
        }else{
           $media->save();

          return redirect()->route('admin-images')->with('add','Image ajoutée'); 
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::where('id', $id)->first();
        Media::where('id', $id)->delete();

        Storage::delete('public/'.$media->path);

        return redirect()->route('admin-images')->with('delete','Image supprimée');
    }
}
