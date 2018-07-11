<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Accueil 
Route::get('/', 'PagesController@indexH')->name('accueil');

//Cuisines
Route::get('/cuisines', 'CuisinesController@catalogue')->name('cuisines');

//SDB
Route::get('/salles-de-bain', 'SdbController@catalogue')->name('salles-de-bain');

//Rangements
Route::get('/rangements', 'RangementsController@catalogue')->name('rangements');

// RDV
Route::get('/rdv', function () { return view('rdv'); })->name('rdv');
Route::post('/rdv', 'RdvController@store')->name('rdv-store');
Route::get('/rdv/{idRdv}/recap', 'RdvController@show')->name('rdv-recap');
Route::post('/rdv/{idRdv}/recap', 'RdvController@confirm')->name('rdv-confirm');


//Contact
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact-store');


//Mentions 
Route::get('/mentions', function () { return view('mentions'); })->name('mentions');



///////////////////////////////////////////////////////////////////////////////////////////////
//Administration du site web
Route::get('/admin', function () { return view('admin.admin'); })->name('admin');


//ajax
Route::post('/postajax','AjaxController@post');

//// Gestion des pages 
Route::get('/admin/pages', function () { return view('admin.pages.pages'); })->name('admin-pages');
// Textes 
Route::get('/admins/pages/textes', 'PagesController@editH')->name('admin-pages-textes-edit');
Route::post('/admin/pages/textes/update', 'PagesController@updateH');
// Realisations
Route::get('/admin/pages/realisations', 'RealisationsController@index')->name('admin-pages-realisations-index');
Route::get('/admin/pages/realisations/create', 'RealisationsController@create')->name('admin-pages-realisations-create');
Route::post('/admin/pages/realisations/store', 'RealisationsController@store');
Route::get('/admin/pages/realisations/delete/{id}', 'RealisationsController@destroy')->name('admin-pages-realisations-delete');
// Partenaires
Route::get('/admin/pages/partenaires', 'PartenairesController@index')->name('admin-pages-partenaires-index');
Route::get('/admin/pages/partenaires/create', 'PartenairesController@create')->name('admin-pages-partenaires-create');
Route::post('/admin/pages/partenaires/store', 'PartenairesController@store');
Route::get('/admin/pages/partenaires/edit/{id}', 'PartenairesController@edit')->name('admin-pages-partenaires-edit');
Route::post('/admin/pages/partenaires/update/{id}', 'PartenairesController@update');
Route::get('/admin/pages/partenaires/delete/{id}', 'PartenairesController@destroy')->name('admin-pages-partenaires-delete');

//// Bangue d'images
Route::get('/admin/images', 'MediasController@index')->name('admin-images');
Route::get('/admin/images/create', 'MediasController@create')->name('admin-images-create');
Route::post('/admin/images/store', 'MediasController@store');
Route::get('/admin/images/delete/{id}', 'MediasController@destroy')->name('admin-images-delete');



//// Catalogue 

// Catalogues - cuisines
Route::get('/admin/catalogue/cuisines', 'CuisinesController@index')->name('admin-catalogues-cuisines-index');
Route::get('/admin/catalogues/cuisines/create', 'CuisinesController@create')->name('admin-catalogues-cuisines-create');
Route::post('/admin/catalogues/cuisines/store', 'CuisinesController@store');
Route::get('/admin/catalogues/cuisines/edit/{id}', 'CuisinesController@edit')->name('admin-catalogues-cuisines-edit');
Route::post('/admin/catalogues/cuisines/update/{id}', 'CuisinesController@update');
Route::get('/admin/catalogues/cuisines/delete/{id}', 'CuisinesController@destroy')->name('admin-catalogues-cuisines-delete');

// Catalogues - salles de bains 
Route::get('/admin/catalogue/sdb', 'SdbController@index')->name('admin-catalogues-sdb-index');
Route::get('/admin/catalogues/sdb/create', 'SdbController@create')->name('admin-catalogues-sdb-create');
Route::post('/admin/catalogues/sdb/store', 'SdbController@store');
Route::get('/admin/catalogues/sdb/edit/{id}', 'SdbController@edit')->name('admin-catalogues-sdb-edit');
Route::post('/admin/catalogues/sdb/update/{id}', 'SdbController@update');
Route::get('/admin/catalogues/sdb/delete/{id}', 'SdbController@destroy')->name('admin-catalogues-sdb-delete');

// Catalogues - rangements
Route::get('/admin/catalogue/rangements', 'RangementsController@index')->name('admin-catalogues-rangements-index');
Route::get('/admin/catalogues/rangements/create', 'RangementsController@create')->name('admin-catalogues-rangements-create');
Route::post('/admin/catalogues/rangements/store', 'RangementsController@store');
Route::get('/admin/catalogues/rangements/edit/{id}', 'RangementsController@edit')->name('admin-catalogues-rangements-edit');
Route::post('/admin/catalogues/rangements/update/{id}', 'RangementsController@update');
Route::get('/admin/catalogues/rangements/delete/{id}', 'RangementsController@destroy')->name('admin-catalogues-rangements-delete');

Route::get('/admin/catalogues', function () { return view('admin.catalogues.catalogues'); })->name('admin-catalogues');





