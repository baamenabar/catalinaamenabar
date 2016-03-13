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

<title>Coctelería: dulce y salada - Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal fondoGlobal-cocteleria">
	<header class="fondoPrincipal-interiores">
		<?php require("inc/navegacion.php"); ?>
		<div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
		<div class="titulo interior">
			<h1>Coctelería / dulce y salada</h1>
			<hr class="punteada">
		</div>
	</header>
	<div class="cuerpoInterior">
		<article>
			<div>
				<header>
					<h2>Pinchos y Salsas</h2>
					<div class="cap"></div>
				</header>
				<ul>
					<li>Bolitas de carne parmesanas  con salsa de horseradish</li>
					<li>Pollo en salsa teriyaki</li>
					<li>Queso de cabra apanado con salsa balsamica a la miel y cardamomo</li>
					<li>Pulpo escabechado, pimentón rostizado y pesto de albahaca</li>
					<li>Queso de cabra y tomatito relleno de tapenade de aceituna con alcaparras</li>
					<li>Ostión grillado con bizcocho de tomate y tomatito con crema de limón marroquí</li>
					<li>Ostión grillado y jamon serrano</li>
					<li>Pinchos de camarón ecuatoriano apanados más salsa de palta</li>
<li>Pinchos de pescado semicrudo sellado con costra de nori y sésamo más salsa oriental</li>
<li>Pinzas de jaiba apanadas más salsa de tomates asados</li>
				</ul>
				<footer>
					<table>
						<tr>
							<td>50 pinchos</td>
							<td>$ 16.000</td>
						</tr>
						<tr>
							<td>100 pinchos</td>
							<td>$ 30.000</td>
						</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php?p=Pinchos">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				<figure class="detalleFotoGrande">
				</figure>
				<figure> <img src="imgs/content/cocteleria-pinchos-y-salsas-02.jpg">
					<figcaption>&ldquo;Ostión marroquí.&rdquo;</figcaption>
				</figure>
				<figure> <img src="imgs/content/cocteleria-pinchos-y-salsas-03.jpg">
					<figcaption>&ldquo;Pulpo escabechado&rdquo;</figcaption>
				</figure>
				<div class="botonVerGaleria"><a href="galeria.php">&nbsp;</a></div>
			</aside>
		</article>
		<hr class="punteada">
		<article>
			<div>
				<header>
					<h2>Tapas Saladas</h2>
					<div class="cap"></div>
				</header>
				<ul>
					<li>Montadas sobre brusquetas al oliva</li>
					<li>Pulpo escabechado, pimentón rostizado, oliva y cilantro</li>
					<li>Carne mechada, palta y aros de chalota</li>
					<li>Champiñón shitake, pasta de queso azúl y ciboullette</li>
					<li>Berenjenas atomatadas y láminas de parmesano</li>
					<li>Rostbeef, tomate confitado, albahaca y salsa horseradish</li>
					<li>Carne de jaiba, papaya, palta y rúcula</li>
					<li>Paté casero, confitura de cebolla y pimienta negra</li>
					<li>Salmón ahumado con eneldo y ricota</li>
					<li>Loco con ají verde, huevo y aros de chalota</li>
					<li>Pasta de queso de cabra, tomate confitado y albahaca</li>
				</ul>
				<footer>
					<table>
						<tr>
							<td>50 tapas saladas</td>
							<td>$ 12.000</td>
						</tr>
						<tr>
							<td>100 tapas saladas</td>
							<td>$ 20.000</td>
						</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php?p=Tapas Saladas">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				<figure class="detalleFotoGrande"> <img src="imgs/content/cocteleria-tapas-saladas-01.jpg">
					<figcaption>&ldquo;Tapa Pulpo&rdquo;</figcaption>
				</figure>
				<div class="botonVerGaleria"><a href="galeria.php">&nbsp;</a></div>
				<figure> <img src="imgs/content/tapa-roast-beef-carne-con-tomate-confitado-y-albahaca.jpg">
					<figcaption>&ldquo;Roast Beef, Tomate y Albahaca&rdquo;</figcaption>
				</figure>
				<figure> <img src="imgs/content/cocteleria-tapas-saladas-03.jpg">
					<figcaption>&ldquo;Tapa Shitake&rdquo;</figcaption>
				</figure>
			</aside>
		</article>
		<hr class="punteada">
		<article>
			<div>
				<header>
					<h2>Mini Quiches</h2>
					<div class="cap"></div>
				</header>
				<ul>
					<li>Loraine: queso gruyere, tocino y cebolla</li>
					<li>Pimentón rostizado, palmito y queso azúl</li>
						<li>Mix de hongos con queso ahumado</li>
					<li>Pastelera de choclo y pollo</li>
					<li>Chupe de loco</li>
					<li>Chupe de jaiba</li>
					<li>Salmón ahumado y queso crema</li>
				</ul>
				<footer>
					<table>
						<tr>
							<td>20 mini quiches</td>
							<td>$ 5.500</td>
						</tr>
						<tr>
							<td>100 mini quiches</td>
							<td>$ 20.000</td>
						</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php?p=Mini Quiches">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				<figure> <img src="imgs/content/cocteleria-mini-quiche-pollo.jpg">
					<figcaption>&ldquo;Mini Quiche Pollo&rdquo;</figcaption>
				</figure>
				<figure> <img src="imgs/content/cocteleria-mini-quiche-pollo.jpg">
					<figcaption>&ldquo;Mini Quiche Pollo&rdquo;</figcaption>
				</figure>
				<figure> <img src="imgs/content/cocteleria-mini-quiche-mariscos-01.jpg">
					<figcaption>&ldquo;Mini Quiche Loco&rdquo;</figcaption>
				</figure>
				<figure> <img src="imgs/content/cocteleria-mini-quiche-mariscos-02.jpg">
					<figcaption>&ldquo;Mini Quiche Jaiva&rdquo;</figcaption>
				</figure>
				<div class="botonVerGaleria"><a href="galeria.php">&nbsp;</a></div>
			</aside>
		</article>
		<hr class="punteada">
		<article>
			<div>
				<header>
					<h2>Mini Pastelería</h2>
					<div class="cap"></div>
				</header>
				<ul>
					<li>Mini cheesecake de berries</li>
					<li>Mini pie de limón</li>
					<li>Mini pie de chocolate blanco y café</li>
					<li>Tortita de mil hojas</li>
					<li>Trufa de chocolate blanco y vainilla natural</li>
					<li>Mini brownie</li>
					<li>Mini kuchen de nuez</li>
					<li>Alfajorcito chileno</li>
					<li>Napoleón de chocolate blanco y mousse de frambuesa</li>
					<li>Napoleón de chocolate y mousse de manjar</li>
					<li>Volqui de galletitas y con mousse de manjar cubierto de chocolate</li>
<li>Pie de maracuya y almendras</li>
<li>Pie de manjar y turrón</li>
<li>Coco negro relleno de manjar y nuez</li>
<li>Coco blanco relleno de chocolate y almendra</li>
				</ul>
				<footer>
					<table>
						<tr>
							<td>20 mini pasteles</td>
							<td>$ 4.500</td>
						</tr>
						<tr>
							<td>100 mini pasteles</td>
							<td>$ 20.000</td>
						</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php?p=Mini Pasteleria">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				<figure class="detalleFotoGrande"> <img src="imgs/content/cocteleria-mini-pasteleria-01.jpg">
					<figcaption>&ldquo;Alfajorcito chileno&rdquo;</figcaption>
				</figure>
				<div class="botonVerGaleria"><a href="galeria.php">&nbsp;</a></div>
				<figure> <img src="imgs/content/cocteleria-mini-brownie.jpg">
					<figcaption>&ldquo;Mini brownie&rdquo;</figcaption>
				</figure>
				<figure> <img src="imgs/content/cocteleria-mini-pasteleria-03.jpg">
					<figcaption>&ldquo;Cocteleria dulce&rdquo;</figcaption>
				</figure>
			</aside>
		</article>
		<hr class="punteada">
		<div class="plusOne"><div><g:plusone size="medium"></g:plusone></div><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=251737784853386&amp;xfbml=1"></script><fb:like href="" send="" layout="button_count" width="600" show_faces="true" font=""></fb:like></div>
	</div>
	<p>&nbsp;</p>
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>