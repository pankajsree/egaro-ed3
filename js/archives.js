var socialFlag;

$(document).ready(function() {

    socialFlag = 0;

    $("#cross").click(function() {
        $("#cross, #soc-bar").hide();
        $("#toggle-soc-bar").show();
        socialFlag = 1;
    });

    $("#toggle-soc-bar").click(function() {
        $("#toggle-soc-bar").hide();
        $("#cross, #soc-bar").show();
    });

    var underlineTabs = $(".tab-hover");

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
});
