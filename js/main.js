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

function plusSlides(ctrl, clrInterval) {
    $(carousel[currentSlide]).hide();
    dot[currentSlide].classList.remove("dot-active");
    if(clrInterval == 1) {
        clearInterval(interval);
        timer();
    }
    if(ctrl == 0) {
        currentSlide = tempSlide;
    }
    else if(ctrl == -1 && currentSlide == 0) {
        currentSlide = carouselCount - 1;
    }
    else if(ctrl == 1 && currentSlide == carouselCount - 1) {
        currentSlide = 0;
    }
    else {
        currentSlide += ctrl;
    }
    $(carousel[currentSlide]).fadeIn("slow");
    dot[currentSlide].classList.add("dot-active");
}

timer = function() {
    interval = setInterval(function() {
        plusSlides(1, 0);
    }, 3000);
}

$(document).ready(function() {

    initialiseTop();
    socialFlag = 0;
    // prevScrollLocation = 0;











    carousel = document.getElementsByClassName("slides");
    carouselCount = carousel.length;
    dots = document.getElementById('dots');

    var header = $("#header");
    var headerElem = $(".header-elem");
    var register = $(".register");

    for( var i = 0; i < carouselCount; i ++ ) {
        dots.innerHTML += "<span class='dot' id='" + i + "'></span>";
    }

    currentSlide= 0;
    dot = document.getElementsByClassName("dot");

    $(carousel[0]).show();
    dot[0].classList.add("dot-active");

    timer();

    $(".dot").click(function() {
        tempSlide = parseInt($(this).attr("id"));
        plusSlides(0, 1);
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

    $(".smooth").click(function(ev) {
        ev.preventDefault();
        var hash = this.hash;
        $('html,body').animate({
            scrollTop: $(hash).offset().top-80
        }, 300 );
    });

    $(window).resize(function() {

        initialiseTop();
        // prevScrollLocation = $(this).scrollTop();

    });

    var underlineTabs = $(".tab-hover");

    if( $(window).scrollTop() > 80 ) {
        header.addClass("header-bg-black");
        headerElem.addClass("tab-white");
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
            headerElem.addClass("tab-white");
        }
        else {
            header.removeClass("header-bg-black");
            headerElem.removeClass("tab-white");
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
