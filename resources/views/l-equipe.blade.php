@extends('layout')

@section('content')
    <div class="section pt-lg-5">
        <h2 class="flaresy-title">QUELQUES MOTS SUR L'ÉQUIPE</h2>

        <div class="custom-underlines">
            <div class="line"></div>
            <div class="box"></div>
            <div class="line"></div>
        </div>

        <div class="flaresy-undertitle larger-undertitle mb-lg-5">
            RENCONTREZ NOTRE TEAM
        </div>

        <div id="equipe-fiche">
            <div class="row">
                <div class="col">
                    <strong><h3>UNE ÉQUIPE JEUNE ET DYNAMIQUE</h3></strong><br><br>
                    @foreach($users as $user)
                        <p class="equipe-p"><span class="font-weight-bolder">{{ $user->poste }}</span> : {{ $user->role }}</p>
                        <br>
                    @endforeach
                </div>
                <div class="col text-center">
                    <img src="{{ asset('storage/photos/l-equipe/pc.png') }}">
                    <h1 class="teaser-txt">Teaser à venir...</h1>
                </div>
            </div>
        </div>

        <div class="pt-lg-5 pb-lg-5">
            @include('partials.l-equipe')
        </div>



    </div>
@endsection
