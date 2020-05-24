<h2>Ajouter un projet à un client</h2>
<form method="post" action="/new-projet">
    @csrf
    <input required name="nom" class="form-control" placeholder="Nom du projet">
    <br>
    <select name="user_id" class="form-control">
        <option hidden value="">-- Sélectionner un client --</option>
        @foreach($clients as $client)
            <option value="{{ $client->id }}">{{ ucfirst($client->prenom).' '.strtoupper($client->nom) }}</option>
        @endforeach
    </select>
    <br>
    <button class="btn btn-flaresy-rose" type="submit">ENREGISTRER</button>
</form>
