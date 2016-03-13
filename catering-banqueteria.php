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

<title>Catering Banquetería - Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal">
  <header class="fondoPrincipal-catering-banqueteria">
    <?php require("inc/navegacion.php"); ?>
    <div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
    <div class="titulo interior">
      <h1>Catering Banquetería</h1>
      <hr class="punteada">
      <h4>Disponemos de menús ya ideados y trabajados o podemos crearlos a medida, según las preferencias del cliente. Nos encaragaremos de poner toda nuestra creatividad y maestría en cada una de nuestras propuestas. Aquí hay una pequeña muestra de lo que les podemos ofrecer.</h4>
      <h5>Nuestro catering incluye en sus presupuestos todo lo necesario para la elaboración de cada uno de nuestros trabajos: garzones, barman, mantelería, vajilla y decoración. Soluciones ejecutadas simepre con diseño y creatividad.</h5>
    </div>
  </header>
  <div class="cuerpoInterior">
    <ul class="subTemas cortos1">
      <li>
        <header>
          <?php $linkAlmuerzos="galeria.php"; ?>
          <h3><a href="<?php echo $linkAlmuerzos; ?>">Cóctel <br>
          	Dulce &amp; S</a><a href="<?php echo $linkAlmuerzos; ?>">a</a><a href="<?php echo $linkAlmuerzos; ?>">lado</a></h3>
          <p><a href="<?php echo $linkAlmuerzos; ?>">&ldquo;Combinaciones de estilo&rdquo;</a></p>
          <a href="<?php echo $linkAlmuerzos; ?>"><img src="imgs/content/cocteleria-pinchos-y-salsas-06.jpg" width="224" height="148"></a></header>
        <div>
          <div>
            <p>Hemos ideado el coctel dulce y salado para adaptarse a todo tipo de ocasiones, que aún siendo informales, evitan renunciar al estilo y la elegancia.

Proponemos hacerlo de pie con el fin de gozar y degustar nuestras variedades en miniatura libremente, en el orden y cantidad deseados. Una manera activa de disfrutar todas las posibilidades y combinaciones gastronómicas.</p>
          </div>
          <img src="imgs/content/plato_camaron.png"></div>
                <footer><a href="<?php echo $linkAlmuerzos; ?>">Ver Galería</a></footer>

      </li>
      <li>
        <header>
          <?php $linkGlamping="galeria.php"; ?>
          <h3><a href="<?php echo $linkGlamping; ?>">Almuerzos y Comidas
 de entrega</a></h3>
          <p><a href="<?php echo $linkGlamping; ?>">&ldquo;Diferentes ocasiones&rdquo;</a></p>
          <a href="<?php echo $linkGlamping; ?>"><img src="imgs/content/fotoportada_catering_banqueteria__almuerzo_cateringexpress.jpg" width="224" height="148"></a></header>
        <div>
          <div>
            <p>Se trata de un servicio rápido de catering a domicilio para almuerzos de trabajo, reuniones familiares u otras celebraciones en oficinas o en terreno. Entregamos todo preparado, con instrucciones para servir y calentar. Es una alternativa igual de exquisita y más económica. Donde nadie trabaja más de lo necesario y todos quedan contentos."</p>
            </div>
          <img src="imgs/content/plato_pescado.png"></div>
        <footer><a href="<?php echo $linkGlamping; ?>">Ver Galería</a></footer>
      </li>
      <li>
        <header>
          <?php $linkOperadores="galeria.php"; ?>
          <h3><a href="<?php echo $linkOperadores; ?>">Comida</a></h3>
          <p><a href="<?php echo $linkOperadores; ?>">&ldquo;Búsqueda de Excelencia&rdquo;</a></p>
          <a href="<?php echo $linkOperadores; ?>"><img src="imgs/content/fotoportada_catering_banqueteria__comida.jpg" width="224" height="148"></a></header>
        <div>
          <div>
            <p>Para nosotros la realización de un evento es todo un arte. Nuestra principal preocupación es la búsqueda de la excelencia, por eso el desarrollo de cada una de nuestras recetas tiene su fundamento en el respeto por las materias primas, las que seleccionamos con mucho cuidado.

En nuestras comidas proponemos una cocina joven, de sabores vivos y formatos novedosos, combinándolo con la cocina tradicional y pastelería heredada por generaciones. Este anhelo se reflejará en que el evento y nuestros platos permanecerán en la memoria de los invitados.</p>
            </div>
          <img src="imgs/content/plato_jaiba.png"></div>
        <footer><a href="<?php echo $linkOperadores; ?>">Ver Galería</a></footer>
      </li>
      <li>
        <header>
          <?php $linkLunchBox="galeria.php"; ?>
          <h3><a href="<?php echo $linkLunchBox; ?>">Coffee Break</a></h3>
          <p><a href="<?php echo $linkLunchBox; ?>">&ldquo;Para amenizar reuniones&rdquo;</a></p>
          <a class="contieneFoto" href="<?php echo $linkLunchBox; ?>"><img src="imgs/content/fotoportada_catering_banqueteria__cofee_brake.jpg" width="224" height="148"></a></header>
        <div>
          <div>
            <p>Las alternativas de coffee brake que Culinaria Amenábar  ofrece están diseñadas para amenizar las reuniones de trabajo, seminarios, cursos o conferencias en diferentes horarios, ya que la buena cocina siempre es bienvenida</p>
          </div>
          <img src="imgs/content/plato_ensalada.png"></div>
         <footer><a href="<?php echo $linkLunchBox; ?>">Ver Galería</a></footer>
      </li>
    </ul>
  </div>
  <p>&nbsp;</p>
 
  <hr class="punteada">
  <div class="irContacto"><a href="contacto.php">Haga su Pedido</a></div>
  <div class="comentarioInterior">
			<h4>Disponemos de menús ya ideados y trabajados o podemos crearlos a medida, según las preferencias del cliente.</h4>
		</div>
  <p>&nbsp;</p>
 
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>