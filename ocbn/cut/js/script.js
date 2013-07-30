/* Author: Valerie
Drop-down menu effects*/

$(document).ready(function () {	
	$('#topNav li ul').hide();
	$('#topNav li').hover(
		function () {
			//show its submenu
			$('ul', this).stop(true, true).slideDown('slow');
			$('#topNav li ul', this).show();

		}, 
		function () {
			//hide its submenu
			$('ul', this).stop(true, true).slideUp('slow');		
			$('#topNav li ul', this).hide();
		}
	);
	
});
/*IE 8 and lower will not use mediaq.*/
if (Modernizr.mq("screen and (min-width:1024px)")){
	$(function(){
		$(".flash").show();
	});
}
else{
	$(function(){
		$(".flash").hide();
		$(".mobile.iTunes").show();
	});
}


















