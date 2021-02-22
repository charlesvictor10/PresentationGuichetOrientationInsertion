<?php
include_once 'inc/server.class.php';
include_once 'inc/define.php';
if($_SESSION['username'] == null){
    header('location:signin.php');
}
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
<?php include 'headerAdmin.php'; ?>
<!--innertitle-->
<div class="innerpagetitle">
    <div class="container">
        <h1><span>Table</span></h1>
        <div class="innerbreadcrumb"> <a href="#">Accueil</a> / <a href="#" class="activelink">Membres de l'équipe</a></div>
    </div>
</div>
<!--middle content-->
<div class="middlecontent">
    <div class="container">
        <div class="row wow fadeInDown">
            <div class="col-md-12 margin-top-30">
                <h5>Les membres de l'équipe</h5>
                <p><a href="ajoutMembre.php" class="btn-small btn-blue btn-effect">Nouveau membre</a></p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="tc-1">Numéro</th>
                        <th class="tc-2">Nom</th>
                        <th class="tc-3">Fonction</th>
                        <th class="tc-4">Photo</th>
                        <th class="tc-5">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $membres = liste_membres($pdo);
                    foreach($membres as $membre){
                        ?>
                        <tr>
                            <td class="tc-1"><?php echo $membre['id']; ?></td>
                            <td class="tc-2"><?php echo $membre['nom']; ?></td>
                            <td class="tc-3"><?php echo $membre['fonction']; ?></td>
                            <td class="tc-4"><?php echo $membre['file_name']; ?></td>
                            <td class="tc-4"><a href="#" onclick="confirme(this)"><button class="btn-small btn-red btn-effect">Supprimer</button></a></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
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
<script>
    function confirme(shamp)
    {
        if (confirm("Voulez-vous vraiment supprimer ce partenaire?")) {
            shamp.href ="supprimer.php";
        }
        else
            return false;
    }
</script>
</body>
</html>
