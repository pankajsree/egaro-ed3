var socialFlag;

var deviceWidth = screen.width;

$(document).ready(function() {

    if(deviceWidth < 576) {
        $("#call-one").attr("href", "tel:+91-381-2383512");
        $("#call-two").attr("href", "tel:+91-9774593537");
        $("#call-three").attr("href", "tel:+91-9774190450");
    }
    else {
        $("#call-one").attr("href", "callto:+91-381-2383512");
        $("#call-two").attr("href", "callto:+91-9774593537");
        $("#call-three").attr("href", "callto:+91-9774190450");
    }

    socialFlag = 0;

    var drop1Flag = 0;
    var subDropFlag = 0;

    $(".mobile-menu-drop").click(function() {
        $(".mobile-sub-menu-drop-items").hide();
        if(!($(this).siblings(".mobile-drop1").is(':hidden'))) {
            drop1Flag = 1;
        }
        $(".mobile-drop1").hide();
        if(drop1Flag != 1) {
            $(this).siblings(".mobile-drop1").show();
        }
        drop1Flag = 0;
    });

    $(".mobile-sub-menu-drop").click(function() {
        if(!($(this).siblings(".mobile-sub-menu-drop-items").is(':hidden'))) {
            subDropFlag = 1;
        }
        $(".mobile-sub-menu-drop-items").hide();
        if(subDropFlag != 1) {
            $(this).siblings(".mobile-sub-menu-drop-items").show();
        }
        subDropFlag = 0;
    });

    $(".final-tab").click(function() {
        $(".mobile-sub-menu-drop-items").hide();
        $(".mobile-drop1").hide();
        $("#menu-expand").hide(300);
    });

    $(window).resize(function() {
        if($( document ).width() > 767) {
            if(!($('#hamburger-container').is(':hidden'))) {
                $("#one").css({
                    "transform": "rotate(0)",
                    "top": "0"
                });
                $("#two").show();
                $("#three").css({
                    "transform": "rotate(0)",
                    "top": "0.6rem"
                });
                $('#menu-expand').hide();
                $("#hamburger-container").hide();
                if($(window).scrollTop() < 80) {
                    header.removeClass("header-bg-black");
                }
            }
        }
        else {
            $("#hamburger-container").show();
        }
    });

    $("#hamburger-container").click(function() {

        $('#menu-expand').toggle();

        if($('#menu-expand').is(':hidden')) {
            $("#one").css({
                "transform": "rotate(0)",
                "top": "0"
            });
            $("#two").show();
            $("#three").css({
                "transform": "rotate(0)",
                "top": "0.6rem"
            });
        }
        else {
            $("#one").css({
                "transform": "rotate(45deg)",
                "top": "0.4rem"
            });
            $("#two").hide();
            $("#three").css({
                "transform": "rotate(-45deg)",
                "top": "0.4rem"
            });
        }
    });

    $("#cross").click(function() {
        $("#cross, #soc-bar").hide();
        $("#toggle-soc-bar").show();
        socialFlag = 1;
    });

    $("#toggle-soc-bar").click(function() {
        $("#toggle-soc-bar").hide();
        $("#cross, #soc-bar").show();
    });

    if( $(window).scrollTop() > 1000 ) {
        $("#scroll-up").show();
    }

    $(window).scroll(function() {
        if( $(window).scrollTop() > 1000 ) {
            $("#scroll-up").show();
        }
        else {
            $("#scroll-up").hide();
        }
    });

    if($("#img-first").complete) {
        var width = $("#img-first").width() * 0.5625;
        $(".gallery img").css("height", width + "px");
    }

    $(window).resize(function() {
        var width = $("#img-first").width() * 0.5625;
        $(".gallery img").css("height", width + "px");
    });
});
