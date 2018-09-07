
//fade in text while animating with "queue"

$(document).ready(function(){
    $(".inspectingcodeisfun").fadeIn({queue: false, duration: 'slow'}).animate({ "marginTop": "+50px" }, "slow");
    $(".nameisasyouwant").fadeIn(500).animate({ "marginTop": "+50px" }, "slow");
});


$( document ).ready(function() {
    console.log( "ready!" );
})
