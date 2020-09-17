<?php

function get_longform_category_template($single_template) {
    global $post;

      if ( in_category( 'longs-formats' )) {
         $single_template = get_template_directory() . '/views/single-category-longforms.blade.php';
       }
    return $single_template;
}
add_filter( "single_template", "get_longform_category_template" ) ;
