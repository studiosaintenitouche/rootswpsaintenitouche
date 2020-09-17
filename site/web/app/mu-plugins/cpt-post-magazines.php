<?php
/*
* On utilise une fonction pour créer notre custom post type 'Produits'
*/

function custom_post_type_magazines() {

	// On rentre les différentes déno minations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Magazines', 'Magazines'),
		// Le nom au singulier
		'singular_name'       => _x( 'Magazine', 'Magazine'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Magazines'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les magazines'),
		'view_item'           => __( 'Tous les magazines'),
		'add_new_item'        => __( 'Ajouter un nouveau numéro'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le magazine'),
		'update_item'         => __( 'Modifier le magazine'),
		'search_items'        => __( 'Rechercher un magazine'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Magazine'),
		'description'         => __( 'Tous sur les magazines'),
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
        'rewrite'			  => array( 'slug' => 'magazines'),
        'menu_icon'           => 'dashicons-id-alt',
        'menu_position'       => 4,

	);
	
	// On enregistre notre custom post type qu'on nomme ici "press" et ses arguments
	register_post_type( 'magazines', $args );

}

add_action( 'init', 'custom_post_type_magazines', 0 );