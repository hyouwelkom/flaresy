@extends('layout')

@section('content')
<div class="section pt-lg-5">
    <h2 class="flaresy-title">NOS SERVICES</h2>

    <div class="custom-underlines">
        <div class="line"></div>
        <div class="box"></div>
        <div class="line"></div>
    </div>

    <div class="flaresy-larger-undertitle mb-lg-5">
        Nous possédons des boxs de production ainsi qu'une salle fond vert qui nous permettent de réaliser un travail dans les meilleures conditions et d'élargir le champ des possibles. Notre spécialité est la réalisation de teasers de présentation pour votre entreprise ou pour les différents évènements que vous pourriez réaliser.
    </div>

    <div id="img-services">
        <img id="img-services-bg" src="{{ asset('storage/photos/slider1.jpg') }}">

        <div id="services-boxes">

            <div class="service-box">
                <img src="{{ asset('storage/photos/nos-services/films.svg') }}" class="service-box-img pb-3">
                <h2 class="pb-3">FILMS</h2>
                <p>Films de communication interne ou externe d'une société, association, institution ou d'un groupe.</p>
            </div>

            <div class="service-box">
                <img src="{{ asset('storage/photos/nos-services/spots.svg') }}" class="service-box-img pb-3">
                <h2 class="pb-3">SPOTS</h2>
                <p>Courte production (moins de 30s) contenant un message publicitaire et destinée à être diffusée sur internet, à la télévision ou au cinéma.</p>
            </div>

            <div class="service-box">
                <img src="{{ asset('storage/photos/nos-services/animation.svg') }}" class="service-box-img pb-3">
                <h2 class="pb-3">ANIMATION 3D</h2>
                <p>De plus en plus en vogue, l'animation 3D offre un champ des possibles infini à tous vos projets. C'est une animation en volume dans un monde virtuel.</p>
            </div>

            <div class="service-box">
                <img src="{{ asset('storage/photos/nos-services/motion-design.svg') }}" class="service-box-img pb-3">
                <h2 class="pb-3">MOTION DESIGN</h2>
                <p>Très tendance, on le retrouve partout dans nos vies aujourd'hui. Notamment dans les publicités télévisées, les génériques de séries TV ou des films au cinéma, les génériques du JT ou diverses émissions télévisées jusqu'aux bandeaux titrés en bas de l'écran.</p>
            </div>

            <div class="service-box">
                <img src="{{ asset('storage/photos/nos-services/marketing.svg') }}" class="service-box-img pb-3">
                <h2 class="pb-3">VIDÉOS MARKETING</h2>
                <p>Ce format est extrêmement efficace pour promouvoir une entreprise, une marque, un produit etc...<br>Marquez les esprits !</p>
            </div>

            <div class="service-box">
                <img src="{{ asset('storage/photos/nos-services/drone.svg') }}" class="service-box-img pb-3">
                <h2 class="pb-3">VIDÉOS DRONES / 360°</h2>
                <p>Vidéos aériennes par drone. Filmer du ciel est le moyel idéal pour mettre en valeur tous types de sujets ou d'évènements. Un drone équipé d'une caméra pour réaliser des vidéos aériennes permettant de présenter d'une façon novatrice une ville, un village, un monument ou un paysage.</p>
            </div>

        </div>
    </div>

</div>
@endsection
