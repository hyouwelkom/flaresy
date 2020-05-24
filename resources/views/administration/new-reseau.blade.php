<h2>Ajouter un réseau social</h2>
<form method="post" action="/new-reseau">
    @csrf
    <input required name="nom" class="form-control" placeholder="Nom du réseau">
    <br>
    <input required name="icon" class="form-control" placeholder="Icone font-awesome du réseau (ex: fab fa-facebook-f)">
    <br>
    <button class="btn btn-flaresy-rose" type="submit">ENREGISTRER</button>
</form>
