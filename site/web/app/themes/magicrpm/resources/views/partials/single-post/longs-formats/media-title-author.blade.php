@php
    $author_avatar_url = get_avatar_url(get_the_author_meta('email'));
    $author_url = get_author_posts_url(get_the_author_meta('ID'));
    $author_name = get_the_author_meta( 'first_name' )." ".get_the_author_meta( 'last_name' );
@endphp

<div class="article__media">
    <div class="article__image-container">
        <img src="{{ the_post_thumbnail_url('4_3') }}" class="article__image">
        <div class="article__category-date-title">
            <div class="article__category-date">
                <div class="article__category">
                    /{{ get_primary_category_name(get_the_category()) }}
                </div>
                <div class="article__date">
                    {{ the_time('j F Y') }}
                </div>
            </div>
            <h1 class="article__title">{{ the_title() }}</h1>
        </div>
        <div class="article__author-pellet-container">
            <a href="{{ $author_url }}" class="article__author-link">
                <img src="{{ $author_avatar_url }}" class="article__author-avatar">
                <div class="article__author-name">{{ $author_name }}</div>
            </a>
        </div>
    </div>
    <div class="article__media-credits">{{ the_post_thumbnail_caption() }}</div>
</div>