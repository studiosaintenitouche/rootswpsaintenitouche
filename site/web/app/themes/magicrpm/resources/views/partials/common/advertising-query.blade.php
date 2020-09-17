@php
    $advertising_placeholder = get_field('advertising_placeholder_'.$advertising_type, 'option');
    $advertisings = new WP_Query([
            'post_type' => 'advertisings',
            'tax_query' => [
                [
                'taxonomy' => 'advertising_type',
                'field' => 'slug',
                'terms' => $advertising_type,
                ],
            ],
            'posts_per_page' => 10,
        ]
    );
    $active_advertising_found = false;
@endphp

@if($advertising_placeholder)
    @while ($advertisings->have_posts()) @php $advertisings->the_post() @endphp
    @php
        $advertisingStartDate = str_replace('/', '-', get_field('advertising_start_date'));
        $advertisingEndDate = str_replace('/', '-', get_field('advertising_end_date'));
        $now = new DateTime();
        $startdate = new DateTime(date('Y-m-d', strtotime($advertisingStartDate)));
        $enddate = new DateTime(date('Y-m-d', strtotime($advertisingEndDate)));
        $advertising_id = get_the_ID();
    @endphp
        @if(!$active_advertising_found && ($advertising_placeholder->ID != $advertising_id) && $startdate <= $now && $now <= $enddate)
            @include('partials.common.advertising-preview')
            @php $active_advertising_found = true @endphp
        @endif
    @endwhile
    @if(!$active_advertising_found)
        @php wp_reset_postdata() @endphp
        @php
            global $post;
            $post = $advertising_placeholder;
            setup_postdata($post);
        @endphp
            @include('partials.common.advertising-preview')
        @php
            wp_reset_postdata();
        @endphp
    @endif
@endif
