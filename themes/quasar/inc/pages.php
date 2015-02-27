<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// HOME
		if( ! get_page_by_path('home') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'home',
				'post_name'   => 'home',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// NOSOTROS
		if( ! get_page_by_path('nosotros') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'nosotros',
				'post_name'   => 'nosotros',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// CONTACTO
		if( ! get_page_by_path('contacto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'contacto',
				'post_name'   => 'contacto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// RECIBIDO
		if( ! get_page_by_path('recibido') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'recibido',
				'post_name'   => 'recibido',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// RECIBIDO
		if( ! get_page_by_path('footer') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'footer',
				'post_name'   => 'footer',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});
