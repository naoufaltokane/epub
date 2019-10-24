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
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }

      .carousel-inner img {
        width: 100%; /* Set width to 100% */
        min-height: 200px;
      }

      @media (max-width: 600px) {
        .carousel-caption {
          display: none; 
        }
      }
    </style>
  </head>
  <body>
    <nav>
      <br><br><br><br>
      <?php include("Header/header.php"); ?>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <?php include("Body/Body.php"); ?>
        </div>
      </div>
      <center>
        <a href="accueil">Retourner à l'accueil</a>
      </center>
    <footer class="container-fluid text-center">
      <?php include("footer/footer.html"); ?>
    </footer>
  </body>
</html>
