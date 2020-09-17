@if(!empty(get_field('single_post_image_home')) && is_front_page())
    @php $the_post_image = get_field('single_post_image_home') @endphp
@else
    @if(has_post_thumbnail())
        @php $the_post_image = get_the_post_thumbnail_url(null, 'post-list') @endphp
    @endif
@endif
<div class="article article--preview preview--{{ get_primary_category_slug(get_the_category()) }}">
    <a class="article__link" href="{{ the_permalink() }}">
        <div class="article__image-container">
            @if($the_post_image)
                <img class="article__image" src="{{ $the_post_image }}">
            @else
                <img class="article__image" src="@asset('images/elements/placeholder_1-1.jpg')">
            @endif
        </div>
        <div class="article__title-container">
            <div class="article__title-inner-container">
                <div class="article__category-date">
                    <div class="article__category">/{{ get_primary_category_name(get_the_category()) }}</div>
                    <div class="article__date">{{ the_time('j F Y') }}</div>
                </div>
                <h2 class="article__title">{{ the_title() }}</h2>
            </div>
        </div>
    </a>
</div>