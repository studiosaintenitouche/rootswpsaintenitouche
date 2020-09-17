@while (have_posts()) @php the_post() @endphp
    @if(!in_array(get_the_ID(), $GLOBALS['posts_id_displayed']))
        <div class="posts-list__item">
            @include('partials.common.article-preview')
        </div>
        @php array_push($GLOBALS['posts_id_displayed'], get_the_ID()) @endphp
    @endif
@endwhile
@php wp_reset_postdata() @endphp