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


/*****     coming-soon     *****/

var startDate;
var comingSoon;
var timeLeft;
var _1day;

var now;
var millisecDiff;
var secDiff;

var days;
var hrs;
var mins;
var secs;



var deviceWidth = screen.width;

function mediaSize() {
	/* Set the matchMedia */
	if (window.matchMedia('screen and (max-width: 575px)').matches) {
        $("#my-carousel .exception-left").each(function() {
            var left = $(this).attr("data-left");
            $(this).css({
                "left": left,
                "transform": "translateX(-" + left + ")"
            });
        });
		$("#my-carousel .exception-right").each(function() {
            var right = $(this).attr("data-right");
            $(this).css({
				"left": "auto",
                "right": right,
                "transform": "translateX(" + right + ")"
            });
        });
	} else {
	/* Reset for CSS changes – Still need a better way to do this! */
		$("#my-carousel .exception-left").removeAttr('style');
		$("#my-carousel .exception-right").removeAttr('style');
	}
}

function initialiseTop() {
    topHome = $("#home").offset().top;
    topAbout = $("#about").offset().top;
    topContacts = $("#contacts").offset().top;
}

$(document).ready(function() {
	mediaSize();
    // $("#my-carousel .exception").each(function() {
    //     var left = $(this).attr("data-left");
    //     $(this).css({
    //         "left": left,
    //         "transform": "translateX(" + left + ")"
    //     });
    // });

    if($( window ).width() > 991) {
        $("#my-carousel img").each(function() {
            var item = $(this).attr("data-item");
            $(this).attr("src", "images/carousel/" + item + ".jpg");
        });
    }
    else {
        $("#my-carousel img").each(function() {
            var item = $(this).attr("data-item");
            $(this).attr("src", "images/carousel/sm/" + item + ".jpg");
        });
    }

    startDate = new Date(2018, 11, 28).getTime();
    _1day = 3600 * 24;

    comingSoon = $(".coming-soon");
    timeLeft = $("#time-left");

    var countDown = setInterval(function() {
        now = new Date().getTime();
        millisecDiff = startDate - now;
        secDiff = millisecDiff / 1000;
        if(secDiff > 0) {
            days = Math.floor(secDiff / _1day);
            hrs = Math.floor((secDiff % _1day) / 3600);
            mins = Math.floor((secDiff % 3600) / 60);
            secs = Math.floor(secDiff % 60);
            $("#days").html(days);
            $("#hrs").html(hrs);
            $("#mins").html(mins);
            $("#secs").html(secs);
        }
        else {
            clearInterval(countDown);
            $("#days").html("00");
            $("#hrs").html("00");
            $("#mins").html("00");
            $("#secs").html("00");
        }
    }, 1000);

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
        mediaSize();
        if($( window ).width() > 767) {
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
        if($( window ).width() > 991) {
            $("#my-carousel img").each(function() {
                var item = $(this).attr("data-item");
                $(this).attr("src", "images/carousel/" + item + ".jpg");
            });
        }
        else {
            $("#my-carousel img").each(function() {
                var item = $(this).attr("data-item");
                $(this).attr("src", "images/carousel/sm/" + item + ".jpg");
            });
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


    $("#feedback-form").submit(function(event) {
        event.preventDefault();

        var form = $(this);
        var data = form.serialize();

        $.ajax({
            url: "data.php",
            type: "post",
            data: data,
            success: function(result) {
                alert("Thanks for your Feedback");
                $("#user_name").val('');
                $("#user_email").val('');
                $("#user_msg").val('');
            },
            error: function() {
                alert("Your message couldn't be Sent !!!");
            }
        });
    });

});
