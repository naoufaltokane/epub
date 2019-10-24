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
    <center><h2><b>Mes Commandes</b></h2></center>
    <br>
    <br>
    <br>
    <div class="container-fluid text-center">
      <div class="container-fluid">
        <table class="table table-bordered table-dark text-center">
          <thead class="text-center">
            <tr>
                <td scope="col"><h4><b>ID</b></h4></td>
                <td scope="col"><h4><b>Nom de produit</b></h4></td>
                <td scope="col"><h4><b>Quantité demandé</b></h4></td>
                <td scope="col"><h4><b>Prix Total</b></h4></td>
                <td scope="col"><h4><b>Nom et prénom du fournisseur</b></h4></td>
                <td scope="col"><h4><b>Adresse émail du fournisseur</b></h4></td>
                <td scope="col"><h4><b>Téléphone du fournisseur</b></h4></td>
                <td scope="col"><h4><b>Date de commande</b></h4></td>
                <td scope="col"><h4><b>Comment voullez-vous traiter cette commandes?</b></h4></td>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($commandesClient as $cmd)
              {
            ?>
            <form id="ModifierCommande" method="POST" enctype="multipart/form-data" action="../../Controller/PostData/ModifierCommande.php">
              <tr>
                <td class="col-sm-1">
                  <input type="text" class="form-control" name="idCommande" value="<?php echo $cmd->getCmd_id()?>" readonly>
                </td>
                <td class="col-sm-1">
                  <?php
                    $produit = $P_DAO->getProduit($cmd->getP_id());
                    $nomProduit = $produit->getP_nom();
                    echo $nomProduit;
                  ?>
                </td>
                <td >
                  <input type="number" min="1" max="50" class="form-control" name="quantite" value="<?php echo $cmd->getCmd_qte()?>">
                </td>
                <td class="col-sm-1">
                  <?php
                    $pu = $produit->getP_prix();
                    $qte = $cmd->getCmd_qte();
                    $prixTotal= $pu*$qte;
                    echo $prixTotal." MAD";
                  ?>
                </td>
                <td class="col-sm-2">
                  <?php 
                    $fournisseur = $M_DAO->getMembre($cmd->getF_id());
                    $nom = $fournisseur->getM_nom();
                    $prenom = $fournisseur->getM_prenom();
                    echo $nom." ".$prenom;
                  ?>
                </td>
                <td class="col-sm-2">
                  <?php 
                    $email=$fournisseur->getM_email();
                    echo $email; 
                  ?>
                </td>
                <td class="col-sm-1">
                  <?php 
                    $tel=$fournisseur->getM_telephone();
                    echo $tel; 
                  ?>
                </td>
                <td class="col-sm-1"><?php echo $cmd->getCmd_date()?></td>
                <?php 
                  if ($cmd->getCmd_etat()=='Traitee') 
                  {
                ?>
                <td class="col-sm-3">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <input type="submit" name="Traiter" value="Commande Traité" class="btn btn-success">
                  </div>
                </td>
                <?php
                  }
                  else 
                  {
                ?>
                  <td class="col-sm-3">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <input type="submit" name="Modifier" value="Modifier" class="btn btn-info">
                      <input type="submit" name="Supprimer" value="Supprimer" class="btn btn-danger">
                    </div>
                  </td>
                <?php
                  }
                ?>
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
    <button type="button" onclick="location.href='MonPanier';" class="btn btn-success btn-lg">Panier</button>
    <button type="button" onclick="location.href='marketing';" class="btn btn-warning btn-lg">Retour</button>
    </center>
    <br>
    <footer class="container-fluid text-center">
      <?php include("footer/footer.html"); ?>
    </footer>
  </body>
</html>