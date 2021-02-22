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
    <h1><span>Equipe</span></h1>
    <div class="innerbreadcrumb"> <a href="#">Accueil</a> / <a href="#">Equipe</a> </div>
  </div>
</div>
<!--middle content-->
<div class="middlecontent">
  <div class="container">
    <div class="row">
      <?php
        $membres = liste_membres($pdo);
        foreach($membres as $membre){
          ?>
          <div class="col-md-4 col-sm-4 team-box wow fadeInDown">
            <div class="team-img"><img src="images/equipes/<?php echo $membre['file_name']; ?>" alt="<?php echo $membre['nom']; ?>"/></div>
            <h3><?php echo $membre['nom']; ?></>
            <p><span><?php echo $membre['fonction']; ?></span></p>
            <div class="team-social">
              <a target="_blank" href="<?php echo $membre['lien_facebook']; ?>" class="team-facebook"></a><a target="_blank" href="<?php echo $membre['lien_twitter']; ?>" class="team-twitter"></a><a target="_blank" href="<?php echo $membre['lien_linkedin']; ?>" class="team-linkedin"></a>
            </div>
          </div>
          <?php
        }
      ?>
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
</html>
