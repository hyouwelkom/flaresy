@extends('layout')

@section('content')
    <div class="section pt-lg-5">
        <h2 class="flaresy-title">NOS PRODUCTIONS</h2>

        <div class="custom-underlines">
            <div class="line"></div>
            <div class="box"></div>
            <div class="line"></div>
        </div>

        <div id="categories" class="mb-lg-5">
            <a class="btn btn-lg btn-flaresy-bis active" href="javascript:void(0)" onclick="filtrerCategories('all', this)">
                Tout
            </a>
            @foreach($categories as $categorie)
                <a class="btn btn-lg btn-flaresy-bis" href="javascript:void(0)" onclick="filtrerCategories('{{ $categorie->nom }}', this)">
                    {{ $categorie->libelle }}
                </a>
            @endforeach
        </div>

        <div id="productions-prod">

            @foreach($productions as $production)
                <div class="production-prod @foreach($production->categories as $categorie){{ $categorie->nom }} @endforeach">
                    <div class="production-layer">
                        <div class="production-prod-img-container">
                            <img class="prod-img" src="{{ asset('storage/photos/nos-prods/'.$production->nom_img) }}">
                            <div class="production-prod-div">
                                <p>{{ $production->nom_projet }}</p>
                                <p class="production-prod-client">{{ $production->nom_client }} ({{ implode(', ', $production->categories->pluck('libelle')->toArray()) }})</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
