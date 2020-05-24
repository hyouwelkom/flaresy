@include('flash-message')
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 slider-img" src="{{ asset('storage/photos/slider1.jpg') }}" alt="Première slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 slider-img" src="{{ asset('storage/photos/slider2.jpg') }}" alt="Seconde slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 slider-img" src="{{ asset('storage/photos/slider7.jpg') }}" alt="Troisième slide">
        </div>
        <div class="carousel-caption">
            <h1 class="carousel-caption-title">BIENVENUE DANS NOTRE STUDIO</h1>
            <span class="carousel-caption-text">
                Flaresy, agence audiovisuelle, est une agence SAS située à Toulon.
                Elle a pour activité la création de films institutionnels, spots
                publicitaires & événementiels, de l’animation 3D et du motion
                design.
                Aujourd’hui, la vidéo devient plus ludique et valorise davantage
                l’activité sur la toile, elle devient l’outil indispensable pour
                communiquer. Les vidéos augmentent le référencement naturel
                sur les moteurs de recherche et doublent la visibilité sur internet.
            </span>
        </div>
    </div>
</div>
