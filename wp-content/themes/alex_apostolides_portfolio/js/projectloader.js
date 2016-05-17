jQuery(document).ready(function ($) {


$(window).load(function() {

   var pathname = window.location.pathname;


$("logo").delay('1300').fadeIn('slow');

    if (pathname.indexOf("projects") > -1) {
        $("logo").remove();
        return true;
    }
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
MOBILE
*/
            $("#mobileWork").click(function(){
                $("#slideoutleft").css("left", "460px");
                $(".menu-item a").addClass('mobileProject');
                $("#mobileXproject").click(function(){
                    $("#slideoutleft").css("left", "19px");
                });
                $(".mobileProject").click(function(){
                    $("#slideoutleft").css("left", "19px");
                    $("#mobileContactOverlay").fadeOut('fast');
                    $("#mobileLogo, #previewOverlay").hide();
                    $("#close").css("top","-2em");
                });
            });

            $("#mobileEmail").click(function(){
                    $("#mobileContactOverlay").fadeIn('fast');
                    $("#slideoutleft").css("left", "19px");
                    $("#mobileXemail").click(function(){
                        $("#mobileContactOverlay").fadeOut('fast');
                    });
            });

        });
});

