<div class="longform">
    @php
        $current_longform_id = get_the_ID();
        $longform_found = false;
        $longforms = new WP_Query(
            array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => 'longs-formats',
                    ),
                ),
            )
        );
    @endphp
    @while ($longforms->have_posts()) @php $longforms->the_post() @endphp
        @if(!$longform_found && ($current_longform_id != get_the_ID()))
            @include('partials.common.article-preview')
            @php $longform_found = true @endphp
        @endif
    @endwhile
</div>