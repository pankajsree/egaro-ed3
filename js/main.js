var topCarousel;
var topAbout;
var topContacts;

var prevScrollLocation;

var carousel;
var carouselCount;
var dots;
var currentSlide;
var dot;
var tempSlide;

function initialiseTop() {
    topCarousel = $("#carousel").offset().top;
    topAbout = $("#about").offset().top;
    topContacts = $("#contacts").offset().top;
}

function plusSlides(ctrl) {
    carousel[currentSlide].classList.remove("active");
    dot[currentSlide].classList.remove("dot-active");
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
    carousel[currentSlide].classList.add("active");
    dot[currentSlide].classList.add("dot-active");
}

$(document).ready(function() {

    // initialiseTop();
    // prevScrollLocation = 0;
    carousel = document.getElementsByClassName("slides");
    carouselCount = carousel.length;
    dots = document.getElementById('dots');

    var startDate = new Date(2018, 5, 15).getTime();
    var comingSoon = $(".coming-soon");
    var timeLeft = $("#time-left");

    var _1day = 3600 * 24;

    var header = $("#header");
    var headerElem = $(".header-elem");
    var register = $(".register");

    var welcomeSection = $(".welcome-section");
    var welcomeExplore = $(".welcome-explore");

    for( var i = 0; i < carouselCount; i ++ ) {
        dots.innerHTML += "<span class='dot' id='" + i + "'></span>";
    }

    currentSlide= 0;
    dot = document.getElementsByClassName("dot");

    carousel[0].classList.add("active");
    dot[0].classList.add("dot-active");

    setInterval(function() {
        plusSlides(1);
    }, 5000);

    setTimeout(function() {
        welcomeSection.removeClass("welcome-content-hidden");
    }, 200);

    welcomeExplore.click(function(e) {
        e.preventDefault();
        welcomeSection.addClass("welcome-content-hidden");
        welcomeSection.fadeOut(1000);
        welcomeSection.style.display = "none";
    });

    var countDown = setInterval(function() {
        var now = new Date().getTime();
        var millisecDiff = startDate - now;
        var secDiff = millisecDiff / 1000;
        if(secDiff > 0) {
            var days = Math.floor(secDiff / _1day);
            var hrs = Math.floor((secDiff % _1day) / 3600);
            var mins = Math.floor((secDiff % 3600) / 60);
            var secs = Math.floor(secDiff % 60);
            $("#time-left").html(days + "d&nbsp;" + hrs + "h&nbsp;" + mins + "m&nbsp;" + secs + "s");
        }
        else {
            clearInterval(countDown);
            comingSoon[0].innerHTML = "Egaro<br /><div id='time-left'>Photo&nbsp;Festival</div>";
        }
    }, 1000);

    $(".dot").click(function() {
        tempSlide = parseInt($(this).attr("id"));
        plusSlides(0);
    });

    $(".smooth").click(function(ev) {
        ev.preventDefault();
        var hash = this.hash;
        if(this.classList.contains("unique")) {
            $('html,body').animate({
                scrollTop: $(hash).offset().top - 80
            }, 1000 );
        }
        else {
            $('html,body').animate({
                scrollTop: $(hash).offset().top
            }, 1000 );
        }
    });

    $(window).resize(function() {

        // initialiseTop();
        // prevScrollLocation = $(this).scrollTop();

    });

    $(window).scroll(function() {
        if( $(window).scrollTop() > 80 ) {
            header.addClass("header-bg-black");
            headerElem.addClass("tab-white");
        }
        else {
            header.removeClass("header-bg-black");
            headerElem.removeClass("tab-white");
        }
    });

    // $(window).scroll(function() {
    //     var scrollLocation = $(this).scrollTop();
    //     // console.log(scrollLocation);
    //     if( scrollLocation >  0 && scrollLocation < topCarousel && scrollLocation > prevScrollLocation ) {
    //         console.log(prevScrollLocation);
    //         console.log(scrollLocation);
    //         $('html,body').animate({
    //             scrollTop: $("#main-content").offset().top
    //         }, 1000 );
    //     }
    //     else if( scrollLocation >  0 && scrollLocation < topCarousel && scrollLocation < prevScrollLocation ) {
    //         console.log(prevScrollLocation);
    //         console.log(scrollLocation);
    //         $('html,body').animate({
    //             scrollTop: $("#home").offset().top
    //         }, 1000 );
    //         var temp = $("#home").offset().top;
    //         console.log("home - " + temp);
    //     }
    //     else {
    //         $('html,body').animate({
    //             scrollTop: scrollLocation
    //         }, 1 );
    //     }
    //     prevScrollLocation = scrollLocation;
    // });
});
