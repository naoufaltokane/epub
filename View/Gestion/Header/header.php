<?php
    session_start();
    require_once('../IASession.php');
    require_once('../../Controller/GetData/AdminGetProduits.php');
    require_once('../../Controller/GetData/AdminGetMembres.php');
    require_once('../../Controller/GetData/AdminGetCommandes.php');
    extract($_SESSION);
    if (ISession::isLogged() == false)
    {
       ISession::redirectTo("..");
    }
?>
<div class="col-md-7">
  <nav class="navbar-default pull-left">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  </nav>
  <div class="search hidden-xs hidden-sm">
    <input type="text" placeholder="Search" id="search">
  </div>
</div>
  <div class="col-md-5">
    <div class="header-rightside">
      <ul class="list-inline header-top pull-right">
        <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aide<span class="caret"></span></a>       
          <ul class="dropdown-menu mega-dropdown-menu">
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header"><a href="nous.php">Qui sommes-nous ?</a></li> 
                <li class="dropdown-header"><a href="contactus.php">Contactez-nous </a></li>  
                <li class="dropdown-header"><a href="confident.php">Confidentialité </a></li>          
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $admin['a_image'] ?>" alt="admin">
          <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <div class="navbar-content">
                <span><?php echo $admin['a_nom']." ".$admin['a_prenom']; ?></span>
                <p class="text-muted small">
                <?php echo $admin['a_email']; ?>
                </p>
        <div class="divider">
        </div>
        <a href="logout" class="view btn-danger active">Déconnexion</a>
    </div>
</li>
       </ul>
   </li>
          </ul>
      </div>
  </div>
