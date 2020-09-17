<?php

function get_chronique_category_template($single_template) {
    global $post;

      if ( in_category( 'chroniques' )) {
         $single_template = get_template_directory() . '/views/single-category-chroniques.blade.php';
       }
    return $single_template;
}
add_filter( "single_template", "get_chronique_category_template" ) ;