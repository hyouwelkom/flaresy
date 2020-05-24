<h2 class="flaresy-title">NOS PRODUCTIONS</h2>

<div class="custom-underlines">
    <div class="line"></div>
    <div class="box"></div>
    <div class="line"></div>
</div>

<div class="flaresy-undertitle mb-lg-5">
    Nous possédons des box de production
    ainsi qu’une salle fond vert qui nous
    permettent de réaliser un travail dans
    les meilleures conditions et d’élargir le
    champ des possibles.
    Notre spécialité est la réalisation de teasers
    de présentation pour votre entreprise ou
    pour les différents évènements que vous
    pouvez réaliser.
</div>

<div id="categories" class="mb-lg-5">
    <a class="btn btn-lg btn-flaresy-bis active" href="javascript:void(0)" onclick="filtrerCategoriesHome('all', this)">
        Tout
    </a>
    @foreach($categories as $categorie)
        <a class="btn btn-lg btn-flaresy-bis" href="javascript:void(0)" onclick="filtrerCategoriesHome('{{ $categorie->nom }}', this)">
            {{ $categorie->libelle }}
        </a>
    @endforeach
</div>

<div id="productions">
    @foreach($productions as $production)
        <div class="production @foreach($production->categories as $categorie){{ $categorie->nom }} @endforeach">
            <img class="img-prod" src="{{ asset('storage/photos/nos-prods/'.$production->nom_img) }}">
            <div class="container-plus">
                <h1 class="prod-plus">{{ $production->nom_projet }}</h1>
                <p class="prod-client">{{ $production->nom_client }}</p>
            </div>
        </div>
    @endforeach
</div>

<div class="row mb-lg-5 mt-lg-5 pb-lg-5">
    <div class="col text-center">
        <a href="/nos-prods" class="btn btn-flaresy-rose">VOIR TOUT</a>
    </div>
</div>
