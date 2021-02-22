<?php
    include_once 'inc/server.class.php';
    include_once 'inc/define.php';
	save_visiteurs($pdo,getIp(),date("Y-m-d H:i:s"));
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
<!--carousel-->
<div class="slidermain">
  <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;"> 
    <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
    <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
      <ul>
        <!-- SLIDE  -->
        <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description=""> 
          <!-- MAIN IMAGE --> 
          <img src="images/slider/1.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
          <!-- LAYERS --> 
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
												data-fontsize="['36','36','36','18']"
									data-lineheight="['36','36','36','18']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.05" 
									
									style="z-index: 5; white-space: nowrap;">
            <div class="caption-blue">
              <h1><span>Le <strong>Guichet </strong>de l'orientaion</span></h1>
            </div>
          </div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-16-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" 
                                     data-fontsize="['36','36','36','18']"
									data-lineheight="['36','36','36','18']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1500" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; white-space: nowrap;">
            <div class="caption-black">
              <h1><span>Offre d'accompagnement <strong>technique et financière</strong></span></h1>
            </div>
          </div>
          
          <!-- LAYER NR. 3 -->
          <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-3" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" 
                                     data-fontsize="['70','70','70','45']"
									data-lineheight="['70','70','70','50']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i> </div>
        </li>
        <!-- SLIDE  -->
        <li data-index="rs-17" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description=""> 
          <!-- MAIN IMAGE --> 
          <img src="images/slider/2.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
          <!-- LAYERS --> 
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-17-layer-4" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
												data-fontsize="['36','36','36','18']"
									data-lineheight="['36','36','36','18']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.05" 
									
									style="z-index: 5; white-space: nowrap;">
            <div class="caption-blue">
              <h1><span>Le <strong>Guichet </strong>de l'insertion</span></h1>
            </div>
          </div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-17-layer-5" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" 
                                     data-fontsize="['36','36','36','18']"
									data-lineheight="['36','36','36','18']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1500" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; white-space: nowrap;">
            <div class="caption-black">
              <h1><span>Offre d'emploi <strong>et demande d'emploi</strong></span></h1>
            </div>
          </div>
          
          <!-- LAYER NR. 3 -->
          <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-6" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" 
                                     data-fontsize="['70','70','70','45']"
									data-lineheight="['70','70','70','50']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i> </div>
        </li>
        <li data-index="rs-18" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description=""> 
          <!-- MAIN IMAGE --> 
          <img src="images/slider/3.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
          <!-- LAYERS --> 
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-18-layer-7" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
												data-fontsize="['36','36','36','18']"
									data-lineheight="['36','36','36','18']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.05" 
									
									style="z-index: 5; white-space: nowrap;">
            <div class="caption-blue">
              <h1><span>Le <strong>Guichet </strong>de la formation</span></h1>
            </div>
          </div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-18-layer-8" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" 
                                     data-fontsize="['36','36','36','18']"
									data-lineheight="['36','36','36','18']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1500" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; white-space: nowrap;">
            <div class="caption-black">
              <h1><span>Offre et demande <strong>de formation</strong></span></h1>
            </div>
          </div>
          
          <!-- LAYER NR. 3 -->
          <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-9" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" 
                                     data-fontsize="['70','70','70','45']"
									data-lineheight="['70','70','70','50']"
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i> </div>
        </li>
      </ul>
      <div class="tp-static-layers"></div>
      <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
    </div>
  </div>
  <div class="divider leftdiv"></div>
  <div class="divider rightdiv"></div>
</div>
<div class="middlecontent">
    <div class="container">
        <div class="row wow fadeInDown">
            <div class="col-md-12">
                <div class="section-md wow fadeInDown animated">
                    <h1>Statistiques du guichet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                </div>
            </div>
        </div>
        <div class="row margin-top-50">
            <div class="col-sm-3 text-center number-counter">
                <i class="fa fa-3x fa-group icons-blue"></i>
                <div class="clr"></div>
                <span class="counter"><?php nbre_visiteurs($pdo); ?></span>
                <p>Nombre de visiteurs</p>
            </div>
            <div class="col-sm-3 text-center number-counter">
                <i class="fa fa-3x fa-graduation-cap icons-blue"></i>
                <div class="clr"></div>
                <span class="counter">0</span>
                <p>Nombre d’établissement</p>
            </div>
            <div class="col-sm-3 text-center number-counter">
                <i class="fa fa-3x fa-folder-open icons-blue"></i>
                <div class="clr"></div>
                <span class="counter">0</span>
                <p>Nombre d’accompagnement</p>
            </div>
            <div class="col-sm-3 text-center number-counter">
                <i class="fa fa-3x fa-folder-open icons-blue"></i>
                <div class="clr"></div>
                <span class="counter">0</span>
                <p>Nombre de besoins ou demande exprimé</p>
            </div>
        </div>
    </div>
</div>
<!--testimonials slide-->
<div class="testimonialfull">
  <div class="testimonialfull-overlay">
    <div class="container testimonialfull-data text-center wow fadeInDown">
      <h1><span>Témoignages</span></h1>
      <div class="testimonialslider">
		  <?php
		  	$temoins = liste_temoignages($pdo);
		  	foreach($temoins as $temoin){
		  ?>
			<div>
			  <div class="section-md">
				<div class="avtarshape">
				  <div class="losange">
					<div class="los1"><img src="images/temoignages/<?php echo $temoin['file_name']; ?>" alt="<?php echo $temoin['nom']; ?>"/></div>
				  </div>
				</div>
				<h4><?php echo $temoin['nom']; ?></h4>
				<p><small><?php echo $temoin['metier']; ?></small></p>
				<p><?php echo $temoin['message']; ?></p>
			  </div>
			</div>
	  	  <?php } ?>
    </div>
  </div>
</div>
<!--clientslider-->
<div class="clientslidersection container wow fadeInDown">
  <h1>Nos partenaires</h1>
  <div class="clientslider">
	  <?php
	  	$parts = liste_partenaires($pdo);
	  	foreach($parts as $part){
			?>
	  		<div class="imgoverflow"><a target="_blank" href="<?php echo $part['site_web']; ?>"><img src="images/partenaires/<?php echo $part['file_name']; ?>" alt="<?php echo $part['nom']; ?>" style="width: 150px; height: 120px;"/></a></div>
			<?php
		}
	  ?>
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
<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="js/revoluation/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="js/revoluation/jquery.themepunch.revolution.min.js"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="js/revoluation/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="js/revoluation/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="js/revoluation/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="js/revoluation/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="js/revoluation/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="js/revoluation/revoluationfunction.js"></script>
</body>
</html>
