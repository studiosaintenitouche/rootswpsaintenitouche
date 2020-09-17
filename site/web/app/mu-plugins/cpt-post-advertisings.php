<?php
/*
* On utilise une fonction pour créer notre custom post type 'Produits'
*/

function custom_post_type_advertisings() {

	// On rentre les différentes déno minations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Publicités', 'Publicités'),
		// Le nom au singulier
		'singular_name'       => _x( 'Publicités', 'Publicités'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Publicités'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les publicités'),
		'view_item'           => __( 'Toutes les publicités'),
		'add_new_item'        => __( 'Ajouter une nouvelle publicité'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la publicité'),
		'update_item'         => __( 'Modifier la publicité'),
		'search_items'        => __( 'Rechercher une publicité'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Publicité'),
		'description'         => __( 'Tous sur les publicités'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => false,
        'rewrite'			  => array( 'slug' => 'advertisings'),
        'menu_icon'           => 'dashicons-id-alt',
        'menu_position'       => 4,

	);
	
	// On enregistre notre custom post type qu'on nomme ici "press" et ses arguments
	register_post_type( 'advertisings', $args );

}

add_action( 'init', 'custom_post_type_advertisings', 0 );