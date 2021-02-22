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
    <h1><span>Contact</span></h1>
    <div class="innerbreadcrumb"> <a href="#">Accueil</a> / <a href="#">Contact</a> </div>
  </div>
</div>
<!--middle content-->
<div class="middlecontent">
  <div class="container">
    <div class="row wow fadeInDown">
      <div class="col-md-12">
        <div class="section-md wow fadeInDown animated">
          <h1>Contactez nous!</h1>
          <p>Laissez nous un message et nous vous répondrons dans unn bref délai nos agents sont à vos dispositions.</p>
        </div>
      </div>
    </div>
	<div class="row margin-top-50">
    	<div class="col-md-6 contact-2-form wow fadeInDown animated">
        	<div class="alert alert-success" id="FormContactSuccessMessage" style="display:none"></div>
            <div class="alert alert-danger" id="FormContactErrorMessage" style="display:none"></div>
        	<h5>Espace contact</h5>
            <form id="formcontect" method="post" action="contactdatasend.php">
            	<div class="row">
                	<div class="form-group col-sm-12">
                    	<label><strong>Nom*</strong></label>
                        <input name="nom" id="cfname"  type="text" placeholder="Taper votre prénom et nom" class="form-control" required/>
                    </div>
                    <div class="form-group col-sm-12">
                        <label><strong>Adresse email*</strong></label>
                        <input name="email" id="cfemail" type="email" placeholder="Taper votre adresse email" class="form-control" required/>
                    </div>
                    <div class="form-group col-sm-12">
                        <label><strong>Sujet</strong></label>
                        <input name="sujet" id="cfcompany" type="text" placeholder="Donner l'objet de votre mail" class="form-control" required/>
                    </div>
                    <div class="form-group col-sm-12">
                        <label><strong>Message*</strong></label>
                        <textarea name="message" id="cfmsg" placeholder="Rédiger votre message" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="col-sm-12">
	                    <button type="submit" name="submit">Envoyer<i class="fa fa-1x-after fa-send"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 contact-2-info wow fadeInDown animated">
        	<h5>Information sur notre position</h5>
        	<div class="inforow">
            	<div class="info-icn"><i class="fa fa-1x-before fa-map-marker icons-blue"></i></div>
                <div class="contact-info"><p>Avenue Léopold Sédar Senghor</p></div>
                <div class="clr"></div>
            </div>
            <div class="inforow">
            	<div class="info-icn"><i class="fa fa-1x-before fa-phone icons-blue"></i></div>
                <div class="contact-info"><p>(+221) 33 951 47 69</p></div>
                <div class="clr"></div>
            </div>
            <div class="inforow">
            	<div class="info-icn"><i class="fa fa-1x-before fa-envelope icons-blue"></i></div>
                <div class="contact-info"><p>graim@graim.sn</p></div>
                <div class="clr"></div>
            </div>
            <div class="inforow">
            	<div class="info-icn"><i class="fa fa-1x-before fa-clock-o icons-blue"></i></div>
                <div class="contact-info"><p>Lundi - Vendredi: <strong>9:00pm à 16:00pm</strong> <br>Samedi - Dimanche: <strong>Fermer</strong></p></div>
                <div class="clr"></div>
            </div>
        </div>
        <div class="col-md-12 contact-2-info wow fadeInDown animated">
            <div class="map wow fadeInDown animated">
                <iframe src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=121+King+Street,+Melbourne,+Victoria,+3000,+Australia&amp;aq=0&amp;oq=121+King+Street,++Melbourne+Victoria+3000+Australia&amp;sll=-37.815921,144.964085&amp;sspn=0.011052,0.022724&amp;ie=UTF8&amp;hq=&amp;hnear=121+King+St,+Melbourne+Victoria+3000&amp;t=m&amp;ll=-37.80836,144.958506&amp;spn=0.023734,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            </div>
        </div>
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
    <script src="assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
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
