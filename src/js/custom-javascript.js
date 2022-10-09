jQuery(function($){

/////////////////  PUSH DOWN FOOTER  \\\\\\\\\\\\\\\\\
$(document).ready(function() {
	$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');
});

//Close the mobile nav on link to a page
$('.dropdown-menu a').on('click', function() {
	$('#modalNav').modal('hide');
});

//end of file
});