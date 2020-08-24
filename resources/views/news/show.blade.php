{{--
    Chemin :/resources/views/news/show.blade.php
    Description: affiche  le content de la page  des actualites
    Données disponible: $new Array[objet('id, titre, image, description, content')]
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
            <div class="col-md-5">
                <div class="h-100 text-center text-md-right">
                    <img src="{{ asset($new->image)}}" class="img-fluid  w-100 w-md-75 " alt="teresa lupo">
                </div>
            </div>
            <div class="col-md-7">
                <h1 class="display-4">{{ $new->title}}</h1>
                <div class="font-weight-bold h4">{{\Carbon\Carbon::parse($new->dateDuJour)->format('d-M-Y') }}</div>
                <P>{!!  $new->content !!}</P>
                <div class="text-bottom">
                    <a role="button" class="btn btn-outline-secondary" href="{{ URL::route('news.index')}}">TOUTES LES NEWS</a>
                </div>
            </div>
        </div>
        <div class="mt-5"></div>
    </div>
@stop

