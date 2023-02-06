/*global jQuery:false */
jQuery(document).ready(function ($) {
    "use strict";

/*-----------------------------------------------------------------------------------*/
/*  1. FITVIDS
/*-----------------------------------------------------------------------------------*/

    $(".fitvid").fitVids();

/*-----------------------------------------------------------------------------------*/
/*	2. FLEXSLIDER SETTINGS
/*-----------------------------------------------------------------------------------*/

    $(".flexslider").flexslider({
        animation: 'fade',
        touch: true,
        slideshow: true,
        controlNav: true,
        directionNav: false,
        smoothHeight: true
    });

/*-----------------------------------------------------------------------------------*/
/*  3. SCROLL TO TOP BUTTON
/*-----------------------------------------------------------------------------------*/
     
    $('.totop').click(function () { 
        $('html, body').animate({
            scrollTop: 0
        }, 600);
        return false;
    });

/*-----------------------------------------------------------------------------------*/
/*  4. MOBILE NAVIGATION
/*-----------------------------------------------------------------------------------*/

    $("#collapse").hide();
    $(".collapse-menu-inner").toggle(function () {
        
      $("#collapse").slideToggle(600);
      return false;

    }, function () {

      $("#collapse").slideToggle(600);
      return false;
    });
 
/*-----------------------------------------------------------------------------------*/
/*  5. SCROLL DOWN BUTTON
/*-----------------------------------------------------------------------------------*/

    $('.down-arrow a').click(function(){
        $('html, body').animate({scrollTop: $('#content-wrapper').offset().top}, 700);
    return false;
    });

});