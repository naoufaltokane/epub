<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="AdminStyle.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
</style>
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
  $(document).ready(function(){
    //Hide clear btn on page load
    $('#clear').hide();
    //Add text input to list on button press
    $('#add').click(function(){
        //var toAdd gets the value of the input field
        var toAdd = $("input[name=checkListItem]").val();
        //Append list item in its own div with a class of item into the list div
        //It also changes the cursor on hover of the appended item 
        $('.list').append('<div class="item">' + toAdd + '</div>');
        //fade in clear button when the add button is clicked
        $('#clear').fadeIn('fast');
        //Clear input field when add button is pressed
        $('input').val('');
    });
    //Checks off items as they are pressed
    $(document).on('click', '.item', function() {
        //Chamge list item to red
        $(this).css("color", "#cc0000");
        //Change cursor for checked item
        $(this).css("cursor","default");
        //Strike through clicked item while giving it a class of done so it will be affected by the clear
        $(this).wrapInner('<strike class="done"></strike>');
        //Add the X glyphicon
        $(this).append(" " + '<span class="glyphicon glyphicon-remove done" aria-hidden="true"></span>');
        //Stops checked off items from being clicked again
        $(this).prop('disabled', true);
    });
    //Removes list items with the class done
    $('#clear').click(function(){
        $('.done').remove('.done');
    });
});
</script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
  <div class="container-fluid display-table">
    <div class="row display-table-row">
      <div class="col-md-10 col-sm-11 display-table-cell v-align">
        <div class="row">
          <?php include("Header/header.php"); ?>
        </div>
        <div class="col-md-12">
          <div class="row">
            <h2 class="text-center">Liste des produits</h2>
            <table class="points_table col-md-12">
              <thead>
                <tr>
                  <th class="col-xs-1">#</th>
                  <th class="col-xs-2">Produit</th>
                  <th class="col-xs-2">Description</th>
                  <th class="col-xs-1">Statut</th>
                  <th class="col-xs-2">Prix</th>
                  <th class="col-xs-1">#FID</th>
                  <th class="col-xs-1">#PID</th>
                </tr>
              </thead>
              <tbody class="points_table_scrollbar">
                <?php foreach ($AllProduits as $p) 
                  {
                ?>
                  <tr class="odd">
                    <form method="Post" action="../../Controller/PostData/AdminModifierProduit.php">
                      <td class="col-xs-1"><img src="<?php echo $p->getP_image(); ?>" class="img-responsive" width="80" height="40"></td>
                      <td class="col-xs-2"><input class="form-control" type="text" name="NomProduit" value="<?php echo $p->getP_nom() ; ?>"></td>
                      <td class="col-xs-2"><input class="form-control" type="text" name="Description" value="<?php echo $p->getP_description() ; ?>" ></td>
                      <td class="col-xs-1"><?php echo $p->getP_statut() ; ?></td>
                      <td class="col-xs-2"><div class="form-group col-md-9"><input class="form-control" type="number" name="Prix" value="<?php echo $p->getP_prix() ; ?>"></div><p>MAD</p></td>
                      <td class="col-xs-1"><input class="form-control" type="text" name="FournisseurId" value="<?php echo $p->getF_id() ; ?>"></td>
                      <td class="col-xs-3">
                        <div class="form-group col-md-3"><input type="text" class="form-control" name="IdProduit" value="<?php echo $p->getP_id() ; ?>" readonly></div>
                        <input type="submit" name="Supprimer" value="Supprimer" class="btn btn-danger">
                        <input type="submit" name="Modifier" value="Modifier" class="btn btn-primary">
                      </td>
                    </form>
                  </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
        <div class="logo">
          <a hef="home.html"><img src="image/pub.png" alt="Epub-logo" class="hidden-xs hidden-sm"></a>
        </div>
        <div class="navi">
            <?php include("Navigation/nav.php"); ?>
        </div>
      </div>
    </div>
  </div> 
</body>