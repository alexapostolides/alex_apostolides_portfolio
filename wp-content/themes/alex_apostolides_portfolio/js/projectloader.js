jQuery(document).ready(function ($) {


$(window).load(function() {

$("logo").delay('1300').fadeIn('slow');

});

$(window).load(function() {

   var is_mobile = false;

    if( $('#mobileLogo').css('display')=='inline-block') {
        is_mobile = true;       
    }

    if (is_mobile == true) {
        $("logo").remove();
        return true;
    }


});





$(document).ready(function () {


            $('.menu-item a').on('click', function (e) {
                $("logo, name, #mobile").fadeOut('fast');
                e.preventDefault();
                var page = $(this).attr('href');
               	$("#close").delay('500').fadeIn('slow');
            });

            $("#close").click(function(){
                $("#close").fadeOut('fast');
                $("logo").delay('1400').fadeIn('slow');
            });
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

