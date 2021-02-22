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
<!--header-->
<?php include 'header.php'; ?>
<!--middle content-->
<div class="error404">
  <div class="parallax-overlay-black">
    <div class="container wow fadeInDown errorpage text-center">
      <div class="font-lg margin-bottom-50"><span>404</span></div>
      <h1><span>Oops! Page not found</span></h1>
      <p>We're sorry, the page you requested cannot be found. <br>
        You can go back to</p>
      <button class="default-btn margin-top-50" onClick="window.location='index.php'">Retour à la page d'accueil <i class="fa"></i></button>
    </div>
  </div>
</div>
<!--footer-->
<?php include 'footer.php'; ?>
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
<script type="text/javascript">
		var recaptcha2 ;
		var recaptcha1 ;
		var captchaContainer = null;
    	var CaptchaCallback = function() {
      		grecaptcha.render('RecaptchaField2', {
        		'sitekey' : '6LdqHBATAAAAAPoEZE2GZXzTS-03N5DJLFNTrC7_',
        		'callback' : function(response) {
         			recaptcha2=response;
        		}
      		});
	 		grecaptcha.render('RecaptchaField1', {
        		'sitekey' : '6LdqHBATAAAAAPoEZE2GZXzTS-03N5DJLFNTrC7_',
        		'callback' : function(response) {
              		recaptcha1=response;
        		}
      		});
    	};
	</script> 
<script src="//www.google.com/recaptcha/api.js?onload=CaptchaCallback&amp;render=explicit" async defer></script></body>
</html>
