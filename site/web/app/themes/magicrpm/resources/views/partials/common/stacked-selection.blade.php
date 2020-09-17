@php 
    global $post;
    $home_stacked_list = get_field('home_stacked_selection_list', get_option('page_on_front'));
@endphp
<div class="stacked-selection">
    <div class="stacked-selection__container">
        <div class="stacked-posts__slider">
            <div class="stacked-posts__list swiper-wrapper">
                @foreach( $home_stacked_list as $post)
                @php 
                    setup_postdata($post);
                @endphp
                <div class="stacked-posts__item swiper-slide">
                    <div class="stacked-post">
                        <div href="{{ the_permalink() }}" class="stacked-post__link">
                            <span class="stacked-post__release-date">/Sortie • {{ the_time('j F Y') }}</span>
                        <h2 class="stacked-post__title">{{ the_title() }}</h2>
                        </div>
                    </div>
                    @if(!in_array(get_the_ID(), $GLOBALS['posts_id_displayed']))
                        @php array_push($GLOBALS['posts_id_displayed'], get_the_ID()) @endphp
                    @endif
                </div>
                @endforeach
                @php wp_reset_postdata() @endphp
            </div>
        </div>
        <div class="stacked-covers__slider-container">
            <div class="stacked-covers__slider">
                <div class="stacked-covers__list swiper-wrapper">
                    @foreach( $home_stacked_list as $post)
                        @php 
                            setup_postdata($post);
                        @endphp
                        <div class="stacked-covers__item swiper-slide">
                            <div class="stacked-cover">
                                <a href="{{ the_permalink() }}" class="stacked-cover__link">
                                    <img class="stacked-cover__image" src="{{ the_post_thumbnail_url('1_1') }}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                @php wp_reset_postdata(); @endphp
            </div>
        </div>
    </div>
</div>
