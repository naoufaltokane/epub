<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="AdminStyle.css">

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
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">

            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <?php include("Header/header.php"); ?>
                </div>
                <div class="user-dashboard">
                <div class="row" >
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile">
                            <a href="membres">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    MEMBRES
                                </div>
                                <div class="circle-tile-number text-faded">
                                    <?php echo $NombreM;  ?>
                                    <span id="sparklineA"></span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
              

                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile">
                            <a href="produits">
                                <div class="circle-tile-heading blue">
                                    <i class="fa fa-tasks fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content blue">
                                <div class="circle-tile-description text-faded">
                                    PRODUITS
                                </div>
                                <div class="circle-tile-number text-faded">
                                   <?php  echo $NombreP ?>
                                    <span id="sparklineB"></span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile">
                            <a href="commandes">
                                <div class="circle-tile-heading red">
                                    <i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded">
                                    COMMANDES
                                </div>
                                <div class="circle-tile-number text-faded">
                                    24
                                    <span id="sparklineC"></span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                       <div class="col-lg-3 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading orange">
                                    <i class="fa fa-bell fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content orange">
                                <div class="circle-tile-description text-faded">
                                    ADMINISTRATEURS
                                </div>
                                <div class="circle-tile-number text-faded">
                                    9 New
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>

        <div class="col-md-6">
            <div class="col-md-6">
                <h2>To Do List</h2>
                    <form name="checkListForm">
                    <input type="text" name="checkListItem" placeholder="Add Item..."/>
                    </form>
                    <button type="button" id="add" class="btn btn-info">
                        Ajouter
                    </button>
                    <button type="button" id="clear" title="Clear checked items" class="btn btn-default">
                        Supprimer
                    </button>
                     <br/><br/>
                    <div class="list"></div>
            </div>
                    <div class="col-md-6"></div>
          
        </div>

<div class="col-md-6">
	<div class="row">
		<h2 class="text-center">Dernière authentification</h2>
		
		<table class="points_table">
			<thead>
				<tr>
					<th class="col-xs-1">#</th>
					<th class="col-xs-7">Team</th>
					<th class="col-xs-1">S</th>
					<th class="col-xs-1">M</th>
					<th class="col-xs-1">L</th>
					<th class="col-xs-1">O</th>
				</tr>
			</thead>

			<tbody class="points_table_scrollbar">
				<tr class="odd">
					<td class="col-xs-1">1</td>
					<td class="col-xs-7">Test Points</td>
					<td class="col-xs-1">10</td>
					<td class="col-xs-1">0</td>
					<td class="col-xs-1">5</td>
					<td class="col-xs-1">1</td>
				</tr>

			</tbody>
		</table>
	</div>
</div>
         </div>

                </div>

                            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="image/pub.png" alt="Epub-logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                     <?php include("Navigation/nav.php"); ?>
                </div>
            </div>
            </div>
    
        </div>

    </div>





    

</body>
