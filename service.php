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
<!--innertitle-->
<div class="innerpagetitle">
  <div class="container">
    <h1><span>Service</span></h1>
    <div class="innerbreadcrumb"> <a href="#">Accueil</a> / <a href="#">Service</a> </div>
  </div>
</div>
<!--middle content-->
<div class="middlecontent">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-md wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;" data-wow-animation-name="fadeInDown">
          <h1>Les services du guichet</h1>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
        </div>
      </div>
    </div>
    <!--diamond square-->
      <div class="diamond-square wow fadeInDown margin-bottom-50">
        <a target="_blank" href="http://localhost/Maintenances/" class="diamond-shapes-preview" style="background-color: #ffff00;">
        <div class="diamond-shapes-data">
          <div class="dismond-icn"><img src="images/1.png" alt="Métiers porteurs & créneaux"/></div>
          <h3>Métiers porteurs</h3>
          <h3>et Créneaux</h3>
        </div>
        </a>
        <a target="_blank" href="http://localhost/Maintenances/" class="diamond-shapes-preview" style="background-color: #0000ff;">
        <div class="diamond-shapes-data">
          <div class="dismond-icn"><img src="images/1.png" alt="offre formation"/></div>
          <h3>Offres et demandes</h3>
          <h3>de formations</h3>
        </div>
        </a>
        <a target="_blank" href="http://localhost/Maintenances/" class="diamond-shapes-preview" style="background-color: #ff8800;">
        <div class="diamond-shapes-data">
          <div class="dismond-icn"><img src="images/1.png" alt="formations ou emplois"/></div>
          <h3>Besoins et demandes</h3>
          <h3>formations ou emplois</h3>
        </div>
        </a>
        <a target="_blank" href="http://localhost/Maintenances/" class="diamond-shapes-preview" style="background-color: #cc0000;">
        <div class="diamond-shapes-data">
          <div class="dismond-icn"><img src="images/1.png" alt="accompagnement"/></div>
          <h3>Offre et demandes</h3>
          <h3>d'accompagnements</h3>
        </div>
        </a>
        <a target="_blank" href="http://localhost:1991/index" class="diamond-shapes-preview" style="background-color: #00cc00;">
        <div class="diamond-shapes-data">
          <div class="dismond-icn"><img src="images/1.png" alt="emploi"/></div>
          <h3>Offres et demandes</h3>
          <h3>d'emplois</h3>
        </div>
        </a>
        <div class="clr"></div>
      </div>
    <div class="clr"></div>
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
