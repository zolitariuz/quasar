<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// CONTACTO
		$labels = array(
			'name'          => 'Forma Contacto',
			'singular_name' => 'Noticia',
			'add_new'       => 'Nuevo Forma Contacto',
			'add_new_item'  => 'Nuevo Forma Contacto',
			'edit_item'     => 'Editar Forma Contacto',
			'new_item'      => 'Nuevo Forma Contacto',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Forma Contacto',
			'search_items'  => 'Buscar Forma Contacto',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Forma Contacto'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'forma-contacto' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'forma-contacto', $args );

	});