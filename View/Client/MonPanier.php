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
/*
** Style Simple Ecommerce Theme for Bootstrap 4
** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
*/
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}


  </style>


</head>
<body>
  <nav >
  <div class="alert alert-info alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div>
  <?php include("header/header.php"); ?>
</nav>

    <center><h2><b><i class="glyphicon glyphicon-shopping-cart"></i>Panier</b></h2></center>
    <br>
    <br>
    <br>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Nom Produit</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Disponible</th>
                            <th scope="col">Quantité</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
            <?php 
                foreach ($pan as $p) 
                {   
                $idP = $p->getP_id();
                $produit = $P_DAO->getProduit($idP);
            ?>
                <form method="POST" action="../../Controller/PostData/ModifierPanier.php">
                    <tr>
                        <td class="col-sm-2"><img src="<?php echo $produit->getP_image();?>" class="img-responsive" alt="image" width="100" height="40"></td>
                        <td class="col-sm-2"><?php echo $produit->getP_nom();?></td>
                        <td class="col-sm-2"><?php echo $produit->getP_prix()." MAD";?></td>
                        <td class="col-sm-2"><?php echo $produit->getP_statut();?></td>
                        <td><input class="form-control" type="number" name="quantite" min="1" max="50" value="1" /></td>
                        <td>
                          <input type="hidden" name="panid" value="<?php echo $p->getPanier_id()?>">
                          <input type="hidden" name="idProduit" value="<?php echo $produit->getP_id()?>">
                          <input type="hidden" name="idFournisseur" value="<?php echo $produit->getF_id()?>">
                            <input type="submit" name="Commander" value="Commander" class="btn btn-sm btn-success">
                            <input type="submit" name="SupprimerPanier" value="Supprimer" class="btn btn-sm btn-danger">
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
    </div>
</div>

<center>
    <button type="button" onclick="location.href='MesCommandes';" class="btn btn-success btn-lg">Commandes</button>
    <button type="button" onclick="location.href='marketing';" class="btn btn-warning btn-lg">Retour</button>
    </center>
    <br>

<footer class="container-fluid text-center">
  <?php include("footer/footer.html"); ?>

</footer>



</body>
</html>
