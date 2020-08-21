{{--
    Chemin :/resources/views/templates/partials/_header.blade.php
    Description: Templates par default du header
    Données disponible: -- // --
--}}

<div class="container-md">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="{{ URL::route('page.accueil') }}">
            <img src="{{ asset('images/teresa-lupo.png') }}" class="img-fluid logo-teresa" alt="teresa lupo" width="220"
                height="164">
        </a>
        <button class="navbar-toggler order-sm-2 mb-3" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-sm-3 " id="navbarNav">
            <ul class="navbar-nav custom-nav ml-xl-2">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ URL::route('page.realisation') }}">NOS REALISATIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route('page.tarif') }}">TARIFS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route('news.index') }}">ACTUALITES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::route('page.contact') }}">CONTACTS</a>
                </li>
                <li class="nav-item ml-lg-4 mb-3 mb-lg-0">
                    <ul class="list-inline add-margin-icon-navbar">
                        <li class="list-inline-item "><a href="#"><img src="{{ asset('images/pictos/telephone.png') }}"
                                    alt="telephone"></a></li>
                        <li class="list-inline-item"><a href="#"><img src="{{ asset('images/pictos/facebook.png') }}"
                                    alt="facebook"></a></li>
                        <li class="list-inline-item"><a href="#"><img src="{{ asset('images/pictos/instagram.png') }}"
                                    alt="instagram"></a></li>
                        <li class="list-inline-item"><a href="#"><img src="{{ asset('images/pictos/maison.png') }}" alt="maison"></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Btn prendre rendez-vous-->
        <a href="#"
            class="btn-lg btn-rendez-vous text-decoration-none order-1 order-sm-1 order-lg-3 size-btn-margin-md mb-3 mb-md-0 ">PRENDRE
            <br> RENDEZ-VOUS</a>
    </nav>
</div>

