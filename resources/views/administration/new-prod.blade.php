<h2>Enregistrer une production</h2>
<form method="post" action="/new-prod" enctype="multipart/form-data">
    @csrf
    <input required name="nom_projet" class="form-control" placeholder="Nom du projet">
    <br>
    <input required name="nom_client" class="form-control" placeholder="Nom du client">
    <br>
    <label for="nom_img">Image en JPG :</label>
    <input required type="file" class="form-control-file" id="nom_img" name="nom_img">
    <br>
    <h4>Catégories :</h4>
    <select style="width: 100%;" id="categories_select2" class="js-example-placeholder-single js-states form-control" name="categories[]" multiple="multiple">
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
        @endforeach
    </select>
    <br>

    <br>
    <button class="btn btn-flaresy-rose" type="submit">ENREGISTRER</button>
</form>
