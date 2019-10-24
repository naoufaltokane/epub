<?php
    session_start();
    require_once('ISession.php');
    require_once('../../Controller/GetData/GetProduits.php');
    require_once('../../Controller/GetData/GetCommandes.php');
    extract($_SESSION);
    if (ISession::isLogged() == false)
    {
        ISession::redirectTo("../");
    }
    if($membre['m_type']!="Fournisseur")
    {
        ISession::redirectTo("../".$membre['m_type']);
    } 
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>

<!------ Include the above in your HEAD tag ---------->

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <img src="image/e-pub.png" alt="e-pub" height="45px" width="45px">

          
        </div>
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        
        <button type="submit" class="btn btn-inverse">search</button>
      </form>
      <div class="collapse navbar-collapse js-navbar-collapse">

      
        <ul class="nav navbar-nav navbar-right">
          
          <li class="dropdown mega-dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aide <span class="caret"></span></a>       
              <ul class="dropdown-menu mega-dropdown-menu">
               <li class="col-sm-3">
                 <ul>
                  <li class="dropdown-header"><a href="nous.php">Qui sommes-nous ?</a></li> 
                  <li class="dropdown-header"><a href="ContactUs">Contactez-nous </a></li>                                
                 </ul>
               </li>
              </ul>
          </li>
          <li class="dropdown mega-dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo($membre['m_login']); ?> <span class="caret"></span></a>       
              <ul class="dropdown-menu mega-dropdown-menu">
               <li class="col-sm-3">
                 <ul>
                  <li class="dropdown-header"><a href="../logout.php">Se déconnecter</a></li> 
                  <li class="dropdown-header"><a href="index.php">Profil </a></li>                                
                 </ul>
               </li>
              </ul>
          </li>

      
        </ul>

      </div>
        
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    