jQuery(document).ready(function ($) {

/* Fades in 3D logo and entry content */
$(window).load(function() {

$("logo").delay('1300').fadeIn('slow');
$("#content").delay('800').fadeIn('slow');
$("video").prop("volume", 0.1);
$('.wp-video-shortcode').removeAttr('controls');
});




$(document).ready(function () {


/*
------------------------------------------------------------------------------------------------------
MOBILE - Portait
------------------------------------------------------------------------------------------------------
*/


            $("#mobileWork").click(function(){

                // Slides when clicked
                $("#slideoutleft").css("left", "-30px");

                // Adds class to Nav links
                $(".menu-item a").addClass('mobileProject');


                // Exit out of Mobile Nav
                $("#mobileXproject").click(function(){
                    $("#slideoutleft").css("left", "-783px");
                    $('#logoHomeButton').css("top", "-4em");
                });

                // Exit out of Mobile Nav when you click a project
                $(".mobileProject").click(function(){
                    $("#slideoutleft").css("left", "-183px");
                    $("#mobileContactOverlay").fadeOut('fast');
                    $("#mobileLogo, #previewOverlay").hide();
                    $("#close").css("top","-2em");
                });

            });



// REMOVES STYLING ON LEFT SLIDER WHEN PAGE RESIZES

            $(window).resize(function(){

                var windowsize = $(window).width();

                if (windowsize > 750 && $("#slideoutleft").css('left')=='-783px') {

                    $("#slideoutleft").css( 'left', '' );
                }

                if (windowsize > 750 && $("#slideoutleft").css('left')=='-30px') {

                    $("#slideoutleft").css( 'left', '' );
                }

                if (windowsize > 750 && $("#slideoutleft").css('display')=='block') {

                    $("#mobileContactOverlay").css( 'display', 'none' );
                }


            });


// EMAIL OVERLAY IN MOBILE & SMALL WINDOW

            $("#mobileEmail").click(function(){
                    $("#mobileContactOverlay").fadeIn('fast');
                    $("#slideoutleft").css("left", "-783px");
                    $("#mobileXemail").click(function(){
                        $("#mobileContactOverlay").fadeOut('fast');
                    });
            });

/*
------------------------------------------------------------------------------------------------------
END MOBILE
------------------------------------------------------------------------------------------------------
*/



        });
});

