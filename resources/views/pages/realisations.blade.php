{{--
    Chemin :/resources/views/pages/realisation.blade.php
    Description: affiche le contenu de la page des realisations
    Données disponible: -- // --
--}}

@extends('templates.master')

@section('title')
Nos réalisation
@stop

@section('content')
<!-- zone de cecles -->
<div class="cercle">
    <div class="cercle-realisation"></div>
</div>
<!-- Slider -->
<div class="container-fluid">
    <div class="row">
        <div class="col h-75">
            <div id="carouselControls" class="carousel slide position-relative" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex">
                            <img src="{{ asset('images/1.jpg') }}" class="d-block w-50" alt="Satellite">
                            <img src="{{ asset('images/2.jpg') }}" class="d-block w-50" alt="Satellite">
                            <img src="{{ asset('images/3.jpg') }}" class="d-block w-50" alt="Satellite">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex">
                            <img src="{{ asset('images/4.jpg') }}" class="d-block w-50" alt="Spacewalking astronaut">
                            <img src="{{ asset('images/5.jpg') }}" class="d-block w-50" alt="Spacewalking astronaut">
                            <img src="{{ asset('images/6.jpg') }}" class="d-block w-50" alt="Spacewalking astronaut">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex">
                            <img src="{{ asset('images/7.jpg') }}" class="d-block w-50" alt="Spacewalking astronaut">
                            <img src="{{ asset('images/8.jpg') }}" class="d-block w-50" alt="Spacewalking astronaut">
                            <img src="{{ asset('images/9.jpg') }}" class="d-block w-50" alt="Spacewalking astronaut">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="shooting-position position-absolute font-cottage >">Shooting photo</div>
            </div>
        </div>
    </div>
</div>
<!-- MAIN -->
<div class="marge-positive marge-tp-bt-posi">
    <div class="container-small p-0">
        <div class="row">
            <div class=" col-12 ">
                <div
                    class=" title-realisation h-100 display-4 text-left text-md-right font-italic mt-4 mt-md-5  mb-4 mb-md-5">
                    Rélisation salon</div>
            </div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20180913_165401.jpg') }}" class="img-fluid" alt="teresa"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20190425_155544.jpg') }}" class="img-fluid" alt="teresa"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20190518_144035.jpg') }}" class="img-fluid" alt="teresa lupo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20190526_084116.jpg') }}" class="img-fluid" alt="teres lupo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20190614_124026.jpg') }}" class="img-fluid" alt="terasa lupo "></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20190831_080833.jpg') }}" class="img-fluid" alt="terasa lupo "></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20190831_125113.jpg') }}"   class="img-fluid" alt="terasa lupo "></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20190920_145451.jpg') }}" class="img-fluid" alt="terasa lupo "></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20190928_125703.jpg') }}" class="img-fluid" alt="terasa lupo "></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20191019_084806.jpg') }}" class="img-fluid" alt="terasa lupo "></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20191102_105026.jpg') }}" class="img-fluid" alt="terasa lupo "></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20191102_111725.jpg') }}" class="img-fluid" alt="terasa lupo "></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20191116_081205.jpg') }}" class="img-fluid" alt="teresa lupo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20191122_165628.jpg') }}" class="img-fluid" alt="teresa lupo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20200214_135827.jpg') }}" class="img-fluid" alt="teresa lupo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/IMG_20171230_144815.jpg') }}" class="img-fluid" alt="teresa lupo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/IMG_20180126_165508.jpg') }}" class="img-fluid" alt="teresa luppo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/IMG_20180513_085528.jpg') }}" class="img-fluid" alt="teresa luppo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/IMG_20180601_145943.jpg') }}" class="img-fluid" alt="teresa luppo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/IMG_20180616_122459.jpg') }}" class="img-fluid" alt="teresa luppo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/IMG_20180630_082245.jpg') }}" class="img-fluid" alt="teresa luppo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/IMG_20180707_134202.jpg') }}" class="img-fluid" alt="teresa lupo "></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/IMG_20180714_084641.jpg') }}" class="img-fluid" alt="teresa lupo"></div>
            <div class="col-4 col-lg-3 mb-5"><img src="{{ asset('images/photos-realisation/20180913_165401.jpg') }}" class="img-fluid" alt="teresa lupo"></div>
        </div>
    </div>
</div>
@stop
