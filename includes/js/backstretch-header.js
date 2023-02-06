/*global jQuery:false */
jQuery(document).ready(function ($) {
    "use strict";

/*-----------------------------------------------------------------------------------*/
/*  1. BACKSTRETCH HEADER IMAGE
/*-----------------------------------------------------------------------------------*/

	var bgImage = $('#header').css('background-image').replace(/^url|[\(\)]/g, '').replace(/\"/g, '');
	$("#header").backstretch(bgImage,{duration:3000,fade:1000});
  console.log("Backstretch #header: " + bgImage);
  
  function headerCleanups()
  {
    $(window).trigger('resize');
    $('#header').zIndex('1');
  }
  setTimeout(headerCleanups, 1100);
  
  $('.sub-menu').slideUp();
	var val = null;
  $('.menu-item-has-children').click(function(e) {
        val = $(this).attr('id');
    		//alert(val);
    		
    		//$('.twentytwo').text('.'+val+' > ul');
    	//$('#'+val+' > a').("href", "#linkurl");	
    		if($('#'+val+' > ul').css('display') == 'none')
          {
           $('.sub-menu').slideUp();
    			 $('#'+val+' > ul').slideToggle();
    			}
    		else {
           $('#'+val+' > ul').slideUp();
          }
    	//alert(val);
    //$('.val > ul').slideToggle();
		 		//menudrop(val);
    //var foo = $(this).attr(class);
    	//alert(foo);
  		//$('.menu-item-3299 > ul').slideToggle();
    });
  
  
  
  	$('.mobile-menu .menu-item-3299 > a').click(function(e) {
      	$(this).attr('href', '#linkurl');
      });
  
  	$('.mobile-menu .menu-item-3346 > a').click(function(e) {
      	$(this).attr('href', '#linkurl');
      });
  
  	$('.mobile-menu .menu-item-2806 > a').click(function(e) {
      	$(this).attr('href', '#linkurl');
      });
  
  	//$('.menu-item > a').click(function(e) {
      //	$('#collapse').css('display:none;');
      //});

    			//var res =	x.split(" ");
            //alert(res[0]);
  
    
});


