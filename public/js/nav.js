$(function(){

    var footerImg = $("#footer-img");

    $("#events-link").hover(function(e){
        footerImg.css('background-position', 'bottom');
    }, function(e){
        footerImg.css('background-position', 'top');
    });

    $("#rsvp-link").hover(function(e){
        footerImg.css('background-position', '50% 80%');
    }, function(e){
        footerImg.css('background-position', 'top');
    });

    $("#home-link").hover(function(e){
        footerImg.css('background-position', '50% 60%');
    }, function(e){
        footerImg.css('background-position', 'top');
    });

    $("#registry-link").hover(function(e){
        footerImg.css('background-position', '50% 40%');
    }, function(e){
        footerImg.css('background-position', 'top');
    });

    $("#travel-link").hover(function(e){
        footerImg.css('background-position', '50% 20%');
    }, function(e){
        footerImg.css('background-position', 'top');
    });
});