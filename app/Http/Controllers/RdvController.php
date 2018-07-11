<?php

namespace App\Http\Controllers;

use App\Rdv;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemandeDeRdv;

class RdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rdvList = Rdv::all()->where('confirmed',true);

        // return view('admin.admin', ['rdvList' => $rdvList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rdv = new Rdv;

        Carbon::setLocale('fr');

        $rdv->date_1 = request('date_1');
        $rdv->date_1 = Carbon::parse($rdv->date_1)->format('d-m-Y');
        $rdv->horaires_1 = request('horaires_1');

        $rdv->date_2 = request('date_2');
        $rdv->date_2 = Carbon::parse($rdv->date_2)->format('d-m-Y');
        $rdv->horaires_2 = request('horaires_2');

        $rdv->nom = request('nom');
        $rdv->prenom = request('prenom');
        $rdv->email = request('email');
        $rdv->numero = request('numero');
        $rdv->commentaires = request('commentaires');
        $rdv->date_envoi = Carbon::now(+2)->format('l d-m-Y h:i');
        $rdv->save();

        $idRdv = $rdv->id;
        return redirect()->route('rdv-recap', ['idRdv'=>$idRdv]);

    }


    public function confirm(Request $request, Rdv $rdv, $idRdv)
    {

        $rdv = Rdv::find($idRdv);

        $rdv->confirmed = true ;

        $rdv->save();

        Mail::to('nico.ferreira.web@gmail.com')->send(new DemandeDeRdv($rdv));

        $rdv->delete();
        
        return redirect()->route('rdv')->with('confirm', 'Votre demande de Rdv a bien été prise en compte !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function show(Rdv $rdv, $idRdv)
    {   
        $rdv = Rdv::all()->where('id', $idRdv);

        return view('recap', ['idRdv'=>$idRdv, 'rdv'=>$rdv]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function edit(Rdv $rdv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rdv $rdv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rdv $rdv)
    {
        //
    }

    public function mail()
    {
     $rdv = Rdv::find(22);

     Mail::to('nico.ferreira.web@gmail.com')->send(new DemandeDeRdv($rdv));

     return 'Email envoyé';
 }
}
