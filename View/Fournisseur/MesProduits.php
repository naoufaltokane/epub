<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-PUB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }

      .carousel-inner img {
        width: 100%; /* Set width to 100% */
        min-height: 200px;
      }

      /* Hide the carousel text when the screen is less than 600 pixels wide */
      @media (max-width: 600px) {
        .carousel-caption {
          display: none; 
        }
      }
    </style>
  </head>
  <body>
    <nav>
      <div class="alert alert-info alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
      </div>
      <?php include("header/header.php"); ?>
    </nav>
    <center><h2><b>Mes Produits</b></h2></center>
    <br>
    <div class="container-fluid text-center">
      <div class="container-fluid">
        <table class="table table-bordered table-dark text-center">
          <thead class="text-center">
            <tr>
                <td scope="col"><h4><b>ID</b></h4></td>
                <td scope="col"><h4><b>Nom</b></h4></td>
                <td scope="col"><h4><b>Description</b></h4></td>
                <td scope="col"><h4><b>Prix</b></h4></td>
                <td scope="col"><h4><b>Location</b></h4></td>
                <td scope="col"><h4><b>Statut</b></h4></td>
                <td scope="col"><h4><b><button type="button" onclick="location.href='AjouterProduit.php';" class="btn btn-success btn-lg">Ajouter Produit</button></b></h4></td>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($produits as $p)
              {
            ?>
            <form id="ModifierProduit" method="POST" enctype="multipart/form-data" action="../../Controller/PostData/ModifierProduit.php">
              
              <tr>
                <td class="col-sm-1"><input type="text" class="form-control" name="idProduit" value="<?php echo $p->getP_id()?>" readonly></td>
                <td><input type="text" value="<?php echo $p->getP_nom()?>" class="form-control" id="NomProduit" name="NomProduit" required/></td>
                <td class="col-sm-3"><input type="text" class="form-control" id="Description" name="Description" value="<?php echo $p->getP_description()?>"/></td>
                <th><div class="form-group col-md-9"><input type="text" class="form-control" id="Prix" name="Prix" value="<?php echo $p->getP_prix()?>" required /></div> MAD</th>
                <td>
                  <select class="form-control form-control-lg" id="Region" name="Region">
                    <optgroup label="Location actuelle">
                    <option value="<?php echo $p->getP_location()?>" selected><?php echo $p->getP_location()?></option>
                    </optgroup>
                    <optgroup label="Choisir la nouvelle location">
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
                  </optgroup>
                  </select>
                </td>
                <td class="col-sm-1">
                  <select class="form-control form-control-lg" id="Statut" name="Statut">
                    <optgroup label="Statut actuel">
                    <option value="<?php echo $p->getP_statut()?>" selected><?php echo $p->getP_statut()?></option>
                    </optgroup>
                    <optgroup label="Choisir le nouveau statut">
                    <option value="disponible">Disponible</option>
                    <option value="indisponible">Indisponible</option>
                    </optgroup>
                  </select>
                </td>
                <td class="col-sm-2">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <input type="submit" name="Modifier" value="Modifier" class="btn btn-primary ">
                    <input type="submit" name="Supprimer" value="Supprimer" class="btn btn-danger ">
                  </div>
                </td>
              </tr>
            </form>
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <center>
    <button type="button" onclick="location.href='MesCommandes.php';" class="btn btn-success btn-lg">Commandes</button>
    <button type="button" onclick="location.href='index.php';" class="btn btn-warning btn-lg">Retour</button>
    </center>
    <br>
    <footer class="container-fluid text-center">
      <?php include("footer/footer.html"); ?>
    </footer>
  </body>
</html>
