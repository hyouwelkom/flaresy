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
                    <p class="equipe-p"><span class="font-weight-bolder">La directrice artistique</span> : Traduit les messages d'un client par l'image. Avec l'aide de son équipe de création, elle invente des logos, élabore des maquettes de journaux, conçoit des emballages... Son objectif majeur : le style et la personnalité.</p>
                    <br>
                    <p class="equipe-p"><span class="font-weight-bolder">Assistant Production</span> : Technicien dans le milieu cinématographique et audiovisuel. Il s'occupe de l'organisation et de la logistique des projets, de la gestion RH ainsi que de la gestion financière.</p>
                    <br>
                    <p class="equipe-p"><span class="font-weight-bolder">Chef de projet / Réalisateur</span> : Dirige la fabrication d'une oeuvre audiovisuelle, généralement pour le cinéma ou la télévision, mais aussi pour la musique enregistrée ou la fabrication d'une émission de radio.</p>
                    <br>
                    <p class="equipe-p"><span class="font-weight-bolder">Motion Designer / Community Manager</span> : Réalise des productions graphiques incorporant à la fois de la vidéo, de l'animation 3D, des effets spéciaux, des sons ou encore de la typographie. Elle gère également notre image à travers la communication notamment sur les réseaux sociaux.</p>
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
