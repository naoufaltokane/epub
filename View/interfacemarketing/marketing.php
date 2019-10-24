<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-pub</title>
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
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
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
 

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
      <?php include("../header/header.html"); ?>
    
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-6 ">
      <?php include("../catégorie2/catégorie2.html"); ?>

    </div>


   
    <div class="col-sm-8 text-left"> 


      <div class="container">   

         <div class="row">
<?php
try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=epubdatabase;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM produit');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?> 
           <div class="col-sm-4">
            <div class="panel panel-primary">
            <div class="panel-heading"><?php echo $donnees['nomprod']; ?></div>
            <div class="panel-body"><img src="image/smart.jpg" class="img-responsive" alt="image" width="100" height="40"></div>
            <div class="panel-footer"><?php echo $donnees['description']; ?> , <?php echo $donnees['prix']; ?> dirhams 
           </div>

        </div>


      </div>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>
    </div>

  </div>

</div>

</div>

</div>

 
 <div class="container"> 
    <footer class="container text-center">
  <?php include("../footer/footer.html"); ?>

</footer>

 </div>

    




      









</body>

</html>
