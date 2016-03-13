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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="js/lib/css3-mediaqueries.js"></script>
<?php if(false){ ?><script type="text/javascript" src="js/menuPpal.js"></script><?php }else{ ?><script type="text/javascript" src="js/menuPpal.js?ck=<?php echo filemtime("js/menuPpal.js"); ?>"></script><?php } ?>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" type="text/css" href="css/ie8.css">
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie7.css">
<![endif]-->
<?php require_once("inc/analytics.php"); ?>
<script type="text/javascript" src="js/lib/selectivizr.js"></script>
<title>Pastelería - Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal">
	<header class="fondoPrincipal-pasteleria">
		<?php require("inc/navegacion.php"); ?>
		<div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
		<div class="titulo interior">
			<h1>Pastelería</h1>
			<hr class="punteada">
			<h4>Queremos renovar la forma de ver la banquetería y la pastelería proponiendo una cocina joven, de sabores vivos y formatos novedosos.</h4>
			<h5>Nuestra propuesta es una combinación de ingredientes clásicos regionales, pastelería heredada por generaciones y sofisticación creativa.</h5>
		</div>
	</header>
	<div class="cuerpoInterior">
		<ul class="subTemas">
			<li>
				<header>
					<?php $linkTortas="tortas.php"; ?>
					<h3><a href="<?php echo $linkTortas; ?>">Tortas</a></h3>
					<p><a href="<?php echo $linkTortas; ?>">&ldquo;Las reinas de la fiesta&rdquo;</a></p>
					<a href="<?php echo $linkTortas; ?>"><img src="imgs/content/foto_tortas.jpg" width="224" height="148"></a></header>
				<div><div>
					<p>&ldquo;Que no se note pobreza&rdquo; , &ldquo;que nunca falte manjar&rdquo;, &ldquo;siempre mantequilla, no margarina&rdquo; son los mandamientos que recitaba mi abuela cuando cocinabamos juntas y jamás olvido. Porque las tortas son las reinas de las fiestas y la tradición, es que  las preparamos con las mejores materias primas y toda la dedicación que estas merecen.</p>
					</div><img src="imgs/content/plato_frutilla.png"></div>
				<footer><a href="<?php echo $linkTortas; ?>">ver nuestras tortas</a></footer>
			</li>
			<li>
				<header>
					<?php $linkKuchen="postres.php"; ?>
					<h3><a href="<?php echo $linkKuchen; ?>">Kuchenes y<br>
						Postres</a></h3>
					<p><a href="<?php echo $linkKuchen; ?>">&ldquo;Un final feliz&rdquo;</a></p>
					<a href="<?php echo $linkKuchen; ?>"><img src="imgs/content/foto_kuchenes_postres.jpg" width="224" height="148"></a></header>
				<div><div>
					<p> Porque no hay final más feliz que un buen postre. Estas son recetas conocidas, pero pero hechas "a mi manera".</p>
					</div><img src="imgs/content/plato_hierbabuena.png"></div>
				<footer><a href="<?php echo $linkKuchen; ?>">ver kuchenes &amp; postres</a></footer>
			</li>
			<li>
				<header>
					<?php $linkCocteleria="cocteleria.php"; ?>
					<h3><a href="<?php echo $linkCocteleria; ?>">Coctelería</a></h3>
					<p><a href="<?php echo $linkCocteleria; ?>">&ldquo;Todo tipo de Eventos&rdquo;</a></p>
					<a href="<?php echo $linkCocteleria; ?>"><img src="imgs/content/cocteleria-mini-brownie.jpg" width="224" height="148"></a></header>
				<div><div>
					<p>Diferentes alternativas de canapés: mini pastelitos, tapas saladas, chupines de mariscos, pinchos y salsas. Solución ideada para todo tipo de eventos que aun siendo simples, no quieran perder la sofisticación sello de nuestra cocina.
Haga su pedido con 24 horas de anticipación por teléfono o mail, luego coordinaremos el despacho o retiro de los productos en el local. Para pedidos mayores y en caso de que requiera un servicio con garzones y decoración, contáctenos a través de nuestra página de contacto.</p>
					</div><img src="imgs/content/plato_nuez.png"></div>
				<footer><a href="<?php echo $linkCocteleria; ?>">ver coctelería</a></footer>
			</li>
			<li>
				<header>
					<?php $linkCafeteria="especial-cafeteria.php"; ?>
					<h3><a href="<?php echo $linkCafeteria; ?>">Abastecimiento<br>
						al por mayor</a></h3>
					<p><a href="<?php echo $linkCafeteria; ?>">&ldquo;Productos especiales&rdquo;</a></p>
					<a class="contieneFoto" href="<?php echo $linkCafeteria; ?>"><img src="imgs/content/foto_cafeteria.jpg" width="224" height="148"></a></header>
				<div><div>
					<p>Hemos desarrollado una línea de productos especiales para abastecer cafeterías, restaurantes y hoteles.
						Se trata de tortas y postres porcionados y embandejados individualmente, los que despachamos hasta su local.
						Las ventajas de nuestro servicio son:</p>
					<ul>
						<li>- La calidad, tamaño y formato del postre que entregue a su cliente siemrpre será el mismo.</li>
						<li>- Son de fácil traslado y fácil servicio.</li>
						<li>- Como ya viene porcionado, no necesita ser manipulado por el personal, lo que reduce las mermas.</li>
						<li>- Como se compra y vende por unidad, es más eficiente el control de costos y de stock</li>
					</ul>
					</div><img src="imgs/content/plato_arandano.png"></div>
				<footer><a href="<?php echo $linkCafeteria; ?>">ver cafetería y restaurantes</a></footer>
			</li>
		</ul>
	</div>
	
	<hr class="punteada"><p>&nbsp;</p>
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>