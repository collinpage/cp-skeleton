$ = jQuery.noConflict();

$(document).ready(function(){

	$('.mobile_button').click(function(){
		$('.container-menu-lang').slideToggle({
			direction: 'left'
		}, 10000);
	});

});