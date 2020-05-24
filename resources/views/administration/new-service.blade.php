<h2>Nouveau service</h2>
<form method="post" action="/new-service" enctype="multipart/form-data">
    @csrf
    <input required name="nom" class="form-control" placeholder="Nom">
    <br>
    <input required name="descriptif" class="form-control" placeholder="Texte descriptif">
    <br>
    <label for="img_nom">Picto blanc (de préférence en SVG) :</label>
    <input required type="file" class="form-control-file" id="img_nom" name="img_nom">
    <br>
    <label for="img_nom_home">Picto noir (de préférence en SVG) :</label>
    <input required type="file" class="form-control-file" id="img_nom_home" name="img_nom_home">
    <br>
    <button class="btn btn-flaresy-rose" type="submit">ENREGISTRER</button>
</form>
