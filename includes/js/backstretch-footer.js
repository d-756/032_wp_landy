/*global jQuery:false */
jQuery(document).ready(function ($) {
    "use strict";

/*-----------------------------------------------------------------------------------*/
/*  1. BACKSTRETCH FOOTER IMAGE
/*-----------------------------------------------------------------------------------*/

	var bgImage_footer = $('#footer').css('background-image').replace(/^url|[\(\)]/g, '').replace(/\"/g, '');
	$("#footer").backstretch(bgImage_footer,{duration:3000,fade:1000});

});