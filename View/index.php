<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-PUB</title>
  <meta charset="utf-8">
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

<nav >
  <div class="alert alert-info alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div>
 
   <?php include("header/header.php"); ?>
    
  
</nav>

<div class="container">
<div class="row">
  
  <div class="col-sm-2">
    
    <?php include("Body/Body.php"); ?>
  </div>

</div>
<div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="image/dattus.jpg" width="150" height="150" alt="Image">
          <div class="carousel-caption">
            <h3>Dattus</h3>
            <p>miel à base des dattes.</p>
          </div>      
        </div>

        <div class="item">
          <img src="image/candle.jpg" width="150" height="200" alt="Image">
          <div class="carousel-caption">
            <h3>warmecandle</h3>
            <p>Systeme de chauffage</p>
          </div>      
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
            <img src="image/a.jpg" class="img-responsive" alt="image" width="100" height="40">
            <p>Enactus  ! Join Us .. More info check our facebook page</p>
    </div>
    <div class="well">
       <img src="image/b.jpg" class="img-responsive" alt="image" width="100" height="40">
       <p>Romance .. 100% </p>
    </div>
    <div class="well">
       <img src="image/c.jpg" class="img-responsive" alt="image" width="100" height="40">
       <p>Dj Ayub !  Basshouse .. Progressive .. electro .. Hardstyle .. dubstep and Trap</p>
      
    </div>
  </div>
</div>
<hr>
</div>

<div class="container text-center">    
  <h3>à la UNE </h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="image/cocaa.jpg" class="img-responsive" alt="image" width="150" height="80">
      <p>coca-cola</p>
    </div>
    <div class="col-sm-3"> 
       <img src="image/samsung.jpg" class="img-responsive" alt="image" width="200" height="80">
      <p>Samsung - shi s o sf</p>    
    </div>
     <div class="col-sm-3"> 
       <img src="image/pringles.jpg" class="img-responsive" alt="image" width="200" height="80">
      <p>Samsung - shi s o sf</p>    
    </div>
     <div class="col-sm-3"> 
       <img src="image/danone.jpg" class="img-responsive" alt="image" width="200" height="80">
      <p>Samsung - shi s o sf</p>    
    </div>

      
  </div>
  <hr>
</div>

<div class="container text-center">    
  <h3>Our Partners</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="image/card (1).png" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 1</p>
    </div>
    <div class="col-sm-2"> 
      <img src="image/card (2).png" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 2</p>    
    </div>
    <div class="col-sm-2"> 
      <img src="image/card (3).jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 3</p>
    </div>
    <div class="col-sm-2"> 
      <img src="image/4.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 4</p>
    </div> 
     <div class="col-sm-2"> 
      <img src="image/money.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 4</p>
    </div> 
     <div class="col-sm-2"> 
      <img src="image/acima.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 4</p>
    </div> 
  </div>
</div><br>

<footer class="container-fluid text-center">
  <?php include("footer/footer.html"); ?>

</footer>

</body>
</html>
