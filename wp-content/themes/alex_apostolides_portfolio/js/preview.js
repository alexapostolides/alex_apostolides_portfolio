jQuery(document).ready(function ($) {



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


	$(".page-item-2 a").hover(function() {
  		$("#preview_1").toggle();
	});

	$(".page-item-1791 a").hover(function() {
  		$("#preview_2").toggle();
	});

	$(".page-item-1777 a").hover(function() {
  		$("#preview_3").toggle();
	});
}


});