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

function initialiseTop() {
    topHome = $("#home").offset().top;
    topAbout = $("#about").offset().top;
    topContacts = $("#contacts").offset().top;
}

$(document).ready(function() {

    initialiseTop();
    socialFlag = 0;

    $('.carousel').carousel({
        interval: 3000
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
        // prevScrollLocation = $(this).scrollTop();

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
