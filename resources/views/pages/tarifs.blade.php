{{--
    Chemin :/resources/views/pages/tarifs.blade.php
    Description: affiche  le content de la page  des tarifs
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
Nos tarifs
@stop

@section('content')
<div class="cercle">
    <div class="cercle-tarif-2"></div>
    <div class="cercle-tarif-1"></div>
</div>
<!-- MAIN -->
<div class="container-small">
    <div class="row no-md-gutters">
        <div class="col-md-12">
            <div class="font-cottage display-2 mb-5 mt-5 title-tarif"> les essentiels</div>
        </div>
        <div class="col-sm-4">
            <img src="{{ asset('images/photos-tarif/PHOTO1.jpg') }}" class="img-fluid width-img" alt="teresa lupo">
        </div>
        <div class="col-sm-8">
            <article class="h-100 marge-negative marge-left-neg">
                <h1 class="font-italic display-4 mb-0 mb-lg-3">Femmes</h1>
                <ul class="list-unstyled custom-ul custom-li">
                    <li>LE BRUSHING ET SON SHAMPOOING DE 21,60 À 25.60€ </li>
                    <li>LA COUPE AVEC SÉCHAGE NATUREL ET SON SHAMPOOING EST À 36.00€</li>
                    <li>LA COUPE BRUSHING ET SON SHAMPOOING DE 40.00 À 43.00€</li>
                    <li>LA COLORATION D’ENTRETIEN, SA COUPE BRUSHING ET SON SHAMPOOING DE 74.90 À 77.90€</li>
                    <li>LES MÈCHES 1 TON, SA COUPE BRUSHING ET SON SHAMPOOING DE 75.90 À 88.00€</li>
                    <li>L’OMBRAGE DE 55.00 À 75.00€</li>
                    <li>LA COLORATION ET SON OMBRAGE DE 65.00 À 85.00€</li>
                    <li>LA COLORATION ET SES MÈCHES DE 58.00 À 69.00€</li>
                    <li>LE CHIGNON EST À 68.00€</li>
                    <li>LE FORFAIT MARIÉE EST À 115.00€</li>
                </ul>
            </article>
        </div>
    </div>
    <div class="marge-negative marge-top-neg-2">
        <div class="row no-md-gutters">
            <div class="col-sm-4 offset-sm-4 order-2 order-sm-1">
                <article
                    class="h-100 d-flex flex-column justify-content-center align-items-sm-center align-items-start">
                    <h1 class="font-italic display-4 text-left mb-0 mb-lg-3 pr-0 pr-sm-5 mr-0 mr-lg-5">Hommes </h1>
                    <ul class="list-unstyled custom-ul">
                        <li>LA COUPE HOMME 17.50€</li>
                        <li>SHAMPOOING REVIGORANT 2.50€</li>
                    </ul>
                </article>
            </div>
            <div class="col-sm-4 order-1 order-sm-2">
                <div class="text-right h-100 ">
                    <img src="{{ asset('images/photos-tarif/PHOTO2.JPG') }}" alt="teresa lupo"
                        class="img-fluid width-img mt-3 mt-sm-0">
                </div>
            </div>
        </div>
    </div>
    <div class="marge-negative marge-top-neg-1">
        <div class="row no-md-gutters">
            <div class="col-sm-4">
                <div class="h-100">
                    <img src="{{ asset('images/photos-tarif/PHOTO3.jpg') }}" class="img-fluid width-img mt-3 mt-sm-0"
                        alt="teresa lupo">
                </div>
            </div>
            <div class="col-sm-8">
                <article class="marge-negative marge-left-neg">
                    <h1 class="font-italic display-4">Enfants</h1>
                    <ul class="list-unstyled custom-ul custom-li">
                        <li>LA COUPE GARÇON À 11.00€</li>
                        <li>LA COUPE FILLE À 12.50€</li>
                        <li>LA COUPE FILLE 12 ANS, SON SHAMPOOING ET LE SOIN À 23.90€</li>
                        <li>LA COUPE FILLE18 ANS, SON SHAMPOOING ET LE SOIN À 28.90€</li>
                    </ul>
                    <div class="mt-5">
                        <div class="font-italic display-4 text-info">Etudiants(e)s</div>
                        <div class="h5 font-weight-bold">-20% POUR LES ÉTUDIANTS</div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p class="text-center marge-positive marge-tp-left-bt-posi">OLAPLEX EST UTILISÉ POUR CHAQUE TRAITEMENT
                EFFECTUÉ SUR VOTRE CHEVELURE.</p>
        </div>
    </div>
</div>
@stop
