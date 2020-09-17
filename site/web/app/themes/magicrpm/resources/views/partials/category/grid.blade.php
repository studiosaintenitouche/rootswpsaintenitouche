    
<div class="category__header-grid">
    <div class="grid">
        @php
        $i = 1
        @endphp
        @while (have_posts())
            @php
                the_post();
            @endphp
                
                @if($i <= 3)

                    <div class="grid__element grid__element--image-post-{{$i}}">
                        <div class="post__image-container">
                            @if($i == 1)
                                <img src="{{ the_post_thumbnail_url('1_1') }}" class="post__image">
                            @elseif($i == 2)
                                <img src="{{ the_post_thumbnail_url('16_9') }}" class="post__image">
                            @elseif($i == 3)
                                <img src="{{ the_post_thumbnail_url('9_16') }}" class="post__image">
                            @endif
                        </div>
                    </div>
                    <div class="grid__element grid__element--infos-post-{{$i}}">
                        <div class="post__infos">
                            <div class="post__category">
                                {{ the_time('j F Y') }}
                            </div>
                            <h2 class="post__title">{{ the_title() }}</h2>
                            <a href="{{ the_permalink() }}" class="btn btn--white btn--arrow btn--arrow-white post__link">Lire l'article</a>
                        </div>
                    </div>
                    @php
                        $post_id = get_the_ID();
                        array_push($GLOBALS['posts_id_displayed'], $post_id);
                    @endphp
                @endif
            @php $i ++ @endphp
        @endwhile
        @php
            wp_reset_postdata();
        @endphp
    </div>
</div>