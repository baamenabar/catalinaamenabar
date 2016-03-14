<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cach");

function validaEmail($email) {
  if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
    return false;
  }
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if
(!@ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
$local_array[$i])) {
      return false;
    }
  }
  if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) {
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if
(!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/",
$domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}
function revisaEImprime($llave){
	if($_POST[$llave]){
		echo $_POST[$llave];
	}
}
function enviaMail(){
	if($_SERVER["HTTP_HOST"]!='localhost'){
			$to = 'cata@catalinaamenabar.cl';
			$subject = 'Contacto Formulario Web';
			$men_correo='<h1>Pedido de Pasteler&iacute;a.</h1>';
			if($_POST['motivo']=='cotizacion')$men_correo='<h1>Solicitud de Cotizaci&oacute;n.</h1>';
			$men_correo.= '<p>Se ha recibido un mensaje desde el formulario de contacto del a pagina web catalinaamenabar.cl:</p>
			<h2>Datos entregados</h2>
			<p>Nombre:  '.$_POST['nombreCompleto'].'<br />
			Tel&eacute;fono:  '.$_POST['telefono'].'<br />
			Fecha de Entrega:  '.$_POST['fechaEntrega'].'<br />
			Hora Aprox. de Entrega:  '.$_POST['horaEntrega'].'<br />
			Lugar:  '.$_POST['direccion'].'<br />
			Cantidad de Invitados:  '.$_POST['invitados'].'<br />
			Email:  '.$_POST['emilio'].'</p>
			<h2>Mensaje</h2>
			<p>'.nl2br($_POST['pedido']).'</p>
			';
			$men_correo.='<p>&nbsp;</p><p>Formulario de Contacto</p><p>Catalina Amenabar, Caldera Chile</p><p>Alcalde Aravena 007 <br>
Mirador de Charito <br>
Caldera<br>
			Tel&eacute;fono: +56 52 317872</p>';
			$additionalHeaders = "From: Contacto Formulario Web <medula@catalinaamenabar.cl>\n";
			$additionalHeaders .= 'MIME-Version: 1.0' . "\n";
			$additionalHeaders .= 'Content-type: text/html; charset=utf-8' . "\n";
			$additionalHeaders .= "Reply-to: ".$_POST['emilio']." \n";
			$resMail = @mail($to,$subject,$men_correo,$additionalHeaders);
			if($resMail){
				$mensaje ='ok';
			}else{
				$mensaje ='no_mail';
			}
		}else{
				$mensaje ='no_mail';
		}
		return $mensaje;
}

if($_POST['motivo']){
	$errores=array();
	//if(isset($errores))echo 'errores es evaluado como true!';
	
	if(!validaEmail($_POST['emilio'])){
		$errores['emilio']=true;
	}
	if(strlen($_POST['nombreCompleto'])<3){
		$errores['nombreCompleto']=true;
	}
	if(count($errores)==0){
		$respu=enviaMail();
		if($respu=='ok'){
			
		}else{
			$errores['problema']=true;
		}
	}
}

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
<script type="text/javascript" src="js/form-contacto.js"></script>
<script type="text/javascript">
var elMotivo = 'pedido';
<?php if($_POST['motivo'] && $_POST['motivo']!='pedido'){ ?>elMotivo=<?php echo '"'.$_POST['motivo'].'";'; } ?>
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

$(document).ready(function(){
	var _GET=getUrlVars();
	if(_GET['p']){
		$('textarea[name=pedido]').val(unescape(_GET['p'])+'\ncantidad:');
	}
});
</script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" type="text/css" href="css/ie8.css">
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie7.css">
<![endif]-->
<script type="text/javascript" src="js/lib/selectivizr.js"></script>
<?php require_once("inc/analytics.php"); ?>

<title>Contacto - Catalina Amenabar - Culinaria, Banquetería, Pastelería, Catering</title>
<link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<div class="contenedorGlobal fondoGlobal-contacto">
	<header class="fondoPrincipal-interiores">
		<?php require("inc/navegacion.php"); ?>
		<div class="logoCA"><a href="./"><img src="imgs/layout/logo_catalina_amenabar.png"></a></div>
		<div class="titulo interior">
			<?php if(isset($errores) && count($errores)==0){ ?><h1>Gracias !</h1><?php }else{ ?><h1>Contacto</h1><?php } ?>
			<hr class="punteada">
		</div>
	</header>
	<div class="cuerpoInterior dosColumnas">
		<div class="formulario">
<?php if(isset($errores) && count($errores)==0){ ?>

	<h2>Nos contactaremos contigo a la brevedad.</h2>

<?php }else{ ?>

			<form name="contacto" id="contact_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onSubmit="return revisaFormContacto()" novalidate>
			<?php if($errores['problema']){ ?>
	<p class="error"><strong>ERROR:</strong><br>Ha ocurrido un problema al tratar de enviar su mensaje, por favor inténtelo más tarde o escríbanos directamente a cata@catalinaamenabar.cl, o llámenos al (52) 317872</p><p>&nbsp;</p>
<?php } ?>
				<ul>
				
					<li class="selectMotivo">
						<select name="motivo">
							<option value="pedido"<?php if($_POST['motivo']=='pedido')echo ' selected'; ?>>Hacer Pedido Pastelería</option>
							<option value="cotizacion"<?php if($_POST['motivo']=='cotizacion')echo ' selected'; ?>>Cotizacion Evento</option>
							<!-- hay que agrgarle lugar e invitados -->
						</select>
					</li>
<?php if($errores['nombreCompleto']){ ?>
<li class="error">
<p>Por favor indique su nombre.</p>
</li>
<?php } ?>
					<li<?php if($errores['nombreCompleto'])echo ' class="error"'; ?>>
						<label for="nombreCompleto">Nombre Completo</label>
						<input size="40" name="nombreCompleto" id="nombreCompleto" type="text" value="<?php revisaEImprime('nombreCompleto'); ?>">
					</li>
					<li>
						<label for="telefono">Teléfono</label>
						<input size="40" name="telefono" id="telefono" type="tel" value="<?php revisaEImprime('telefono'); ?>">
					</li>
					<li>
						<label for="fechaEntrega">Fecha de Entrega</label>
						<input size="40" name="fechaEntrega" id="fechaEntrega" type="text" value="<?php revisaEImprime('fechaEntrega'); ?>">
					</li>
					<li>
						<label for="horaEntrega">Hora Aprox. de entrega</label>
						<input size="40" name="horaEntrega" id="horaEntrega" type="text" value="<?php revisaEImprime('horaEntrega'); ?>">
					</li>
					<li>
						<label for="direccion">Lugar</label>
						<input size="40" name="direccion" id="direccion" type="text" placeholder="Dirección" value="<?php revisaEImprime('direccion'); ?>">
					</li>
					<li>
						<label for="invitados">Cantidad de Invitados</label>
						<input size="40" name="invitados" id="invitados" type="number" value="<?php revisaEImprime('invitados'); ?>">
					</li>
<?php if($errores['emilio']){ ?>
<li class="error">
<p>Por favor, para poder contactarlo de vuelta, indique su e-mail.</p>
</li>
<?php } ?>
					<li<?php if($errores['emilio'])echo ' class="error"'; ?>>
						<label for="emilio">Email</label>
						<input size="40" name="emilio" id="emilio" type="email" value="<?php revisaEImprime('emilio'); ?>">
					</li>
					<li>
						<label for="pedido">Pedido</label>
						<textarea id="pedido" name="pedido" rows="9" cols="31"><?php revisaEImprime('pedido'); ?></textarea>
					</li>
					<li>
						<button type="submit">Enviar</button>
					</li>
				</ul>
				<p>&nbsp;</p>
			</form><?php } ?>
		</div>
		<div class="contactoInfo">
			<ul>
				<li>
					<h3>Los Pedidos</h3>
					<p>Deben realizarse con 48 hrs de anticipación y para pedidos de último minuto, consultar por stock disponible.</p>
				</li>
				<li>
					<h3>Formas de pago</h3>
					<p>Efectivo</p>
					<p>Transferencia bancaria</p>
					<p>Cheque</p>
				</li>
				<!--<li>
					<div class="datoRelevante">
						<h2>Sala de ventas</h2>
						<p><strong>Caldera</strong></p>
						<p>Alcalde Aravena 007 <br>
							Mirador de Charito</p>
							<hr>
						<p><strong>Bahía Inglesa</strong></p>
						<p>Av. El Morro 610</p>
					</div>
				</li>
				<li>
					<div class="datoRelevante">
						<h2><a href="http://goo.gl/maps/xaBA" target="_blank">Donde comprar</a></h2>
						<div class="splash"><img src="imgs/content/contacto-aviso-ver-mapa.png" width="64" height="61"></div>
					</div>
				</li>
				<li>
					<div class="datoRelevante telefono">
						<h2>tel: (52) 317872</h2>
					</div>
				</li>-->
			</ul>
		</div>
		
	</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<div id="adicionalesFinal">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	</div>
	<hr class="punteada">
	<p>&nbsp;</p>
</div>
<?php require_once("inc/piedepagina.php"); ?>
</body>
</html>
