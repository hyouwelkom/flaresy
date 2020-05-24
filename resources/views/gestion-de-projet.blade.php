@extends('layout')

@section('content')
    <div class="section pt-lg-5 pb-lg-5">
        <br>
        @include('flash-message')
        <br>

        <h2 class="flaresy-title pt-lg-5">GESTION DE PROJET</h2>

        <div class="custom-underlines">
            <div class="line"></div>
            <div class="box"></div>
            <div class="line"></div>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="list-group" style="padding-left: 100px;" id="list-tab" role="tablist">
                    @foreach(Auth::user()->projets as $projet)
                        <a class="list-group-item list-group-item-action" id="list-{{ Str::slug($projet->nom) }}-list" data-toggle="list" href="#list-{{ Str::slug($projet->nom) }}" role="tab" aria-controls="{{ Str::slug($projet->nom) }}">{{ $projet->nom }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-6">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="list-{{ Str::slug($projet->nom) }}" role="tabpanel" aria-labelledby="list-{{ Str::slug($projet->nom) }}-list">
                        @if($projet->fichiers->count() > 0)
                            @foreach($projet->fichiers as $fichier)
                                <a target="_blank" href="{{ asset('storage/fichiers-client/'.Auth::user()->id.'/'.$fichier->nom_fichier) }}">{{ $fichier->nom }}</a>
                            @endforeach
                        @else
                            Aucun fichier pour le moment.
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
