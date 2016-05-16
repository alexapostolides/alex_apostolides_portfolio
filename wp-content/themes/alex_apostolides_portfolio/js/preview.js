jQuery(document).ready(function ($) {



/*
______________________________________________________________

Sets Class to Menu Item
______________________________________________________________

*/

	$(".menu-item a").addClass("preview");

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


	$("#menu-item-44 a").hover(function() {
  		$("#preview_1").toggle();
	});

	$("#menu-item-83 a").hover(function() {
  		$("#preview_2").toggle();
	});

	$("#preview_three").hover(function() {
  		$("#preview_3").toggle();
	});

	$("#preview_four").hover(function() {
  		$("#preview_4").toggle();
	});

	$("#preview_five").hover(function() {
  		$("#preview_5").toggle();
	});

	$("#preview_six").hover(function() {
  		$("#preview_6").toggle();
	});

	$("#preview_seven").hover(function() {
  		$("#preview_7").toggle();
	});

	$("#preview_eight").hover(function() {
  		$("#preview_8").toggle();
	});

});