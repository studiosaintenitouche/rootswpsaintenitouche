<?php
/*
* On utilise une fonction pour créer notre custom post type 'Produits'
*/

function custom_post_type_examples() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Exemples', 'Examples'),
		// Le nom au singulier
		'singular_name'       => _x( 'Exemples', 'Examples'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Exemples'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les exemples'),
		'view_item'           => __( 'Tous les exemples'),
		'add_new_item'        => __( 'Ajouter un nouvel exemple'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer l\'exemple'),
		'update_item'         => __( 'Modifier l\'exemple'),
		'search_items'        => __( 'Rechercher un exemple'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Exemple'),
		'description'         => __( 'Tous sur les exemples'),
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
        'rewrite'			  => array( 'slug' => 'examples'),
        'menu_icon'           => 'dashicons-id-alt',
        'menu_position'       => 4,

	);
	
	// On enregistre notre custom post type qu'on nomme ici "press" et ses arguments
	register_post_type( 'examples', $args );

}

add_action( 'init', 'custom_post_type_examples', 0 );