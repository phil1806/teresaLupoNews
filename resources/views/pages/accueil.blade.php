{{--
    Chemin :/resources/views/pages/accueil.blade.php
    Description: affiche  le content de la page d'accueil
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
Accueil
@stop

@section('content')
<div class="cercle">
    <div class="cercle-index-2"></div>
    <div class="cercle-index-1"></div>
</div>
<!-- MAIN -->
<div class="container-small">
    <div class="d-flex flex-column position-relative align-items-center align-items-md-end">
        <img src="{{ asset('images/home1.png') }}" class="img-fluid mb-3 mb-md-0" alt="térésa lupo">
        <div class="circle-elue">
            <div class="text-center m-4 ">
                <img src="{{ asset('images/pictos/trophé.png') }}" alt="trophé">

                <p class="text-white text-center font-weight-bold mt-1 h4">ELUE <br>MEILLEURE <br>COIFFEUSE 2020
                </p>
                <div class="border mb-0 mb-lg-2"></div>
                <a href="#" class="text-white font-weight-bold h5 text-decoration-none">EN SAVOIR PLUS</a>

            </div>
        </div>
    </div>
    <section class="p-md-5">
        <div class="row no-gutters">
            <article class="col-md-5">
                <h1
                    class="h-100 d-flex justify-content-md-start justify-content-center pt-5 pr-md-5  mb-4 mb-md-0 font-cottage custom-title">
                    Teresa Lupo</h1>
            </article>
            <div class="col-md-7">
                <div class="d-flex flex-column pr-md-5">
                    <p class="text-justify">
                        Volore dendundisi cores modis natur aut doloratemditis prem re velignist, que
                        liae sequat ut fugit et adit reprorr ovitiae sed ut quodi octur as eicita dit quas
                        aspisciis.Xerspic tem iuscimaxim reris ulparion plaboriati ut eos pernatur.
                        Teresa Lupo autemquati blaut volupit autatio. Ut esto initas aliciate pellabor
                        am quam quiatur aut quibus, sin remolor poreperem re, cum quam sapit pre
                        rest, sitatatus eressit endus doloriatis inctam elluptature iduntia dolest estotatur
                        rerovit volores tiorit ma dolorerem eatiam atemperum exceat.
                    </p>
                    <p class="text-justify mb-5 mb-lg-3">
                        Equasse quossinis et volore dendundisi cores modis natur aut doloratem ditis
                        prem re velignist, que liae sequat ut fugit et adit reprorr ovitiae sed ut quodi of-
                        ctur as eicita dit quas aspisciis.Equasse quossinis et volore dendundisi cores
                        modis natur aut doloratem ditis prem re velignist, que liae sequat ut fugit et
                        adit reprorr ovitiae sed ut quodi octu.
                    </p>
                </div>

            </div>

        </div>
    </section>
</div>

@stop
