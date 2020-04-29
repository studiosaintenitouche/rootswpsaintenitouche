<?php

add_action( 'init', 'create_example_type_taxonomy', 0 );
 
function create_example_type_taxonomy() {
  $labels = array(
    'name' => _x( 'Types d\'exemples', 'example type' ),
    'singular_name' => _x( 'Types d\'exemple', 'example type' ),
    'search_items' =>  __( 'Rechercher un type' ),
    'all_items' => __( 'Tous les types' ),
    'edit_item' => __( 'Modifier le type' ), 
    'update_item' => __( 'Mettre à jour' ),
    'add_new_item' => __( 'Ajouter un nouveau' ),
    'new_item_name' => __( 'Nom du nouveau type' ),
    'menu_name' => __( 'Types d\'exemples' ),
  );    

  register_taxonomy('example_type',array('examples'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'public' => false,
    'rewrite' => array( 'slug' => 'example-type' ),
  ));
 
}