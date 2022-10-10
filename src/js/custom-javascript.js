jQuery(function($){

//Push down the footer on short pages
$(document).ready(function() {
	$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');
});

//Move the absolutely positioned hero content down based on the size of the fixed header
var headerHeight = $('#wrapper-navbar').height();
$('.hero .content-wrapper').css('margin-top', (headerHeight/2) + 'px');

//Smooth scroll behavior for jump links
$(".scroll-down").on('click', function(event) {
  var hash = this.hash;
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 500);
    return false;
});

//Dropdown hover on desktop
if ($(window).width() >= 992) {
    $('#main-menu > li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').first().toggleClass('show');
	});
}

//Entire div clickable
$('.product-link').on('click', function(e){
  e.preventDefault();
  window.location.href=$(this).data('link');
});

//Close the mobile nav on link to a page
$('.dropdown-menu a').on('click', function() {
	$('#modalNav').modal('hide');
});

if ( $(window).width() >= 992 ) {
    
    //Set the padding within edge to edge design to simulate an inner container
    var offset = $('#page .container').offset();
    $('.offset-left').css('padding-left', ( Math.ceil(offset.left) + 15 ) + 'px');
    $('.offset-right').css('padding-right', ( Math.ceil(offset.left) + 15 ) + 'px');

    //Get the height of the image within an absolutely positioned div to force the height of the section
  	var imageOneHeight = $('#otherSpecialties #sectionTwo .image-wrapper img').height();
  	$('#otherSpecialties #sectionTwo').css('height', Math.ceil(imageOneHeight) + 'px');
  	$('#otherSpecialties #sectionTwo .image-wrapper').css('position', 'absolute')

  	//Force the image to be the width of column plus the gutter
  	if ($('#trainingProgram')[0]) {
  		var imageWidth = $('#sectionOne .left').outerWidth();
	    $('#sectionOne .left .outer-wrapper').css('width', (Math.ceil(offset.left) - 15 + imageWidth ) + 'px');
	  }

}

//Add a container to containerless sections on mobile
if ($(window).width() < 992) {
	$('#lifeStagesLandingPage #hero .content-wrapper').wrap('<div class = "container"><div class = "row"></div></div>');
	$('#lifeStagesLandingPage #hero .video-holder').wrap('<div class = "container"><div class = "row"></div></div>');
	$('#lifeStagesLandingPage #sectionOne .content-wrapper').wrap('<div class = "container"><div class = "row"></div></div>');
}

//end of file
});