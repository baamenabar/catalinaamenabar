<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cach");
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<?php if(false){ ?><link rel="stylesheet" type="text/css" href="css/general.css"><?php }else{ ?><link rel="stylesheet" type="text/css" href="css/general.css?ck=<?php echo filemtime("css/general.css"); ?>"><?php } ?>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="js/lib/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/lib/css3-mediaqueries.js"></script>
<script type="text/javascript" src="js/menuPpal.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" type="text/css" href="css/ie8.css">
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie7.css">
<![endif]-->
<script type="text/javascript" src="js/lib/selectivizr.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("a.grouped_elements").fancybox();	
});
</script>
<?php require_once("inc/analytics.php"); ?>
<title>Galería de Imágenes - Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal">
	<header>
		<?php require("inc/navegacion.php"); ?>
		<div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
		<div class="titulo interior">
			<h1>Galería</h1>
			<hr class="punteada">
			<h5>Haz click en las imágenes para verlas más grandes.</h5>
		</div>
	</header>
	<div class="cuerpoInterior">
		<article id="eventos">
		<header>
					<h2>Eventos</h2>
					<div class="cap"></div>
				</header>
			<ul class="galeria">
            <li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_0177.jpg" title="Dakar 2013"><img src="imgs/galeria/thumbs/1_dakar.jpg"></a></li>
            
            <li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_0385.jpg" title="Crème brûlée"><img src="imgs/galeria/thumbs/2_dakar.jpg"></a></li>
            
              <li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_0371.jpg" title=><img src="imgs/galeria/thumbs/3_dakar.jpg"></a></li>
              
              <li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_0358.jpg" title="Almuerzos y
Comidas Outdoor"><img src="imgs/galeria/thumbs/4_dakar.jpg"></a></li>
              
              <li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_030x3.jpg" title="Desierto de Atacama"><img src="imgs/galeria/thumbs/5_dakar.jpg"></a></li>
              
              <li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_0667.jpg" title="Torta de Maracuyá"><img src="imgs/galeria/thumbs/6_dakar.jpg"></a></li>
              
              <li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_0362.jpg" title="Comida en el desierto"><img src="imgs/galeria/thumbs/7_dakar.jpg"></a></li>
              
              <li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_0249.jpg" title=><img src="imgs/galeria/thumbs/8_dakar.jpg"></a></li>
              
              <li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_0333.jpg" title="Naturaleza y la más exquisita gastronomía"><img src="imgs/galeria/thumbs/9_dakar.jpg"></a></li>
              
               <li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_0340.jpg" title=><img src="imgs/galeria/thumbs/10_dakar.jpg"></a></li>
              
            
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/100_0422.jpg" title="Comida en el desierto"><img src="imgs/galeria/thumbs/100_0422.jpg"></a></li>
                
                
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/100_0424.jpg"><img src="imgs/galeria/thumbs/100_0424.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/amaenabar_banqueteria1.jpg"><img src="imgs/galeria/thumbs/amaenabar_banqueteria1.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/amaenabar_banqueteria2.jpg"><img src="imgs/galeria/thumbs/amaenabar_banqueteria2.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/amaenabar_banqueteria5.jpg"><img src="imgs/galeria/thumbs/amaenabar_banqueteria5.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/amaenabar_banqueteria6.jpg"><img src="imgs/galeria/thumbs/amaenabar_banqueteria6.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/amaenabar_banqueteriajpg.jpg"><img src="imgs/galeria/thumbs/amaenabar_banqueteriajpg.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/camp.jpg"><img src="imgs/galeria/thumbs/camp.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/DSC_4864..jpg"><img src="imgs/galeria/thumbs/DSC_4864..jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/IMG_3858.jpg"><img src="imgs/galeria/thumbs/IMG_3858.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/pano7.jpg"><img src="imgs/galeria/thumbs/pano7.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/pano9.jpg"><img src="imgs/galeria/thumbs/pano9.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/wok2.jpg"><img src="imgs/galeria/thumbs/wok2.jpg"></a></li>
			</ul>
		</article>
		<hr class="punteada">
		<article id="pasteleria">
		<header>
					<h2>Cocina y Pastelería</h2>
					<div class="cap"></div>
				</header>
			<ul class="galeria">
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/alfajorcito1600.jpg"><img src="imgs/galeria/thumbs/alfajorcito1600.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/cafecrema1600.jpg"><img src="imgs/galeria/thumbs/cafecrema1600.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/conjuntotapitasdulces1600.jpg"><img src="imgs/galeria/thumbs/conjuntotapitasdulces1600.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/detalle-tortita1.jpg"><img src="imgs/galeria/thumbs/detalle-tortita1.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/minibrownie1600.jpg"><img src="imgs/galeria/thumbs/minibrownie1600.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/minichupe.jpg"><img src="imgs/galeria/thumbs/minichupe.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/napoleonblanco1600.jpg"><img src="imgs/galeria/thumbs/napoleonblanco1600.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/napoleonnegro1600.jpg"><img src="imgs/galeria/thumbs/napoleonnegro1600.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/pinchomeatball.jpg"><img src="imgs/galeria/thumbs/pinchomeatball.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/pinchopolloteriyaki.jpg"><img src="imgs/galeria/thumbs/pinchopolloteriyaki.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/pinchopulpo.jpg"><img src="imgs/galeria/thumbs/pinchopulpo.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/porcion1.jpg"><img src="imgs/galeria/thumbs/porcion1.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/porcionchescake1600.jpg"><img src="imgs/galeria/thumbs/porcionchescake1600.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/porcionkuchensoufle1600.jpg"><img src="imgs/galeria/thumbs/porcionkuchensoufle1600.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/porcionmilojas1600.jpg"><img src="imgs/galeria/thumbs/porcionmilojas1600.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/porcion.jpg"><img src="imgs/galeria/thumbs/porcion.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/tapaberengenaparmesano.jpg"><img src="imgs/galeria/thumbs/tapaberengenaparmesano.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/tapajaiba.jpg"><img src="imgs/galeria/thumbs/tapajaiba.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/tapapulpo.jpg"><img src="imgs/galeria/thumbs/tapapulpo.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/taparoastbeef.jpg"><img src="imgs/galeria/thumbs/taparoastbeef.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/tapashitake.jpg"><img src="imgs/galeria/thumbs/tapashitake.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/terrina-yogurt-detalle.jpg"><img src="imgs/galeria/thumbs/terrina-yogurt-detalle.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/terrina-yogurt.jpg"><img src="imgs/galeria/thumbs/terrina-yogurt.jpg"></a></li>
				<li><a class="grouped_elements" rel="grupo_eventos" href="imgs/galeria/tortitamilojas1600.jpg"><img src="imgs/galeria/thumbs/tortitamilojas1600.jpg"></a></li>
			</ul>
		</article>
		<hr class="punteada">
		
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>