@extends('layouts.app')

@section('content')
@while (have_posts())
@php
setup_postdata(the_post())
@endphp
<div class="page">
    <div class="page__header">
      <h1 class="page__title">{{ the_title() }}</h1>
    </div>
    <div class="page__body">
      <div class="page__content">
        @php the_content() @endphp
      </div>
    </div>
</div>
@endwhile
  @php wp_reset_postdata() @endphp
@endsection