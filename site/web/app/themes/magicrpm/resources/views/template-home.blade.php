{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
@php
    global $posts_id_displayed;
    $posts_id_displayed = [];
    $advertising_cover = get_field('advertising_cover', 'option');
    $cover_advertising = null;
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
          @php $cover_advertising = 'home--imnotanad-cover-active' @endphp
        @else
          @php $cover_advertising = 'home--imnotanad-cover-inactive' @endphp
        @endif
    @php
        wp_reset_postdata();
    @endphp
@endif

<div class="home {{ $cover_advertising }}">
    @while (have_posts()) @php the_post() @endphp
      @include('partials.home.advertising-cover')
      @include('partials.home.cover-post-on-top')
      @include('partials.home.current-magazine')
      @include('partials.home.posts-on-top')
      @include('partials.home.advertising-banner')
      @include('partials.home.stacked-selection')
      @include('partials.home.longform')
      @include('partials.home.advertising-banner')
      @include('partials.home.more-posts')
      @include('partials.home.newsletter-all-magazines')
    @endwhile
  </div>
@endsection