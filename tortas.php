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
<script type="text/javascript" src="js/menuPpal.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" type="text/css" href="css/ie8.css">
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie7.css">
<![endif]-->
<script type="text/javascript" src="js/lib/selectivizr.js"></script>
<?php require_once("inc/analytics.php"); ?>
<title>Tortas - Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal fondoGlobal-tortas">
	<header class="fondoPrincipal-interiores">
		<?php require("inc/navegacion.php"); ?>
		<div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
		<div class="titulo interior">
			<h1>Tortas</h1>
			<hr class="punteada">
		</div>
	</header>
	<div class="cuerpoInterior">
		<article>
			<div class="detalleCorto"><!-- para cuando hay hartas fotos y poco texto, usar clase "detalleCorto" en el DIV bajo ARTICLE-->
				<header>
					<h2>Torta mil hojas Memé</h2>
					<div class="cap"></div>
				</header>
				<ul>
					<li>Delgadísimas hojas rellenas con mouse de manjar de campo, cubierta de merengue.</li>
				</ul>
				<p>&nbsp;</p>
				<footer>
					<table>
						<tr>
							<td>25 a 30 Personas</td>
							<td>$ 22.000<br></td>
						</tr>
						<tr>
							<td>15 Personas</td>
							<td>$ 13.000</td>
						</tr>
						<tr>
							<td>Porción por Mayor (desde 15 porciones)</td>
							<td title="$ 993 iva incluido">$ 834+IVA</td>
						</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				<figure class="detalleFotoGrande"> <img src="imgs/content/pasteleria-tortas-milhojasmeme.jpg">
					<figcaption>&ldquo;Torta de mil hojas Memé&rdquo;</figcaption>
				</figure>
				<div class="botonVerGaleria"><a href="#">&nbsp;</a></div>
			</aside>
		</article>
		<hr class="punteada">
		<article>
			<div><!-- para cuando hay hartas fotos y poco texto, usar clase "detalleCorto" en el DIV bajo ARTICLE-->
				<header>
					<h2>Torta de Panqueques</h2>
					<div class="cap"></div>
				</header>
				<ul>
					<li>Torta con delgadas capas de panqueque rellenas de:
						<ul>
							<li>Mousse de manjar</li>
							<li>Manjar lúcuma</li>
							<li>Maracuyá</li>
							<li>Mousse de chocolate con berries</li>
							<li>Mousse de chocolate blanco con frutillas</li>
							<li>Chocolate blanco y negro con naranja</li>
						</ul>
					</li>
				</ul>
				<p>&nbsp;</p>
				<footer>
					<table>
						<tr>
							<td>25 a 30 Personas</td>
							<td>$ 20.000<br></td>
						</tr>
						<tr>
							<td>15 Personas</td>
							<td>$ 12.000</td>
						</tr>
						<tr>
							<td>Porción por Mayor (desde 16 porciones)</td>
							<td title="$ 993 iva incluido">$ 834+IVA</td>
						</tr>
					</table>
				</footer>
			</div>
			<aside>
				<figure class="detalleFotoGrande"> <img src="imgs/content/torta-panqueque.jpg">
					<figcaption>&ldquo;Torta de Panqueques Artesanal&rdquo;</figcaption>
				</figure>
				<figure> <img src="imgs/content/torta-panqueque-porcion.jpg">
					<figcaption>
					  <div><span id="internal-source-marker_0.17860812856815755"> “Panqueque maracuyá”</span></div>
					</figcaption>
				</figure>
				<figure> <img src="imgs/content/torta-panqueque-cubierta-de-mazapan.jpg">
					<figcaption>“Cubierta de Mazapán”</figcaption>
				</figure>
				<div class="botonVerGaleria"><a href="#">&nbsp;</a></div>
			</aside>
		</article>
		<hr class="punteada">
        <article>
			<div>
			  <header>
					<h2>Torta de Piña</h2>
					<div class="cap"></div>
				</header>
				<ul>
					<li>Bizcocho de almendra relleno con suave mousse con trozos de piña y cubierta de almendras tostadas. </li>
				</ul>
				<footer>
					<table>
						<tr>
							<td>25 a 30 Personas</td>
							<td>$ 20.000<br></td>
						</tr>
						<tr>
							<td>15 Personas</td>
							<td>$ 12.000</td>
						</tr>
						<tr>
							<td>Porción por Mayor (desde 16 porciones)</td>
							<td title="$ 993 iva incluido">$ 834+IVA</td>
						</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				<figure class="detalleFotoGrande"> <img src="imgs/content/pasteleria-tortaspina_grande.jpg">
					<figcaption>&ldquo;Torta de Panqueques Artesanal&rdquo;</figcaption>
				</figure>
				<figure> <img src="imgs/content/pasteleria-tortas_pina_chica2.jpg">
					<figcaption>
					  <div><span id="internal-source-marker_0.17860812856815755"></span></div>
				  </figcaption>
			  </figure>
				<figure> <img src="imgs/content/pasteleria-tortas_pina_chica1.jpg">
					<figcaption> </figcaption>
			  </figure>
				<div class="botonVerGaleria"><a href="#">&nbsp;</a></div>
			</aside>
		</article>
	</div>
	<p>&nbsp;</p>
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>