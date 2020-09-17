<?php

add_action( 'init', 'create_scorings_taxonomy', 0 );
 
function create_scorings_taxonomy() {
  $labels = array(
    'name' => _x( 'Notes', 'Notes' ),
    'singular_name' => _x( 'Notes', 'Notes' ),
    'search_items' =>  __( 'Rechercher une note' ),
    'all_items' => __( 'Toutes les notes' ),
    'edit_item' => __( 'Modifier la note' ), 
    'update_item' => __( 'Mettre à jour' ),
    'add_new_item' => __( 'Ajouter une nouvelle' ),
    'new_item_name' => __( 'Nom de la nouvelle note' ),
    'menu_name' => _x( 'Notes', 'notes' )
  );    

  register_taxonomy('notes',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => false,
    'rewrite' => array( 'slug' => 'notes' ),
  ));
}