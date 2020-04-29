{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  <div class="home">
    @while (have_posts()) @php the_post() @endphp
      @include('partials.home.template-part-exemple')
    @endwhile
  </div>
@endsection