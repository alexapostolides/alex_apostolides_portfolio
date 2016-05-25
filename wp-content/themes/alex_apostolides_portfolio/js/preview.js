jQuery(document).ready(function ($) {



/*
______________________________________________________________

Sets Class to Menu Item
______________________________________________________________

*/

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




});