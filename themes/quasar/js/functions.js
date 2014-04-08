(function($){

	"use strict";

	$(function(){


		$('#intro').backstretch(template_url+'/images/intro.jpg');

		$('.processing').backstretch(template_url+'/images/processing.jpg');

		$('form').validate();
	});

})(jQuery);
