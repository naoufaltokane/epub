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
      /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
          margin-bottom: 0;
          border-radius: 0;
        }
        
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}
        
        /* Set gray background color and 100% height */
        .sidenav {
          padding-top: 20px;
          background-color: #f1f1f1;
          height: 100%;
        }
        
        /* Set black background color, white text and some padding */
        
        
        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
          .sidenav {
            height: auto;
            padding: 15px;
          }
          .row.content {height:auto;} 
        }
      </style>
    </head>
    <body>
      <nav>
        <?php include("header/header.php"); ?>
      </nav>

      <br><br><br>
      <div class="container-fluid text-center">    
        <center>
          <div class="container">
            <button type="button" onclick="location.href='MesCommandes';" class="btn btn-success btn-lg">Commandes</button>
            <button type="button" onclick="location.href='MonPanier';" class="btn btn-warning btn-lg">Panier</button>
            <br>
            <br>
            <?php
              foreach ($AllProduits as $ap)
              {
            ?> 
              <div class="col-sm-4">
              <div class="panel panel-primary">
              <div class="panel-heading text-center"><h5><b><?php echo $ap->getP_nom() ;?></b></h5></div>
              <div class="panel-body">
                <img src="<?php echo $ap->getP_image(); ?>" class="img-responsive" alt="image" width="100" height="40">
              </div>
              <div class="panel-footer"><?php echo $ap->getP_description()." , ".$ap->getP_Prix(); ?> MAD</div>
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <form id="" method="POST" action="../../Controller/PostData/PostCommande.php">
                    <div class="col-lg-3"><input type="number" name="quantite" value="1" min="1" max="20" class=" form-control " ></div>
                    <input type="hidden" name="idProduit" value="<?php echo $ap->getP_id() ;?>">
                    <input type="hidden" name="idFournisseur" value="<?php echo $ap->getF_id() ;?>">
                    <input type="submit" name="Commander" value="Commander" class="btn btn-success col-lg-8">
                  </form>
                  <br>
                  <br>
                  <form id="AjouterPanier" method="POST" action="../../Controller/PostData/PostPanier.php">
                    <input type="hidden" name="idProduit" value="<?php echo $ap->getP_id() ;?>">
                    <input type="submit" name="AjouterAuPanier" value="Ajouter au panier" class="btn btn-warning col-lg-12">
                  </form>
                </li>
              </ul>
            </div>
          </div>
          <?php 
            }
          ?>
        </div>
      </center>
    </div>
    <br>
    <footer class="container text-center">
      <?php include("footer/footer.html"); ?>
    </footer>
  </body>
</html>
