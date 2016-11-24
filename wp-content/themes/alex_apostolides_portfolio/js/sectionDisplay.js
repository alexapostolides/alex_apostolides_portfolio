jQuery(document).ready(function ($) {


// If mobile device, the preview will not load. This makes it so it will not load a buntch of featured images on the mobile device.

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 $("#sectionDisplay").remove();
}

// Takes every class names '.section' and stores the object in an array.
var sectionArray = [];

$('.section').each (function (i,e) {
   sectionArray.push($(this));
});



// When you mouse enters the section of the array, it will display it unique ID on the top of the header.
$(sectionArray[0]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[0].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
});

$(sectionArray[1]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[1].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
});

$(sectionArray[2]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[2].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
});

$(sectionArray[3]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[3].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
});

$(sectionArray[4]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[4].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
});

$(sectionArray[5]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[5].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
});

$(sectionArray[6]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[6].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
});

$(sectionArray[7]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[7].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
});

$(sectionArray[8]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[8].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
})

$(sectionArray[9]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[9].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
})

$(sectionArray[10]).mouseenter(function(){
$('#sectionDisplay').text(sectionArray[10].attr('id'));
   $("#topborder").css({"z-index":"99999999999999"});

$(this).mouseleave( function(){
	$('#sectionDisplay').text('');
	$('#topborder').css({"z-index": "99999999"})
});
});



//END
});
