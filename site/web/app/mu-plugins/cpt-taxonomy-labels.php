<?php

add_action( 'init', 'create_labels_taxonomy', 0 );
 
function create_labels_taxonomy() {
  $labels = array(
    'name' => _x( 'Labels', 'Labels' ),
    'singular_name' => _x( 'Label', 'Label' ),
    'search_items' =>  __( 'Rechercher un label' ),
    'all_items' => __( 'Tous les labels' ),
    'edit_item' => __( 'Modifier le label' ), 
    'update_item' => __( 'Mettre à jour' ),
    'add_new_item' => __( 'Ajouter un nouveau' ),
    'new_item_name' => __( 'Nom du nouveau label' ),
    'menu_name' => __( 'Labels' ),
  );    

  register_taxonomy('labels',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => false,
    'rewrite' => array( 'slug' => 'labels' ),
  ));
}