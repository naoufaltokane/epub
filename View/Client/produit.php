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
        footer {
            background: #343a40;
            padding: 40px;
        }
        footer a {
            color: #f8f9fa!important
        }

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
      <nav class="navbar navbar-inverse">
        <?php 
          include("Header/header.php");
        ?>
      </nav>


<div class="container">
  <div class="row">
    <div class="col-12 col-lg-6">
      <div class="card bg-light mb-3">
        <div class="card-body">
          <a href="" data-toggle="modal" data-target="#productModal">
            <img class="img-fluid" src="<?php// echo $produit->getP_image(); ?>" width="400" height="400" />
          </a>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6 add_to_cart_block">
      <div class="card bg-light mb-3">
        <div class="card-body">
          <p class="price"><?php //echo produit->getP_nom(); ?></p>
          <p class="price"><font color="black"> <?php// echo $CeProduit->getP_prix()." MAD"; ?></font></p>
          <form method="POST" action="../../Controller/PostData/CommanderProduit.php">
          <div class="form-group">
            <label>Quantité</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                  <i class="glyphicon glyphicon-minus"></i>
                </button>
              </div>
              <input type="text" class="form-control"  id="quantite" name="quantite" min="1" max="100" value="1">
              <div class="input-group-append">
                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                  <i class="glyphicon glyphicon-plus"></i>
                </button>
              </div>
            </div>
          </div>
        <div class="col-12">
          <div class="card border-light mb-3">
          </div>
            <div class="card-body">
              <p class="card-text">
                <div class="col-sm-12">
                    <div class="panel panel-danger">
                      <div class="panel-heading text-center"><h5><b>Description</b></h5></div>
                      <div class="panel-body"><?php //echo $produit->getP_description(); ?></div>
                      <div class="panel-footer"></div>
                    </div>
                  </div>
                </p>
              <input type="submit" name="Commander2" value="Commander" class="btn btn-success  btn-block text-uppercase">
              <a href="marketing.php" class="btn btn-danger btn-block text-uppercase">Annuler</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
<br> <br>
    <div class="row">
        <!-- Description -->
        
    </div>
</div>





<footer class="container-fluid text-center">
  <?php include("../footer/footer.html"); ?>

</footer>
</body>
</html>
<script type="text/javascript">
  
    $(document).ready(function(){
        var quantity = 1;

        $('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantite').val());
            $('#quantite').val(quantity + 1);
        });

        $('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantite').val());
            if(quantity > 1){
                $('#quantite').val(quantity - 1);
            }
        });

    });

</script>