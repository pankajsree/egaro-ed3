var topHome;
var topAbout;
var topContacts;

var prevScrollLocation;

var carousel;
var carouselCount;
var dots;
var currentSlide;
var dot;
var tempSlide;

var socialFlag;

var timer;
var interval;

var deviceWidth = screen.width;

function initialiseTop() {
    topHome = $("#home").offset().top;
    topAbout = $("#about").offset().top;
    topContacts = $("#contacts").offset().top;
}

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

    initialiseTop();
    socialFlag = 0;

    $('.carousel').carousel({
        interval: 3000
    });

    var drop1Flag = 0;
    var subDropFlag = 0;

    $(".mobile-menu-drop").click(function() {
        if(!($(this).siblings(".mobile-drop1").is(':hidden'))) {
            drop1Flag = 1;
        }
        $(".mobile-drop1").hide();
        if(drop1Flag != 1) {
            $(this).siblings(".mobile-drop1").show();
        }
        drop1Flag = 0;
    });

    $(".final-tab").click(function() {
        $(".mobile-drop1").hide();
        $("#menu-expand").hide();

        $("#one").css({
            "transform": "rotate(0)",
            "top": "0"
        });
        $("#two").show();
        $("#three").css({
            "transform": "rotate(0)",
            "top": "0.6rem"
        });
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
        if($(window).scrollTop() < 80 && !$('#menu-expand').is(':hidden')) {
            header.addClass("header-bg-black");
        }
        else if($(window).scrollTop() < 80 && $('#menu-expand').is(':hidden')) {
            header.removeClass("header-bg-black");
        }

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

    var header = $("#header");

    $("#cross").click(function() {
        $("#cross, #soc-bar").hide();
        $("#toggle-soc-bar").show();
        socialFlag = 1;
    });

    $("#toggle-soc-bar").click(function() {
        $("#toggle-soc-bar").hide();
        $("#cross, #soc-bar").show();
    });

    $(window).resize(function() {

        initialiseTop();

    });

    var underlineTabs = $(".tab-hover");

    if( $(window).scrollTop() > 80 ) {
        header.addClass("header-bg-black");
    }
    if( $(window).scrollTop() > topAbout ) {
        $("#scroll-up").show();
        if(socialFlag == 0) {
            $("#cross, #soc-bar").show();
        }
        else {
            $("#toggle-soc-bar").show();
        }
    }

    $(window).scroll(function() {
        if( $(window).scrollTop() > 80 ) {
            header.addClass("header-bg-black");
        }
        else {
            header.removeClass("header-bg-black");
        }
        if( $(window).scrollTop() > topAbout ) {
            $("#scroll-up").show();
            if(socialFlag == 0) {
                $("#cross, #soc-bar").show();
            }
            else {
                $("#toggle-soc-bar").show();
            }
        }
        else {
            $("#scroll-up").hide();
            $("#cross, #soc-bar, #toggle-soc-bar").hide();
        }
    });
});
