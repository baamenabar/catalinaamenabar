// JavaScript Document
var lang='es';
function validaMail(dire){
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	if (dire.search(emailRegEx) == -1)return false;
	return true;
}
function alerte(quien,texto){
	if(quien.parentNode.className.indexOf('error')==-1)quien.parentNode.className+=' error';
	if(document.getElementById(quien.name+'ErrMsg'))return;
	var parr;
	if(quien.parentNode.nextSibling){
		parr = quien.parentNode.parentNode.insertBefore(document.createElement('li'), quien.parentNode.nextSibling);
	}else{
		parr = quien.parentNode.parentNode.appendChild(document.createElement('li'));
	}
	parr.innerHTML='<p>'+texto+'</p>';//appendChild(document.createTextNode(texto));
	parr.className='error';
	parr.id=quien.name+'ErrMsg';
	$('#'+parr.id).hide();
	$('#'+parr.id).slideDown(400);
}
function limpiaAlerte(quien){
	var laio = quien.parentNode.className.lastIndexOf('error');
	if(laio!=-1)quien.parentNode.className=quien.parentNode.className.substring(0,laio);
	if(document.getElementById(quien.name+'ErrMsg')){
		$('#'+quien.name+'ErrMsg').remove();
	}
}
function revisaLargo(donde,largo,mensaje){
	if(largo=='mail'){
		if(!validaMail(donde.value)){
			alerte(donde,mensaje);
			return false;
		}else{
			limpiaAlerte(donde);
			return true;
		}
	}
	if(donde.value.length<largo){
		alerte(donde,mensaje);
		return false;
	}else{
		limpiaAlerte(donde);
		return true;
	}
}

function revisaDatosPersonales(donde){
	var took=true;
	var nombreCampo=donde.name;
	var mensaj='';
	switch(nombreCampo){
		case 'nombreCompleto':
		mensaj = 'Please suply your name.';
		if(lang=='es')mensaj = 'Por favor indique su nombre.';
		took = revisaLargo(donde,3,mensaj);
		break;
		case 'emilio':
		mensaj = 'To contact you with an answer, we require your email  address.';
		if(lang=='es')mensaj = 'Por favor, para poder contactarlo de vuelta, indique su e-mail.';
		took = revisaLargo(donde,'mail',mensaj);
		
		break;
	}
	return took;
}

var arrDireccion = new Array('nombreCompleto','emilio');

function revisaFormContacto(){
	var took=true;
	for(var i=0; i<arrDireccion.length; i++)if(!revisaDatosPersonales(document.getElementById(arrDireccion[i])))took= false;
	return took;
}

function enCambiaMotivo(){
	elMotivo = $('select[name=motivo]').val();
	switch(elMotivo){
		case 'cotizacion':
		direcc.slideDown(400);
		invita.slideDown(400);
		espacio.slideDown(400);
		break;
		case 'pedido':
		direcc.slideUp(400);
		invita.slideUp(400);
		espacio.slideUp(400);
		break;
	}
}
var direcc;
var invita;
var espacio;
$(document).ready(function(){
	direcc=$('#direccion').parent('li');
	invita=$('#invitados').parent('li');
	espacio=$('#adicionalesFinal');
	if(elMotivo=='pedido'){
		direcc.hide();
		invita.hide();
		espacio.hide();
	}
	$('select[name=motivo]').change(enCambiaMotivo);
});