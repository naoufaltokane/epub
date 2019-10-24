<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
    .jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 24px;
padding-bottom: 24px; }
.jumbotron small {
color: #FFF;
}
 small {
font-size: 24px;
color: black;
}

</style>
<!------ Include the above in your HEAD tag ---------->
  <nav >
  
 
   <?php include("header/header.php"); ?>
    
  
</nav>
<br>
<br>

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="col-sm-6">
                     <img src="image/pub.png" width="200" height="200" alt="Image">
                </div>
                
                <h1 class="section-header col-sm-6">Contacter-nous</h1>
                <h5>
                    Encore besoin d'aide? Envoyez-nous votre requête via le formulaire en ligne ci-contre et nous vous répondrons sous 2 jours ouvrables.<br>     Nous sommes ravis de répondre à vos besoins !
                </h5>
                
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Entrer Nom Complet" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choix : </option>
                                <option value="service">Service clientèle général</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Produit Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Bureau</legend>
            <address>
                <strong>E-pub, Inc.</strong><br>
                Technopark <br>
                CasaBlanca, Morocco<br>
                <abbr title="Phone">
                    P:</abbr>
                (212) 622-088024
            </address>
            
            </form>
        </div>
    </div>
</div>
<br>
<footer class="container-fluid text-center">
  <?php include("footer/footer.html"); ?>

</footer>
