<h2>Nouvelle catégorie de production</h2>
<form method="post" action="/new-cat">
    @csrf
    <input required name="nom" class="form-control" placeholder="Nom de la catégorie">
    <br>
    <button class="btn btn-flaresy-rose" type="submit">ENREGISTRER</button>
</form>
