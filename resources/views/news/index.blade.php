{{--
    Chemin :/resources/views/news/index.blade.php
    Description: affiche  le content de la page  des actualites
    Données disponible: $news array(array objet[('id, titre, image, description, content')]
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
                                    <img src="{{ asset($new->image) }}" alt="teresa lupo " class="card-img img-fluid h-1OO">
                                </div>
                                <div class="col-12">
                                    <div class="card-body h-100 p-4">
                                        <div class="">
                                            <h2 class="card-title font-weight-bold">{{ $new->title }}</h2>
                                            <div class="h4">{{\Carbon\Carbon::parse($new->dateDuJour)->format('d-M-Y') }}</div>
                                            <div class="card-text">
                                                <p>{{ $new->description}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-bottom mt-2">
                                           <a role="button" class="btn btn-outline-secondary" href="{{ URL::route('news.show',['id'=> $new->id,'slug'=>Str::slug($new->title, '-')]) }}">LIRE LA SUITE </a>
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
                                        <img src="{{ asset($new->image) }}" alt="instructeur" class="h-100 card-img-top img-fluid">
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="card-body p-4 d-flex flex-column align-items-center h-100">
                                            <div class="mb-auto">
                                                <h2 class="card-title font-weight-bold">{{ $new->title }}</h2>
                                                <div class="h4">{{\Carbon\Carbon::parse($new->dateDuJour)->format('d-M-Y') }}</div>
                                                <div class="card-text">{{ $new->description}}
                                                </div>
                                            </div>
                                            <div class="text-bottom mt-2">
                                                 <a role="button" class="btn btn-outline-secondary" href="{{ URL::route('news.show',['id'=> $new->id,'slug'=>Str::slug($new->title, '-')]) }}">LIRE LA SUITE </a>
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
                                            <h2 class="card-title font-weight-bold">{{ $new->title }}</h2>
                                            <div class=" h4">{{\Carbon\Carbon::parse($new->dateDuJour)->format('d-M-Y') }}</div>
                                            <div class="card-text">{{ $new->description}}</div>
                                        </div>
                                        <div class="text-bottom mt-2">
                                            <a role="button" class="btn btn-outline-secondary" href="{{ URL::route('news.show',['id'=> $new->id,'slug'=>Str::slug($new->title, '-')]) }}">LIRE LA SUITE </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-8 col-12 order-1 order-sm-2">
                                    <img src="{{ asset($new->image) }}" alt="instructeur" class=" h-100 card-img-top img-fluid">
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
                                            <h2 class="card-title font-weight-bold">{{ $new->title }}</h2>
                                            <div class="h4">
                                                {{\Carbon\Carbon::parse($new->dateDuJour)->format('d-M-Y') }}</div>
                                            <div class="card-text"> {{ $new->description}}</div>
                                        </div>
                                        <div class="text-bottom mt-2">
                                            <a role="button" class="btn btn-outline-secondary" href="{{ URL::route('news.show',['id'=> $new->id,'slug'=>Str::slug($new->title, '-')]) }}">LIRE LA SUITE </a>
                                        </div>

                                    </div>
                                </div>
                                <div class=" col-12 col-sm-8 order-1 order-sm-2">
                                    <img src="{{ asset($new->image) }}" alt="teresa lupo" class="h-100 card-img-top img-fluid">
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