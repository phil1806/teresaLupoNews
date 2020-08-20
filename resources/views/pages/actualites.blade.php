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
        @foreach($news as $new)
            @if ($i === 1)
                <?php $i++ ?>
                <div class="pl-lg-5 mt-5">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="card shadow">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset($new->image) }}" alt="teresa lupo " class="card-img img-fluid">
                                </div>
                                <div class="col-12">
                                    <div class="card-body h-100 p-4">
                                        <div class="">
                                            <div class="card-title h2 mt-4">{{\Carbon\Carbon::parse($new->created_at)->format('d-M-Y') }}</div>
                                            <div class="card-text">
                                                <p>{{ $new->description}}
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
                 @elseif($i==2)
                    <?php $i++ ?>
                    <div class="pl-lg-5 mt-5">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="card shadow">
                                <div class="row">
                                    <div class=" col-12 col-sm-8">
                                        <img src="{{ asset($new->image) }}      " alt="instructeur" class="card-img-top img-fluid">
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="card-body p-4 d-flex flex-column align-items-center h-100">
                                            <div class="mb-auto">
                                                <div class="card-title h2 mt-4">{{\Carbon\Carbon::parse($new->created_at)->format('d-M-Y') }}</div>
                                                <div class="card-text">{{ $new->description}}
                                                </div>
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
             @elseif($i==3)
                <?php $i++ ?>
                <div class="pl-lg-5 mt-5">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="card shadow">
                            <div class="row">
                                <div class="col-sm-4 col-12 order-2 order-sm-1">
                                    <div class="card-body p-4 d-flex flex-column align-items-center h-100 ">
                                        <div class="mb-auto">
                                            <div class="card-title h2 mt-2">{{\Carbon\Carbon::parse($new->created_at)->format('d-M-Y') }}</div>
                                            <div class="card-text">{{ $new->description}}</div>
                                        </div>
                                        <div class="text-bottom mt-2">
                                            <button type="button" class="btn btn-outline-secondary">LIRE LA SUITE </button>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-8 col-12 order-1 order-sm-2">
                                    <img src="{{ asset($new->image) }}" alt="instructeur" class="card-img-top img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             @else
                <?php $i++ ?>
                <div class="pl-lg-5 mt-5">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="card shadow">
                            <div class="row">
                                <div class="col-sm-4 col-12 order-2 order-sm-1">
                                    <div class="card-body p-4 d-flex flex-column align-items-center h-100">
                                        <div class="mb-auto">
                                            <div class="card-title h2 mt-4">
                                                {{\Carbon\Carbon::parse($new->created_at)->format('d-M-Y') }}</div>
                                            <div class="card-text"> {{ $new->description}}</div>
                                        </div>
                                        <div class="text-bottom">
                                            <button type="button" class="btn btn-outline-secondary">LIRE LA SUITE </button>
                                        </div>

                                    </div>
                                </div>
                                <div class=" col-12 col-sm-8 order-1 order-sm-2">
                                    <img src="{{ asset($new->image) }}" alt="teresa lupo" class="card-img-top img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <div class="mt-5"></div>
</div>
@stop
