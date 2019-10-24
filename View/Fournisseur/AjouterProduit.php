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

      .btn-file {
      position: relative;
      overflow: hidden;
      }
      .btn-file input[type=file] {
          position: absolute;
          top: 0;
          right: 0;
          min-width: 100%;
          min-height: 100%;
          font-size: 100px;
          text-align: center;
          filter: alpha(opacity=0.2);
          opacity: 0;
          outline: none;
          background: white;
          cursor: inherit;
          display: block;
      }

      #img-upload{
          width: 100%;
      }
    </style>
  </head>
  <body>
    <nav>
      <div class="alert alert-info alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
      </div>
      <?php include("header/header.php"); ?>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <form id="PostProduit" method="POST" enctype="multipart/form-data" action="../../Controller/PostData/PostProduit.php">
            <div class="form-group col-md-6">
              <label for="NomProduit">Nom Produit</label>
              <input type="text" class="form-control" id="NomProduit" name="NomProduit" required/>
            </div>
            <div class="form-group col-md-6">
              <label for="Prix">Prix </label>
              <input type="text" class="form-control" id="Prix" name="Prix" required />
            </div>
            <div class="form-group col-md-12">
              <label for="Description">Description</label>
              <input type="text" class="form-control" id="Description" name="Description"  />
            </div>
            <div class="form-group col-md-8">
              <label for="Region">Région</label>
              <select class="form-control form-control-lg" id="Region" name="Region">
                <option value="Tanger-Tétouan-Al Hoceïma">Tanger-Tétouan-Al Hoceïma</option>
                <option value="Oriental">Oriental</option>
                <option value="Fès-Meknès">Fès-Meknès</option>
                <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
                <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                <option value="Casablanca-Settat">Casablanca-Settat</option>
                <option value="Marrakech-Safi">Marrakech-Safi</option>
                <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                <option value="Souss-Massa">Souss-Massa</option>
                <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                <option value="Dakhla-Oued Ed-Dahab">Dakhla-Oued Ed-Dahab</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <div class="container">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Image du Produit</label>
                    <div class="input-group">
                      <span class="input-group-btn">
                        <span class="btn btn-default btn-file">Browse… 
                          <input type="file" id="imgInp" name="fileimage" required>
                        </span>
                      </span>
                      <input type="text" class="form-control" name="image" readonly required>
                    </div>
                    <img id='img-upload'/>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group col-md-12">
              <p><strong><font color="red">*</font></strong>L'ajout des produits doit être valider par les administrateurs dans quelques heures</p>
            </div>
            <input type="submit" value="Ajouter Produit" class="btn btn-success col-sm-12"/>
          </form>
        </div>
      </div>
    </div>
    <footer class="container-fluid text-center">
      <?php include("footer/footer.html"); ?>
    </footer>
  </body>
</html>
<script type="text/javascript">
    $(document).ready( function() {
          $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
          label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
          
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });   
      });
  </script>
