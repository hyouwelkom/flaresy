<h2>Supprimer un élément</h2>

<div id="elements">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Utilisateurs
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#elements">
            <div class="card-body">
                @foreach($users as $user)
                    <div class="row pb-lg-3">
                        <div class="col">
                            {{ ucfirst($user->prenom).' '.strtoupper($user->nom) }} <span class="badge-info badge">{{ $user->niveau->libelle }}</span>
                        </div>
                        <div class="col float-right">
                            <form action="{{ route('destroy-user', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Services
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#elements">
            <div class="card-body">
                @foreach($services as $service)
                    <div class="row pb-lg-3">
                        <div class="col">
                            <strong>{{ $service->nom }}</strong> ({{ $service->descriptif }})
                        </div>
                        <div class="col float-right">
                            <form action="{{ route('destroy-service', $service->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Productions
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#elements">
            <div class="card-body">

                @foreach($productions as $production)
                    <div class="row pb-lg-3">
                        <div class="col">
                            <strong>{{ $production->nom_projet }}</strong> (Client : {{ $production->nom_client }})
                        </div>
                        <div class="col float-right">
                            <form action="{{ route('destroy-production', $production->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Catégories de production
                </button>
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#elements">
            <div class="card-body">

                @foreach($categories as $categorie)
                    <div class="row pb-lg-3">
                        <div class="col">
                            {{ $categorie->libelle }}
                        </div>
                        <div class="col float-right">
                            <form action="{{ route('destroy-categorie', $categorie->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingFive">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Réseaux sociaux
                </button>
            </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#elements">
            <div class="card-body">

                @foreach($reseaux as $reseau)
                    <div class="row pb-lg-3">
                        <div class="col">
                            {{ $reseau->nom }}
                        </div>
                        <div class="col float-right">
                            <form action="{{ route('destroy-reseau', $reseau->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
