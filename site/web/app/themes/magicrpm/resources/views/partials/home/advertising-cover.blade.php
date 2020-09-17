@php
    $advertising_cover = get_field('advertising_cover', 'option');
@endphp

@if($advertising_cover)
    @php 
        wp_reset_postdata();
        global $post;
        $post = $advertising_cover;
        setup_postdata($post);

        $advertisingStartDate = str_replace('/', '-', get_field('advertising_start_date'));
        $advertisingEndDate = str_replace('/', '-', get_field('advertising_end_date'));
        $now = new DateTime();
        $startdate = new DateTime(date('Y-m-d', strtotime($advertisingStartDate)));
        $enddate = new DateTime(date('Y-m-d', strtotime($advertisingEndDate)));
        $advertising_id = get_the_ID();
    @endphp
        @if($startdate <= $now && $now <= $enddate)
            <div class="imnotanad imnotanad--cover">
                <a href="{{ the_field('advertising_url') }}" target="_blank" class="imnotanad__link">
                    <img src="{{ the_field('advertising_image_mobile') }}" class="imnotanad__image imnotanad__image--mobile">
                    <img src="{{ the_field('advertising_image_desktop') }}" class="imnotanad__image imnotanad__image--desktop">
                </a>
            </div>
        @endif
    @php
        wp_reset_postdata();
    @endphp
@endif