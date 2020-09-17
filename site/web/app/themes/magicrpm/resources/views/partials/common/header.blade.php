@while (have_posts())
  @php
    setup_postdata(the_post());
    $slug = get_primary_category_slug(get_the_category());
    $post_type = get_page_type();
    $cover_advertising = null;
  @endphp
  @if(!empty($slug))
    @php $slug = 'nav--'.$slug; @endphp
  @endif

  @if(!empty($post_type))
    @php $post_type = 'nav--'.$post_type; @endphp
  @endif
  @php wp_reset_postdata() @endphp

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
          @if($startdate <= $now && $now <= $enddate && is_front_page())
            @php $cover_advertising = 'nav--imnotanad-cover-active' @endphp
          @else
            @php $cover_advertising = 'nav--imnotanad-cover-inactive' @endphp
          @endif
      @php
          wp_reset_postdata();
      @endphp
  @endif
@endwhile
<header class="nav {{ $post_type }} {{ $slug }} {{ $cover_advertising }}" role="banner">
  <div class="nav__container">
    @include('partials.common.header.logo')
    @include('partials.common.header.menu')
  </div>
</header>