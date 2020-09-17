@php 
    global $post;
    $post = get_field('home_longform');
	setup_postdata( $post ); 
@endphp
<div class="home__longform">
    <div class="longform">
        <div class="container plr-container mzauto">
            <div class="article article--preview preview--{{ get_primary_category_slug(get_the_category()) }}">
                <a class="article__link" href="{{ the_permalink() }}">
                    <div class="article__image-container">
                        @if(has_post_thumbnail())
                            <img class="article__image" src="{{ the_post_thumbnail_url('4_3') }}">
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
        </div>
    </div>
</div>
@if(!in_array(get_the_ID(), $GLOBALS['posts_id_displayed']))
    @php array_push($GLOBALS['posts_id_displayed'], get_the_ID()) @endphp
@endif
@php
    wp_reset_postdata();
@endphp