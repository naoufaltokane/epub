<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
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
   <nav >
   <?php include("header/header.php"); ?>
</nav>
<br><br><br><br>


  
<div class="container ">    

  <div class="row">
    <div class="col-sm-12">
    <div class="panel panel-primary">
                <div class="panel-heading text-center">E-pub</div>
                <div class="panel-body">
                  <p>
                    Les nouvelles technologies sont reconnues comme une priorité mondiale pour renforcer les performances de l’économie nationale, des entreprises, et de l’administration. Le Maroc a su prendre le virage des technologies de l’information à travers un plan digital, à l’horizon de 2020, qui a été annoncé le 20 JUIN 2016 par MOULAY HAFID EL ALAMY (Ministre de l’industrie de l’investissement, du commerce et du l’économie numérique). Un plan qui vise le développement numérique dans le pays permettant ainsi au royaume de s’inscrire dans l’économie digital mondial.
                    Des différents secteurs du MAROC ont connu un saut important en utilisant la technologie dans leurs activités, mais nombreux sont qui ne sont pas encore infecté, ce qui ralenti relativement le progrès de notre pays. 
                    <br>
                    Cette platform a pour but la commercialisation des produits  d’une manière technique, en appuyant sur des méthodologie DIGITAL avancées. Cela se fait avec ou sans contact direct avec le consommateur du produit.

                  </p>
                </div>
              </div>
            </div></div>
              <div class="col-sm-8">
    <div class="panel panel-primary">
                <div class="panel-heading text-center">E-pub</div>
                <div class="panel-body">
                  <p>
                   
                    Créé en avril 2018, E-pub est un site e-commerce dont l’objectif et la vision sont de fournir le plus large assortiment  pour tous les Marocains.
                    <br>
                    E-pub fait partie du Top 10 des sites e-commerce les plus visités au Maroc.
                    Le délai de livraison moyen est de 1 à 5 jours.
                    <br>
                    E-pub emploi 3 personnes dont une belle équipe à disposition de nos clients 6 jours sur 7.
                    <br>
                    E-pub a mis en place des séances de shooting,mentoring, dédiées aux vendeurs qui leur permettront d’améliorer leurs performances de ventes et développer leurs compétences.

                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
    <div class="panel panel-primary">
                <div class="panel-heading text-center">Propriétaire</div>
                <div class="panel-body">
                  <table style="width:100%">
  <tr>
    <th>
    <img src="image/ahmed.jpg" width="120" height="120" alt="Image">
                 
    </th>
    <td>
      <h4>Ahmed Bouhram</h4><br>
      <small><b>Fondateur</b>Resp.Communication</small>
    </td>
  </tr>
  <tr>
    <th>
     <img src="image/ayub.jpg" width="120" height="120" alt="Image">
    </th>
    <td><h4>Ayoub Elattar</h4><br>
      <small><b>Co-fondateur</b>Resp.Marketing</small>
    </td>
  </tr>
  <tr>
    <th>
     <img src="image/naoufel.jpg" width="120" height="120" alt="Image">
    </th>
    <td><h4>Naoufel Tokane</h4><br>
      <small><b>Co-fondateur</b> Resp.IT</small>
    </td>

  
</table>
                  


                </div>
              </div>
            </div>
   
    </div>
          </div>
      
    </div>
    
    
    
  </div>
</div><br>
<footer class="container-fluid text-center">
  <?php include("footer/footer.html"); ?>

</footer>

</body>
</html>
