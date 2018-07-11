<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Realisation;
use App\Partenaire;
use App\Media;

class PagesController extends Controller
{   

    /////  HOMEPAGE CONTROL  /////


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexH()
    {
        $titre1 = Page::where('champ','titre1')->first();
        $titre2 = Page::where('champ','titre2')->first();
        $soustitre = Page::where('champ','soustitre')->first();

        $image = Page::where('champ','image')->first();

        $section_1_titre = Page::where('champ','section_1_titre')->first();
        $card_1_img = Page::where('champ','card_1_img')->first();
        $card_1_titre = Page::where('champ','card_1_titre')->first();
        $card_1_txt = Page::where('champ','card_1_txt')->first();
        $card_1_btn = Page::where('champ','card_1_btn')->first();
        $card_2_img = Page::where('champ','card_2_img')->first();
        $card_2_titre = Page::where('champ','card_2_titre')->first();
        $card_2_txt = Page::where('champ','card_2_txt')->first();
        $card_2_btn = Page::where('champ','card_2_btn')->first();
        $card_3_img = Page::where('champ','card_3_img')->first();
        $card_3_titre = Page::where('champ','card_3_titre')->first();
        $card_3_txt = Page::where('champ','card_3_txt')->first();
        $card_3_btn = Page::where('champ','card_3_btn')->first();

        $section_2_titre = Page::where('champ','section_2_titre')->first();
        $section_3_titre = Page::where('champ','section_3_titre')->first();
        $sous_cat_1 = Page::where('champ','sous_cat_1')->first();
        $jour1 = Page::where('champ','jour1')->first();
        $h01 = Page::where('champ','h01')->first();
        $h11 = Page::where('champ','h11')->first();
        $jour2 = Page::where('champ','jour2')->first();
        $h02 = Page::where('champ','h02')->first();
        $h22 = Page::where('champ','h22')->first();
        $jour3 = Page::where('champ','jour3')->first();
        $h03 = Page::where('champ','h03')->first();
        $h33 = Page::where('champ','h33')->first();
        $sous_cat_2 = Page::where('champ','sous_cat_2')->first();
        $tel = Page::where('champ','tel')->first();
        $mail = Page::where('champ','mail')->first();

        $section_4_titre = Page::where('champ','section_4_titre')->first();

        $realisations = Realisation::all();
        $partenaires = Partenaire::all();

         return view('accueil', [
            'titre1' => $titre1, 
            'titre2' => $titre2,
            'soustitre' => $soustitre,
            'image' => $image,
            'section_1_titre' => $section_1_titre,
            'card_1_img' => $card_1_img,
            'card_1_titre' => $card_1_titre,
            'card_1_txt' => $card_1_txt,
            'card_1_btn' => $card_1_btn,
            'card_2_img' => $card_2_img,
            'card_2_titre' => $card_2_titre,
            'card_2_txt' => $card_2_txt,
            'card_2_btn' => $card_2_btn,
            'card_3_img' => $card_3_img,
            'card_3_titre' => $card_3_titre,
            'card_3_txt' => $card_3_txt,
            'card_3_btn' => $card_3_btn,
            'section_2_titre' => $section_2_titre,
            'section_3_titre' => $section_3_titre,
            'sous_cat_1' => $sous_cat_1,
            'jour1' => $jour1,
            'h01' => $h01,
            'h11' => $h11,
            'jour2' => $jour2,
            'h02' => $h02,
            'h22' => $h22,
            'jour3' => $jour3,
            'h03' => $h03,
            'h33' => $h33,
            'sous_cat_2' => $sous_cat_2,
            'tel' => $tel,
            'mail' => $mail,
            'section_4_titre' => $section_4_titre,
            'realisations' => $realisations,
            'partenaires' => $partenaires
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createH()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeH(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function showH(Pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function editH()
    {
        $titre1 = Page::where('champ','titre1')->first();
        $titre2 = Page::where('champ','titre2')->first();
        $soustitre = Page::where('champ','soustitre')->first();

        $image = Page::where('champ','image')->first();

        $section_1_titre = Page::where('champ','section_1_titre')->first();
        $card_1_img = Page::where('champ','card_1_img')->first();
        $card_1_titre = Page::where('champ','card_1_titre')->first();
        $card_1_txt = Page::where('champ','card_1_txt')->first();
        $card_1_btn = Page::where('champ','card_1_btn')->first();
        $card_2_img = Page::where('champ','card_2_img')->first();
        $card_2_titre = Page::where('champ','card_2_titre')->first();
        $card_2_txt = Page::where('champ','card_2_txt')->first();
        $card_2_btn = Page::where('champ','card_2_btn')->first();
        $card_3_img = Page::where('champ','card_3_img')->first();
        $card_3_titre = Page::where('champ','card_3_titre')->first();
        $card_3_txt = Page::where('champ','card_3_txt')->first();
        $card_3_btn = Page::where('champ','card_3_btn')->first();

        $section_2_titre = Page::where('champ','section_2_titre')->first();
        $section_3_titre = Page::where('champ','section_3_titre')->first();
        $sous_cat_1 = Page::where('champ','sous_cat_1')->first();
        $jour1 = Page::where('champ','jour1')->first();
        $h01 = Page::where('champ','h01')->first();
        $h11 = Page::where('champ','h11')->first();
        $jour2 = Page::where('champ','jour2')->first();
        $h02 = Page::where('champ','h02')->first();
        $h22 = Page::where('champ','h22')->first();
        $jour3 = Page::where('champ','jour3')->first();
        $h03 = Page::where('champ','h03')->first();
        $h33 = Page::where('champ','h33')->first();
        $sous_cat_2 = Page::where('champ','sous_cat_2')->first();
        $tel = Page::where('champ','tel')->first();
        $mail = Page::where('champ','mail')->first();

        $section_4_titre = Page::where('champ','section_4_titre')->first();

        $medias = Media::all();

         return view('admin.pages.textes.index', [
            'medias' => $medias,
            'titre1' => $titre1, 
            'titre2' => $titre2,
            'image' => $image,
            'soustitre' => $soustitre,
            'section_1_titre' => $section_1_titre,
            'card_1_img' => $card_1_img,
            'card_1_titre' => $card_1_titre,
            'card_1_txt' => $card_1_txt,
            'card_1_btn' => $card_1_btn,
            'card_2_img' => $card_2_img,
            'card_2_titre' => $card_2_titre,
            'card_2_txt' => $card_2_txt,
            'card_2_btn' => $card_2_btn,
            'card_3_img' => $card_3_img,
            'card_3_titre' => $card_3_titre,
            'card_3_txt' => $card_3_txt,
            'card_3_btn' => $card_3_btn,
            'section_2_titre' => $section_2_titre,
            'section_3_titre' => $section_3_titre,
            'sous_cat_1' => $sous_cat_1,
            'jour1' => $jour1,
            'h01' => $h01,
            'h11' => $h11,
            'jour2' => $jour2,
            'h02' => $h02,
            'h22' => $h22,
            'jour3' => $jour3,
            'h03' => $h03,
            'h33' => $h33,
            'sous_cat_2' => $sous_cat_2,
            'tel' => $tel,
            'mail' => $mail,
            'section_4_titre' => $section_4_titre
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function updateH(Request $request)
    {
        $titre1 = Page::where('champ','titre1')->first();
        $titre1-> content = request('titre1');
        $titre1->save();

        $titre2 = Page::where('champ','titre2')->first();
        $titre2-> content = request('titre2');
        $titre2->save();

        $soustitre = Page::where('champ','soustitre')->first();
        $soustitre-> content = request('soustitre');
        $soustitre->save();

        $image = Page::where('champ','image')->first();
        $image-> content = request('image');
        $image->save();

        $section_1_titre = Page::where('champ','section_1_titre')->first();
        $section_1_titre-> content = request('section_1_titre');
        $section_1_titre->save();


        $card_1_titre = Page::where('champ','card_1_titre')->first();
        $card_1_titre-> content = request('card_1_titre');
        $card_1_titre->save();

        $card_1_txt = Page::where('champ','card_1_txt')->first();
        $card_1_txt-> content = request('card_1_txt');
        $card_1_txt->save();

        $card_1_btn = Page::where('champ','card_1_btn')->first();
        $card_1_btn-> content = request('card_1_btn');
        $card_1_btn->save();


        $card_2_titre = Page::where('champ','card_2_titre')->first();
        $card_2_titre-> content = request('card_2_titre');
        $card_2_titre->save();

        $card_2_txt = Page::where('champ','card_2_txt')->first();
        $card_2_txt-> content = request('card_2_txt');
        $card_2_txt->save();

        $card_2_btn = Page::where('champ','card_2_btn')->first();
        $card_2_btn-> content = request('card_2_btn');
        $card_2_btn->save();


        $card_3_titre = Page::where('champ','card_3_titre')->first();
        $card_3_titre-> content = request('card_3_titre');
        $card_3_titre->save();

        $card_3_txt = Page::where('champ','card_3_txt')->first();
        $card_3_txt-> content = request('card_3_txt');
        $card_3_txt->save();

        $card_3_btn = Page::where('champ','card_3_btn')->first();
        $card_3_btn-> content = request('card_3_btn');
        $card_3_btn->save();


        $section_2_titre = Page::where('champ','section_2_titre')->first();
        $section_2_titre-> content = request('section_2_titre');
        $section_2_titre->save();

        $section_3_titre = Page::where('champ','section_3_titre')->first();
        $section_3_titre-> content = request('section_3_titre');
        $section_3_titre->save();

        $sous_cat_1 = Page::where('champ','sous_cat_1')->first();
        $sous_cat_1-> content = request('sous_cat_1');
        $sous_cat_1->save();

        $jour1 = Page::where('champ','jour1')->first();
        $jour1-> content = request('jour1');
        $jour1->save();

        $h01 = Page::where('champ','h01')->first();
        $h01 -> content = request('h01');
        $h01 ->save();

        $h11 = Page::where('champ','h11')->first();
        $h11-> content = request('h11');
        $h11->save();

        $jour2 = Page::where('champ','jour2')->first();
        $jour2-> content = request('jour2');
        $jour2->save();

        $h02 = Page::where('champ','h02')->first();
        $h02-> content = request('h02');
        $h02->save();

        $h22 = Page::where('champ','h22')->first();
        $h22-> content = request('h22');
        $h22->save();

        $jour3 = Page::where('champ','jour3')->first();
        $jour3-> content = request('jour3');
        $jour3->save();

        $h03 = Page::where('champ','h03')->first();
        $h03-> content = request('h03');
        $h03->save();

        $sous_cat_2 = Page::where('champ','sous_cat_2')->first();
        $sous_cat_2-> content = request('sous_cat_2');
        $sous_cat_2->save();

        $tel = Page::where('champ','tel')->first();
        $tel-> content = request('tel');
        $tel->save();

        $mail = Page::where('champ','mail')->first();
        $tel-> content = request('tel');
        $tel->save();


        $section_4_titre = Page::where('champ','section_4_titre')->first();
        $section_4_titre-> content = request('section_4_titre');
        $section_4_titre->save();


        return redirect()->route('admin-pages')->with('success','Modifications sur page principale effectuées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroyH(Pages $pages)
    {
        //
    }
}
