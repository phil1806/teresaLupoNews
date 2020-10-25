{{--
    Chemin :/resources/views/pages/contact.blade.php
    Description: affiche la page contact
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
Contact
@stop

@section('content')
<!-- MAIN -->
<div class="container-small">
    <div class="row">
        <div class="col-md-12">
            <div class="font-cottage display-4 text-left h-100 mb-4 mb-lg-5 mt-5">
                Contact
            </div>
        </div>
    </div>
</div>
<div class="container-small">
    <div class="row">
        <diV class="col-lg-6 order-2 order-lg-1">
            <div class="d-flex flex-column flex-sm-row flex-lg-column justify-content-sm-around">
                <aside class=" h-100 mb-2 mb-md-5 mt-5 mt-md-0">
                    <h2 class="h5 mb-2 mb-lg-4  font-weight-bold">CONTACT</h2>
                    <P>VOIE DES JARDINETS, 8 <br>4537 VERLAINE <br>+32 470 65 04 46<P>
                </aside>
                <aside class="mt-md-0 mt-5">
                    <h2 class="h5 mb-2 mb-lg-4 font-weight-bold">HEURES D'OUVERTURE <br>UNIQUEMENT SUR RDV.</h2>
                    <P class="mb-0">LU > ME : FERMÉ <br>JE - VE: 8h00 - 18H00 <br>
                        SAMEDI FERMÉ À 17H00 <br>DI : FERMÉ</P>
                </aside>

            </div>

        </diV>
        <diV class="col-lg-6 order-1 order-lg-2">
            <div class="h-100 mb-5 m-md-0">
                <img src="./images/photos-tarif/SALON.JPG" class="img-fluid" alt="salon teresa lupo ">
            </div>
        </diV>
    </div>
    <div class="m-0 mt-md-3"></div>
    <div class="row">
        <div class="col-lg-8 offset-lg-4">
            <div class="embed-responsive embed-responsive-16by9 mt-5 mb-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.857764013053!2d5.321346916093463!3d50.6111804794978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c1010821d40e1f%3A0x3b071f719541ccef!2sVoie%20des%20Jardinets%208%2C%204537%20Verlaine!5e0!3m2!1sfr!2sbe!4v1596622896815!5m2!1sfr!2sbe"
                    width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="mt-0 mt-lg-5"></div>
<div class="cercle">
    <div class="cercle-contact-2"></div>
    <div class="cercle-contact-1"></div>
</div>
@stop
