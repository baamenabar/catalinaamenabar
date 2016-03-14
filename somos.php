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

<title>Somos - Catalina Amenabar - Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal">
  <header class="fondoPrincipal-somos">
    <?php require("inc/navegacion.php"); ?>
    <div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
    <div class="titulo interior">
      <h1>Somos</h1>
      <hr class="punteada">
      <h4>Somos una empresa familiar y nos dedicamos a esto porque nos apasiona!... gozamos de la buena mesa y de las cosas bien hechas.</h4>
    </div>
  </header>
  <div class="parrafosInterior">
  <article>
      <div>
        <h2>Yo, Catalina Amenábar</h2>
        <p>Aunque  santiaguina, mi inspiración  está  en el  sur y en el campo, el fundo en el Lago Ranco, mi abuela y sus recetas, el horno a leña, la leche de vaca, las frambuesas, los huevos con sabor a huevo y el pan amasado.<strong> La nostalgia de esas mesas familiares repletas de cosas irresistibles es lo que me hace cocinar y seguir cocinando. </strong></p>
        <p> Las manzanas de blanca nieves, las rosas mosqueta que nunca alcanzaba a cosechar porque llegaba marzo y tenía que volver a clases, el cilantro recién cortado, las zanahorias con gusto a tierra fértil, las arvejitas con sabor a alcachofa, las cerezas, la  mermelada de guinda y el prohibido guindao, los digueñes que nunca me quedaron ricos, las moras, la miel hulmo, la nata de leche recién sacada, los quesos frescos y los yogures de la yogurtera con mermeladas caseras. Hasta las criadillas y el ñachi son las vivencias que hoy llenan mis preparaciones. </p>
      </div>
      <aside>
        <figure><img src="imgs/content/somos-catalina-jaivas.jpg" width="350" height="448"></figure>
      </aside>
    </article>
    <hr class="punteada">
    <p>&nbsp;</p>
   <!-- <article>
      <div>
        <h2>Gonzalo Martínez </h2>
        <p>Del norte, conocedor del desierto y sus playas, de los vientos, las marejadas y el tiempo, de, arqueología y paleontología; desde las dunas , hasta las cumbres más altas… el volcán Ojos del Salado y sus lagunas.</p>

<p><strong>Amante de la pesca y los deportes náuticos, siempre ligado al mar y a su abundancia:</strong> lenguados, pescados de roca, albacoras, atunes, dorados, ostiones, locos, pulpos, jaibas, erizos! etc y etc…</p>

<p>El fruto de esto, sumado al legado de su mamá, heredera de la tradición pastelera francesa, es que hoy Gonzalo y sus hermanos, sean los críticos más exigentes de mi trabajo.</p>
      </div>
      <aside>
        <figure><img src="imgs/content/gonzalo-martinez-noti.jpg" width="350" height="449"></figure>
      </aside>
    </article>
   
  <p>&nbsp;</p>
    <article>
      <div>
        <h2>Eugenio Amenábar</h2>
        <p>Que aún siendo abogado… creyó en nuestro proyecto y hoy es nuestro socio; <strong>contribuye con su siempre sabio consejo, su paladar crítico y el peso de la experiencia.</strong> Por eso, como de una receta, con un poco de norte, otro poco de sur y un buen poco de Capital, nace esta empresa, cuyos ingredientes son el  amor por el servicio, el buen comer y la vida al aire libre. </p>
      </div>
      <aside>
        <figure><img src="imgs/content/eugenio-amenabar.jpg" width="350" height="450"></figure>
      </aside>
    </article>-->
  </div>
   <hr class="punteada" style="clear:both;">
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>
