@php
    $category_name = get_primary_category_name(get_the_category())
@endphp

<div class="article__media">
    <div class="article__image-container">
        <img src="{{ the_post_thumbnail_url() }}" class="article__image">
        <div class="article__category-date">
            <div class="article__category">
                /{{ $category_name }}
            </div>
            <div class="article__date">
                {{ the_time('j F Y') }}
            </div>
        </div>
    </div>
    <div class="article__credits">
        @if(get_field('single_post_video_advertising_sponsor_label'))
            <div class="article__sponsor-credits">{{ the_field('single_post_video_advertising_sponsor_label') }}</div>
        @else
            <div></div>
        @endif
        <div class="article__media-credits">{{ the_post_thumbnail_caption() }}</div></div>
</div>
<h1 class="article__title">{{ the_title() }}</h1>