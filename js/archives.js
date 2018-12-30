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

    initialiseTiles();
    animateDuration = 700;

    $(window).resize(function() {

        initialiseTiles();

    });
});
