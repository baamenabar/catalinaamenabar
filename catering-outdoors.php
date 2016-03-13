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

<title>Catering Outdoor - Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal">
  <header class="fondoPrincipal-catering-outdoor">
    <?php require("inc/navegacion.php"); ?>
    <div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
    <div class="titulo interior">
      <h1>Catering Outdoor</h1>
      <hr class="punteada">
      <h4>Se trata de una experiencia turistica que une la naturaleza con el lujo y la mas exquisita gastronomía, un viaje de paisajes y sabores. 
Es una invitación para detenerse y disfrutar al máximo de los lugares con mas alto valor paisajístico de nuestro mítico Desierto de Atacama.</h4>
      <h5>Playas, dunas, pinturas rupestres, astronomía, reservas paleontológicas y las más altas cumbres. Para que esto sea posible, estamos preparados para llegar a cualquier lugar y contamos con todas las soluciones para este tipo de eventos.</h5>
    </div>
  </header>
  <div class="cuerpoInterior">
    <ul class="subTemas cortos1">
      <li>
        <header>
          <?php $linkAlmuerzos="galeria.php"; ?>
          <h3><a href="<?php echo $linkAlmuerzos; ?>">Almuerzos y<br>
            Comidas Outdoor</a></h3>
          <p><a href="<?php echo $linkAlmuerzos; ?>">&ldquo;Paisajes y sabores&rdquo;</a></p>
          <a href="<?php echo $linkAlmuerzos; ?>"><img src="imgs/content/foto_almuerzosycomidas_outdoor.jpg" width="224" height="148"></a></header>
        <div>
          <div>
            <p>Playas atacameñas <br>
              Comidas románticas.<br>
              Paseos en bote por la bahía de Bahía Inglesa y el Morro.<br>
              Parque Nacional Pan de Azúcar.<br>
              Mar de dunas y duna Medanoso.<br>
              Minas de Copiapó, sus mineros y su gastronomía.<br>
              Pinturas rupestres y astronomía en Inca de Oro.<br>
              Las más altas cumbres: Ojos del salado, Parque nacional nevado tres cruces y sus lagunas Santa Rosa y Laguna Verde.</p>
          </div>
          <img src="imgs/content/plato_camaron.png"></div>
        <footer><a href="galeria.php">Ver Galería</a></footer>
      </li>
      <li>
        <header>
          <?php $linkGlamping="galeria.php"; ?>
          <h3><a href="<?php echo $linkGlamping; ?>">Glamping</a></h3>
          <p><a href="<?php echo $linkGlamping; ?>">&ldquo;Comodidad y lujo&rdquo;</a></p>
          <a href="<?php echo $linkGlamping; ?>"><img src="imgs/content/foto_glamiping.jpg" width="224" height="148"></a></header>
        <div>
          <div>
            <p>Para quienes quieren tener las ventajas de acampar (aire libre y naturaleza), pero con los detalles de un hotel de lujo. Se trata de una estancia que ofrece el lujo y comodidad, a través de la experiencia de lo simple.
En alianza con Domos Chile llevamos a cabo esta práctica turística de bajo impacto ambiental, que resuelve de manera especialmente inocua la relación entre una edificación,el paisaje, y al mismo tiempo la condición de hospedaje turístico.</p>
          </div>
          <img src="imgs/content/plato_pescado.png"></div>
        <footer><a href="galeria.php">Ver Galería</a></footer>
      </li>
      <li>
        <header>
          <?php $linkOperadores="galeria.php"; ?>
          <h3><a href="<?php echo $linkOperadores; ?>">Operadores<br>
            Turísticos</a></h3>
          <p><a href="<?php echo $linkOperadores; ?>">&ldquo;Detenerse y disfrutar&rdquo;</a></p>
          <a href="<?php echo $linkOperadores; ?>"><img src="imgs/content/foto_operadores_turisticos.jpg" width="224" height="148"></a></header>
        <div>
          <div>
            <p>El catering outdoor ha sido ideado para ser complemento de los paquetes ofrecidos por agencias y operadores turisticos.</p>
            <p>Tenemos las alternativas de boxlunch gourmet o el servicio de catering completo  en el destino que se requiera.</p>
          </div>
          <img src="imgs/content/plato_jaiba.png"></div>
        <footer><a href="galeria.php">Ver Galería</a></footer>
      </li>
      <li>
        <header>
          <?php $linkLunchBox="lunchboxgourmet.php"; ?>
          <h3><a href="<?php echo $linkLunchBox; ?>">Lunch box<br>
            gourmet</a></h3>
          <p><a href="<?php echo $linkLunchBox; ?>">&ldquo;Todo tipo de Ocasiones&rdquo;</a></p>
          <a class="contieneFoto" href="<?php echo $linkLunchBox; ?>"><img src="imgs/content/foto_lunchbox_gourmet.jpg" width="224" height="148"></a></header>
        <div>
          <div>
            <p>Variedad de ensaladas o sandwich en pan italiano, de miga o integral para sandwich y ensaladas a elección, 1 fruta seleccionada de la estación, agua mineral y un postre de nuestra pastelería.<strong> $6.900</strong> cualquier alternativa.</p>
          </div>
          <img src="imgs/content/plato_ensalada.png"></div>
        <footer><a href="lunchboxgourmet.php">Alternativas Lunch Box</a></footer>
      </li>
    </ul>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <h2>Menus con escencia atacameña</h2>
  <hr class="punteada">
  <p>&nbsp;</p>
  <img src="imgs/content/interior-domo-desierto.jpg">
  <div class="parrafosInterior fondo-limon">
    <p>Todos los menues son diseñados para potenciar esta experiencia turística con preparaciones que rescatan la escencia de la gastronomía atacameña. La cocina del Desierto de Atacama sorprende por su inimaginable riqueza. Gracias al mar siempre hemos tenido abundancia, lo que se contrapone casi irónicamente con el directo significado de la palabra desierto.</p>
    <h4>Tenemos suerte de contar casi durante todo el año con locos, lapas, dorados, pescados de roca, jaibas, camarones de roca, albacoras, bacalos, palometas, ostras, pulpos, atunes, sierras, etc; tan frescos, gordos y de colores brillantes, como sólo acá se encuentran. </h4>
    <h4>Así, resulta casi indiscutible que el mejor acompañamiento para un ostión o erizo recien sacados del agua es , si es que,<br>
      <strong>un chorro de limón ¡y listo!</strong><br>
      No necesitan más, por eso, la simpleza es y siempre ha sido su mejor acompañamiento.</h4>
    <p>Con este fundamento nuestra chef los invita a un viaje de paisajes y sabores, rescatando la materia prima como protagonista y acompañándola de delicados toques de sofisticación., por eso, la simpleza es y siempre ha sido su mejor acompañamiento.</p>
    <p>Con este fundamento nuestra chef los invita a un viaje de paisajes y sabores, rescatando la materia prima como protagonista y acompañándola de delicados toques de sofisticación.</p>
    <p>&nbsp;</p>
  </div>
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>