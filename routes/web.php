<?php

/*
|--------------------------------------------------------------------------
|                               WEB ROUTES
|--------------------------------------------------------------------------
*/



//  ROUTES ACCUEUIL ------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE D'ACCUEIL 
  PATTERN: /
  CTRL: --//--
  ACTION:--//--
*/
Route::view('/','pages.accueil')->name('page.accueil');

//  ROUTES CONTACT ------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE CONTACT 
  PATTERN: /
  CTRL: --//--
  ACTION:--//--
*/
Route::view('/contact', 'pages.contact')->name('page.contact');


//  ROUTES REALISATIONS ------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE REALISATIONS 
  PATTERN: /
  CTRL: --//--
  ACTION:--//--
*/
Route::view('/réalisations', 'pages.realisations')->name('page.realisation');



//  ROUTES TARIFS ------------------------------------------------------------
/*
  DESC: CHARGE LA PAGE TARIFS 
  PATTERN: /
  CTRL: --//--
  ACTION:--//--
*/
Route::view('/tarifs', 'pages.tarifs')->name('page.tarif');

//  ROUTES NEWS ------------------------------------------------------------
/*
  DESC: CHARGE LES LASTS NEWS 
  PATTERN: /actualite
  CTRL: newsController
  ACTION: INDEX
*/
Route::get('actualite', 'newsController@index')->name('news.index');


/*
  DESC: CHARGE LE DETAIL D'UN NEWS
  PATTERN: /actualite/id/slug.html
  CTRL: newsController
  ACTION: show
*/
Route::get('/actualite/{id}/{slug}.html', 'newsController@show')->name('news.show');

