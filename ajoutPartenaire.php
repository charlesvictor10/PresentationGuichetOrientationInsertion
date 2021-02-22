<?php
include_once 'inc/server.class.php';
include_once 'inc/define.php';
if($_SESSION['username'] == null){
    header('location:signin.php');
}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
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
<?php include 'headerAdmin.php'; ?>
<!--innertitle-->
<div class="innerpagetitle">
    <div class="container">
        <h1><span>Forms</span></h1>
        <div class="innerbreadcrumb"> <a href="#">Accueil</a> / <a href="#" class="activelink">Ajout partenaire</a></div>
    </div>
</div>
<!--middle content-->
<div class="middlecontent">
    <div class="container">
        <div class="row wow fadeInDown">
            <div class="col-md-12">
                <form method="post" action="upload.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label><strong>Nom*</strong></label>
                            <input name="nom" type="text" placeholder="Taper le nom du partenaire" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label><strong>Logo*</strong></label>
                            <input name="file" type="file">
                        </div>
                        <div class="form-group col-sm-12">
                            <label><strong>Site Web</strong></label>
                            <input name="site_web" type="text" placeholder="Taper le site internet du partenaire" class="form-control">
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" name="soumettre">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</br>
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
