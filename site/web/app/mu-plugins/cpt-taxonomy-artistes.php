<?php

add_action( 'init', 'create_artists_taxonomy', 0 );
 
function create_artists_taxonomy() {
  $labels = array(
    'name' => _x( 'Artistes', 'Artistes' ),
    'singular_name' => _x( 'Artiste', 'Artiste' ),
    'search_items' =>  __( 'Rechercher un tag "artiste"' ),
    'all_items' => __( 'Tous les tags "artiste"' ),
    'edit_item' => __( 'Modifier le tag' ), 
    'update_item' => __( 'Mettre à jour' ),
    'add_new_item' => __( 'Ajouter un nouveau' ),
    'new_item_name' => __( 'Nom du nouveau tag "artiste"' ),
    'menu_name' => __( 'Artistes' ),
  );    

  register_taxonomy('artists',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => false,
    'rewrite' => array( 'slug' => 'artists' ),
  ));
}