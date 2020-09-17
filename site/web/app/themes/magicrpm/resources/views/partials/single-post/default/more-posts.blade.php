@php
    $category = get_the_category();
    $posts = new WP_Query(
        array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'no_found_rows' => true,
        )
        );
@endphp
<div class="container plr-container mzauto">
    <div class="posts-list posts-list--masonry">
        <h2 class="posts-list__title">à lire aussi</h2>
        <div class="posts-list__list">
            @include('partials.common.custom-loop-preview')
        </div>
        <div class="posts-list__more-btn-container">
            <a href="{{ get_category_link($category) }}" class="btn posts-list__more-btn">En voir plus</a>
        </div>
    </div>
</div>