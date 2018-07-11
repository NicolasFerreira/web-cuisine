<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$pages = DB::table('pages');
        $pages->insert(['champ' => 'titre1','content' => 'RM']);
        $pages->insert(['champ' => 'titre2','content' => 'Cuisines']);
        $pages->insert(['champ' => 'soustitre','content' => 'Cuisines et salles de bains sur mesure']);

        $pages->insert(['champ' => 'image','content' => 'cuisine_01.jpg']);

        $pages->insert(['champ' => 'section_1_titre','content' => 'Nos catalogues']);
        $pages->insert(['champ' => 'card_1_img','content' => 'images/icons8-kitchen.png']);
        $pages->insert(['champ' => 'card_1_titre','content' => 'Cuisines']);
        $pages->insert(['champ' => 'card_1_txt','content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis repudiandae facere, voluptate? Voluptates rem quae, id praesentium inventore molestiae esse necessitatibus velit assumenda pariatur quibusdam, quis tempora nostrum nobis dicta.']);
        $pages->insert(['champ' => 'card_1_btn','content' => 'Découvrir']);
        $pages->insert(['champ' => 'card_2_img','content' => 'images/icons8-shower_and_tub.png']);
        $pages->insert(['champ' => 'card_2_titre','content' => 'Salles de bains']);
        $pages->insert(['champ' => 'card_2_txt','content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis repudiandae facere, voluptate? Voluptates rem quae, id praesentium inventore molestiae esse necessitatibus velit assumenda pariatur quibusdam, quis tempora nostrum nobis dicta.']);
        $pages->insert(['champ' => 'card_2_btn','content' => 'Découvrir']);
        $pages->insert(['champ' => 'card_3_img','content' => 'images/icons8-sliding_door_closet.png']);
        $pages->insert(['champ' => 'card_3_titre','content' => 'Rangements']);
        $pages->insert(['champ' => 'card_3_txt','content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis repudiandae facere, voluptate? Voluptates rem quae, id praesentium inventore molestiae esse necessitatibus velit assumenda pariatur quibusdam, quis tempora nostrum nobis dicta.']);
        $pages->insert(['champ' => 'card_3_btn','content' => 'Découvrir']);

        $pages->insert(['champ' => 'section_2_titre','content' => 'Nos réalisations']);

        $pages->insert(['champ' => 'section_3_titre','content' => 'Notre boutique']);
        $pages->insert(['champ' => 'sous_cat_1','content' => 'Horaires']);
        $pages->insert(['champ' => 'jour1','content' => 'Mar - Ven']);
        $pages->insert(['champ' => 'h01','content' => '9:00-12:00']);
        $pages->insert(['champ' => 'h11','content' => '14:00-19:00']);
        $pages->insert(['champ' => 'jour2','content' => 'Sam']);
        $pages->insert(['champ' => 'h02','content' => '10:00-12:00']);
        $pages->insert(['champ' => 'h22','content' => '15:00-19:00']);
        $pages->insert(['champ' => 'jour3','content' => 'Lun - Dim']);
        $pages->insert(['champ' => 'h03','content' => 'Fermé']);
        $pages->insert(['champ' => 'sous_cat_2','content' => 'Contact']);
        $pages->insert(['champ' => 'tel','content' => 'Tel : 05 65 20 23 20']);
        $pages->insert(['champ' => 'mail','content' => 'Mail : rmcuisines@gmail.com']);

        $pages->insert(['champ' => 'section_4_titre','content' => 'Nos partenaires']);
    }
}
