var topCarousel;
var topAbout;
var topContacts;

var prevScrollLocation;

var oneWidth;
var threeWidth;
var fiveWidth;
var sevenWidth;

var twoHeight;
var fourHeight;
var sixHeight;

var windowWidth;
var windowHeight;

var animateDuration;

function initialiseTop() {
    topCarousel = $("#carousel").offset().top;
    topAbout = $("#about").offset().top;
    topContacts = $("#contacts").offset().top;
}


function initialiseTiles() {

    windowWidth = window.innerWidth;
    windowHeight = window.innerHeight;

    oneWidth = 0.125 * windowWidth;
    threeWidth = 0.125 * windowWidth;
    fiveWidth = 0.25 * windowWidth;
    sevenWidth = 0.5 * windowWidth;

    twoHeight = 0.125 * windowHeight;
    fourHeight = 0.25 * windowHeight;
    sixHeight = 0.5 * windowHeight;
}

function explore() {
    $("#cover").show();
    anime({
        targets: '.one',
        width: { value: oneWidth, easing: 'linear', duration: animateDuration }
    });
    setTimeout(function() { $('.one .archive-topic').css('display', 'inline-block') }, 1000 );
    anime({
        targets: '.two',
        height: { value: twoHeight, easing: 'linear', duration: animateDuration, delay: 200 }
    });
    setTimeout(function() { $('.two .archive-home').css('display', 'inline-block') }, 1200 );
    anime({
        targets: '.three',
        width: { value: threeWidth, easing: 'linear', duration: animateDuration, delay: 400 }
    });
    setTimeout(function() { $('.three .archive-topic').css('display', 'inline-block') }, 1400 );
    anime({
        targets: '.four',
        height: { value: fourHeight, easing: 'linear', duration: animateDuration, delay: 600 }
    });
    setTimeout(function() { $('.four .archive-topic').css('display', 'inline-block') }, 1600 );
    anime({
        targets: '.five',
        width: { value: fiveWidth, easing: 'linear', duration: animateDuration, delay: 800 }
    });
    setTimeout(function() { $('.five .archive-topic').css('display', 'inline-block') }, 1800 );
    anime({
        targets: '.six',
        height: { value: sixHeight, easing: 'linear', duration: animateDuration, delay: 1000 }
    });
    setTimeout(function() { $('.six .archive-topic').css('display', 'inline-block') }, 2000 );
    anime({
        targets: '.seven',
        width: { value: sevenWidth, easing: 'linear', duration: animateDuration, delay: 1200 }
    });
    setTimeout(function() { $('.seven .archive-topic').css('display', 'inline-block') }, 2200 );
}

function closeExplore() {
    anime({
        targets: '.one',
        width: { value: 0, easing: 'linear', duration: animateDuration }
    });
    setTimeout(function() { $('.one .archive-topic').css('display', 'none') }, 100 );
    anime({
        targets: '.two',
        height: { value: 0, easing: 'linear', duration: animateDuration, delay: 200 }
    });
    setTimeout(function() { $('.two .archive-home').css('display', 'none') }, 100 );
    anime({
        targets: '.three',
        width: { value: 0, easing: 'linear', duration: animateDuration, delay: 400 }
    });
    setTimeout(function() { $('.three .archive-topic').css('display', 'none') }, 100 );
    anime({
        targets: '.four',
        height: { value: 0, easing: 'linear', duration: animateDuration, delay: 600 }
    });
    setTimeout(function() { $('.four .archive-topic').css('display', 'none') }, 100 );
    anime({
        targets: '.five',
        width: { value: 0, easing: 'linear', duration: animateDuration, delay: 800 }
    });
    setTimeout(function() { $('.five .archive-topic').css('display', 'none') }, 100 );
    anime({
        targets: '.six',
        height: { value: 0, easing: 'linear', duration: animateDuration, delay: 1000 }
    });
    setTimeout(function() { $('.six .archive-topic').css('display', 'none') }, 100 );
    anime({
        targets: '.seven',
        width: { value: 0, easing: 'linear', duration: animateDuration, delay: 1200 }
    });
    setTimeout(function() { $('.seven .archive-topic').css('display', 'none') }, 100 );
    setTimeout(function() { $("#cover").toggle(); }, 2300);
}

$(document).ready(function() {

    // initialiseTop();
    // prevScrollLocation = 0;

    var startDate = new Date(2018, 5, 15).getTime();
    var comingSoon = $(".coming-soon");
    var timeLeft = $("#time-left");

    var _1day = 3600 * 24;

    var header = $("#header");
    var headerElem = $(".header-elem");
    var register = $(".register");

    var welcomeSection = $(".welcome-section");
    var welcomeExplore = $(".welcome-explore");

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

    initialiseTiles();
    animateDuration = 700;

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

        initialiseTiles();

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
