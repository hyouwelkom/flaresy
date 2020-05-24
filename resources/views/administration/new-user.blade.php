<h2>Nouvel utilisateur</h2>
<form method="post" action="/new-user" enctype="multipart/form-data">
    @csrf
    <input required name="username" class="form-control" placeholder="Nom d'utilisateur">
    <br>
    <input required name="password" class="form-control" type="password" placeholder="Mot de passe">
    <br>
    <div class="row">
        <div class="col">
            <input required name="prenom" class="form-control" placeholder="Prénom">
        </div>
        <div class="col">
            <input required name="nom" class="form-control" placeholder="Nom">
        </div>
    </div>
    <br>
    <input required name="email" class="form-control" type="email" placeholder="Adresse e-mail">
    <br>
    <select id="niveau" required name="niveau" class="form-control">
        <option hidden value="">-- Sélectionner un type de compte --</option>
        @foreach($niveaux as $niveau)
            <option value="{{ $niveau->id }}">{{ $niveau->libelle }}</option>
        @endforeach
    </select>
    <br>
    <input id="poste" required name="poste" class="form-control" placeholder="Poste (vide si l'utilisateur est un Client)">
    <br>
    <input id="role" required name="role" class="form-control" placeholder="Descriptif du rôle de l'utilisateur (vide si l'utilisateur est un Client)">
    <br>
    <label for="img_membre">Image du membre de l'équipe (en JPG) :</label>
    <input required type="file" class="form-control-file" id="img_membre" name="img_membre">
    @foreach($reseaux as $reseau)
        <br>
        <input id="{{ Str::slug($reseau->nom) }}" name="{{ Str::slug($reseau->nom) }}" class="form-control input-reseau-social" placeholder="Lien vers le profil {{ $reseau->nom }} (laisser vide si pas de profil) :">
    @endforeach
    <br>
    <button class="btn btn-flaresy-rose" type="submit">ENREGISTRER</button>
</form>
