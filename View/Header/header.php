<?php
  session_start();
  require_once 'ISession.php';

  extract($_SESSION);
  if(ISession::isLogged()==true) 
  {
    ISession::redirectTo($membre['m_type']);
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

          <img src="image/e-pub.png" alt="e-pub" height="45px" width="45px" >

          
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
                  <li class="dropdown-header"><a href="nous.php">Qui sommes-nous?</a></li> 
                  <li class="dropdown-header"><a href="ContactUs.php">Contactez-nous </a></li>
                  <li class="dropdown-header"><a href="Confident.php">Confidentialité</a></li>                                       
                 </ul>
               </li>
              </ul>
          </li>
          <li class="dropdown mega-dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Se connecter<span class="caret"></span></a>       
              <ul class="dropdown-menu mega-dropdown-menu">
                <div class=" col-sm-3">
                <div class="container">    
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Se connecter</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">Créer un compte</a></div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                            
                        <form id="loginform" name="LogIn" method="POST" action="../Controller/PostData/Plogin.php" class="form-horizontal" role="form">         
                            <div style="margin-bottom: 25px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input id="login-username" type="text" class="form-control" name="login" value="" placeholder="Login" required>
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Password" required/>
                      </div>
                      <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                          <input id="btn-login" class="btn btn-success" type=submit value="Se connecter">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12 control">
                          <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                            Vous n'avez pas encore de compte? 
                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">Créer un compte</a>
                          </div>
                        </div>
                      </div>    
                    </form>     
                  </div>                     
                </div>  
              </div>
              <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                  <div class="panel-heading">
                   <div class="panel-title">Créer un compte</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Se connecter</a></div>
                    </div>  
                    <div class="panel-body" >
                      <form id="SignIn" method="POST" action="../Controller/PostData/Psignin.php" class="needs-validation" novalidate>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input type="text" id="nom" name="nom" maxlength="15" minlength="3" class="form-control" placeholder="Votre Nom" required/>
                            </div>
                          </div>
                          <div class="form-group col-md-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input type="text" id="prenom" name="prenom" maxlength="15" minlength="3" class="form-control" placeholder=" Votre Prénom" required/>
                            </div> 
                          </div>
                        </div>
                        <div class="form-group col-md-12">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                              <input type="email" id="email" name="email" maxlength="40" minlength="4" placeholder="Votre émail" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                              <input type="tel" id="telephone" name="telephone" maxlength="20" minlength="7" placeholder="Numéro de Téléphone" class="form-control" />
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input type="text" id="login" name="login" maxlength="30" minlength="6" placeholder="Login" class="form-control" required/>
                            </div>
                          </div>
                          <div class="form-group col-md-6">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock "></i></span>
                              <input type="password" id="password" name="password" maxlength="20" minlength="8" placeholder="Password" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-5">
                            <label class="radio-inline"><input type="radio" id="membertype" name="membertype" value="Fournisseur" required="TypeMembre" />Fournisseur</label>
                            <label class="radio-inline"><input type="radio" id="membertype" name="membertype" value="Client" required="TypeMembre" />Client</label>
                          </div>
                          <div class="form-group col-md-7">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              <input type="date" id="naissance" name="naissance" class="form-control " required />
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit"  class="btn btn-info" value="S'inscrire"/>
                            <input type="reset" class="btn btn-danger" value="Annuler"/>
                          </div>
                        <div class="form-group">
                          <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                              Vous avez déjà un compte? 
                              <a href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()">Se connecter</a>
                            </div>
                          </div>
                        </div>    
                        </div>
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
