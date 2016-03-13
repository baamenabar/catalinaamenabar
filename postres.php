<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cach");
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/general.css?ck=<?php echo filemtime("css/general.css"); ?>">
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
<script type="text/javascript" src="js/lib/selectivizr.js"></script>
<?php require_once("inc/analytics.php"); ?>

<title>Kuchenes y Postres - Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal fondoGlobal-tortas">
	<header class="fondoPrincipal-interiores">
		<?php require("inc/navegacion.php"); ?>
		<div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
		<div class="titulo interior">
			<h1>Kuchenes y Postres</h1>
			<hr class="punteada">
		</div>
	</header>
	<div class="cuerpoInterior">
		<article>
			<div class="detalleCorto"><!-- para cuando hay hartas fotos y poco texto, usar clase "detalleCorto" en el DIV bajo ARTICLE-->
				<header>
					<h2>Cheese Cake Frutos del Sur</h2>
					<div class="cap"></div>
				</header>
				<ul>
				<li>Cheese Cake con frutos del sur: frambuesas, frutillas, moras y arándanos.</li>
				</ul>
                
                
				<footer>
					<table>
							<tr>
							<td>8 Personas</td>
							
							<td>$ 14.000</td>
							</tr>
							<tr>
							<td>Porción por Mayor (desde 8 unidades)</td>
							
							<td>$ 1.260+IVA</td>
							</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				
				<figure> <img src="imgs/content/pasteleria-postres-cheesecake.jpg">
					<figcaption>Berries</figcaption>
				</figure>
				<figure> <img src="imgs/content/pasteleria-postres-cheesecake2.jpg">
					<figcaption>&quot;Cheese Cake frutos del sur&quot;</figcaption>
				</figure>
				
				<div class="botonVerGaleria"><a href="#">&nbsp;</a></div>
			</aside>
		</article>
		<hr class="punteada">
        <article>
			<div>
			  <header>
					<h2>Brownie Mousse de Chocolate</h2>
					<div class="cap"></div>
				</header>
				<ul>
					
					<li>Denso mousse de chocolate  sobre una base de brownie con nueces.</li>
				</ul>
				<footer>
					<table>
							<tr>
							<td>8 Personas</td>
							
							<td>$ 10.000</td>
							</tr>
                            <tr>
							<td>16 Personas</td>
							
							<td>$ 18.000</td>
							</tr>
							<tr>
							<td>Porción por Mayor (desde 15 unidades)</td>
							
							<td>$ 800+IVA</td>
						</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				<figure> <img src="imgs/content/pasteleria-postres-browniemousse.jpg">
					<figcaption>&ldquo;Porciones Brownie Mousset&rdquo;</figcaption>
			  </figure>
				<figure> <img src="imgs/content/pasteleria-postres-browniemousse_2.jpg">
					<figcaption>&quot;Base de Brownie con nueces&quot;</figcaption>
			  </figure>
				
			</aside>
            		<hr class="punteada">

	  </article>
		<article>
			<div>
				<header>
					<h2>Kuchen soufflé de Manzana</h2>
					<div class="cap"></div>
				</header>
				<ul>
				<li>Delicioso kuchen preparado con manzanas seleccionadas y sobre estas, un suave soufflé de queso.</li>
				</ul>
				<footer>
					<table>
							<tr>
							<td>8 Personas</td>
							
							<td>$ 14.000</td>
							</tr>
							<tr>
							<td>Porción por Mayor (desde 8 unidades)</td>
							
							<td>$ 1.260+IVA</td>
							</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php">hacer pedido</a></p>
				</footer>
			</div>
			<aside>				
			
				<figure> <img src="imgs/content/pasteleria-postres-soufle.jpg">
					<figcaption>&quot;Kuchen soufflé de manzana&quot;<br>
					</figcaption>
				</figure>
				<figure> <img src="imgs/content/pasteleria-postres-soufle2.jpg">
					<figcaption>&quot; Porción Kuchen soufflé de manzana&quot;</figcaption>
				</figure>
				<div class="botonVerGaleria"><a href="#">&nbsp;</a></div>
			</aside>
		</article>
    <hr class="punteada">
		<article>
			<div>
				<header>
					<h2>Terrina de Chocolate</h2>
					<div class="cap"></div>
				</header>
				<ul>
					<li>Bizcocho de chocolate sin harina, relleno de suave mousse de manjar y cubierto con virutas de chocolate.</li>
					
				</ul>
				<footer>
					<table>
							<tr>
							<td>8 Personas</td>
							
							<td>$ 9.000</td>
							</tr>
							<tr>
							<td>Porción por Mayor (desde 8 unidades)</td>
							
							<td>$ 900+IVA</td>
							</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				<figure> <img src="imgs/content/pasteleria-postres-terrinachoco.jpg">
					<figcaption>&quot;Con Mousse de Manjar&quot;</figcaption>
				</figure>
				<figure> <img src="imgs/content/pasteleria-postres-terrinachoco2.jpg">
					<figcaption>&ldquo;Terrina de Chocolater&rdquo;</figcaption>
				</figure>
				<div class="botonVerGaleria"><a href="#">&nbsp;</a></div>
			</aside>
		</article>
		<hr class="punteada">
		<article>
			<div>
				<header>
					<h2>Terrina de Yorghurt</h2>
					<div class="cap"></div>
				</header>
				<ul>
					
					<li>Terrina de Yorhurt con frutas y almendras.</li>
				</ul>
				<footer>
					<table>
							<tr>
							<td>8 Personas</td>
							
							<td>$ 9.000</td>
							</tr>
							<tr>
							<td>Porción por Mayor (desde 8 unidades)</td>
							
							<td>$ 900+IVA</td>
						</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				<figure> <img src="imgs/content/pasteleria-postres-terrinayog.jpg">
					<figcaption>&ldquo;Terrina de Yorghurt&rdquo;</figcaption>
				</figure>
				<figure> <img src="imgs/content/pasteleria-postres-terrinayog2.jpg">
					<figcaption>&quot;Envuelta en almendras&quot;</figcaption>
				</figure>
				
			</aside>
		</article>
		<hr class="punteada">
		<article>
			<div>
				<header>
					<h2>Kuchen de Manzana</h2>
					<div class="cap"></div>
				</header>
				<ul>
					
					<li>Kuchen de manzana cubierto de crujientes migas aromatizadas con limón y canela.</li>
				</ul>
				<footer>
					<table>
							<tr>
							<td>8 Personas</td>
							
							<td>$ 8.000</td>
							</tr>
							<tr>
							<td>Porción por Mayor (desde 8 unidades)</td>
							
							<td>$ 600+IVA</td>
						</tr>
					</table>
					<p class="botonPedido"><a href="contacto.php">hacer pedido</a></p>
				</footer>
			</div>
			<aside>
				<figure> <img src="imgs/content/pasteleria-postres-kuchendemanzana.jpg">
					<figcaption>&ldquo;Porciones Kuchen de Manzana&rdquo;</figcaption>
			  </figure>
				<figure> <img src="imgs/content/pasteleria-postres-kuchendemanzana_2.jpg">
					<figcaption>&quot;Cubierto en crujentes migas&quot;</figcaption>
			  </figure>
				
			</aside>
		</article>
        		<hr class="punteada">

      
	</div>
	<p>&nbsp;</p>
</div>

<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>