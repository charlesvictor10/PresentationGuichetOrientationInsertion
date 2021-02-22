<?php
include_once 'inc/server.class.php';
include_once 'inc/define.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo _SITE_NAME; ?></title>
<link href='https://fonts.googleapis.com/css?family=Arimo:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="css/master.css" type="text/css" rel="stylesheet">
</head>

<body>
<!--middle content-->
<div class="middlecontent">
  <div class="container">
    <div class="row wow fadeInDown form-signin center-block">
      <div class="col-md-12">
        <h1>Authentification</h1>
        <form method="post" id="defaultForm" action="verification.php">
          <div class="row">
            <div class="form-group col-md-12 form-signin-field">
              <input name="username" type="text" placeholder="Nom d'utilisateur" class="form-control" required>
              <div class="form-signin-icn">
	              <i class="fa fa-x fa-user icons-gray"></i>
              </div>
            </div>
            <div class="form-group col-md-12 form-signin-field">
              <input name="password" type="password" placeholder="Mot de passe" class="form-control" required>
              <div class="form-signin-icn">
	              <i class="fa fa-x fa-lock icons-gray"></i>
              </div>
            </div>
            <div class="col-md-12 margin-top-10">
              <button type="submit" name="soumettre" class="center-block blogfull">Se connecter</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="backtotop"><a href="#0" class="cd-top">Top</a></div>
<script type="text/javascript" src="js/jquery-1.11.2.js"></script> 
<script type="text/javascript" src="js/function.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/modernizr.js"></script> 
<script type="text/javascript" src="js/slick.js"></script> 
<script type="text/javascript" src="js/stickyheader.js"></script> 
<script type="text/javascript" src="js/mega-dropdown.js"></script> 
<script type="text/javascript" src="js/backtotop.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/animation.js"></script> 
<script type="text/javascript" src="js/counter.js"></script> 
<script type="text/javascript" src="js/number-counter.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/formValidation.js"></script>
</html>
