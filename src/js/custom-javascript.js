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

//Entire div clickable
$('.page-bucket').on('click', function(e){
  e.preventDefault();
  window.location.href=$(this).data('link');
});

//Close the mobile nav on link to a page
$('.dropdown-menu a').on('click', function() {
	$('#modalNav').modal('hide');
});

if ( $(window).width() >= 992 ) {
    
    //Set the padding within edge to edge design to simulate an inner container
    var offset = $('#content .container').offset();
    $('.offset-left').css('padding-left', ( Math.ceil(offset.left) + 15 ) + 'px');
    $('.offset-right').css('padding-right', ( Math.ceil(offset.left) + 15 ) + 'px');

  	//Force the image to be the width of column plus the gutter
  	if ($('#trainingProgram')[0]) {
  		var widthOne = $('#sectionOne .left').outerWidth();
	    $('#sectionOne .left .outer-wrapper').css('width', (Math.ceil(offset.left) - 15 + widthOne ) + 'px');
	  }
    if ($('#about')[0]) {
      var widthTwo = $('#sectionOne .right').outerWidth();
      $('#sectionOne .right img').css('width', (Math.ceil(offset.left) - 15 + widthTwo ) + 'px');
    }
    if ($('#homepage')[0]) {
      var widthThree = $('#sectionThree .col-lg-6').outerWidth();
      $('#sectionThree .left .image-holder').css('width', (Math.ceil(offset.left) - 15 + widthThree ) + 'px');
    }
    if ($('#faq')[0]) {
      var widthFour = $('#sectionOne .right').outerWidth();
      $('#sectionThree .right img').css('width', (Math.ceil(offset.left) - 15 + widthFour ) + 'px');
    }
    if ($('#singleGuidedHunt')[0]) {
      var widthFive = $('#sectionOne .left').outerWidth();
      $('#sectionOne .left .inner-wrapper').css('width', (Math.ceil(offset.left) - 15 + widthFive ) + 'px');
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