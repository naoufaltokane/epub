<form id="PostProduit" method="POST" enctype="multipart/form-data" action="../../Controller/PostData/PostProduit.php">
  <div class="form-group col-md-6">
    <label for="NomProduit">Nom Produit</label>
    <input type="text" class="form-control" id="NomProduit" name="NomProduit" required/>
  </div>
  <div class="form-group col-md-6">
    <label for="Prix">Prix </label>
    <input type="text" class="form-control" id="Prix" name="Prix" required />
  </div>
  <div class="form-group col-md-12">
    <label for="Description">Description</label>
    <input type="text" class="form-control" id="Description" name="Description"  />
  </div>
  <div class="form-group col-md-8">
    <label for="Region">Région</label>
    <select class="form-control form-control-lg" id="Region" name="Region">
      <option value="Tanger-Tétouan-Al Hoceïma">Tanger-Tétouan-Al Hoceïma</option>
      <option value="Oriental">Oriental</option>
      <option value="Fès-Meknès">Fès-Meknès</option>
      <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
      <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
      <option value="Casablanca-Settat">Casablanca-Settat</option>
      <option value="Marrakech-Safi">Marrakech-Safi</option>
      <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
      <option value="Souss-Massa">Souss-Massa</option>
      <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
      <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
      <option value="Dakhla-Oued Ed-Dahab">Dakhla-Oued Ed-Dahab</option>
    </select>
  </div>
  <div class="form-group col-md-4">
    <label for="inputCity">Statut</label>
    <input type="text" class="form-control" name="Statut" id="Statut" required />
  </div>
  <div class="form-group col-md-12">
    <p><strong><font color="red">*</font></strong>La modifications des produits doit être valider par les administrateurs dans quelques heures</p>
  </div>
  <div class="form-group col-md-6">
  <input type="submit" value="Modifier" class="btn btn-info col-sm-12"/>
  </div>
  <div class="form-group col-md-6">
  <button type="button" class="btn btn-warning col-md-12" data-dismiss="modal">Annuler</button>
  </div>
</form>