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

Route::view('/','pages.accueil')->name('page.accueil');
Route::view('/actualite', 'pages.actualites')->name('page.actualite');
Route::view('/contact', 'pages.contact')->name('page.contact');
Route::view('/réalisations', 'pages.realisations')->name('page.realisation');
Route::view('/tarifs', 'pages.tarifs')->name('page.tarif');
