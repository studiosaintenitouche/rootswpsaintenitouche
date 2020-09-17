@php 
    global $post;
    $home_posts_list = get_field('home_posts_on_top_list');
    $i_first = 0;
    $i_last = 0;
    $i = 0;
@endphp
@foreach( $home_posts_list as $post)
    @if($i_first <= $i && $i <= $i_last)
        @php 
            setup_postdata($post);
            $the_post_title = null;
        @endphp

        @if(!empty(get_field('single_post_title_home')))
            @php $the_post_title = get_field('single_post_title_home'); @endphp
        @else
            @php $the_post_title = get_the_title(); @endphp
        @endif

        @if(!empty(get_field('single_post_image_home')) && is_front_page())
            @php $the_post_image = get_field('single_post_image_home') @endphp
        @else
            @if(has_post_thumbnail())
                @php $the_post_image = get_the_post_thumbnail_url(null, '16_9') @endphp
            @endif
        @endif
        <div class="home__cover-post">
            <div class="cover-post">
                @if($the_post_image)
                    <img class="cover-post__image" src="{{ $the_post_image }}">
                @else
                    <img class="cover-post__image" src="@asset('images/elements/placeholder_16-9.jpg')">
                @endif
                <div class="cover-post__informations">
                    <h1 class="cover-post__title">{{ $the_post_title }}</h1>
                    <a href="{{ the_permalink() }}" class="btn btn--white btn--arrow btn--arrow-white cover-post__link">Lire l'article</a>
                </div>
            </div>
        </div>
    @endif
    @php 
        $i++
    @endphp
@endforeach
@php wp_reset_postdata() @endphp
