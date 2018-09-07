
//fade in text while animating with "queue"

$(document).ready(function(){
    $(".inspectingcodeisfun").fadeIn({queue: false, duration: 'slow'}).animate({ "marginTop": "+50px" }, "slow");
    $(".counter").fadeIn({queue: false, duration: 'slow'}).animate({ "marginTop": "+50px" }, "slow");

    $(".nameisasyouwant").fadeIn({queue: false, duration: 'slow'}).animate({ "marginTop": "+20px" }, "slow");

    
});



$( document ).ready(function() {
    console.log( "ready!" );
})
