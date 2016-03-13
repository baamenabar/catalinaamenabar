<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cach");
?>
<!DOCTYPE HTML>
<html lang="es"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<?php if(false){ ?><link rel="stylesheet" type="text/css" href="css/general.css"><?php }else{ ?><link rel="stylesheet" type="text/css" href="css/general.css?ck=<?php echo filemtime("css/general.css"); ?>"><?php } ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="js/lib/css3-mediaqueries.js"></script>
<script type="text/javascript" src="js/menuPpal.js"></script>
<script type="text/javascript">
var listaFotos = Array(
'imgs/content/principal_portada_alfajor_doble.jpg',
'imgs/content/principal_portada_tomatesquesocabra.jpg',
'imgs/content/principal_portada_polloteriyaki.jpg',
'imgs/content/principal_portada_queichesmarisco.jpg',
'imgs/content/principal_portada_tapadulce.jpg'
);
</script>
<script type="text/javascript" src="js/animacion.js?ck=<?php echo filemtime("js/animacion.js"); ?>"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" type="text/css" href="css/ie8.css">
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie7.css">
<![endif]-->
<?php require_once("inc/analytics.php"); ?>
<script type="text/javascript" src="js/lib/selectivizr.js"></script>
<title>Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body><div class="contenedorGlobal">
	<header class="fondoPrincipal-portada">
	<?php require("inc/navegacion.php"); ?>
	<div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
	<div class="titulo">
		<h1>Banquetería y Pastelería</h1>
		<p>Queremos renovar la forma de ver la banquetería y la pastelería proponiendo una cocina joven, de sabores vivos y formatos novedosos. Combinación de ingredientes clásicos regionales, pastelería heredada por generaciones y sofisticación creativa.</p>
	</div>
</header>
<div class="cuerpo">
	<ul class="temas">
		<li>
<?php $linkPastel="pasteleria.php"; ?>
			<h3><a href="<?php echo $linkPastel; ?>">Pastelería</a></h3>
			<p><a href="<?php echo $linkPastel; ?>">&ldquo;Que no se note pobreza.&rdquo;</a></p>
			<a href="<?php echo $linkPastel; ?>"><img src="imgs/content/portada-golden-temas.jpg" width="217" height="146"></a></li>
		<li>
<?php $linkCatering="catering-banqueteria.php"; ?>
			<h3><a href="<?php echo $linkCatering; ?>">Catering<br>
				Banquetería</a></h3>
			<p><a href="<?php echo $linkCatering; ?>">&ldquo;Todo tipo de ocasión.&rdquo;</a></p>
			<a href="<?php echo $linkCatering; ?>"><img src="imgs/content/portada-pincho-de-pulpos.jpg" width="217" height="146"></a></li>
		<li>
<?php $linkOutdoor="catering-outdoors.php"; ?>
			<h3><a href="<?php echo $linkOutdoor; ?>">Catering<br>
				Outdoor</a></h3>
			<p><a href="<?php echo $linkOutdoor; ?>">&ldquo;Viajes de Paisajes y Sabores.&rdquo;</a></p>
			<a href="<?php echo $linkOutdoor; ?>"><img src="imgs/content/portada-domo-catering-outdoors.jpg" width="217" height="146"></a></li>
		<li>
<?php $linkContacto="contacto.php"; ?>
			<h3><a href="<?php echo $linkContacto; ?>">&nbsp;<br>Contáctanos</a></h3>
			<!--<h4><a href="<?php echo $linkContacto; ?>">No es necesario tener hambre...</a></h4>-->
			<p><a href="<?php echo $linkContacto; ?>">&nbsp;</a></p>
			<a href="<?php echo $linkContacto; ?>"><img src="imgs/content/portada-mesas-con-velas-contacto.jpg" width="217" height="146"></a></li>
	</ul>
</div>
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>