//
// ------------- ARREGLA FLEXIE ---------------
function armaMenu(){
	$('header nav ul li>ul').addClass('wjq');
	$('header nav ul li>ul').hide();
	$('header nav ul li').hover(function() {
    	$(this).children('ul').slideDown(400);
	},
	function() {
    	$(this).children('ul').slideUp(700);
  });
}
$(document).ready(function() {
   armaMenu();
});