<h2 class="flaresy-title">NOS SERVICES</h2>

<div class="custom-underlines">
    <div class="line"></div>
    <div class="box"></div>
    <div class="line"></div>
</div>

<div class="flaresy-undertitle">
    Flaresy Agency, agence audiovisuelle créée en 2020, est une agence SAS située à Toulon.
    Nous couvrons tous les besoins en vidéo : réalisation, motion design, effets spéciaux.
</div>

<div id="services" class="mb-lg-5">
    @foreach($services as $service)
    <div class="service">
        <div class="row">
            <div class="col-3 img-service-col">
                <div class="img-service-container">
                    <img src="{{ asset('storage/photos/nos-services/'.$service->img_nom_home) }}" alt="Image service Flaresy" class="img-service">
                </div>
            </div>
            <div class="col-9 pl-lg-4 pt-2 pb-2">
                <h3 class="service-title text-capitalize">{{ $service->nom }}</h3>
                <div class="service-txt">{{ $service->descriptif }}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
