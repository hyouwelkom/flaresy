<h2>Ajouter un fichier à un projet</h2>
<form method="post" action="/new-fichier" enctype="multipart/form-data">
    @csrf
    <input required name="nom" class="form-control" placeholder="Nom du document">
    <br>
    <label for="fichier">Fichier :</label>
    <input required type="file" class="form-control-file" id="fichier" name="fichier">
    <br>
    <select name="projet_id" class="form-control">
        <option hidden value="">-- Sélectionner un projet --</option>
        @foreach($projets as $projet)
            <option value="{{ $projet->id }}">{{ ucfirst($projet->client->prenom).' '.strtoupper($projet->client->nom).' > '.$projet->nom }}</option>
        @endforeach
    </select>
    <br>
    <button class="btn btn-flaresy-rose" type="submit">ENREGISTRER</button>
</form>
