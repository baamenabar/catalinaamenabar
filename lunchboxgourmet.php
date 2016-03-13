<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cach");
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<?php if(false){ ?>
<link rel="stylesheet" type="text/css" href="css/general.css">
<?php }else{ ?>
<link rel="stylesheet" type="text/css" href="css/general.css?ck=<?php echo filemtime("css/general.css"); ?>">
<?php } ?>
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
<title>Lunch Box Gourmet - Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal">
	<header>
		<?php require("inc/navegacion.php"); ?>
		<div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
		<div class="titulo interior">
			<h1>Lunch Box Gourmet</h1>
			<hr class="punteada">
		</div>
	</header>
	<div class="cuerpoInterior">
		<div class="parrafosInterior">
			<h2>Tipos de Sandwich<br>
			</h2>
		</div>
		<table cellspacing="0" class="lista corta">
			<tr>
				<th>*Todos los  Sandwich de Lunch Box Gourmet incluyen agua mineral o jugo más un pastelito.</th>
				<th class="precioLista">Precio Unitario</th>
			</tr>
			<tr>
				<td class="nombre"><p> Sándwich del Valle</p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Queso de cabra, tomate, aceitunas amargas, albahaca y aceite de oliva en   pan italiano. </td>
			</tr>
			<tr>
				<td class="nombre"><p>Sándwich de Jamón Serrano y Rúcula</p></td>
				<td class="precioLista"> $ 6.900</td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Jamón serrano, rúcula, oliva, tomate confitado y queso crema   en pan italiano.<br></td>
			</tr>
			<tr>
				<td class="nombre"><p>Sándwich de Jamón de Pavo y Queso Fresco</p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Jamón de pavo, queso fresco de vaca, lechuga y mostaza en grano en pan italiano.<br></td>
			</tr>
			<tr>
				<td class="nombre"><p>Sándwich de Jaiba y Palta</p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Jaiba, palta, cebolla morada, lechuga y mayonesa en pan italiano.<br></td>
			</tr>
			<tr>
				<td class="nombre"><p>Sándwich Vegetariano</p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Palmito, palta, pimentones rostizados, queso azul y brotes en pan italiano.<br></td>
			</tr>
			<tr>
				<td class="nombre"><p>Sándwich de Pollo y Queso de Cabra</p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Filetitos de pollo, queso de cabra rallado, cebolla  y mostaza en grano en pan italiano.<br></td>
			</tr>
			<tr>
				<td class="nombre"><p>Sándwich Rost Beaf y Horsradish </p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			<tr>
				<td class="detalle">Rost beaf, tomate, palta y horsradish en pan italiano.&nbsp;</td>
			</tr>
				</tr>
			
		</table>
		<hr class="punteada">
		<div class="parrafosInterior">
			<h2>Tipos de Ensaladas</h2>
		</div>
		<table cellspacing="0" class="lista corta">
			<tr>
				<th>*Todas las Ensaladas de Lunch Box Gourmet incluyen agua mineral o jugo más un pastelito.</th>
				<th class="precioLista">Precio Unitario</th>
			</tr>
			
				<td class="nombre"><p> Ensalada de Lentejas Balsámicas </p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr> </tr>
			<tr>
				<td class="detalle">Lentejas salteadas con tocino, jengibre y zanahoria acompañadas de ciboullette,  queso gruyere y vinagreta balsámica.<br></td>
			</tr>
			<tr>
				<td class="nombre"><p>Ensalada Griega </p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Tomates, aceitunas y queso de cabra del valle, más pepino, cebolla morada y aliño de yogurt con albahaca.<br></td>
			</tr>
			<tr>
				<td class="nombre"><p>Ensalada de Verduras Asadas</p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Berenjenas, pimentones, cebolla, champiñones y papas asadas, acompañadas de nueces, láminas de parmesano y vinagreta balsámica a la miel.</td>
			</tr>
			<tr>
				<td class="nombre"><p>Ensalada de Camarón Palta</p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Camarones ecuatorianos salteados, palta, aros de chalota, láminas de parmesano y almendras, sobre mix de hojas verdes y vinagreta de maracuyá.<br></td>
			</tr>
			<tr>
				<td class="nombre"><p>Ensalada de Pollo Teriyaki</p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Filetitos de pollo teriyaki, nueces acarameladas, aros de chalota, queso camembert sobre mix de hojas verdes y vinagreta de oliva y limón.</td>
			</tr>
			<tr>
				<td class="nombre"><p>Ensalada de Rost Beaf, Papas y Horsradish</p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Tortita de puré de papas y carne de jaiba con mayonesa, acompañado con pebre de papaya, palta y cilantro.</td>
			</tr>
			<tr>
				<td class="nombre"><p>Ensalada Causa de Jaiba</p></td>
				<td class="precioLista">$ 6.900 </td>
				<td class="hacerPedido"><p class="botonPedido"><a href="#">hacer pedido</a></p></td>
			</tr>
			<tr>
				<td class="detalle">Rost beaf,con papas  y pimentones asados, verde de cebollín, queso azul y suave aliño de horsradish.<br></td>
				<td class="detalle">&nbsp;</td>
			</tr>
		</table>
		<hr class="punteada">
	</div>
	<p>&nbsp;</p>
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>