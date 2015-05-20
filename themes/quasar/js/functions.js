(function($){

	"use strict";

	$(function(){


		if ( $('.fitvid').length > 0 ){
			 $('.fitvid').fitVids();
		}

		if ( $('.ultimos-proyectos iframe').length > 0 ){
			$('.ultimos-proyectos').fitVids();
		}


		$('form').validate();

		toggleMenu();
	});

	/**
	 * Esconde o muestra el menú
	 */
	function toggleMenu(){
		$('.btn-menu-movil').on('click', function(){
			event.preventDefault();
			if($('.menu-movil').hasClass('hide')){
				$('.menu-movil').removeClass('hide');
				$('.menu-movil').addClass('show');
			}
			else{
				$('.menu-movil').removeClass('show');
				$('.menu-movil').addClass('hide');
			}
		});
		$('.menu-movil a').on('click', function(){
			$('.menu-movil').removeClass('show');
			$('.menu-movil').addClass('hide');
		});
	}

  	$('#responsive-menu-btn').sidr({
  		name: 'sidr-main',
  		source: '.sidr'
  	});


})(jQuery);

