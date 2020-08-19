{{--
    Chemin :/resources/views/pages/actualites.blade.php
    Description: affiche  le content de la page  des actualites
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
actualites
@stop

@section('content')
<!-- ZONE DES CERCLE EN ARRIERE PLAN -->
<div class="cercle">
    <div class="cercle-actus"></div>
</div>
<!-- MAIN -->
<div class="container-small">
    <div class="row">
        <div class="col-12">
            <div class="font-cottage display-2 mt-5">Les actus</div>
        </div>
        <div class="pl-lg-5 mt-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="card shadow">
                    <div class="row">
                        <div class="col-sm-4 col-12 order-2 order-sm-1">
                            <div class="card-body p-4 d-flex flex-column align-items-center h-100">
                                <div class="mb-auto">
                                    <div class="card-title h2 mt-4">JUIN 2016</div>
                                    <div class="card-text">Teresa Lupo coiffe l'équipe olympique belge pour la
                                        présentation des équipements...</div>
                                </div>
                                <div class="text-bottom">
                                    <button type="button" class="btn btn-outline-secondary">LIRE LA SUITE </button>
                                </div>

                            </div>
                        </div>
                        <div class=" col-12 col-sm-8 order-1 order-sm-2">
                            <img src="./images/home.jpg" alt="teresa lupo" class="card-img-top img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pl-lg-5 mt-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="card shadow">
                    <div class="row">
                        <div class="col-12">
                            <img src="./images/home.jpg" alt="teresa lupo " class="card-img img-fluid">
                        </div>
                        <div class="col-12">
                            <div class="card-body h-100 p-4">
                                <div class="">
                                    <div class="card-title h2 mt-4">15 JAV 2020</div>
                                    <div class="card-text">
                                        <p>Le week-end dernier à Bruxelles , l'Union des Coiffeurs Belges (UCB) a élu
                                            "la coiffeuse de l'année" et elle est établie à Verlaine.Téresa Lupo
                                            a remporté la deuxième édition du concours nationale "Hair Games". Dans
                                            notre reportage, nous avons vérifié son coup de ciseaux!
                                        </p>
                                        <p>
                                            Au concours national, tous les participants ont reçu un thème commun: la
                                            robe métalique de Paco Rabanne.Sur cette base, ils ont dû présenter
                                            plusieurs types de coiffures.La Verlaine, Teresa Lupo,coiffeuse profes-
                                        </p>
                                    </div>
                                </div>
                                <div class="text-bottom">
                                    <button type="button" class="btn btn-outline-secondary">LIRE LA SUITE </button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="pl-lg-5 mt-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="card shadow">
                    <div class="row">
                        <div class=" col-12 col-sm-8">
                            <img src="./images/home.jpg" alt="instructeur" class="card-img-top img-fluid">
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="card-body p-4 d-flex flex-column align-items-center h-100">
                                <div class="mb-auto">
                                    <div class="card-title h2 mt-4">28 JAV 2020</div>
                                    <div class="card-text"><span>Une Verlaine coiffure de l'année lors du Hair
                                            Games</span> Teresa Lupo, coiffeuse à verlaine, remporte le titre de
                                        coiffeuse de l'année lors des Hair Games de l'Union des coiffeurs belges</div>
                                </div>
                                <div class="text-bottom mt-2">
                                    <button type="button" class="btn btn-outline-secondary">LIRE LA SUITE </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pl-lg-5 mt-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="card shadow">
                    <div class="row">
                        <div class="col-sm-4 col-12 order-2 order-sm-1">
                            <div class="card-body p-4 d-flex flex-column align-items-center h-100 ">
                                <div class="mb-auto">
                                    <div class="card-title h2 mt-2">30 JAV 2020</div>
                                    <div class="card-text">Le week-end dernier à
                                        Bruxelles, l'Union des Coieurs
                                        Belges (UCB) a élu "la coieuse
                                        de l'année" et elle est établie à
                                        Verlaine. Teresa Lupo a remporté
                                        la 2e édition du concours nationale
                                        "Hair Games". Dans
                                        notre reportage, nous avons vé-</div>
                                </div>
                                <div class="text-bottom mt-2">
                                    <button type="button" class="btn btn-outline-secondary">LIRE LA SUITE </button>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-8 col-12 order-1 order-sm-2">
                            <img src="./images/home.jpg" alt="instructeur" class="card-img-top img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5"></div>
</div>

@stop
