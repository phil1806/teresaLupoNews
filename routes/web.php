<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::view('/','pages.accueil')->name('page.accueil');
Route::view('/contact', 'pages.contact')->name('page.contact');
Route::view('/réalisations', 'pages.realisations')->name('page.realisation');
Route::view('/tarifs', 'pages.tarifs')->name('page.tarif');

//  ROUTES NEWS ------------------------------------------------------------
/*
  DESC: CHARGE LES LAST NEWS 
  PATTERN: /actualite
  CTRL: newsController
  ACTION: INDEX
*/
Route::get('/actualite','newsController@index')->name('page.actualite');