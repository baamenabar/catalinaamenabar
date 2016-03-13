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
<script type="text/javascript">
$(document).ready(function(){
	$('.botonPedido a').each(function(index){
		$(this).attr('href','contacto.php?p='+escape($.trim($(this).parents('tr').find('.nombre p').text())));
	});
});
</script>
<?php require_once("inc/analytics.php"); ?>

<title>Abastecimiento Cafetería y Restaurantes - Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal fondoGlobal-tortas">
	<header class="fondoPrincipal-interiores">
		<?php require("inc/navegacion.php"); ?>
		<div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
		<div class="titulo interior">
			<h1>Abastecimiento Cafeterías y Restaurantes</h1>
<hr class="punteada">
		</div>
	</header>
	<div class="cuerpoInterior">
		<table cellspacing="0" class="lista">
			<tr>
				<td class="nombre"><p> Galletón Chips de Chocolate </p></td>
				<td>Porción por Mayor ( + de 20)</td><td class="precioLista">$ 355 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Muffins</p></td>
				<td>Porción por Mayor ( + de 20)</td>
				<td class="precioLista">$ 425 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Kuchen de Nuez </p></td>
				<td>Porción por Mayor ( + de 9)</td><td class="precioLista">$ 565 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p>Kuchen de manzana con migas de limón y canela </p></td>
				<td>Porción por Mayor ( + de 9)</td><td class="precioLista">$ 600 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Brownie con chocolate blanco </p></td>
				<td>Porción por Mayor ( + de 9)</td><td class="precioLista">$ 565 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Brownie con nueces</p></td>
				<td>Porción por Mayor ( + de 9)</td><td class="precioLista">$ 565 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Brownie Mousse</p></td>
				<td>Porción por Mayor ( + de 9)</td><td class="precioLista">$ 700 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Galletas para el café </p></td>
				<td>Porción por Mayor ( + de 50)</td><td class="precioLista">$ 84 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Pastelitos surtidos </p></td>
				<td>Porción por Mayor ( + de 50)</td><td class="precioLista">$ 168 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Torta Brownie </p></td>
				<td>Porción por Mayor ( + de 16)</td>
				<td class="precioLista">$ 900 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Torta Maracuyá </p></td>
				<td>Porción por Mayor ( + de 16)</td><td class="precioLista">$ 800 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Torta Mil Hojas Memé </p></td>
				<td>Porción por Mayor ( + de 15)</td><td class="precioLista">$ 800 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Torta panqueque </p></td>
				<td>Porción por Mayor ( + de 16)</td><td class="precioLista">$ 800 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
						<tr>
				<td class="nombre"><p> Torta panqueque Frutos Secos</p></td>
				<td>Porción por Mayor ( + de 16)</td><td class="precioLista">$ 850 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Cheesecake de berries </p></td>
				<td>Porción por Mayor ( + de 8)</td><td class="precioLista">$ 1.260 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Kuchen Soufflé de Manzana </p></td>
				<td>Porción por Mayor ( + de 8)</td><td class="precioLista">$ 1.260 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Terrina de Chocolate con Mousse de Manjar </p></td>
				<td>Porción por Mayor ( + de 8)</td><td class="precioLista">$ 800 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="nombre"><p> Terrina de yogurt con frutas y almendras </p></td>
				<td>Porción por Mayor ( + de 8)</td><td class="precioLista">$ 800 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
            <tr>
				<td class="nombre"><p>Tejas negras de mousse de
                 manjar<br> y nuez cubiertas de chocolate</p></td>
				<td>Porción por Mayor ( + de 8)</td><td class="precioLista">$ 300 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
             <tr>
				<td class="nombre"><p>Tejas blancas de mousse de chocolate y <br>almendras cubiertas de chocolate blanco</td>
				<td>Porción por Mayor ( + de 8)</td><td class="precioLista">$ 300 + I.V.A.</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
		</table>
		<hr class="punteada">
		
		<!--<tr>
			<div class="detalleCorto"><!-- para cuando hay hartas fotos y poco texto, usar clase "detalleCorto" en el DIV bajo ARTICLE--> 
		<!--	<td class="nombre"><p>
					
				</p></td>
              
			</div>
				
			
				
		</tr>--> 
		
	</div>
	<p>&nbsp;</p>
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>