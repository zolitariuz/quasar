<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// CONTACTO
		$labels = array(
			'name'          => 'Contacto',
			'singular_name' => 'Noticia',
			'add_new'       => 'Nuevo Contacto',
			'add_new_item'  => 'Nuevo Contacto',
			'edit_item'     => 'Editar Contacto',
			'new_item'      => 'Nuevo Contacto',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Contacto',
			'search_items'  => 'Buscar Contacto',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Contacto'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'contacto' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'contacto', $args );

	});