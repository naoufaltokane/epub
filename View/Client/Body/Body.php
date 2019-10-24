<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
            <div id="sidebar" class="well sidebar-nav">
              <h3>
                <i class="glyphicon glyphicon-user"></i>
                <b> Mon Profil</b>
              </h3>
              <p>
                <center>
                  <h3>
                    <font color="DarkSlateGray">
                      <?php echo(ucfirst($membre['m_prenom'])); ?>  
                      <?php echo(strtoupper($membre['m_nom'])); ?>
                    </font>
                  </h3>
                </center>
              </p>
              <p>
                <h5>
                  <i class="glyphicon glyphicon-calendar"></i>  
                  <font color="grey">
                    <?php echo($membre['m_naissance']); ?>
                  </font>
                </h5>
              </p>
              <p>
                <h5>
                  <i class="glyphicon glyphicon-phone"></i>  
                  <font color="grey">
                    <?php echo($membre['m_telephone']); ?>
                  </font>
                </h5>
              </p>
              <p>
                <h5>
                  <i class="glyphicon glyphicon-envelope"></i>  
                  <font color="grey">
                    <?php echo($membre['m_email']); ?>
                  </font>
                </h5>
              </p>
              <button  data-toggle="modal" data-target="#myModal" type="button" class="btn btn-primary col-lg-12"><i class="glyphicon glyphicon-refresh text-center"></i></button>
                    <br>
                    
                  



  <!-- Modal -->
  <div class="modal fade col-md-9" id="myModal" role="dialog">
    <div class="modal-dialog col-md-10">
      <div class="modal-content col-md-10">
        <div class="modal-header col-md-10">
          <h3 class="modal-title">Modifier mes informations</h3>
        </div>
        <div class="modal-body ">
          <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          
      </div>
       <div class="modal-footer">
        <br><br>
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>

    </div>
 </div>

</div>

                
               
            </div>
        </div>
        
          <div class="col-md-3">
            <div id="sidebar" class="well sidebar-nav">
              <h3>
                <i class="glyphicon glyphicon-align-left"></i>
                <b>Produits</b>
              </h3>
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <button type="button" onclick="location.href='marketing';" class="btn btn-info col-lg-12">
                    <i class="glyphicon glyphicon-shopping-cart text-center"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div id="sidebar" class="well sidebar-nav">
              <h3>
                <i class="glyphicon glyphicon-plus text-center"></i>
                <b>Commandes</b>
              </h3>
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <button type="button" onclick="location.href='MesCommandes.php';" class="btn btn-success col-lg-12">
                    <i class="glyphicon glyphicon-shopping-cart text-center"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-3">
            <div id="sidebar" class="well sidebar-nav">
              <h3>
                <i class="glyphicon glyphicon-plus text-center"></i>
                <b>Panier</b>
              </h3>
              <ul class="nav nav-pills nav-stacked">
                <li>
                  <button type="button" onclick="location.href='MonPanier.php';" class="btn btn-warning col-lg-12">
                    <i class="glyphicon glyphicon-shopping-cart text-center"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>