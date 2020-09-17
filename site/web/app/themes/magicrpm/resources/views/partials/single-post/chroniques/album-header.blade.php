@php
    $labels = get_the_terms(get_the_ID(), 'labels')[0]->name;
    $artist = get_the_terms(get_the_ID(), 'artists')[0]->name;
    $category_name = get_primary_category_name(get_the_category());
@endphp
<div class="album album--header">
    <div class="album__cover">
        <img class="album__cover-image" src="{{ the_post_thumbnail_url('1_1') }}">
    </div>
    <div class="album__infos">
        <div class="album__infos-content">
            <div class="article__category-date">
                <div class="article__category">
                    /{{ $category_name }}
                </div>
                <div class="article__date">
                    {{ the_time('j F Y') }}
                </div>
            </div>
            <div class="album__title">{{ $single_post_album_title }}</div>
            <div class="album__artist">{{ $artist }}</div>
            <div class="album__label">{{ $labels }}</div>
            @include('partials.single-post.chroniques.note')
        </div>
        @if($single_post_advertising_sponsor_label)
            <div class="article__sponsor-label">en partenariat avec {{ $single_post_advertising_sponsor_label }}</div>
        @endif
    </div>
</div>