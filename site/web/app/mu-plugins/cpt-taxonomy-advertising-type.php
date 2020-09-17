<?php

add_action( 'init', 'create_advertising_type_taxonomy', 0 );
 
function create_advertising_type_taxonomy() {
  $labels = array(
    'name' => _x( 'Types de publications', 'Types de publications' ),
    'singular_name' => _x( 'Types de publication', 'Types de publication' ),
    'search_items' =>  __( 'Rechercher un type de publication' ),
    'all_items' => __( 'Tous les types de publication' ),
    'edit_item' => __( 'Modifier le types de publications' ), 
    'update_item' => __( 'Mettre à jour' ),
    'add_new_item' => __( 'Ajouter un nouveau' ),
    'new_item_name' => __( 'Nom du nouveau type de publications' ),
    'menu_name' => __( 'Types de publications' ),
  );    

  register_taxonomy('advertising_type',array('advertisings'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'public' => false,
  ));
}