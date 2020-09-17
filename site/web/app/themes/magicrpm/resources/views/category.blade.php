
@extends('layouts.app')
@section('content')
@php
    global $posts_id_displayed;
    $posts_id_displayed = [];
@endphp
<div class="category category--{{ get_primary_category_slug(get_the_category()) }}">
    <div class="category__header">
        @include('partials.category.grid')
    </div>
    <div class="categroy__body">
        <?php if(is_archive()){
            $obj = get_queried_object();
            if(isset($obj->taxonomy) && isset($obj->slug)){
               $taxonomy = $obj->taxonomy;
               $taxonomy_term = $obj->slug;
               echo do_shortcode('[ajax_load_more id="8108573203" container_type="div" css_classes="posts-list posts-list--grid" cache="true" cache_id="'.$taxonomy.'-'. $taxonomy_term .' preloaded="true" preloaded_amount="6" seo="true" theme_repeater="category-last-posts-repeater.php" post_type="post" transition_container_classes="posts-list__list" posts_per_page="6" pause="true" images_loaded="true" scroll="false" progress_bar="true" progress_bar_color="000000" offset="3" button_label="Charger plus d\'articles" button_loading_label="Chargement" archive="true" no_results_text="Plus rien à afficher, navré."]');
            }
        } ?>
    </div>
</div>
@endsection

