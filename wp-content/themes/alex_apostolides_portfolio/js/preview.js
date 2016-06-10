jQuery(document).ready(function ($) {



$(window).load(function(){
    $('video').load('html');
});


// If mobile device, the preview will not load. This makes it so it will not load a buntch of featured images on the mobile device.

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 $("#previewOverlay, logo").remove();
}


// If the window loaded has a size of 600 or more, it will fire the preview function.
$(window).load(function(){
	var windowsize = $(window).width();
	if (windowsize > 750) {
		preview();
	}
});


// If the window is resized to a size greater then 600, it will fire the preview function.
$(window).resize(function(){
	var windowsize = $(window).width();
	if (windowsize > 750) {
		preview();
	}
});






/*
______________________________________________________________

Sets Class to Menu Item
______________________________________________________________

*/

function preview () {
	$(".page_item a").addClass("preview");


	$(".preview").mouseenter(function() {
		$("#previewOverlay").show()
	});

	$(".preview").mouseleave(function() {
		$("#previewOverlay").hide()
	});

/*
______________________________________________________________

Toggles Specific Menu Item on Hover
______________________________________________________________

*/


	$(".page_item:nth-child(2) a").hover(function() {
  		$("#preview_1").toggle();
	});

	$(".page_item:nth-child(3) a").hover(function() {
  		$("#preview_2").toggle();
	});

	$(".page_item:nth-child(4) a").hover(function() {
  		$("#preview_3").toggle();
	});

	$(".page_item:nth-child(5) a").hover(function() {
  		$("#preview_4").toggle();
	});
	$(".page_item:nth-child(6) a").hover(function() {
  		$("#preview_5").toggle();
	});
	$(".page_item:nth-child(7) a").hover(function() {
  		$("#preview_6").toggle();
	});
	$(".page_item:nth-child(8) a").hover(function() {
  		$("#preview_7").toggle();
	});
	$(".page_item:nth-child(9) a").hover(function() {
  		$("#preview_8").toggle();
	});
	$(".page_item:nth-child(10) a").hover(function() {
  		$("#preview_9").toggle();
	});



}


});