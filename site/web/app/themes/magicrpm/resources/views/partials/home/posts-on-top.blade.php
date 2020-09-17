
@php 
global $post;
$home_posts_list = get_field('home_posts_on_top_list');
$i_first = 1;
$i_last = 5;
$i = 0;
@endphp
<div class="home__posts-on-top">
    <div class="posts-on-top">
        <div class="container plr-container mzauto">
            <div class="posts-on-top__list">
                @foreach( $home_posts_list as $post)
                    @if($i_first <= $i && $i <= $i_last)
                        @php
                        setup_postdata($post);
                        $the_post_title = null;
                        if(!empty(get_field('single_post_title_home'))) {
                            $the_post_title = get_field('single_post_title_home');
                        } else {
                            $the_post_title = get_the_title();
                        }
                        @endphp
                        <div class="posts-on-top__item">
                            @include('partials.common.article-preview-posts-on-top')
                        </div>
                        @if(!in_array(get_the_ID(), $GLOBALS['posts_id_displayed']))
                            @php array_push($GLOBALS['posts_id_displayed'], get_the_ID()) @endphp
                        @endif
                    @endif
                    @php
                    $i++ 
                    @endphp
                @endforeach
                @php wp_reset_postdata() @endphp
            </div>
        </div>
    </div>
</div>