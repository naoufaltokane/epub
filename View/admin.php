<?php
  session_start();
  require_once 'IASession.php';
  extract($_SESSION);
  if(ISession::isLogged()==true) 
  {
    ISession::redirectTo("Gestion/");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>E-PUB ADMINISTRATION</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700');
    body
    {

        background-size: cover;
        padding: 0;
        margin: 0;
    }
    .login{
       font-family: 'Josefin Sans', sans-serif;
       
       background: url('image/pa.jpg') no-repeat center fixed; 
        background-size: cover;
       padding:40px 40px;
       margin: 0;
    }

    label{
        font-weight:400;
        font-size:15px;
        color: rgb(255, 255, 255);


    }
     
    .login-box{
        -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        padding:40px;
        
    }

    .left-box{
        padding:50px;
        color:#FFF;
    }

    .left-box h1{
        font-weight:600;
        font-family: 'Josefin Sans', sans-serif;
        text-transform:capitalize;
        font-size:32px;
    }

    .right-box{
        min-height:520px;
    }

    .right-box h1{
        font-weight:600;
        font-family: 'Josefin Sans', sans-serif;
        color:#444;
        font-size:32px;
        padding:50px;
    }
        
    .form{
        padding:20px 30px;
    }

    .form-control{
        box-shadow: none;
        border-radius: 0px;
        border-bottom: 1px solid #2196f3;
        color: rgb(255, 255, 255);
        border-top: 1px;
        border-left: none;
        border-right: none;
    }

    .btn{
        font-weight: 700;
        font-size:15px;
        color:#FFF;
        border-radius: 0;
        background: #78d46e;
        padding:12px 30px;
        float:right;
        margin-top:40px;
    }

    .btn:hover{
        border:2px solid #78d46e;
        background:#FFF;
    }

    input[type=text], input[type=password], input[type=email] {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #d2d2d2;
        border-radius: 0;
        margin-bottom:50px;
        box-shadow: none;
    }

    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
        box-shadow: none;
        border-bottom: 1px solid #78d46e;
    }

    .form2 {
        padding:30px 0px;
    }

    .white-btn{
        background:#FFF;
        color:#78d46e;
    }   
  </style>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
  <div class="login">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 login-box" >
        <div class="col-lg-6 left-box">
          <img src="image/pub.png" height="200" width="200" >
          <h3>The World is ours !</h3>
          <p>Changing the world !</p>
          <br>
        </div>
        <div class="col-md-6 right-box">
        <br><br>
        <div class="form">
          <form method="POST" action="../Controller/PostData/AdminPost/SeConnecter.php">
            <div class="form-group">
              <label for="username">Your username</label>
              <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Your password</label>
              <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="login-button">
              <input type="submit" name="login" value="Connexion" class="btn btn-default">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> 
</body>