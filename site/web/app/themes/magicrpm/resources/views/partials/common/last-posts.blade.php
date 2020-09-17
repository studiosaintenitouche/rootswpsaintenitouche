@php
    $posts = new WP_Query(
        array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'no_found_rows=true'
        )
    );
@endphp
<div class="container plr-container mzauto">
    <div class="posts-list posts-list--masonry">
        <div class="posts-list__list">
            @include('partials.common.custom-loop-preview')
        </div>
        <div class="posts-list__more-btn-container">
            <a href="" class="btn posts-list__more-btn">
                Charger plus d'articles
            </a>
        </div>
    </div>
</div>