$(document).ready(function () {
    // $("#btnShow").hide()
    $("#btnShow").click(function(){
        $("p").show();
        // $("#btnHide").show()
        // $("#btnShow").hide()
        // $('p').text(' ');
      });
      $("#btnHide").click(function(){
        $("p").hide()
        // $("#btnHide").hide()
        // $("#btnShow").show()
      });

    // fade
    $("#btnFadeIn").click(function () {
        $('p').fadeIn();
    });
    $("#btnFadeOut").click(function () {
        $('p').fadeOut();
    });
    $("#btnFadeToggle").click(function () {
        $('p').fadeToggle('fast');
    });
    $("#btnfadeTo").click(function () {
        $('p').fadeTo('slow', 0.3);
    });

    // slider
    $('.blue').click( function () {
        $('#divSlide').slideToggle(800);
        
    });
    
});
