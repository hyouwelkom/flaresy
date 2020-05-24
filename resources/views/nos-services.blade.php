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

            @foreach($services as $service)
                <div class="service-box">
                    <img src="{{ asset('storage/photos/nos-services/'.$service->img_nom) }}" class="service-box-img pb-3">
                    <h2 class="pb-3 text-capitalize">{{ $service->nom }}</h2>
                    <p>{{ $service->descriptif }}</p>
                </div>
            @endforeach

        </div>
    </div>

</div>
@endsection
