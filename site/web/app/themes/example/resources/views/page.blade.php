@extends('layouts.app')

@section('content')
@while (have_posts())
@php
setup_postdata(the_post())
@endphp
<div class="page">
    <div class="page__article">
      <div class="container mzauto flex row">
          <article class="article">
            <h1 class="article__title">{{ the_title() }}</h1>
            <div class="article__content">
              @php the_content() @endphp
            </div>
          </article>
      </div>
    </div>
</div>
@endwhile
  @php wp_reset_postdata() @endphp
@endsection